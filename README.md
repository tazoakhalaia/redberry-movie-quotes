<h1>Movie Quotes App</h1>

<h1>Table of Contents</h1>
Prerequisites</br>
Tech Stack</br>
Getting Started</br>
Migration</br>
Development</br>
Project Structure</br>
DrawSql</br>

<h1>Prerequisites</h1>

<img width="50" height="50" src="https://raw.githubusercontent.com/RedberryInternship/example-project-laravel/7a054d64192f92566a0f48349002e0296a9d5347/readme/assets/php.svg" />
<h2>PHP</h2>

<img width="50" height="50" src="https://github.com/RedberryInternship/example-project-laravel/blob/master/readme/assets/mysql.png?raw=true" />
<h2>MySql</h2>

<img width="50" height="30" src="https://github.com/RedberryInternship/example-project-laravel/blob/master/readme/assets/npm.png?raw=true" />
<h2>NPM</h2>

<img width="50" height="50" src="https://github.com/RedberryInternship/example-project-laravel/blob/master/readme/assets/composer.png?raw=true" />
<h2>Composer</h2>


<h1>Tech Stack</h1>

<img width="30" height="30" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" />
<h2>Laravel - back-end framework</h2>

<img width="30" height="30" src="https://avatars.githubusercontent.com/u/7535935?v=4&s=400" />
<h2>Spatie Translatable - package for translation</h2>

<h1>Getting Started</h1>

1.  First of all you need to clone E Space repository from github:</br>
https://github.com/RedberryInternship/tamazi-akhalaia-movie-quotes.git</br>

2. Next step requires you to run composer install in order to install all the dependencies.</br>
composer install</br>

3. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:</br>
npm install</br>
and also:</br>
npm run dev</br>
in order to build your JS/SaaS resources.</br>
4. Now we need to set our env file. Go to the root of your project and execute this command.</br>
cp .env.example .env

<h1>MySql</h1>
DB_CONNECTION=mysql</br>
DB_HOST=127.0.0.1</br>
DB_PORT=3306</br>
DB_DATABASE=laravel</br>
DB_USERNAME=root</br>
DB_PASSWORD=</br>

after setting up .env file, execute:</br>
php artisan config:cache</br>
in order to cache environment variables.</br>
Now execute in the root of you project following:</br>
php artisan key:generate</br>
Which generates auth key.</br>
Now, you should be good to go!</br>

<h1>Migration</h1>
if you've completed getting started section, then migrating database if fairly simple process, just execute:</br>
php artisan migrate</br>

<h1>Running Unit tests</h1>
Running unit tests also is very simple process, just type in following command:</br>
composer test

<h1>Development</h1>
You can run Laravel's built-in development server by executing:</br>
php artisan serve</br>
when working on JS you may run:</br>
npm run dev

<h1>Project Structure</h1>
├─── app</br>
│   ├─── Console</br>
│   ├─── Exceptions</br>
│   ├─── Facades</br>
│   ├─── Http</br>
│   │   ├─── Controller</br>
│   │   ├─── LandingController</br>
│   │   ├─── MovieController</br>
│   │   ├─── QuoteController</br>
│   │   ├─── SessionController</br>
│   ├─── Providers</br>
│   ├─── Models</br>
│   │   ├─── Movie</br>
│   │   ├─── Quote</br>
│   │   ├─── Translate</br>
│   │   ├─── User</br>
├─── bootstrap</br>
├─── config</br>
├─── database</br>
├─── lang</br>
├─── packages</br>
├─── public</br>
├─── resources</br>
├─── routes</br>
├─── storage</br>
├─── tests</br>
- .env</br>
- .editorconfig</br>
- composer.json</br>
- package.json</br>
-.env.example</br>
-.gitattributes</br>
-.gitignore</br>
- artisan</br>
- composer.lock</br>
- package-lock.json</br>
- phpunit.xml</br>
- postcss.config.js</br>
- vite.config.js</br>
- tailwind.config.js</br>
