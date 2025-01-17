## About Jokes App

In this laravel single page challenge 3 random jokes are showing in the form of table which are fetching from third party API's on click of refresh button jokes will be refresh without loading the page first need to enter the password which allows you to access the jokes page. In this no Database is used not storing any details in database and not fetching any details from database its simple one page application which is used to fetch data from the third party api mentioned in challenge ( https://official-joke-api.appspot.com/jokes/programming/ten/ )

## Screenshot 1 :  Password Enter
Enter the Password (latus) then it will proceed further if password will be incorrect it will give error.
![image](https://github.com/user-attachments/assets/8f6fbb97-d437-4196-bba6-7286746344cf)

## Screenshot 2 :  Jokes Display
You can see 3 random jokes are showing and on click of refresh button all jokes will be shuffled and show random jokes.
![image](https://github.com/user-attachments/assets/84280730-d354-4c32-b38b-79f50d1db84d)



## Setup of this app

1: Run git clone '[link projer github](https://github.com/Pavneetkaur1995/latus.git)' All the updated code is on master branch.
2: Run composer install
3: Run cp .env.example .env or copy .env.example .env
After creating PHP file please add following things into your .env file
If you already have database lines please replace with following

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

no database is used in this so

4: Run php artisan key:generate
5: Run php artisan migrate

Run php artisan db:seed

Run php artisan serve



## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
