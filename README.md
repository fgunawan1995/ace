# ace
Pre Test

Installation : 
  1. Clone this repo
  2. Change .env files for database
  3. Run migration and seed : php artisan migrate --seed
  4. php artisan serve
  
Features :
  1. JWT Authentication
      - Sign up : POST http://127.0.0.1:8000/api/signup
      - Login : POST http://127.0.0.1:8000/api/login
  2. Company REST API (use token from login)
      - GET http://127.0.0.1:8000/api/v1/companies
      - POST http://127.0.0.1:8000/api/v1/companies
      - GET http://127.0.0.1:8000/api/v1/companies/{id}
      - PUT http://127.0.0.1:8000/api/v1/companies/{id}
      - DELETE http://127.0.0.1:8000/api/v1/companies/{id}
