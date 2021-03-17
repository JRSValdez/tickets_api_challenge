# Tickets App API
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

### #6 `php artisan passport:install`

Install passport configuration

### #7 `php artisan migrate`

Creates all the tables needed for the project

### #8 `php artisan db:seed`

Create fake/dummy registers 

### #9 `php artian serve`

Run the proect
