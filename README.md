# DI_Bootcamp_week8_day4_ExerciceXP


Exercise 1 : Connecting To Database
Instructions
In this exercise you will connect to an existing database on a local machine and return a database connection object

Create a database connection to the PostgreSQL server.

Run to check your database connection

if the database is successfully opened, then it will give the following message −

Opened database successfully


🌟 Exercise 2 : Create A Table
Instructions
In this exercise you will create a table using PostgreSQL PHP

Create a database connection to the PostgreSQL server.

Create a SQL query.

Execute a query to create the table

CREATE TABLE COMPANY (
    ID      INT     PRIMARY KEY     NOT NULL,
    NAME    TEXT    NOT NULL,
    AGE     INT     NOT NULL,
    ADDRESS CHAR(50),
    SALARY  REAL
)
Close the database connection.



🌟 Exercise 3 : INSERT Operation
Instructions
In this exercise you will create records in our COMPANY table created in the previous exercise

Create a database connection to the PostgreSQL server.

Create a Sql query for insert.

Execute the query to insert to the table

INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
VALUES (1, 'Paul', 32, 'California', 20000.00 );

INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
VALUES (2, 'Allen', 25, 'Texas', 15000.00 );

INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
VALUES (3, 'Teddy', 23, 'Norway', 20000.00 );

INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
VALUES (4, 'Mark', 25, 'Rich-Mond ', 65000.00 );
Close the database connection.



🌟 Exercise 4 : SELECT Operation
Instructions
In this exercise you will fetch and display records from the COMPANY table from the previous exercise

Create a database connection to the PostgreSQL server.

Create a Sql query.

Execute the query to fetch the table

SELECT * FROM COMPANY;
Close the database connection.

