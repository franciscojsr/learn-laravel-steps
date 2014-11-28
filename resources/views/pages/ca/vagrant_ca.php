<div><h1 class="cab">VM Homestead Vagrant</h1><small class="lobster siz">Aprendre més sobre --> <a href="http://laravel.com/docs/4.2/homestead" target="_blank">Laravel homestead</a></small></div>

Primer s'ha de descarregar i instal·lar Virtual box, Vagrant and Git.
<ol><li><a href="https://www.virtualbox.org/" target="_blank">Virtual Box</a></li><li><a href="https://www.vagrantup.com/" target="_blank">Vagrant</a></li><li><a href="http://git-scm.com/" target="_blank">Git</a></li></ol>

Es necessita crear una SHH-KEYGEN si no en tens cap. <img class="flet" src="/images/fletxa2.png"><a href="/git_using_ca#keygen" target="_blank">Git comands</a>

Afegint el Vagrant Box:

<code><div class="term">$ vagrant box add laravel/homestead</div></code>
Clona el repositori de Homestead al directori on mantens tots els projectes Laravel:

<code><div class="term">$ git clone https://github.com/laravel/homestead.git Homestead</div></code>
Ara obre el fitxer "Homested.yalm" del directori Homestead:

<code><div class="term">$ cd Homestead</div></code>
Fes un cop d'ull i canvia si es necessari les keys, folders i sites.
Folders és on són els projectes Laravel. Sites son per configurar els llocs. Per exemple:

<code><div class="term" style="color:white;">authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: ~/YourFolder/Laravel/ProjectsLaravelFolder
    to: /home/vagrant/ProjectsLaravelFolder

sites:
    - map: name-app.app
    to: /home/vagrant/ProjectsLaravelFolder/name-app/public</div></code>
Al directori Homested construir la máquina virtual:

<code><div class="term">$ vagrant up</div></code>
Obre el fitxer '/etc/hosts' i insereix 127.0.0.1 “site-name”.app (Homestead.yalm) a sota de tot.
Per exemple:

<code><div class="term">127.0.0.1 name-app.app</div></code>
Ara en el navegador pots accedir amb “site-name”.app:8000

Per adherir més sites, incloure a 'Homestead.yalm' i a 'etc/hosts' els sites. Després cal executar:

<code><div class="term">$ vagrant provision</div></code>

Podem anar a la nostra vm. Crearem un alias:

<code><div class="term">$ alias myvm="ssh vagrant@127.0.0.1 -p 2222"</div></code>
Accedeix ara amb 'myvm':

<code><div class="term">$ myvm</div></code>
Accedim a la carpeta dels projectes, i a mysql. Per defecte la contrasenya serà 'secret':

<code><div class="term">$ mysql -uhomestead -psecret</div></code>
Tecleja 'exit' per sortir de la màquina virtual.

Per desconnectar la màquina virtual fem:

<code><div class="term">$ vagrant halt</div></code>
Per suspendre la vm:

<code><div class="term">$ vagrant suspend</div></code>
Per restablir la vm:

<code><div class="term">$ vagrant resume</div></code>
Per veure l'estat:

<code><div class="term">$ vagrant global-status

<span style="color:white;">or just</span>

$ vagrant status</div></code>
Pots visitar aquest <a href="https://laracasts.com/series/laravel-5-from-scratch/episodes/3" target="_blank">vídeo</a> i veure com es fa si tens problemes.