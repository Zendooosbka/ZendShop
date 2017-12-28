-- Получает все товары которые есть на витрине
CREATE OR REPLACE VIEW SearchResultTable AS SELECT IW.ShowwindowProductsId, P.ProductId, P.ProductName, P.Price, P.PictureURL FROM ShowwindowProducts AS IW INNER JOIN Products AS P ON P.ProductId = IW.ProductId;

-- Получает значимые атрибуты продукта для их показа
CREATE OR REPLACE VIEW SearchGetProductAttributes AS SELECT PAName, Value, ProductId, Important FROM ProductAttributes;
