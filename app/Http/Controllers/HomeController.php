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
	public function index() { return view('pages.en.page1'); }
    /**
     * @Get("/ca")
     */
    public function index_ca() { return view('pages.ca.page1_ca'); }
    /**
     * @Get("/es")
     */
    public function index_es() { return view('pages.es.page1_es'); }

    /**
     * @Get("/laravel_install")
     */
    public function larainstall() { return view('pages.en.laravel_install'); }
    /**
     * @Get("/laravel_install_ca")
     */
    public function larainstall_ca() { return view('pages.ca.laravel_install_ca'); }
    /**
     * @Get("/laravel_install_es")
     */
    public function larainstall_es() { return view('pages.es.laravel_install_es'); }

    /**
     * @Get("/vagrant_vm")
     */
    public function vagrant_vm() { return view('pages.en.vagrant_vm'); }
    /**
     * @Get("/vagrant_vm_ca")
     */
    public function vagrant_vm_ca() { return view('pages.ca.vagrant_vm_ca'); }
    /**
     * @Get("/vagrant_vm_es")
     */
    public function vagrant_vm_es() { return view('pages.es.vagrant_vm_es'); }

    /**
     * @Get("/git_using")
     */
    public function git_using() { return view('pages.en.git_using'); }
    /**
     * @Get("/git_using_ca")
     */
    public function git_using_ca() { return view('pages.ca.git_using_ca'); }
    /**
     * @Get("/git_using_es")
     */
    public function git_using_es() { return view('pages.es.git_using_es'); }




    /**
     * @Get("/example")
     */
    public function example()
    {
        return view('pages.1_ejemplos.example');
    }

    /**
     * @Get("/example2")
     */
    public function example2()
    {
        return view('pages.1_ejemplos.example2');
    }

    /**
     * @Get("/collapse")
     */
    public function collapse()
    {
        return view('pages.1_ejemplos.collapse');
    }

}
