/* create a database for the book library, with name bkldb */
CREATE DATABASE bkldb;

/* use the bkldb to create a table to hold information of the books */
USE bkldb;

/* create a table with name Books, that holds ISBN, Title, author .... for each book in the library */
CREATE TABLE bkldb.Books
    (
      ISBN INT ,
      Title VARCHAR(255) ,
      Author VARCHAR(255),
	  Publisher VARCHAR(255),
	  Pub_year INT
    );