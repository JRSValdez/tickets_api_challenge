# Tickets App API

You can find the Front End Project at [Tickets App](https://github.com/JRSValdez/tickets_app_challeng)

## Requirements

* **composer** 

## Steps

### #1 `git clone https://github.com/JRSValdez/tickets_api_challenge`

### #2 `cd tickets_api_challenge`

### #3 `composer update &  composer install`

To install all dependencies of the project

### #4 `touch ./database/database.sqlite`

Create a new file called **database.sqlite** in the **/database** folder for use SQLITE Database
NOTE: You can configure any connection type you want

### #5 `rename the file .env.example to .env`

Rename the enviroment variables file to **.env**

### #6 `php artisan migrate`

Creates all the tables needed for the project

### #7 `php artisan passport:install`

Install passport configuration

### #8 `php artisan db:seed`

Create fake/dummy registers 

### #9 `php artisan serve`

Run the project

### #10 `Credentials to login`

Use the any email from the dummy users created in the step **#8** and use the password "**ticketsApp**" to login

## Stack/Technologies

* Laravel
* Laravel passport
