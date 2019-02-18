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
16. Right click on @localhost.
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

Issues and How to Resolve them for Git and WordPress
* Access denied is bad username or password.
* If it’s connection error then edit php.ini to Uncomment mysqli. You may be using the wrong ini file so Put a file in
the project called test.php and out one function phpinfo(); and then go to this file when the server is started and it 
will show you the configuration and you can see where the php.ini file is being loaded.                                                                  
* If you're unable to access the wordpress site from Phpstorm (edited). What you want to do is download and install xampp
xampp has a Wordpress module which makes this fairly simple. You need to download the module from the same site you found the xampp.exe. 
It does not come pre-installed (edited) 
all you do is create a /testsite directory within the /htdocs directory or /www 
whichever directory serves your pages 
once you do that extract the new version of wordpress you downloaded to that folder 
now go into the xampp control panel 
start Apache and MySql from within that 
once you do that click  the 'Admin" button for MySql
it will navigate you to the php myAdmin portal
after you do that you want to log in and create a database with the same name as the folder in which you saved wp 
after doing so you need to navigate to the wp-admin file folder within the wordpress directory 
within the browser for example my url would be something like 
127.0.0.1/testsite/wordpress/wp-admin/setup-config.php it's going to serve you a WP installation for a new site
fill in the data fields as you normally would and you're done
it's going to generate a strong password for you. If you don't feed it one
, if you lose it you cannot access the admin page and you're SOL. 
* If your server test is failing when you are testing connection your SQL80 might be turned off.
So you will need to go into your task manager and then services and manually start it.
* If you are unable to add your partner on Git because they dont have access you will have to add them and remain
leader for the rest of the project.