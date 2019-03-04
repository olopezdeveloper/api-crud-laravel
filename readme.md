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

### Finally Run this
<code>php artisan serve</code>

### Check
You can use Postman to check the API:
##### First register you email and password
<code>POST | http://localhost:8000/api/register/</code>

##### Them get a token
<code>POST | http://localhost:8000/api/login/</code>

##### put your token in the header request
key: Authorization
value: bearer EXAMPLEEOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU1MTYzOTI5MywiZXhwIjoxNTUxNjQyODkzLCJuYmYiOjE1NTE2MzkyOTMsImp0aSI6IlRJaVkzZ3JINHFSanE1N1YiLCJzdWIiOjUsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.sq85ijPIykMPnaZp2UkL0wfpPr9AhMMhUo86ttfe0a4EXAMPLE

##### Now you can use the folowin urls
<code>GET | http://localhost:8000/api/products/</code>
<code>POST | http://localhost:8000/api/products/</code>
<code>GET | http://localhost:8000/api/products/2/</code>
<code>PUT | http://localhost:8000/api/products/2/</code>
<code>DELETE | http://localhost:8000/api/products/2/</code>
