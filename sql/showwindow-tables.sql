-- Получает ид товара по ид товара на витрине
CREATE OR REPLACE VIEW SwhowwndowGetProductId AS SELECT ShowwindowProductsId, ProductId FROM ShowwindowProducts;

-- Получает значимые атрибуты продукта для их показа
CREATE OR REPLACE VIEW ShowwindowGetProductAttribute AS SELECT PAName, Value, ProductId, Important FROM ProductAttributes;

-- Получает товары на витрине
CREATE OR REPLACE VIEW GetProductsFromShowWindow AS SELECT ShowwindowProductsId, ProductId, ShowwindowId FROM ShowwindowProducts;

-- Получаем все атрибуты, по которым делятся продукты
-- SELECT * FROM `ProductAttributes` WHERE ProductId IN (SELECT ProductId FROM GetProductsFromShowWindow WHERE ShowwindowId = 2) AND Important = 1 GROUP BY PAName

-- SELECT A.ShowwindowProductsId, B.Value FROM GetProductsFromShowWindow AS A INNER JOIN (SELECT * FROM ShowwindowGetProductAttribute WHERE ProductId IN (SELECT ProductId FROM GetProductsFromShowWindow WHERE ShowwindowId = 2) AND PAName = 'Цвет') AS B ON A.ProductId = B.ProductId
