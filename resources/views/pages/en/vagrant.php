<div><h1 class="cab">VM Homestead Vagrant</h1><small class="lobster siz">Learn more about --> <a href="http://laravel.com/docs/4.2/homestead" target="_blank">Laravel homestead</a></small></div>

First you need to download and install Virtual box, Vagrant and Git.
<ol><li><a href="https://www.virtualbox.org/" target="_blank">Virtual Box</a></li><li><a href="https://www.vagrantup.com/" target="_blank">Vagrant</a></li><li><a href="http://git-scm.com/" target="_blank">Git</a></li></ol>

You need to create a SHH-KEYGEN if you don't have any. <img class="flet" src="/images/fletxa2.png"><a href="/git_using#keygen" target="_blank">Git comands</a>

Adding The Vagrant Box:

<code><div class="term">$  vagrant box add laravel/homestead</div></code>
Clone The Homestead Repository in dirctory where you keep all of your Laravel projects:

<code><div class="term">$ git clone https://github.com/laravel/homestead.git Homestead</div></code>
Now open "Homested.yalm" file in folder Homestead:

<code><div class="term">$ cd Homestead</div></code>
Look and changes if it’s necessary the keys, folders and sites.
Folders is where you placed projects laravel/php. Sites are to set up the sites. For example:

<code><div class="term" style="color:white;">authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: ~/YourFolder/Laravel/ProjectsLaravelFolder
    to: /home/vagrant/ProjectsLaravelFolder

sites:
    - map: name-app.app
    to: /home/vagrant/ProjectsLaravelFolder/name-app/public</div></code>
In Homested folder build the virtual machine:

<code><div class="term">$ vagrant up</div></code>
Open '/etc/hosts' file and insert the 127.0.0.1 “site-name”.app (Homestead.yalm) at the bottom.
For example:

<code><div class="term">127.0.0.1 name-app.app</div></code>
Now in browser we can go and put “site-name”.app:8000

To add more sites, add in 'Homestead.yalm' and 'etc/hosts' the sites, and run:

<code><div class="term">$ vagrant provision</div></code>

We can go into our vm. We create an alias:

<code><div class="term">$ alias myvm="ssh vagrant@127.0.0.1 -p 2222"</div></code>
We can access now with 'myvm':

<code><div class="term">$ myvm</div></code>
We access to our folder projects, and access to mysql. By default mysql password would be 'secret':

<code><div class="term">$ mysql -uhomestead -psecret</div></code>
Type 'exit' to leave the virtual machine.

To power off the virtual machine:

<code><div class="term">$ vagrant halt</div></code>
To suspend the vm:

<code><div class="term">$ vagrant suspend</div></code>
To resume the vm:

<code><div class="term">$ vagrant resume</div></code>
To see status:

<code><div class="term">$ vagrant global-status

<span style="color:white;">or just</span>

$ vagrant status</div></code>
You can visit this <a href="https://laracasts.com/series/laravel-5-from-scratch/episodes/3" target="_blank">video</a> and see how do it if you have problems.