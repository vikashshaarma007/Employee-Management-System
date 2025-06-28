<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>




<h1 align="center">Employee Management System 🧮🚀</h1>
<p align="center"><i>A Laravel MVC web application for Employee Management System with the following CRUD operations in single platform</i></p>
<br>

<p align="center"><i>CRUD Operations</i> 👨🏽‍💻 
  <br>

##  A Laravel MVC web application for Employee Management System with the following CRUD operations:
   sh```
      • Get all the Employee
      • Add a new Employee
      • Update an Employee
      • Delete an Employee
    ```
    

  <!-- TABLE OF CONTENTS -->
  <details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
        <li><a href="#Ddemo">Demo</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>>
  </ol>
</details>

 Built With :
  # Technology Stack:
  * Php
  * Laravel
  * Blade
  * HTML
  * Bootstrap
  * JavaScript
  * PostgreSQL Database
  

<!-- GETTING STARTED -->
## Demo:
* All Employees User Interface
  ![image](https://github.com/user-attachments/assets/f5823a81-8225-466b-8bbc-d01b7d9a98a3)

* Add Employee User Interface
  ![image](https://github.com/user-attachments/assets/522be22a-ffc6-411f-b155-4d92af91c6f1)
  ![image](https://github.com/user-attachments/assets/4304d9de-cfb9-4dee-b18f-88b2a45a89f7)

* Update Employee User Interface
  ![image](https://github.com/user-attachments/assets/a4d397e7-0e74-45f3-bb83-b310efb9aa07)
  ![image](https://github.com/user-attachments/assets/597493bd-6059-478e-8756-26e1d19cb1bb)
  
* Delete Employee User Interface
  ![image](https://github.com/user-attachments/assets/28280fda-5cc4-41e8-b357-af53024ad6fa)
  ![image](https://github.com/user-attachments/assets/be061b3c-796e-4061-8668-ed98bb05bf49)

* Pagination:
  1. Page No.1:
    ![image](https://github.com/user-attachments/assets/3518fe4d-7fde-4529-9b69-97137dd068b6)
  2. Page No.2:
    ![Screenshot 2025-06-28 211622](https://github.com/user-attachments/assets/0ae23ae3-5f70-4a75-8c4c-c1f6fc907d1d)

* Database Table
  ![image](https://github.com/user-attachments/assets/908a71c6-95cf-48c2-ad82-c1daf5d38164)

 ### Prerequisites


## To run the project
  ```sh
  vs-code/cmd
  ```
## To build the project for production
  ```sh
  1. Create a new Laravel project
    composer create-project laravel/laravel your-project-name
  2. Set up environment
    cd your-project-name
    cp .env.example .env
    php artisan key:generate
  3. Configure your environment in .env
    Set up DB settings and other production configs:
    DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD
  4. Add dependencies as needed
     Example: for database & API development
     composer require laravel/ui
     composer require doctrine/dbal
  5. Set up database and run migrations
     php artisan migrate
  6. Start development server (for local testing)
     php artisan serve
  7. For production, configure a web server like Apache or Nginx
     Point your web server's root to: public/
  8. Set proper permissions
     chmod -R 775 storage bootstrap/cache
  9. Cache config and routes (for production optimization)
     php artisan config:cache
     php artisan route:cache
     php artisan view:cache
  10. Optionally deploy using Laravel Forge, Envoyer, or manually via SSH
  ```
## Installation 
   Follow these simple steps to get the server up and running 👾🧮🚀✅.
  1. Clone the repo

```sh
      git clone https://github.com/your_username_/Project-Name.git
```
2. Run the Project
   ```sh
    1. Create a Database -> RestFramework_DB using pgAdmin 4 or any PostgreSQL client.
    2. Open the project in your preferred IDE (e.g., VS Code, PHPStorm, Sublime Text).
    3. Install project dependencies:
       composer install
    4. Copy the example environment config and update it:
       cp .env.example .env
    5. Edit the `.env` file and update database settings:
       DB_CONNECTION=pgsql
       DB_HOST=127.0.0.1
       DB_PORT=5432
       DB_DATABASE=EMS_db
       DB_USERNAME=postgresql
       DB_PASSWORD=root
    6. Generate the application key:
       php artisan key:generate
    7. Run migrations to create tables:
       php artisan migrate
    # Tables created: employee
    8. (Optional) Add sample data using seeders or via pgAdmin 4.
    9. Start the Laravel development server:
       php artisan serve
    10. Open the web browser at: http://localhost:8000/
    11. Use the web app to Add, Fetch, Update, and Delete records.
 ```

