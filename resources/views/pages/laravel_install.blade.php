@extends('master')

@section('content')
Install Laravel ( <a href="http://laravel.com">www.laravel.com</a> )

    First it's necessary install Composer: (<a href="https://getcomposer.org/doc/00-intro.md#globally">https://getcomposer.org/doc/00-intro.md#globally</a> )

        - Globally:
            <code>$ curl -sS https://getcomposer.org/installer | php</code>
        - To run composer:
            <code>$ php composer.phar</code>
        - To run composer anywhere with ‘composer’:
            <code>$ mv composer.phar /usr/local/bin/composer</code>
            ( If error ..."not exist file or directory”. Create directory /bin and try again )
        - Now to run composer:
            <code>$ composer</code>

    Now install Laravel(There ara three ways):

        - The First way:
            <code>$ php composer.phar global require "laravel/installer=~1.1”</code>
        - Now to run laravel:
            <code>$ ~/.composer/vendor/bin/laravel</code>
        - To run laravel anywhere(Only until close terminal session):
            <code>$ export PATH="~/.composer/vendor/bin:$PATH”</code>
        - To run anywhere with just “laravel” and permanently, insert the last "export" code in:
            <code>~/.bash_profile </code>
            <code>~/.bashrh </code>
            <code>~/.zsharc </code>

    Now create a laravel project in the project folder for that you prefer:
        <code>$ laravel new ‘name-project’</code>
    and insert in folder project:
        <code>$ cd 'name-project ’</code>

    Now we can see in the browser doing:
        <code>$ php artisan serve</code>
    or see the version:
        <code>$ php artisan -v</code>

    If it shows error Mcrypt php require in <code>"~/.bash_profile"</code> or in previous others files, amd insert <code>export PATH="/Applications/XAMPP/xamppfiles/bin:$PATH"</code>
    or the version php apache you want you want.

    Now we can see that maybe the version of laravel not is the last for that we have to remove the project create before and create a new one:
        - First remove the project:
            <code>$ rm -rf 'name-project’</code>
        - Now create a new one:
            <code>$ composer create-project laravel/laravel 'name-project’ dev-develop</code>
            press enter and in the question press yes, and that is it.
        - We can check the version with some others available commands:
            <code>$ php laravel -V</code>
@stop