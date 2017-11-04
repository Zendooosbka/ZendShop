DELIMITER //

-- Создает новый раздел
CREATE OR REPLACE PROCEDURE AddNewSection(NewName VARCHAR(50))
BEGIN
	INSERT INTO Sections(SectionName) VALUES(NewName);
END;

//	

-- Создает новую категорию
CREATE OR REPLACE PROCEDURE AddNewCategory(NewName VARCHAR(50), SectId INT)
BEGIN
	INSERT INTO Categories(CategoryName, SectionId) VALUES(NewName, SectId);
END;

//

-- Создает новый бренд
CREATE OR REPLACE PROCEDURE AddNewBrand(NewName VARCHAR(50), Descr TEXT)
BEGIN
	INSERT INTO Brands(BrandName, BrandPictureURL, BrandDesc) VALUES(NewName, 'not', Descr);
END;

//

-- Удаляет раздел
CREATE OR REPLACE PROCEDURE DeleteSection(id INT)
BEGIN
	DELETE FROM Sections WHERE id = SectionId;
END;

//

-- Удаляет категорию
CREATE OR REPLACE PROCEDURE DeleteCategory(id INT)
BEGIN
	DELETE FROM Categories WHERE id = CategoryId;
END;

//

-- Удаляет бренд
CREATE OR REPLACE PROCEDURE DeleteBrand(id INT)
BEGIN
	DELETE FROM Brands WHERE id = BrandId;
END;

//

-- Обновляет имя раздела
CREATE OR REPLACE PROCEDURE UpdateSectionName(id INT, NewName VARCHAR(50))
BEGIN
	UPDATE Sections SET SectionName = NewName WHERE id = SectionId;
END;

//

-- Обновляет имя категории
CREATE OR REPLACE PROCEDURE UpdateCategoryName(Id INT, NewName VARCHAR(50))
BEGIN
	UPDATE Categories SET CategoryName = NewName WHERE Id = CategoryId;
END;

//

-- Обновляет ид раздела к которой прикреплена категория
CREATE OR REPLACE PROCEDURE UpdateCategorySection(Id INT, NewSect INT)
BEGIN
	UPDATE Categories SET SectionId = NewSect WHERE id = CategoryId;
END;

//

-- Обновление названия бренда
CREATE OR REPLACE PROCEDURE UpdateBrandName(id INT, NewName VARCHAR(50))
BEGIN
	UPDATE Brands Set BrandName = NewName WHERE Brandid = id;
END;

//

-- Обновление описания бренда
CREATE OR REPLACE PROCEDURE UpdateBrandDescription(id INT, NewDescr TEXT)
BEGIN
	UPDATE Brands Set BrandDesc = NewDescr WHERE Brandid = id;
END;

//

-- Обновление картинки бренда
CREATE OR REPLACE PROCEDURE UpdateBrandPicture(id INT, NewPath TEXT)
BEGIN
	UPDATE Brands Set BrandPictureURL = NewPath WHERE Brandid = id;
END;

//

DELIMITER ;

