## About Jokes App

In this laravel single page challenge 3 random jokes are showing in the form of table which are fetching from third party API's on click of refresh button jokes will be refresh without loading the page first need to enter the password which allows you to access the jokes page. In this no Database is used not storing any details in database and not fetching any details from database its simple one page application which is used to fetch data from the third party api mentioned in challenge ( https://official-joke-api.appspot.com/jokes/programming/ten/ )

## Screenshot 1 :  Password Enter
Enter the Password (latus) then it will proceed further if password will be incorrect it will give error.
![image](https://github.com/user-attachments/assets/8f6fbb97-d437-4196-bba6-7286746344cf)

## Screenshot 2 :  Jokes Display
You can see 3 random jokes are showing and on click of refresh button all jokes will be shuffled and show random jokes.
![image](https://github.com/user-attachments/assets/84280730-d354-4c32-b38b-79f50d1db84d)



## Setup of this Laravel jokes app

1: Run git clone '[link projer github](https://github.com/Pavneetkaur1995/latus.git)' All the updated code is on master branch.
2: Run composer install
3: Run cp .env.example .env or copy .env.example .env
4: Run php artisan key:generate
5: Run php artisan serve

## Demo Video link
https://www.loom.com/share/b5ac262f7666439a8dee64b8a97adc35?sid=f9972838-6de5-4a72-a785-da7a440933bb

## Unit Testing and Code Reviews Scenarios which I have done on my end

1: First of all laravel have inbuilt phpunit which is used to test the basics like is the routes working fine is the response returning. It has two folders inside the tests which is default folder that is unit and feature.
2:Following are the commands which I used to make or run the tests

 php artisan test --filter=JokesRouteCheckTest
 php artisan test --filter=JokesApiTest

Currently I made above tests which used to test the routes and check is API working or not.

3: Except Laravel phpunit test function I had review the code of all the controllers and view files which does not contain any unused commented code or any othe not usable code





