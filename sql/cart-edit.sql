SET GLOBAL log_bin_trust_function_creators = 1;

DELIMITER //

-- Добавляет пользователю товар с витрины в его корзину
CREATE OR REPLACE PROCEDURE AddToCart(Productid INT, _UserId INT)
BEGIN
	INSERT INTO Cart(ShowwindowProductId, UserId) VALUES(Productid, _UserId);
END;

//

-- Выкидывает товар из корзины, если он там есть
CREATE OR REPLACE PROCEDURE DeleteFromCart(Productid INT, _UserId INT)
BEGIN
	DELETE FROM Cart WHERE Productid = ShowwindowProductId AND _UserId = UserId;
END;

//

-- Лежит ли товар в корзине
CREATE OR REPLACE FUNCTION CheckGoodInCart(Productid INT, _UserId INT)
	RETURNS INTEGER
BEGIN
	IF EXISTS(SELECT * FROM Cart WHERE Productid = ShowwindowProductId AND _UserId = UserId) THEN
		RETURN 1;
	ELSE
		
		RETURN 0;
	END IF;
END;

//

DELIMITER ;
