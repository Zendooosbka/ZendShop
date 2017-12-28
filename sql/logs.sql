-- Триггеры и логирование

-- Создание таблицы "Разделы"
DROP TABLE IF EXISTS ShopLogs;
CREATE TABLE IF NOT EXISTS ShopLogs (
	LogId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	CreateDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	LogString VARCHAR(255) NOT NULL
) ENGINE = InnoDB   CHARACTER SET = UTF8;

-- Что бы было все хорошо
CREATE OR REPLACE VIEW AdminShopLogs AS SELECT * FROM ShopLogs;

DELIMITER //
	
-- То что записывает в лог
CREATE OR REPLACE PROCEDURE WriteLog(_SectionName VARCHAR(255))
BEGIN
	INSERT INTO ShopLogs(LogString) VALUES(_SectionName);
END;

//

-- Тригеред регистрации
CREATE OR REPLACE TRIGGER Trigger_UserRegistration BEFORE INSERT ON Users
FOR EACH ROW
BEGIN
	CALL WriteLog(CONCAT("Зарегестрировался новый пользователь - ", NEW.Login));
END;

//

-- Тригередд обновления личных данных
CREATE OR REPLACE TRIGGER Trigger_UpdateUserInformation BEFORE UPDATE ON Users
FOR EACH ROW
BEGIN
	CALL WriteLog(CONCAT("Пользоватьель - ", NEW.Login, " обновил информацию о себе"));
END;

//

-- Тригеред на завку о добавлении компании
CREATE OR REPLACE TRIGGER Trigger_TicketOnCreateCompany BEFORE INSERT ON TicketOnCreateCompany
FOR EACH ROW
BEGIN
	DECLARE UserName VARCHAR(50);
	SELECT Login FROM Users WHERE UserId = NEW.UserId INTO UserName;
	CALL WriteLog(CONCAT("Пользоватьель - ", UserName, " сделал заявку на добавление компании ", NEW.CompanyName));
END;

//

-- Тригеред добавления в корзину
CREATE OR REPLACE TRIGGER Trigger_AddToCart BEFORE INSERT ON Cart
FOR EACH ROW
BEGIN
	DECLARE UserName VARCHAR(50);
	SELECT Login FROM Users WHERE UserId = NEW.UserId INTO UserName;
	CALL WriteLog(CONCAT("Пользоватьель - ", UserName, ' добавил товар <a href="showwindow.php?g=', NEW.ShowwindowProductId, '">#', NEW.ShowwindowProductId, "</a> в корзину"));
END;

//

-- Тригеред удаления из корзины
CREATE OR REPLACE TRIGGER Trigger_DeleteFromCart BEFORE DELETE ON Cart
FOR EACH ROW
BEGIN
	DECLARE UserName VARCHAR(50);
	SELECT Login FROM Users WHERE UserId = OLD.UserId INTO UserName;
	CALL WriteLog(CONCAT("Пользоватьель - ", UserName, ' удалил товар <a href="showwindow.php?g=', OLD.ShowwindowProductId, '">#', OLD.ShowwindowProductId, "</a> из корзины"));
END;

//

DELIMITER ;
