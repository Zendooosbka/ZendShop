CREATE OR REPLACE VIEW AdminGetTickets AS SELECT T.TicketId, T.userid, T.State, U.Login, U.PhoneNumber AS Phone, U.Email, T.CompanyName, T.Address, T.Description, T.INN, T.CreateDate AS Date FROM TicketOnCreateCompany AS T INNER JOIN Users AS U ON T.UserId = U.UserId;

CREATE OR REPLACE VIEW AdminGetCompany AS SELECT C.CompanyId AS id, C.CompanyName AS Name, C.Address, C.INN, C.CreateDate, O.UserId FROM Company AS C INNER JOIN (SELECT * FROM PeopleInCompany WHERE Level = 0) AS O ON C.CompanyId = O.CompanyId;
