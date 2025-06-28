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

<p align="center"><i>A Laravel MVC web application for managing employee data with full CRUD functionality.</i></p>

 #✅ Features
```sh
      👤 Get all employees
      ➕ Add a new employee
      ✏️ Update an existing employee
      ❌ Delete an employee
      🔢 Pagination support
      📊 PostgreSQL database integration
```
<!-- TABLE OF CONTENTS -->
 📋 Table of Contents
<details> <summary>Click to expand</summary> <ol> <li><a href="#about-the-project">About the Project</a></li> <li><a href="#built-with">Built With</a></li> <li><a href="#demo">Demo</a></li> <li><a href="#getting-started">Getting Started</a></li> <ul> <li><a href="#prerequisites">Prerequisites</a></li> <li><a href="#installation">Installation</a></li> </ul> <li><a href="#usage">Usage</a></li> <li><a href="#roadmap">Roadmap</a></li> </ol> </details>

 📦 Built With :
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
    ![Screenshot 2025-06-28 211120](https://github.com/user-attachments/assets/40ea9620-8b8e-4125-969b-0db3868bd929)
  2. Page No.2:
    ![Screenshot 2025-06-28 211622](https://github.com/user-attachments/assets/0ae23ae3-5f70-4a75-8c4c-c1f6fc907d1d)

* Database Table
  ![image](https://github.com/user-attachments/assets/908a71c6-95cf-48c2-ad82-c1daf5d38164)

### 🚀 Getting Started
📌 Prerequisites
```sh
       PHP >= 8.1
       Composer
       PostgreSQL
       Laravel CLI
       Web server (Apache/Nginx for production)
  ```
## 🛠️ Installation 
   Follow these simple steps to get the server up and running 👾🧮🚀✅.
  1. Clone the repo

```sh
      https://github.com/vikashshaarma007/Employee-Management-System.git
      cd Employee-Management-System
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
## 🧪 Usage
```sh
   Add new employees through the UI.
   Edit or delete employee data.
   Paginate through employee records.
   All actions use Laravel's built-in validation and routing.
```
## 📈 Roadmap
```sh
   Authentication system
   Role-based access control
   Employee profile pictures
   Export to CSV/PDF
   API endpoints (Laravel Sanctum)
```
