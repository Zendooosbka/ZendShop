DELIMITER //

-- Добавляет аккаунт в компанию
CREATE OR REPLACE PROCEDURE AddAccoutInCompany(_UserId INT, CompId INT, _level INT)
BEGIN
	INSERT INTO PeopleInCompany(UserId, CompanyId, Level) VALUES(_UserId, CompId, _level);
END;

//

-- Добавляет компанию
CREATE OR REPLACE PROCEDURE CreateCompany(__Ticketid INT)
BEGIN
	INSERT INTO Company(CompanyName, Address, INN, Description) SELECT CompanyName, Address, INN, Description FROM TicketOnCreateCompany WHERE __Ticketid = TicketId;
	UPDATE TicketOnCreateCompany SET State = 1 WHERE TicketId = __Ticketid;

	SET @companyid := -1;
	SET @creatoruserid := -1;

	SELECT CompanyId INTO @companyid FROM Company WHERE INN = (SELECT INN FROM TicketOnCreateCompany WHERE __Ticketid = TicketId);
	SELECT UserId INTO @creatoruserid FROM TicketOnCreateCompany WHERE __Ticketid = TicketId;

	CALL AddAccoutInCompany(@creatoruserid, @companyid, 0);
	
END;

//

DELIMITER ;	
