-- Создание таблицы "Витрина"
--	ShowwindowId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
--	Name VARCHAR(50) NOT NULL,
--	CategoryId INT NOT NULL,
--	CreateDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

-- Создание таблицы "Товары на витрине"

--	ShowwindowProductsId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
--	ProductId INT NOT NULL,
--	ShowwindowId INT NOT NULL,

-- Создает новый атрибут товара

DELIMITER //

-- Добавляет витрину
CREATE OR REPLACE PROCEDURE AddNewShowWindow(NewName VARCHAR(50), NewCategoryId INT)
BEGIN
	INSERT INTO Showwindows(Name, CategoryId) VALUES(NewName, NewCategoryId);
END;

//

-- Удаляет категорию витрины
CREATE OR REPLACE PROCEDURE DeleteShowWindow(id INT)
BEGIN
	DELETE FROM Showwindows WHERE id = ShowwindowId;
END;

//

-- Изменяет название витрины
CREATE OR REPLACE PROCEDURE UpdateShowWindowName(id INT, NewName VARCHAR(50))
BEGIN
	UPDATE Showwindows SET Name = NewName WHERE id = ShowwindowId;
END;

//

-- Изменяет кагерию витрины
CREATE OR REPLACE PROCEDURE UpdateShowWindowCategory(id INT, NewCategoryId INT)
BEGIN
	UPDATE Showwindows SET CategoryId = NewCategoryId WHERE id = ShowwindowId;
END;

//

-- Добавляет продукт на витрину
CREATE OR REPLACE PROCEDURE AddPoductInShowWindow(_ShowWindowID INT, _ProductID INT)
BEGIN
	INSERT INTO ShowwindowProducts(ShowwindowId, ProductId) VALUES(_ShowWindowID, _ProductID);
END;

//

-- Удаляет продукт с витрины
CREATE OR REPLACE PROCEDURE DeleteProductFromShowWindow(id INT)
BEGIN
	DELETE FROM ShowwindowProducts WHERE id = ShowwindowProductsId;
END;

//

DELIMITER ;
