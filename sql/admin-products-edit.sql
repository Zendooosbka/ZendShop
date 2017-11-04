DELIMITER //

/*---------------------------------------Для таблицы продукты----------------------------------*/

-- Создает новый продукт
CREATE OR REPLACE PROCEDURE AddNewProduct(NewName VARCHAR(50), Pr INT, CatID INT, Brid INT)
BEGIN
	INSERT INTO Products(ProductName, PictureURL, Price, CategoryId, BrandId) VALUES(NewName, 'not', Pr, CatId, Brid);
END;

//

-- Удаляет продукт
CREATE OR REPLACE PROCEDURE DeleteProduct(id INT)
BEGIN
	DELETE FROM Products WHERE id = ProductId;
END;

//

-- Изменяет название продукта
CREATE OR REPLACE PROCEDURE UpdateProductName(id INT, NewName VARCHAR(50))
BEGIN
	UPDATE Products SET ProductName = NewName WHERE Productid = id;
END;

//

-- Изменяет цену продукта
CREATE OR REPLACE PROCEDURE UpdateProductPrice(id INT, NewPrice INT)
BEGIN
	UPDATE Products SET Price = NewPrice WHERE Productid = id;
END;

//

-- Изменяет категорию продукта
CREATE OR REPLACE PROCEDURE UpdateProductCategory(id INT, NewCateg INT)
BEGIN
	UPDATE Products SET CategoryID = NewCateg WHERE Productid = id;
END;

//

-- Изменяет бренд продукта
CREATE OR REPLACE PROCEDURE UpdateProductBrand(id INT, NewBrand INT)
BEGIN
	UPDATE Products SET BrandId = NewBrand WHERE Productid = id;
END;

//

-- Изменяет картинку продукта
CREATE OR REPLACE PROCEDURE UpdateProductPicture(id INT,NewName TEXT)
BEGIN
	UPDATE Products SET PictureURL = NewName WHERE Productid = id;
END;

//

/*---------------------------------------Для таблицы атрибуты продукта-------------------------*/

-- Создает новый атрибут продукта
CREATE OR REPLACE PROCEDURE AddNewProductAttribute(NewName VARCHAR(50), NewValue TEXT, NewImp INT, NewProductId INT)
BEGIN
	INSERT INTO ProductAttributes(PAName, Value, Important, ProductId) VALUES(NewName, NewValue, NewImp, NewProductId);
END;

//

-- Удаляет атрибут продукта
CREATE OR REPLACE PROCEDURE DeleteProductAttribute(id INT)
BEGIN
	DELETE FROM ProductAttributes WHERE id = PAId;
END;

//

-- Изменяет название атрибута
CREATE OR REPLACE PROCEDURE UpdateProductAttributeName(id INT, NewName VARCHAR(50))
BEGIN
	UPDATE ProductAttributes SET PAName = NewName WHERE PAid = id;
END;

//

-- Изменяет значение атрибута
CREATE OR REPLACE PROCEDURE UpdateProductAttributeValue(id INT, NewName TEXT)
BEGIN
	UPDATE ProductAttributes SET Value = NewName WHERE PAid = id;
END;

//

-- Изменяет важность атрибута
CREATE OR REPLACE PROCEDURE UpdateProductAttributeImportant(id INT, NewName INT)
BEGIN
	UPDATE ProductAttributes SET Important = NewName WHERE PAid = id;
END;

//

/*--------------------------------------Для таблицы атрибуты товара---------------------------*/

-- Создает новый атрибут товара
CREATE OR REPLACE PROCEDURE AddNewAttribute(NewName VARCHAR(50), NewProductId INT)
BEGIN
	INSERT INTO Attributes(AttributeName, ProductId) VALUES(NewName, NewProductId);
END;

//

-- Удаляет атрибут товара
CREATE OR REPLACE PROCEDURE DeleteAttribute(id INT)
BEGIN
	DELETE FROM Attributes WHERE id = AttributeId;
END;

//

-- Изменяет название атрибута товара
CREATE OR REPLACE PROCEDURE UpdateAttributeName(id INT, NewName VARCHAR(50))
BEGIN
	UPDATE Attributes SET AttributeName = NewName WHERE AttributeId = id;
END;

//

DELIMITER ;
