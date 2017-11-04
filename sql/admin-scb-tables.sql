-- Поулчает таблицуц разделов
CREATE OR REPLACE VIEW AdminSectionTable AS SELECT SectionId AS id, CreateDate AS Date, SectionName AS Name FROM Sections;

-- Получает таблицу категорий 
CREATE OR REPLACE VIEW AdminCategoriesTable AS SELECT C.CategoryId AS id, S.SectionName AS SectName, C.CreateDate AS Date, C.CategoryName AS Name FROM Categories AS C INNER JOIN Sections AS S ON C.SectionId = S.SectionId;

-- Поулчает таблицуц брендов
CREATE OR REPLACE VIEW AdminBrandsTable AS SELECT BrandId AS id, BrandName AS Name, BrandPictureURL AS picture, CreateDate AS Date, BrandDesc AS Descr FROM Brands;
