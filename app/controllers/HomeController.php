<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('home.index');
	}

	public function player() {
		$api = new Riot(Input::get('nickname'));	
		$data['user'] = $api->user;
		return View::make('home.index', $data);
	}

	public function stats($player) {
		$api = new Riot($player);
		$data['user']  = $api->user;
		$data['stats'] = $api->stats();
		return View::make('home.index', $data);
	}
}
