Wordpress Installation and Collaborating using Git
By: Gabriel Aquende & Manjot Singh

Wordpress Installation:
1. Go to the Wordpress site and download and unzip the package on your local computer.
2. Put the folder in your PHP Projects directory on your drive.
3. Open the Wordpress direction in PHP Storm and you will see different files.
4. Open the wordpress sub file and find the wp-config-sample.php file.
5. Copy its contents to a new file called wp-config.php in the same root directory.
6. Edit this new file where indicated by the comments in green.
7. Go to run tab at the top and press edit configs button.
8. Make sure you are on local host and port is 8080. 
9. Hit the document root folder icon and find the folder labeled wordpress inside the wordpress 503 file.
10. Hit "ok" and go to the view tab.
11. Find the tools window and go to database and click on the database tab and hit MYSQL. 
12. Add a new database by the plus icon and hit built in web server option.
13. The user should be root and the password should be password.
14. Make sure you have MySql installed and test connection and fix the problem if it pops up.
15. That pop up should only need you to line up your versions correctly. 
16. Right clikc on @localhost.
17. Open console and type the following in:
18. CREATE DATABASE wordpress;
    CREATE USER "wordpress"@"localhost" IDENTIFIED WITH mysql_native_password BY 'password';
    GRANT ALL PRIVILEGES ON wordpress.* TO "wordpress"@"localhost";
    FLUSH PRIVILEGES; 
19. Go to your browser and type localhost:8080
20. Wordpress installation should pop up.
21. Pick English and continue with the account setup.
22. Use password as your password for you account to be safe. 
23. Wordpress should be installed now. 

