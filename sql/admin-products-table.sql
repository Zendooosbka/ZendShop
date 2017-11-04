-- Показывает таблицу продуктов
CREATE OR REPLACE VIEW AdminProductsTable AS SELECT P.ProductId AS id, P.ProductName AS Name, P.Price, P.PictureURL, P.CreateDate AS Date, C.CategoryName, B.BrandName FROM Products AS P INNER JOIN Categories AS C ON C.CategoryId = P.CategoryId LEFT JOIN Brands AS B ON B.BrandId = P.BrandId ORDER BY P.ProductName;

-- Показывает таблицу категорий
CREATE OR REPLACE VIEW AdminCategoryForProductsTable AS SELECT C.CategoryId AS Id, CONCAT('(', S.SectionName, ') ', C.CategoryName) AS Name FROM Categories AS C INNER JOIN Sections AS S ON S.SectionId = C.SectionId ORDER BY S.SectionName;

-- Показывает таблицу брендов
CREATE OR REPLACE VIEW AdminBrandsForProductsTable AS SELECT BrandId AS Id, BrandName AS Name FROM Brands ORDER BY BrandName;

-- Показывает таблицу атрибутов продуктов
CREATE OR REPLACE VIEW AdminProductAttributesTable AS SELECT PAid AS id, ProductId, PAName AS Name, Value, Important, CreateDate AS Date FROM ProductAttributes;

-- Показывает таблицу атрибутов продуктов
CREATE OR REPLACE VIEW AdminAttributesTable AS SELECT Attributeid AS id, ProductId, AttributeName AS Name, CreateDate AS Date FROM Attributes;

-- Запрос на получение названия товара
-- SELECT CONCAT(Name, ' (', id, ')') FROM AdminProductsTable WHERE id = :id;
