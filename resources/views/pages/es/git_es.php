<div><h1 class="cab">Comandos Git</h1><small class="lobster siz">Aprender más sobre --> <a href="http://git-scm.com/doc" target="_blank">Git documentación</a></small></div>
<ul><li>ssh-keygen</li><li>git status</li><li>gitignore</li><li>git add</li><li>git commit</li><li>git push</li><li>git pull</li><li>git rm</li><li>git --help</li></ul><a name="keygen"></a>


Crear ssh-keygen:

<code><div class="term"><span style="color:white;">Generar ssh-keygen:</span>
        $ ssh-keygen -t rsa -C "your-email@example.com"
        <span style="color:white;">[Press enter]
        [Type a passphrase]
        [Type passphrase again]</span>

<span style="color:white;">Add the ssh-agent in the background:</span>
        $ eval "$(ssh-agent -s)"
        $ ssh-add ~/-ssh/id_rsa

<span style="color:white;">At first time, to remember the ssh-key during session and connect without type the passphrase every time.</span>
        ssh-agent
        Agent pid 869

<span style="color:white;">To add your ssh-key to GitHub, copy to clipboard and paste</span>
        $ pbcopy < ~/.ssh/id_rsa.pub
</div></code>
Obtener el estado:

<code><div class="term">$ git status</div></code>
Ignorar seguimiento de ficheros:

<code><div class="term">$ echo &lt name_file_or_folder &gt .gitignore</div></code>
Incluir los cambios del proyecto:

<code><div class="term">$ git add .</div></code>
Preparar, cometer dejando un mensaje:

<code><div class="term">$ git commit -m 'message'</div></code>
Actualizar los antiguos cambios subidos, por los cambios en local:

<code><div class="term">$ git push</div></code>
Actualizar con master en origen:

<code><div class="term">$ git push -u origin master</div></code>
Atualizar los cambios para bajarlos a local, e integrar-los:

<code><div class="term">$ git pull</div></code>
Remover si es necesario:

<code><div class="term">$ git rm &lt file &gt</div></code>

Ayuda:

<code><div class="term">$ git - - help

<span style="color:white;">o</span>

$ git &lt command &gt - - help

<span style="color:white;">o</span>

$ git &lt command &gt -help</div></code>