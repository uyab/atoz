## How to use it

### Download and extract file. 
### Using terminal, go to extracted directory and run `composer update`.
```bash
cd atoz
composer update
```
### edit your database setting in YourRootDirectory\atoz\app\config\database.php
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
### run migration and database seeder
```bash
php artisan migrate --seed
```
### run laravel build in server
```bash
php artisan serve
```
### open [laravel:8000](laravel:8000) in your Browser
default username : admin
default password : admin
