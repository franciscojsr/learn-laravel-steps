<div><h1 class="cab">Instalar Laravel</h1><small class="lobster siz">Aprender más sobre --> <a href="http://laravel.com" target="_blank">Laravel</a> </small></div>

Primero necesitas installar Composer. <img class="flet" src="/images/fletxa2.png"><a href="https://getcomposer.org/doc/00-intro.md#globally" target="_blank">Instalación global de Composer</a>


Puedes instalar Composer localmente o globalmente. En este tutorial se hace globalmente y el archivo lo podrás colocar en cualquier sitio. Si colocas el archivo en tu PATH, podrás acceder a él globalmente:

<code><div class="term">$ curl -sS https://getcomposer.org/installer | php</div></code>
Hecho esto, ejecuta Composer con "php composer.phar":

<code><div class="term">$ php composer.phar</div></code>
Podrás acceder fácilmente desde cualquier sitio tan sólo ejecutando "composer":
<small>( Si aparece el error: "...not exist file or directory...". Puedes crear el directorio '/bin' y volver a ejecutar)</small>

<code><div class="term">$ mv composer.phar /usr/local/bin/composer</div></code>
Ahora se puede acceder ejecutando sólo con un simple "composer":

<code><div class="term">$ composer</div></code>

(Instalar Lavarel)
Para installar Laravel hay tres maneras: <img class="flet" src="/images/fletxa2.png"><a href="http://laravel.com/docs/4.2/installation" target="_blank">Visita la instalación en Laravel</a>
<ol><li>Via Laravel Installer</li><li>Via Composer Create-Project</li><li>Via Download</li></ol>
En este tutorial, la instalación es Via Laravel Installer usando Composer:

<code><div class="term">$ php composer.phar global require "laravel/installer=~1.1”</div></code>
Ejecuta Laravel y podrás ver información sobre la instalación:
<small>( Laravel installer version, usage, options, commands. )</small>

<code><div class="term">$ ~/.composer/vendor/bin/laravel</div></code>
Para ejecutar Laravel en cualquier sitio con "laravel", coloca el directorio en tu PATH "export path...":
<small>( Al cerrar el terminal volverá al estado inicial )</small>

<code><div class="term">$ export PATH="~/.composer/vendor/bin:$PATH”</div></code>
Se puede hacer permanentemente insertando el codigo en uno de los siguientes ficheros:
<small>( Para saber más, puede ver este <a href="https://laracasts.com/series/laravel-5-from-scratch/episodes/2" target="_blank">vídeo.</a>)</small>
<code><div class="term">~/.bash_profile
~/.bashrh
~/.zsharc</div>
</code>
Después de instalar Laravel, crea un proyecto en el directorio preferido y entra:

<code><div class="term">$ laravel new ‘name-project’
$ cd 'name-project ’</div></code>
Ahora se puede ver en el navegador ejecutanto:

<code><div class="term">$ php artisan serve</div></code>
También se puede ver la versión:

<code><div class="term">$ php artisan -v</div></code>
Si aparece: "...error Mcrypt php require.." en '~.bash_profile' o en cualquier otro de los ficheros anteriores. Insertar apache. En mi caso XAMPP:

<code><div class="term">export PATH="/Applications/XAMPP/xamppfiles/bin:$PATH"</div></code>

Quizás las versión de Laravel no es la última, por lo que se tendrá que remover el proyecto creado y crear uno de nuevo:

Remover proyecto:

<code><div class="term">$ rm -rf 'name-project’</div></code>
Crear proyecto nuevo:

<code><div class="term">$ composer create-project laravel/laravel 'name-project’ dev-develop</div></code>
Elige 'yes' y eso es todo. Puedes checkear la version con algunos otros comandos disponibles:

<code><div class="term">$ php laravel -V</div></code>