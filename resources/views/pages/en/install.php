<div><h1 class="cab">Install Laravel</h1><small class="lobster siz">Learn more about --> <a href="http://laravel.com" target="_blank">Laravel</a> </small></div>

First you need install Composer. <img class="flet" src="/images/fletxa2.png"><a href="https://getcomposer.org/doc/00-intro.md#globally" target="_blank">Composer globally intallation</a>


You can install Composer locally or globally. In this tutorial it's Globally, and you can place this file anywhere you wish. If you put it in your PATH, you can access it globally:

<code><div class="term">$ curl -sS https://getcomposer.org/installer | php</div></code>
Then, you can run Composer with "php composer.phar":

<code><div class="term">$ php composer.phar</div></code>
But you can have easily access Composer from anywhere on your system just run "composer":
<small>( If it shows error like: "...not exist file or directory...". You can create directory '/bin' and try again )</small>

<code><div class="term">$ mv composer.phar /usr/local/bin/composer</div></code>
Now, just run with a simple "composer":

<code><div class="term">$ composer</div></code>

(Install Lavarel)
To install Laravel there are three ways: <img class="flet" src="/images/fletxa2.png"><a href="http://laravel.com/docs/4.2/installation" target="_blank">Check installation in Laravel page</a>
<ol><li>Via Laravel Installer</li><li>Via Composer Create-Project</li><li>Via Download</li></ol>
In this tutorial, installation is Via Laravel Installer using Composer:

<code><div class="term">$ php composer.phar global require "laravel/installer=~1.1”</div></code>
Then just run Laravel, and we'll see some information about it:
<small>( Laravel installer version, usage, options, commands. )</small>

<code><div class="term">$ ~/.composer/vendor/bin/laravel</div></code>
To run laravel anywhere with just "laravel", place the directory in your PATH "export path...":
<small>( This is only until close terminal session )</small>

<code><div class="term">$ export PATH="~/.composer/vendor/bin:$PATH”</div></code>
If you want permanently. Insert the previous code in one of this files.
<small>( To know more, you can see this <a href="https://laracasts.com/series/laravel-5-from-scratch/episodes/2" target="_blank">video.</a>)</small>
<code><div class="term">~/.bash_profile
~/.bashrh
~/.zsharc</div>
</code>
Once Laravel is installed, you can create a laravel project in the folder that you prefer, and then change to the directory project:

<code><div class="term">$ laravel new ‘name-project’
$ cd 'name-project ’</div></code>
Now we can see in the browser doing:

<code><div class="term">$ php artisan serve</div></code>
Also see the version:

<code><div class="term">$ php artisan -v</div></code>
If it shows "...error Mcrypt php require.." in '~.bash_profile' or in previous others files, and insert apache. In my case, I use XAMPP:

<code><div class="term">export PATH="/Applications/XAMPP/xamppfiles/bin:$PATH"</div></code>

You can see that maybe the version of laravel not is the last, for that we have to remove the project created before and create a new one:

Remove the project:

<code><div class="term">$ rm -rf 'name-project’</div></code>
Create a new one:

<code><div class="term">$ composer create-project laravel/laravel 'name-project’ dev-develop</div></code>
Press enter and 'yes', and that's it. You can check the version with some others available commands:

<code><div class="term">$ php laravel -V</div></code>