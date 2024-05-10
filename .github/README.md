# Basic Library Management System

This is a basic library management system that allows users to search &amp; read books online. It follows a secure authentication system which allows the user to use the system when they have paid their fees.

Try it online at [xara-61.isaac.co.zw](https://xara-61.isaac.co.zw)

## Project Structure

The project follows an MVC (Model-View-Controller) architect and was built using [Laravel 10.48.4](https://laravel.com) _(which is a big deal)_.

### Views 

Views, which are basically the frontend html are located in `resources/views`. You can edit them to add beautiful designs and more.

### Controllers

Controllers, which basically allows us to handle request separately and not in the frontend code. It makes our code nicer :)

These can be found in `app/Http/Controllers`

### Models

Models provide an easy interaction with the database, providing helper functions to manipulate the database. These can be found in `app/Models`

### Database Migrations

Database migrations contain the definitions of our database tables. These can be found in `database/migrations`.

## Installation (5 mins)

To install the system, clone or download the project zip file from the **Code** button at the top. 

> This documentation assumes that you already have a server running PHP 8.1 or greater.

You will also need to download [composer](https://getcomposer.org) and install it.

When the installation is done, you cd into your working directory eg. `cd C:/xampp/htdocs/libmgmt` using your command prompt or terminal and install the required system files with `composer install` (assuming you have installed it and configured the PATH). 

> This assumes you extracted / cloned the project into C:/xampp/htdocs/libmgmt

## Database Configurations (3 min)

Database configurations have to be stored in **.env** file. The system will not work without one, so you can copy the **.env.example** to **.env** and adjust your `DB_` configurations to match your servers. 

You will also need to create an empty database for the system through your `PHPMyAdmin` => [http://localhost/phpmyadmin](http://localhost/phpmyadmin).

## Database Seeding (1 min)

Once you have installed and configured the system, you can open the following web page to seed the database `http://localhost/libmgmt/_db/_migrate?force=install`. This should return "Done" if all went well.

## Admin Auth

Once the preceding step is completed, you will be able to login as an admin using the username: **admin@localhost** and password **admin**

Normal users can just create an account and view the registered accounts.

> **NB:** Additional features may be added at a much later time but is not guaranteed. If you would like to see that, kindly star this project and perhaps create an issue :) - TIA