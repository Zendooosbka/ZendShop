DROP FUNCTION IF EXISTS GetUserName;
DROP FUNCTION IF EXISTS GetUserSurName;

SET GLOBAL log_bin_trust_function_creators = 1;

DELIMITER //

-- Добываем имя юзера по его ид
CREATE FUNCTION IF NOT EXISTS GetUserName(id INTEGER)
	RETURNS VARCHAR(50)
BEGIN
	DECLARE UserName VARCHAR(50);
	SELECT Name FROM Users WHERE UserId = id INTO UserName;
	RETURN UserName;
END;

//

-- Добываем фамилию юзера по его ид
CREATE FUNCTION IF NOT EXISTS GetUserSurName(id INTEGER)
	RETURNS VARCHAR(50)
BEGIN
	DECLARE UserName VARCHAR(50);
	SELECT SurName FROM Users WHERE UserId = id INTO UserName;
	RETURN UserName;
END;

//

DELIMITER ;
