-- Поиск товаров компаниями
CREATE OR REPLACE VIEW CompanyGoodsSearch AS SELECT P.ProductId AS id, P.ProductName AS Name, B.BrandName, C.CategoryName FROM Products AS P INNER JOIN Brands AS B ON P.BrandId = B.BrandId INNER JOIN Categories AS C ON C.CategoryId = P.CategoryId;

-- Получение всех атрибутов товара
CREATE OR REPLACE VIEW CompanyGoodsAttributes AS SELECT AttributeId, AttributeName, ProductID FROM Attributes;

-- Получает название товара по ид
CREATE OR REPLACE VIEW CompanyGetGoodName AS SELECT ProductName, ProductId FROM Products;
