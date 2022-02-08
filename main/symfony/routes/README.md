# Routes project

~~~sh
composer create-project symfony/skeleton routes

cd routes/public/
php -S localhost:8000

symfony server:start

http://localhost:8000
    # Welcome to Symfony
~~~

# Httpd

// For production Apache server add .htaccess in routes/ directory.  

~~~sh
RewriteEngine on
RewriteBase /routes/public/
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php [L,QSA]
~~~