/app/.htaccess

Option -Indexes

/public/.htaccess

Options -MultiViews
RewriteEngine On 

RewriteBase /practice/php/000_projects/mvc/mvc-mk1/public

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f

RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]