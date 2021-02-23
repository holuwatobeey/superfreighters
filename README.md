# SuperFreighters

Simple freight forwarding business implementation

## Table of Contents

 * [Technologies](#technologies)
 * [Features](#features)
 * [Getting Started](#getting-started)
    * [Installation](#installation)
    * [Development](#development)
    
## Technologies

* [Laravel](https://laravel.com/) - PHP web framework


## Features

* Users can place a shipping order.
* Users can pay with PayStack.
* Users can receive emails of new shipping orders.
* Admin Users can receive emails of new shipping orders.

## Getting Started

### Installation

* git clone
  [SuperFreighters](https://github.com/holuwatobeey/superfreighters.git)
* Run `composer install` to install packages .
* Copy .env.example file, create a .env file if not created and edit database credentials there .
* Copy .env.example file, create a .env.testing file if not created and edit database credentials there for testing, you can use in-memory db sqlite (Optional).
* Run `php artisan key:generate` to set application key to secure user sessions and other encrypted data .
* Change QUEUE_CONNECTION=sync to QUEUE_CONNECTION=database in .env .
* Configure Mail information in .env .
* Run `php artisan queue:table` to create jobs table and save queue list .
* Run `php artisan migrate:fresh --seed` to run database migrations and seed admin user data.
* Run `php artisan queue:listen` to listen and run new email jobs as they are pushed onto the queue .
* Run `php artisan serve` to start the server .
* Run `"vendor\bin\phpunit.bat"` or `php artisan test` to run tests .
