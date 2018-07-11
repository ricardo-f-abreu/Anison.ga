# Anison.ga

## Installation process:
- Install [XAMPP](https://www.apachefriends.org/download.html)
- Install [Composer](https://getcomposer.org/download/)
- Start XAMPP's Apache and MySQL modules
- Create a database locally named `anison` utf8_general_ci 
- Clone this repository into XAMPP's htdocs folder
- Download [`.env.example`](https://github.com/laravel/laravel/blob/master/.env.example), rename it to `.env` inside the project folder and edit database credentials
- Run `composer install` or `php composer.phar install`
- Run `php artisan key:generate` 
- Run `php artisan migrate`
- Go to localhost/phpmyadmin and insert [`songs.sql`](https://my.mixtape.moe/rxonjk.sql) and [`requests.sql`](https://my.mixtape.moe/ehdocm.sql) into the database using phpMyAdmin
- Go to localhost and everything should be working

#### If for some reason your project stops working, run these commands again in the project folder:
- `composer install`
- `php artisan migrate`
