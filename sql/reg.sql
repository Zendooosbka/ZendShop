DROP FUNCTION IF EXISTS AddNewUser;

SET GLOBAL log_bin_trust_function_creators = 1;

DELIMITER // 

-- Создание нового пользователя
CREATE FUNCTION IF NOT EXISTS AddNewUser(UserLogin VARCHAR(50), UserName VARCHAR(50), UserSurname VARCHAR(50), UserPassMd5 VARCHAR(50), UserMail VARCHAR(50), UserPhoneNumber VARCHAR(50))
	RETURNS INTEGER
BEGIN
	IF EXISTS(SELECT * FROM Users WHERE UserLogin = Login OR UserMail = Email) THEN
		RETURN 6;
	ELSE
		INSERT INTO Users(Login, Name, SurName, Password, Email, PhoneNumber) VALUES (UserLogin, UserName, UserSurname, UserPassMd5, UserMail, UserPhoneNumber);
		RETURN 0;
	END IF;
END;

//

DELIMITER ;
