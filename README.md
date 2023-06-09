# Stisla Laravel
Stisla is the most-awesome admin panel I've seen so far. As I love this template very much, I have implemented Stisla in a fresh Laravel 5.8 app. Simply clone this repo and start building your next Laravel project on top of the awesome Stisla. This project makes a very little and basic use of VueJS and compiled JS is already bundled with the project. If you want to make it more dynamic, you can update the Vue components or add your own.

## Installation
Clone the repo:
```shell
git clone https://github.com/rinisusila11/aset1.git
```

Install composer packages:
```shell
composer update
```

Copy and rename .env.example to .env, update the environmental variables and set an app key:
```shell
php artisan key:generate
```

After that, run all migrations and seed the database:
```shell
php artisan migrate
```
```shell
php artisan db:seed
```

Or if your database is fresh and you haven't done any work yet, then it's safe to call the commands in a single line:
```shell
php artisan migrate:refresh --seed
```

Note that seeding the database is compulsory as it will create the necessary roles and permissions for the user CRUD provided by the project.

Visit <div style="display: inline">http://yoursite.com/login</div> to sign in using below credentials:
