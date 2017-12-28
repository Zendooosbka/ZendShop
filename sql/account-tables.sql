-- Получает информацию о пользователе для личного кабинета
CREATE OR REPLACE VIEW AccountUserInformation AS SELECT UserId AS id, Login, Name, SurName, PhoneNumber, Email FROM Users;

-- Получает информацию о заявке на создание компании
CREATE OR REPLACE VIEW AccoutTicketInfo AS SELECT TicketId AS id, CompanyName AS Name, Address, Description, INN, UserId FROM TicketOnCreateCompany;

-- Получает создателей компаний
CREATE OR REPLACE VIEW AccountGetCompanyOwners AS SELECT U.Name, U.Surname, C.UserId, C.CompanyId FROM PeopleInCompany AS C INNER JOIN Users AS U ON C.UserId = U.UserId;

-- Получает информацию о комании
CREATE OR REPLACE VIEW AccountGetCompanyInfo AS SELECT C.CompanyId, C.CompanyName, C.Address, C.INN, C.Description, U.Name, U.SurName FROM Company AS C INNER JOIN AccountGetCompanyOwners AS U ON C.CompanyId = U.CompanyId;

-- Получает склады компаний
CREATE OR REPLACE VIEW AccoutGetStock AS SELECT StorageId AS id, CompanyId, StorageName AS Name, StorageAddres AS Addres, CoordX, CoordY FROM Storage;

-- Получает всех кто работет в компании
CREATE OR REPLACE VIEW AccoutGetCompanyWorkers AS SELECT PI.CompanyId, PI.UserID AS id, U.Name, U.SurName, PI.Level FROM PeopleInCompany AS PI INNER JOIN Users AS U ON U.UserId = PI.UserID;

-- Поиск товаров компаниями
CREATE OR REPLACE VIEW CompanyGoodsSearch AS SELECT P.ProductId AS id, P.ProductName AS Name, B.BrandName, C.CategoryName FROM Products AS P INNER JOIN Brands AS B ON P.BrandId = B.BrandId INNER JOIN Categories AS C ON C.CategoryId = P.CategoryId;
