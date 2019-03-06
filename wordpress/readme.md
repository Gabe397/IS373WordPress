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

How to Implement Git
1. One person should go to github and create a repository with a readme, .gitignore(node) and an MIT Liscence.
2. The student who created the repository should then download wordpress, and follow the installation process found above.
3. After that is finished, go to the .gitignore file and add .idea as well as wp-config.php. We don't want the ide files and account information to be pushed to the repository.
4. Go to VCS, click commit and then commit the changes you've recently made. Turn off Perform Code analysis and check TODO found in the right hand side to save time.
5. After commiting, push the commit to github by going to VCS-> Git -> Push.
6. Go back to github, go to your repository, go to settings, and at the left hand side click collaborator.
7. Add your partners github information.
8. The partner should then clone the github repository, check out VCS in php storm and have a copy of the repository in their local.
9. You and your partner should then create two different branches. Go to the bottom right, click new branch.
10. Commit your branches to the repository and make sure it works.
11. Check to see if wordpress is installed proplery in both machines, both students are able to commit to the repository etc.
