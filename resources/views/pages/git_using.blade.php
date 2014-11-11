@extends('master')

@section('content')
Git status, ignore, add, commit and push

	To get status:
		$ git status

	To ignore some track file:
		$ echo <name_file_or_folder> > .gitignore

	To add changes from a project:
		$ git add .

	To commit with message
		$ git commit -m <‘ message ‘>

	To commit with message any start composer with trigger:
		$ git commit -m <‘message [trigger:composer]'

	To push changes, update in remote ref...
		$ git push

	with master the first time:
		$ git push -u origin master

	To remove something if it’s necessary:
		$ git rm <file>

	To pull changes, fetch from and integrate with another repository or a local branch...
		$ git pull

Help
	$ git —help or git <command> -help
@stop