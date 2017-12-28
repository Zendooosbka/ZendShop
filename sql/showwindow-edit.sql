SET GLOBAL log_bin_trust_function_creators = 1;

DELIMITER //

-- Получение витрины, на которой стоит товар (в параметрах передается ид записи, которая говорит о том, что товар стоит на витрине)
CREATE OR REPLACE FUNCTION GetShowWindowFromShowwindowProduct(ShowwindowProduct INT)
	RETURNS INTEGER
BEGIN
	SET @reusult := -1;

	IF EXISTS(SELECT * FROM ShowwindowProducts WHERE ShowwindowProduct = ShowwindowProductsId) THEN
		SELECT ShowwindowId INTO @reusult FROM ShowwindowProducts WHERE ShowwindowProduct = ShowwindowProductsId;
		RETURN @reusult;
	ELSE
		
		RETURN 0;
	END IF;
END;

//
