<div><h1 class="cab">Instal·lar Laravel</h1><small class="lobster siz">Aprendre més sobre --> <a href="http://laravel.com" target="_blank">Laravel</a> </small></div>

Primer és necessari instal·lar Composer. <img class="flet" src="/images/fletxa2.png"><a href="https://getcomposer.org/doc/00-intro.md#globally" target="_blank">Instal·lació global de Composer</a>


Composer es pot instal·lar localment o globalment. En aquest tutorial es fa globalment i el fitxer es podrà col·locar a qualsevol lloc. Si es col·loca al teu PATH, podràs accedir-hi globalment:

<code><div class="term">$ curl -sS https://getcomposer.org/installer | php</div></code>
Fet això, s'executa Composer amb "php composer.phar":

<code><div class="term">$ php composer.phar</div></code>
Podràs accedir fàcilment des de qualsevol lloc només executant amb "composer":
<small>( Si surt l'error: "...not exist file or directory...". Pots crear el directori '/bin' i tornar a executar. )</small>

<code><div class="term">$ mv composer.phar /usr/local/bin/composer</div></code>
Ara es pot accedir executant només amb un simple "composer":

<code><div class="term">$ composer</div></code>

(Instal·lar Lavarel)
Per instal·lar Laravel hi ha tres maneres: <img class="flet" src="/images/fletxa2.png"><a href="http://laravel.com/docs/4.2/installation" target="_blank">Visita la instalació a Laravel</a>
<ol><li>Via Laravel Installer</li><li>Via Composer Create-Project</li><li>Via Download</li></ol>
En aquest tutorial, la instal·lació és Via Laravel Installer fent servir Composer:

<code><div class="term">$ php composer.phar global require "laravel/installer=~1.1”</div></code>
Executa Laravel i podràs veure informació sobre la instal·lació:
<small>( Laravel installer version, usage, options, commands. )</small>

<code><div class="term">$ ~/.composer/vendor/bin/laravel</div></code>
Per executar Laravel a qualsevol lloc amb "laravel", col·locar el directori al teu PATH "export path...":
<small>( Si es tanca el terminal, es perd la sessió )</small>

<code><div class="term">$ export PATH="~/.composer/vendor/bin:$PATH”</div></code>
Es pot fer permanentment inserint el codi a un dels següent fitxers:
<small>( Per saber-ne més, pots veure aquest <a href="https://laracasts.com/series/laravel-5-from-scratch/episodes/2" target="_blank">vídeo.</a>)</small>
<code><div class="term">~/.bash_profile
~/.bashrh
~/.zsharc</div>
</code>
Després d'instal·lar Laravel, crea un projecte al directori preferit i accedeix:

<code><div class="term">$ laravel new ‘name-project’
$ cd 'name-project ’</div></code>
Ara es pot veure al teu navegador executant:

<code><div class="term">$ php artisan serve</div></code>
També es pot veure la versió:

<code><div class="term">$ php artisan -v</div></code>
Si surt: "...error Mcrypt php require.." a '~.bash_profile' o a cualquier altre dels fitxers. Insertar apache. Al meu cas fico XAMPP:

<code><div class="term">export PATH="/Applications/XAMPP/xamppfiles/bin:$PATH"</div></code>

Potser la versió de Laravel no és l'última. Per tant, s'haurà de remoure el projecte creat i crear un de nou.

Remoure projecte:

<code><div class="term">$ rm -rf 'name-project’</div></code>
Crear projecte nou:

<code><div class="term">$ composer create-project laravel/laravel 'name-project’ dev-develop</div></code>
Tria 'yes' i això es tot. Pots mirar la versió amb alguns comandos disponibles:

<code><div class="term">$ php laravel -V</div></code>