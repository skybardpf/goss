CREATE TABLE region (
    "id" INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    "name" TEXT NOT NULL
);
CREATE TABLE organization (
    "id" INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    "name" TEXT NOT NULL
);
CREATE TABLE service (
    "id" INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    "name" TEXT NOT NULL,
    "organization_id" INTEGER NOT NULL
);
INSERT INTO service VALUES(1,'dQj T pHom',1573736397);
INSERT INTO service VALUES(2,'TrunNxXQPl',984411720);
INSERT INTO service VALUES(3,'HlCIFRgbvJ',2039565267);
CREATE TABLE identity_document (
    "id" INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    "consumer_id" INTEGER NOT NULL,
    "type_id" INTEGER NOT NULL,
    "number" TEXT NOT NULL,
    "other_data" TEXT NOT NULL
);
CREATE TABLE type_identity_document (
    "id" INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    "name" TEXT NOT NULL
);
CREATE TABLE ticket (
    "id" INTEGER NOT NULL,
    "number" TEXT NOT NULL,
    "created" INTEGER NOT NULL,
    "region_id" INTEGER NOT NULL,
    "service_id" INTEGER NOT NULL,
    "supplier_id" INTEGER NOT NULL,
    "consumer_id" INTEGER NOT NULL
);
CREATE TABLE consumer (
    "id" INTEGER NOT NULL,
    "surname" TEXT NOT NULL,
    "name" TEXT NOT NULL,
    "patronymic" TEXT NOT NULL,
    "mobile" TEXT NOT NULL
);
CREATE TABLE supplier (
    "id" INTEGER NOT NULL,
    "surname" TEXT NOT NULL,
    "name" TEXT NOT NULL,
    "patronymic" INTEGER NOT NULL,
    "organization_id" INTEGER NOT NULL,
    "login" TEXT NOT NULL,
    "password" TEXT NOT NULL
);