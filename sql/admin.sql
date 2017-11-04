DROP PROCEDURE IF EXISTS AddNewAdmin;

SET GLOBAL log_bin_trust_function_creators = 1;

DELIMITER // 

-- Создание администратора
CREATE PROCEDURE IF NOT EXISTS AddNewAdmin(AdmnLogin VARCHAR(50), AdmnName VARCHAR(50), AdmnSurname VARCHAR(50), AdmnPassMd5 VARCHAR(50), AdmnMail VARCHAR(50))
BEGIN
	INSERT INTO Users(Login, Name, SurName, Password, Email, UserType, PhoneNumber) VALUES (AdmnLogin , AdmnName, AdmnSurname, MD5(AdmnPassMd5), AdmnMail, 0, '1');
END;

//

DELIMITER ;
