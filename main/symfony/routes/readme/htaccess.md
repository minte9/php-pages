RewriteEngine on
RewriteBase /routes/public/
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php [L,QSA]