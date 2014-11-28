<div><h1 class="cab">VM Homestead Vagrant</h1><small class="lobster siz">Aprender más sobre --> <a href="http://laravel.com/docs/4.2/homestead" target="_blank">Laravel homestead</a></small></div>

Primero descargar e instalar Virtual box, Vagrant and Git.
<ol><li><a href="https://www.virtualbox.org/" target="_blank">Virtual Box</a></li><li><a href="https://www.vagrantup.com/" target="_blank">Vagrant</a></li><li><a href="http://git-scm.com/" target="_blank">Git</a></li></ol>

Se necesita crear una SHH-KEYGEN si no se tiene una. <img class="flet" src="/images/fletxa2.png"><a href="/git_using_es#keygen" target="_blank">Git comands</a>

Agrega el Vagrant Box:

<code><div class="term">$ vagrant box add laravel/homestead</div></code>
Clona el repositorio de Homestead al directorio en donde están todos tus proyectos:

<code><div class="term">$ git clone https://github.com/laravel/homestead.git Homestead</div></code>
Abre el fichero "Homested.yalm" del directorio Homestead:

<code><div class="term">$ cd Homestead</div></code>
Mira y cambia si es necesario las keys, folders y sites.
Folders es en donde están los proyectos. Sites son para configurar los sites. Por ejemplo:

<code><div class="term" style="color:white;">authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: ~/YourFolder/Laravel/ProjectsLaravelFolder
    to: /home/vagrant/ProjectsLaravelFolder

sites:
    - map: name-app.app
    to: /home/vagrant/ProjectsLaravelFolder/name-app/public</div></code>
En el directorio Homested construir la máquina virtual:

<code><div class="term">$ vagrant up</div></code>
Abrir el fichero '/etc/hosts' e introducir '127.0.0.1 "site-name".app' (Homestead.yalm) al final de todo.
Por ejemplo:

<code><div class="term">127.0.0.1 name-app.app</div></code>
Ahora en el navegador se puede acceder con la dirección "site-name".app:8000

Per adherir más sites, incluir en los ficheros 'Homestead.yalm' y 'etc/hosts' los sites. Después se tiene que ejecutar:

<code><div class="term">$ vagrant provision</div></code>

Se puede acceder a la máquina virtual. Para ello crea un alias:

<code><div class="term">$ alias myvm="ssh vagrant@127.0.0.1 -p 2222"</div></code>
Accede ahora con 'myvm':

<code><div class="term">$ myvm</div></code>
Accede a la carpeta de los proyectos, y a mysql. Por defecto la contraseña será 'secret':

<code><div class="term">$ mysql -uhomestead -psecret</div></code>
Teclear 'exit' para salir de la máquina virtual(vm).

Para desconectar la vm:

<code><div class="term">$ vagrant halt</div></code>
Para suspender la vm:

<code><div class="term">$ vagrant suspend</div></code>
Para restablecer la vm:

<code><div class="term">$ vagrant resume</div></code>
Para ver el estado:

<code><div class="term">$ vagrant global-status

<span style="color:white;">or just</span>

$ vagrant status</div></code>
Puedes visitar este <a href="https://laracasts.com/series/laravel-5-from-scratch/episodes/3" target="_blank">vídeo</a> i ver como se hace si tienes problemas.