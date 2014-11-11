@extends('master')

@section('content')
Virtual machine Homestead Laravel/VBox/Vagrant ( www.laravel.com )

	First download and install Virtual box, Vagrant and Git.

Create a SHH-KEYGEN

Adding The Vagrant Box:
			  $  vagrant box add laravel/homestead

Clone The Homestead Repository (In direction where you keep all of ypur Laravel projects )
			 $ git clone https://github.com/laravel/homestead.git Homestead

Now open Homested.yalm in folder Homestead:
			  $ cd Homestead
			Look and changes if it’s necessary the keys. folders and sites…
			Folders is where placed projects laraval/php..
			sites are to set up the sites.

Now in Homested do  $ vagrant up  to build the virtual machine.
Now open /etc/hosts file and insert the 127.0.0.1 “site-name”.app(Homestead.yalm) at the bottom.

(To add more sites, add in Homestead.yalm the sites an in etc/hosts, and run:   $ vagrant provision   )

Now in browser we can go and put “site-name”.app:8000

Now we can go into our vm. First we create an alias for not write all the times that we want to do it:
		 $ alias myvm="ssh vagrant@127.0.0.1 -p 2222"
We can access now with myvm:  $ myvm
We acces to our folder projects, see php version and access to mysql:

		Defoault password would be secret:
		mysql -uhomestead -psecret

	Type ‘exit' to leave the virtual machine.

To power off the virtual machine:   $ vagrant halt
To suspend de vm:  $ vagrant suspend
To resume de vm:  $ vagrant resume
To see status:  $ vagrant global-status
@stop