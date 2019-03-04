# Getting Start Laravel API Simple CRUD 5.7
### Clone the repository
<code>git clone https://github.com/olopezdeveloper/api-crud-laravel.git</code>
### Enter to the Folder
<code>cd api-crud-laravel</code>
### Get All Packets
<code>composer update</code>
### Create .env File from .env.example
<code>cp .env.example .env</code>
### Config your Database on .env file
<code>DB_DATABASE=laravelapi
DB_USERNAME=root
DB_PASSWORD=mypassword</code>
### Generate key and jwt
<code>php artisan key:generate</code>
<code>php artisan jwt:secret</code>