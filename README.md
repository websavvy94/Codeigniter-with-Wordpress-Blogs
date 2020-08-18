# Codeigniter-with-Wordpress-Blogs
Integrate Wordpress into Codeigniter

# Local Server Installation
- Edit the file, "C:\Windows\System32\drivers\etc\hosts" and insert following line
127.0.0.1		ciwp.test.com
- Edit the file, "...\xampp\apache\conf\extra\httpd-vhosts.conf" and insert following lines
<VirtualHost *:80>
    DocumentRoot "F:\CodeIgniter\test"
    ServerName ciwp.test.com
    <Directory "F:\CodeIgniter\test">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

# Database Installation
- Create a new database with name, "ciwp_test_db"
- Import db.sql file to run the query in the database

Run your local server, "http://ciwp.test.com" on your browser, then you can see this simple website.

# Wordpress Dashboard Access
link: http://ciwp.test.com/blog-management/wp-login.php
user: apple
pwd: apple
