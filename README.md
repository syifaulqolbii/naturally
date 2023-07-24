<p align="center"><img src="https://github.com/syifaulqolbii/naturally/blob/development/public/images/logo.png" width="400" alt="Naturally Logo"></p>

## About Naturally

Final Project Web Programming Course at Muhammadiyah University of Surakarta
## Usage
Database Setup
This app uses MySQL. To use something different, open up config/Database.php and change the default driver.

To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env
## Migrations

To create all the nessesary tables and columns, run the following
```
php artisan migrate
```
## Seeding The Database
To add the dummy listings with a single user, run the following
```
php artisan db:seed
```

## Running The App

Upload the files to your document root, Valet folder or run
```
php artisan serve
```

## Refresh Migration & Seeding
To refresh the migrations and seed the database again, run the following
```
php artisan migrate:refresh --seed
```


## Built With
- [Laravel](https://laravel.com/) - The PHP Framework For Web Artisans
- [Tailwind CSS](https://tailwindcss.com/) - A utility-first CSS framework for rapidly building custom designs.
- [Alpine JS](https://alpinejs.dev/) - A rugged, minimal framework for composing JavaScript behavior in your markup.


## Team

- Farah Danisha Salam (UI/UX Designer & Frontend Developer)
- Abdul Aziz (Full Stack Developer)
- Syifaul Qolbi (Tim Horee Uhuyyyy Slalalal)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
