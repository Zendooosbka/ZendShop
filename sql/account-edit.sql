SET GLOBAL log_bin_trust_function_creators = 1;

DELIMITER //

-- Изменяет логин аккаунта
CREATE OR REPLACE PROCEDURE AccountUpdateLogin(id INT, NewName VARCHAR(50))
BEGIN
	UPDATE Users SET Login = NewName WHERE id = UserId;
END;

//

-- Изменяет пароль аккаунта
CREATE OR REPLACE PROCEDURE AccountUpdatePassword(id INT, NewName VARCHAR(50))
BEGIN
	UPDATE Users SET Password = NewName WHERE id = UserId;
END;

//

-- Изменяет телефон аккаунта
CREATE OR REPLACE PROCEDURE AccountUpdatePhone(id INT, NewName VARCHAR(15))
BEGIN
	UPDATE Users SET PhoneNumber = NewName WHERE id = UserId;
END;

//

-- Изменяет почту аккаунта
CREATE OR REPLACE PROCEDURE AccountUpdateEmail(id INT, NewName VARCHAR(50))
BEGIN
	UPDATE Users SET Email = NewName WHERE id = UserId;
END;

//

-- Проверка существования логина в системе
CREATE OR REPLACE FUNCTION AccountCheckLogin(UserLogin VARCHAR(50))
	RETURNS INTEGER
BEGIN
	IF EXISTS(SELECT * FROM Users WHERE Login = UserLogin) THEN
		RETURN 1;
	ELSE
		
		RETURN 0;
	END IF;
END;

//

-- Проверка существования телефона в системе
CREATE OR REPLACE FUNCTION AccountCheckPhone(UserLogin VARCHAR(15))
	RETURNS INTEGER
BEGIN
	IF EXISTS(SELECT * FROM Users WHERE PhoneNumber = UserLogin) THEN
		RETURN 1;
	ELSE
		
		RETURN 0;
	END IF;
END;

//

-- Проверка существования почты в системе
CREATE OR REPLACE FUNCTION AccountCheckEmail(UserLogin VARCHAR(50))
	RETURNS INTEGER
BEGIN
	IF EXISTS(SELECT * FROM Users WHERE Email = UserLogin) THEN
		RETURN 1;
	ELSE
		
		RETURN 0;
	END IF;
END;

//

-- Проверка существования билета на создание компании от этого пользователя
CREATE OR REPLACE FUNCTION AccountCheckTicket(NewUserId INT)
	RETURNS INTEGER
BEGIN
	IF EXISTS(SELECT * FROM TicketOnCreateCompany WHERE UserId = NewUserId) THEN
		RETURN 1;
	ELSE
		
		RETURN 0;
	END IF;
END;


//

-- Проверка существования компании у этого пользователя
CREATE OR REPLACE FUNCTION AccountCheckUserInCompany(NewUserId INT)
	RETURNS INTEGER
BEGIN
	SET @companyid := -1;

	IF EXISTS(SELECT * FROM PeopleInCompany WHERE UserId = NewUserId) THEN
		SELECT CompanyId INTO @companyid FROM PeopleInCompany WHERE UserId = NewUserId;
		RETURN @companyid;
	ELSE
		
		RETURN 0;
	END IF;
END;

//

-- Проверка принадлежности завода к компании
CREATE OR REPLACE FUNCTION AccountCheckStockInCompany(Stockid INT, __Companyid INT)
	RETURNS INTEGER
BEGIN
	IF EXISTS(SELECT * FROM Storage WHERE Stockid = StorageId AND __Companyid = CompanyId) THEN
		RETURN 0;
	ELSE
		RETURN -1;
	END IF;
END;

//

-- Создание запроса на добавление компании в систему
CREATE OR REPLACE PROCEDURE AccountCreateTicketForCompany(NewUserId INT, NewCompanyName VARCHAR(50), NewAddress VARCHAR(50), NewINN VARCHAR(15), NewDescription TEXT)
BEGIN
	INSERT INTO TicketOnCreateCompany(UserId, CompanyName, Address, INN, Description) VALUES(NewUserId, NewCompanyName, NewAddress, NewINN, NewDescription);
END;

//

-- Добавление нового склада
CREATE OR REPLACE PROCEDURE AccountAddNewStock(NewCompanyId INT, NewName VARCHAR(50), NewAddr VARCHAR(50), NewCoordX VARCHAR(50), NewCoordY VARCHAR(50))
BEGIN
	INSERT INTO Storage(StorageName, StorageAddres, CompanyId, CoordX, CoordY) VALUES(NewName, NewAddr, NewCompanyId, NewCoordX, NewCoordY);
END;

//

-- Удаляет склад
CREATE OR REPLACE PROCEDURE AccountDeleteStockFromCompany(StockId INT)
BEGIN
	DELETE FROM Storage WHERE StockId = StorageId;
END;

//

-- Удаляет пользователя из компании
CREATE OR REPLACE PROCEDURE AccountDeletePeopleFromCompany(__UserId INT)
BEGIN
	DELETE FROM PeopleInCompany WHERE UserId = __UserId;
END;

//


-- Добовляет юзвера в компанию
CREATE OR REPLACE PROCEDURE AccountAddUserInCompany(NewUserId INT, NewCompId INT, NewLevel INT)
BEGIN
	INSERT INTO PeopleInCompany(UserId, CompanyId, Level) VALUES(NewUserId, NewCompId, NewLevel);
END;

//

DELIMITER ;
