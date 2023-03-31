//*Connect to my MySQL server using the following command (replace [username] and [password] with your MySQL username and password):*//

mysql -u [username] -p [password]

//*Once you're logged in to MySQL, create a new database using the following command (replace [database_name] with the name you want to give your database)*//
CREATE DATABASE [database_name];

//*Switch to the newly created database using the following command*// 
USE [database_name];

//*Now, you can execute the SQL script using the following command (replace [filename] with the name of your SQL script file):*//
SOURCE [filename].sql;

//*This will execute all the SQL statements in your script and create the necessary tables and data in your database.*//

//*To execute the SQL script using PHPMyAdmin, follow these steps:

Log in to PHPMyAdmin using your web browser.
Select the database where you want to execute the script.
Click on the "Import" tab.
Click on the "Choose File" button and select your SQL script file.
Make sure the "Format" is set to "SQL".
Click on the "Go" button to execute the script.
Once you have executed the SQL script and created your tables, 
you can start building your API routes and 
implementing the functionality for creating, reading, updating, and 
deleting posts and categories.*//