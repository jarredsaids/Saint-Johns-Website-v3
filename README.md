# Saint John's Website (v3)

This website is for Saint John's Lutheran Church in Statesville, NC that was written by David Turner and built as a project to practice using Laravel.

## Installation

Saint John's Website a Laravel 7 application. To install the application in a production environment, follow the steps below:

```bash
# first clone the application and do the typical laravel setup steps
git clone https://github.com/jarredsaids/Saint-Johns-Website-v3
composer install
cp .env.example .env
php artisan key:generate

# generate front-end assets
npm install
npm run production

# node_modules should NOT be deployed to a production environment

```

## Usage

Users can navigate the pages to see upcoming events, the church's Google calendar, view a simulated church tour and other photos in the photo gallaries, read and download church publications, see upcoming birthdays, access a Google Map for directions, view church staff biographies, read a general description of congregational values, view common visitor questions, and access links to the following websites: NALV, Carolinas Mission District, Bible Studies.

## License
[MIT](https://choosealicense.com/licenses/mit/)
