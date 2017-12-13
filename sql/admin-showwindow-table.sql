-- Показывает таблицу витрин
CREATE OR REPLACE VIEW AdminShowWindowsTable AS SELECT SW.ShowwindowId AS Id, SW.Name, S.CategoryName, SW.CreateDate AS Date, S.CategoryId FROM Showwindows AS SW INNER JOIN Categories AS S ON SW.CategoryId = S.CategoryId ORDER BY Date;

-- Показывает таблицу категорий
CREATE OR REPLACE VIEW AdminCategoryForShowWindowTable AS SELECT C.CategoryId AS Id, CONCAT('(', S.SectionName, ') ', C.CategoryName) AS Name FROM Categories AS C INNER JOIN Sections AS S ON S.SectionId = C.SectionId ORDER BY S.SectionName;

-- Показывает таблицу продуктов
CREATE OR REPLACE VIEW AdminProductsTableForShowWindow AS SELECT P.ProductId AS id, P.ProductName AS Name, P.Price, P.PictureURL, P.CreateDate AS Date, C.CategoryName, B.BrandName, C.CategoryId, B.BrandId FROM Products AS P INNER JOIN Categories AS C ON C.CategoryId = P.CategoryId LEFT JOIN Brands AS B ON B.BrandId = P.BrandId ORDER BY P.ProductName;

-- Показывает таблицу продуктов которые находятся на витрине
CREATE OR REPLACE VIEW AdminProductsInShowWindow AS SELECT SP.ShowwindowProductsId AS id, P.Name AS Name, P.Price, P.PictureURL, P.Date, P.CategoryName, P.BrandName, SP.ProductId, SP.ShowwindowId FROM ShowwindowProducts AS SP INNER JOIN AdminProductsTableForShowWindow AS P ON SP.ProductId = P.id;
