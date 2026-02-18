This is a very simple web application written in PHP/HTML and it uses MySQL database at the backend. This application shows information of three books, where book cover images are loaded from the \images folder inside the installation folder. Other information (e.g. Title, ISBN, Author etc.) about the books are retrieved from the MySQL database. Follow the steps below to install the application,

1. Install XAMPP server on your Laptop/PC. Download and installation instructions for XAMPP server can be found at the following link,

https://www.apachefriends.org/index.html

2. Start the XAMPP server, use the \Sample_Web_App\sql_scripts\library_schema.sql script to create data table in XAMPP - MySQL. Use the \Sample_Web_App\sql_scripts\insert_data.sql script to populate the data table.

3. Copy the "book_library" folder inside xampp\htdocs folder
4. Open a browser, go to the URL http://localhost:8080/book_library/index.php, the applictaion now should be running and display the book information


NOTE: If you are adapting this application for your coursework project, you MUST adapt it in your way, e.g. replacing the provided images, adding more entries in the database tables etc.
