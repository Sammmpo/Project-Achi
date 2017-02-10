/* Import this script with phpMyAdmin to create the SQL table and master account */
/* The end-user should not need this */

DROP TABLE IF EXISTS account;

CREATE TABLE account (
    accountID integer NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    points integer NOT NULL,
    CONSTRAINT account_pkey PRIMARY KEY (accountID )
);

INSERT INTO account (accountID, username, password, points)
VALUES (1, "master", "Password1", 0)
