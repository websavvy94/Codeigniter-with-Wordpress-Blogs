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

# Issue Description
Go to about page(/blog page/contact page) and open console window, then you can see 404 error.
http://prntscr.com/txhxl7

But if you disable following lines(red section) at the bottom of index.php file in Codeigniter root path, then the 404 error will be gone, and blog page can't display Wordpress blogs instead.
http://prntscr.com/txhy59
http://prntscr.com/txhy1y
http://prntscr.com/txhya3

# My opinion & Tip
I guess, wordpress router returns 404 error for non-wordpress pages, but the router(/about, /contact) is recognized by CI to display its content.
So, page content is displayed by CI, but the page shows 404 error in console by Wordpress.
Actually, it might be routers conflict problem between CI and Wordpress that is integrated in CI.

You can find a solution in .htaccess files of CI and WP
or in index.php file by setting base_url of CI and site_url of WP.
