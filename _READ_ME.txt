============ SETUP ============
To install our project onto your computer, you need to host a local server using XAMPP.
You hopefully should know how to do this from the CS 360 Labs, but if not you can download
it from https://www.apachefriends.org.

Once you have XAMPP installed, place this project into the htdocs folder within the XAMPP files.
Example: C:\xampp\htdocs\CS-360-Group-Project

In the XAMPP control panel start the Apache and MySQL modules. This starts the local server.

Search localhost/phpmyadmin/ in any browser.

On the left, create a new database named loginsystem. This is where all of the project data will be stored.
You do not need to add any tables.

Next, simply drag and drop the .sql file from the CS-360-Group-Project\Database folder into your newly
created database. This will automatically add all of the tables and data.

From there, you have completed the project setup.

============================================================================================
============ HOW TO USE ============
When the local server is running, you can access the project website by typing
localhost/CS-360-Group-Project/login.php into any browser.

Create a user account to browse products, or create a vendor account to register new products.

All of your newly registered products and accounts will be saved in the database loginsystem.