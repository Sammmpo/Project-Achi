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
VALUES (1, "master", "password", 0);

/* Achievements */

DROP TABLE IF EXISTS achievement;

CREATE TABLE achievement (
    achiID integer NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    reward integer NOT NULL,
    CONSTRAINT account_pkey PRIMARY KEY (achiID )
);

INSERT INTO achievement (achiID, name, description, reward)
VALUES (1, "Real World Wizardry", "Learn the basics of any programming language.", 10);

INSERT INTO achievement (achiID, name, description, reward)
VALUES (2, "Love is in the Air", "Get married.", 50);
