# APP SCREENSHOTS:
<br/>
<p>URL SHORTENER with laravel 5 and design with Nostalgic css (you can check on github):</p>
<ul>
  <li>You can't shrink twice or more same link.</li>
  <li>If you need to change shorted link then you need to delete him from database.</li>
  <li>Error page included.</li>
  <li>Validation included.</li>
    <ul>
       <li>If link is empty.</li>
       <li>If link does not respecting URL format.</li>
    </ul>
</ul> 
<br/>
<p align="center">
  <img src="https://github.com/ELATTARIYassine/URL-shortener-laravel-5-and-nostalgic-css/blob/master/Github-images/localhost.png?raw=true"  title="hover text"> 
</p>
<p align="center">
  <img src="https://github.com/ELATTARIYassine/URL-shortener-laravel-5-and-nostalgic-css/blob/master/Github-images/add-link.png?raw=true"  title="hover text"> 
</p>
<p align="center">
  <img src="https://github.com/ELATTARIYassine/URL-shortener-laravel-5-and-nostalgic-css/blob/master/Github-images/shorted-link.png?raw=true"  title="hover text"> 
</p>
<p align="center">
  <img src="https://github.com/ELATTARIYassine/URL-shortener-laravel-5-and-nostalgic-css/blob/master/Github-images/error-case.png?raw=true"  title="hover text"> 
</p> 
<br/>
##Here is how to run this project :
<ul>
    <li>Download and copy the project to your wamp/xampp/laragon path.</li>
    <li>Create a database locally utf8_general_ci.</li>
    <li>Rename .env.example file to .envinside your project root and fill the database information.</li>
    <li>Open the console and cd your project root directory.</li>
    <li>Run composer install or php composer.phar install.</li>
    <li>Run php artisan key:generate.</li>
    <li>Run php artisan migrate.</li>
    <li>Run php artisan db:seed to run seeders, if any.</li>
    <li>Run php artisan serve</li>
</ul>
<br/>
#####You can now access your project at localhost:8000 :)
