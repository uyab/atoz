## How to use it

1. Download and extract file. 
2. Using terminal, go to extracted directory and run `composer update`.
```bash
cd atoz
composer update
```
3. edit your database setting in YourRootDirectory\atoz\app\config\database.php
```php
    'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'atoz',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
```
4. run migration and database seeder
```bash
php artisan migrate --seed
```
5. run laravel build in server
```
php artisan serve
```
6. open [laravel:8000] in your Browser
default username : admin
default password : admin
