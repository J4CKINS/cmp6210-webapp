/* use the bkldb to create a table to hold information of the books */
USE bkldb;

INSERT INTO bkldb.Books (ISBN, Title, Author, Publisher, Pub_year) VALUES (1234,'Book1', 'Author1', 'publisher1', 1901);
INSERT INTO bkldb.Books (ISBN, Title, Author, Publisher, Pub_year) VALUES (1235,'Book2', 'Author2', 'publisher2', 1902);
INSERT INTO bkldb.Books (ISBN, Title, Author, Publisher, Pub_year) VALUES (1236,'Book3', 'Author3', 'publisher3', 1903);