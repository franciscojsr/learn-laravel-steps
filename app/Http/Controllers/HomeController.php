<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| Controller methods are called when a request enters the application
	| with their assigned URI. The URI a method responds to may be set
	| via simple annotations. Here is an example to get you started!
	|
	*/

	/**
	 * @Get("/")
	 */
	public function index()
	{
		return view('pages.page1');
	}

    /**
     * @Get("/laravel_install")
     */
    public function larainstall()
    {
        return view('pages.laravel_install');
    }

    /**
     * @Get("/vagrant_vm")
     */
    public function vagrant_vm()
    {
        return view('pages.vagrant_vm');
    }

    /**
     * @Get("/git_using")
     */
    public function git_using()
    {
        return view('pages.git_using');
    }


}
