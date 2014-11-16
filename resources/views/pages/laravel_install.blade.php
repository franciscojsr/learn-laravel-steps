@extends('master')

@section('content')
    <pre>

<h2>Install Laravel <small>( <a href="http://laravel.com">www.laravel.com</a> )</small></h2>
First it's necessary install Composer: (<a href="https://getcomposer.org/doc/00-intro.md#globally">https://getcomposer.org/doc/00-intro.md#globally</a> )

Globally: <code><div class="term">$ curl -sS https://getcomposer.org/installer | php</div></code>
To run composer: <code><div class="term">$ php composer.phar</div></code>
To run composer anywhere with ‘composer’: ( If error ..."not exist file or directory”. Create directory /bin and try again )
<code><div class="term">$ mv composer.phar /usr/local/bin/composer</div></code>
Now to run composer: <code><div class="term">$ composer</div></code>

        Now install Laravel(There ara three ways):

            - The First way:
                <code><div class="term">$ php composer.phar global require "laravel/installer=~1.1”</div></code>
            - Now to run laravel:
                <code><div class="term">$ ~/.composer/vendor/bin/laravel</div></code>
            - To run laravel anywhere(Only until close terminal session):
                <code><div class="term">$ export PATH="~/.composer/vendor/bin:$PATH”</div></code>
            - To run anywhere with just “laravel” and permanently, insert the last "export" code in:
                <code><div class="term">~/.bash_profile</div></code>
                <code><div class="term">~/.bashrh</div></code>
                <code><div class="term">~/.zsharc</div></code>

        Now create a laravel project in the project folder for that you prefer:
            <code><div class="term">$ laravel new ‘name-project’</div></code>
        and insert in folder project:
            <code><div class="term">$ cd 'name-project ’</div></code>

        Now we can see in the browser doing:
            <code><div class="term">$ php artisan serve</div></code>
        or see the version:
            <code><div class="term">$ php artisan -v</div></code>

        If it shows error Mcrypt php require in <code><div class="term">"~/.bash_profile"</div></code> or in previous others files,
        and insert <code><div class="term">export PATH="/Applications/XAMPP/xamppfiles/bin:$PATH"</div></code>
        or the version php apache you want you want.

        Now we can see that maybe the version of laravel not is the last for that we have to remove the project
        create before and create a new one:
            - First remove the project:
                <code><div class="term">$ rm -rf 'name-project’</div></code>
            - Now create a new one:
                <code><div class="term">$ composer create-project laravel/laravel 'name-project’ dev-develop</div></code>
                press enter and in the question press yes, and that is it.
            - We can check the version with some others available commands:
                <code><div class="term">$ php laravel -V</div></code>

    </pre>
@stop