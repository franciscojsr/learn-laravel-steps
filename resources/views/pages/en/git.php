<div><h1 class="cab">Some Git commands</h1><small class="lobster siz">Learn more about --> <a href="http://git-scm.com/doc" target="_blank">Git documentation</a></small></div>
<ul><li>ssh-keygen</li><li>git status</li><li>gitignore</li><li>git add</li><li>git commit</li><li>git push</li><li>git pull</li><li>git rm</li><li>git --help</li></ul><a name="keygen"></a>


Create ssh-keygen:

<code><div class="term"><span style="color:white;">Generate ssh-keygen:</span>
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
To get status:

<code><div class="term">$ git status</div></code>
To ignore some track file:

<code><div class="term">$ echo &lt name_file_or_folder &gt .gitignore</div></code>
To add changes from a project:

<code><div class="term">$ git add .</div></code>
To commit with message:

<code><div class="term">$ git commit -m 'message'</div></code>
To push changes, update in remote ref...

<code><div class="term">$ git push</div></code>
with master the first time:

<code><div class="term">$ git push -u origin master</div></code>
To pull changes, fetch from and integrate with another repository or a local branch...

<code><div class="term">$ git pull</div></code>
To remove if it’s necessary:

<code><div class="term">$ git rm &lt file &gt</div></code>

Help:

<code><div class="term">$ git - - help

<span style="color:white;">or</span>

$ git &lt command &gt - - help

<span style="color:white;">or</span>

$ git &lt command &gt -help</div></code>