## ABOUT SEXYMAGS
This is a spider project based on PHP, and only scraps content from the site which I choosed, you need to change the regular rules by yourself if you wanna
scrap other sites.
The initial site links were set in laravel logs folder as you can see, cuz this project used laravel.log to decide its next links to be scrapped, so don't clear the laravel.log file before you scrap.
## NOTICE
Before you start scraps you need to use "composer update" to require all the classes which required in this project. And you need to use "php artisan migrate" to init your database and table.
After that,you can start to scrap and enjoy those sexy pics.
## USAGE
1. composer update
2. php artisan migrate
3. curl http://yourdomain.com/scrap/id   notice that this id can be [11,12,13,14,15,17,18] which stand for diffrent pic type and catgory
4. visit http://youdomain.com and you can enjoy
