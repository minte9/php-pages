# Apache httpd

For production Apache server add .htaccess in routes/ directory

~~~sh
RewriteEngine on
RewriteBase /routes/public/
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php [L,QSA]
~~~