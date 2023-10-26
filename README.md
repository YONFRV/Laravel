<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Laravel API for Department and User Management

This is a Laravel 10 project that provides an API to manage departments of a company and associate users with them. You can use this API to integrate department and user management functionality into your own application.

## Characteristics

- Creation, editing and deletion of departments using API endpoints.
- Association of users to departments through API endpoints.
- User management and authentication.
- Information loaded from seeder.

## System Requirements

Make sure you meet the following requirements before using this API:


- PHP 8.0 or higher
- composer
- Laravel 10
- Laravel compatible database (by default, MySQL is - used)
- Laravel Passport (for user authentication)

 ## Use
Follow these steps to use the API in your project:

- Clone the repository from GitHub:

      git clone https://github.com/YONFRV/Laravel.git
      cd Laravel

- Install Composer dependencies:

      composer install

- copy the .env.example file and configure your database:

      cp .env.example .env

- Modify the .env file with your database information:

      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=tu_base_de_datos
      DB_USERNAME=tu_usuario
      DB_PASSWORD=tu_contraseña

- Run the migrations and seeders to create the database structure and initial data:

      php artisan migrate --seed

- Start the development server:

      php artisan serve

- Open your browser and visit http://localhost:8000 to access the API.

## API Endpoints
To consume by postman, the Accept key and the application/json value must be added to the header
### Login
-     POST 'api/auth/login'

      {
      "email":"",
      "password":""
      }
### Register
-     POST 'api/auth/login'

      request: '{
      "name":"",
      "email":"",
      "password":""
      }'
### Employee
-     GET /api/employees
      --header 'Authorization: Bearer 13|kcXBU5awrcEDBCdCwVbeEzgZUuOn2UxYhEDjEN5Wa5a5279a' 
### By Employee
-     GET /api/employees/{Id}
      --header 'Authorization: Bearer 13|kcXBU5awrcEDBCdCwVbeEzgZUuOn2UxYhEDjEN5Wa5a5279a'

### Delete Employee
-     DELETE /api/employees/{Id}
      --header 'Authorization: Bearer 13|kcXBU5awrcEDBCdCwVbeEzgZUuOn2UxYhEDjEN5Wa5a5279a'
### Update Employee
-     PUT /api/employees/{Id}
      --header 'Authorization: Bearer 13|kcXBU5awrcEDBCdCwVbeEzgZUuOn2UxYhEDjEN5Wa5a5279a'

      request:
      '{
      "name": "Madisyn Bodt",
      "email": "thaag@gmail.com",
      "phone": "+16466500386",
      "department_id": "3"
      }'

## License
This project is distributed under the MIT license. See the LICENSE file for more details.