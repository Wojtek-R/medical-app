# Medical App
Repository for building our medical application.

# 1. Installation

Clone the repository

Switch to the repo folder
```
cd MedicalApp
```
Install node modules
```
npm install 
```
Build static assets with Laravel mix
```
npm run dev
```
Watch static files with Laravel mix
```
npm run watch
```
Install all the dependencies using composer
```
composer install
```
# 2. Environment file (.env) and  Database configuration

Copy the example env file and make the required configuration changes in the .env file
```
cp .env.example .env
```
Generate a new application key
```
php artisan key:generate
```
Run the database migrations (Set the MySQL database connection in .env before migrating and ensure you have created an empty database)
```
php artisan migrate
```
Run the database seeder
```
php artisan db:seed
```
Note : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following commands
```
php artisan migrate:refresh
php artisan db:seed 
```
# 3. Launch

Start the local development server
```
php artisan serve
```
You should now be able to access the app http://127.0.0.1:8000
