DROP FUNCTION IF EXISTS GetUserForSession;
DROP FUNCTION IF EXISTS GetUserType;
DROP FUNCTION IF EXISTS CreateNewSession;
DROP FUNCTION IF EXISTS EndSession;

SET GLOBAL log_bin_trust_function_creators = 1;

DELIMITER // 

-- Создание сессии
CREATE FUNCTION IF NOT EXISTS CreateNewSession(UserLogin VARCHAR(50), UserPassword VARCHAR(50), SessionMd5 VARCHAR(50), Ip VARCHAR(50))
	RETURNS INTEGER
BEGIN
	DECLARE UserNumber INTEGER;
    DECLARE SessionNumber INTEGER;
    
	SELECT UserId FROM Users WHERE (Login = UserLogin) AND (UserPassword = Password) INTO UserNumber;

	IF NOT EXISTS(SELECT UserId FROM Users WHERE (Login = UserLogin) AND (UserPassword = Password)) THEN
		RETURN -1;
	ELSE
		UPDATE UserSession SET EndDate = NOW() WHERE (UserNumber = UserId) AND (EndDate IS NULL);

		INSERT INTO UserSession(Hash, CreateDate, UserId, SessionIpAddres) VALUES(SessionMd5, NOW(), UserNumber, Ip);
		RETURN UserNumber;
	END IF;
END;

//

-- Закрывает сессию
CREATE FUNCTION IF NOT EXISTS EndSession(md5session VARCHAR(50))
	RETURNS INTEGER
BEGIN
	IF NOT EXISTS(SELECT * FROM UserSession WHERE (md5session = hash) AND (EndDate IS NULL)) THEN
		RETURN 1;
	ELSE
		UPDATE UserSession SET EndDate = NOW() WHERE (Hash = md5session) AND (EndDate IS NULL) ;
		RETURN 0;
	END IF;
END;

//

-- Получает ид пользователя по хешу сеанса. Если ип адреса сеанса и машины запросившая страницу не совпадают, то сеанс заканчивается
CREATE FUNCTION IF NOT EXISTS GetUserForSession(SessionMd5 VARCHAR(50), Ip VARCHAR(50))
	RETURNS INTEGER
BEGIN
	DECLARE UserNumber INTEGER;

	IF NOT EXISTS(SELECT * FROM UserSession WHERE (Hash = SessionMd5) AND (SessionIpAddres = Ip)) THEN
		UPDATE UserSession SET EndDate = NOW() WHERE (Hash = SessionMd5) AND (EndDate IS NULL) ;
		RETURN -1;
	ELSE
		IF EXISTS (SELECT * FROM UserSession WHERE (Hash = SessionMd5) AND (SessionIpAddres = Ip) AND (EndDate IS NULL)) THEN	
			SELECT UserId FROM UserSession WHERE (Hash = SessionMd5) AND (SessionIpAddres = Ip) AND (EndDate IS NULL) INTO UserNumber;
			RETURN UserNumber;
		ELSE
			RETURN -1;
		END IF;
	END IF;
END;

//

-- Получает информацию о юзерере, админ ли он или просто публичный аккаунт?
CREATE FUNCTION IF NOT EXISTS GetUserType(id INTEGER)
	RETURNS INTEGER
BEGIN
	DECLARE RetValue INTEGER;
	SELECT UserType FROM Users WHERE UserId = id INTO RetValue;
	RETURN RetValue;
END;

//

DELIMITER ;
