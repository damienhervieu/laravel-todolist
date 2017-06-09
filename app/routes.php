<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/********** HOME *************/
Route::get('/', array('before' => 'auth', function(){
	return View::make('home');
}));

/* Route de la to-do list */ 
Route::get('/to-do', function(){
	$tasks = Auth::user()->tasks;
	return View::make('to-do')->with('tasks', $tasks);
});

Route::post('/to-do', function(){
	$id = Input::get('id');
	$task = Task::findOrFail($id);
	$task->mark();

	return Redirect::to('/to-do');
});

/* Route pour une nouvelle tâche*/
Route::get('/new', function(){
	return View::make('new');
});

Route::post('/new', function(){
	$rules = array('name' => 'required|min:3|max:255');

	$validator = Validator::make(Input::all(), $rules);

	if ($validator->fails()){
		return Redirect::to('new')->withErrors($validator);
	}

	$task = new Task;
	$task->name = Input::get('name');
	$task->owner_id = Auth::user()->id;
	$task->save();

	return Redirect::to('/');
});

/* Route pour supprimer une tâche */
Route::bind('task', function($value, $route){
	return Task::where('id', $value)->first();
});

Route::get('delete/{task}', function(Task $task){
	$task->delete();
	return Redirect::to('/');
});


/* Route pour s'enregistrer */
Route::get('/register', function(){
	return View::make('register');
});

Route::post('/register', function(){
	$rules = array('username' => 'required|min:3|max:255', 'password' => 'required', 'email' => 'required');

	$validator = Validator::make(Input::all(), $rules);

	if ($validator->fails()){
		return Redirect::to('register')->withErrors($validator);
	}

	$user = new User;
	$user->name = Input::get('username');
	$user->password = Hash::make(Input::get('password'));
	$user->email = Input::get('email');
	$user->save();

	return Redirect::to('/login');
});


/* Route pour se connecter */
Route::get('/login', function() {
	return View::make('login');
})->before('guest');


Route::post('/login', function() {
	$rules = array('username' => 'required', 'password' => 'required');

	$validator = Validator::make(Input::all(), $rules);

	if ($validator->fails()){
		return Redirect::to('login')->withErrors($validator);
	}

	$auth = Auth::attempt(array(
		'name' => Input::get('username'),
		'password' => Input::get('password')
	), false);

	if (!$auth) {
		return Redirect::to('login')->withErrors(array(
			'Invalid credentials were provided.'
		));
	}

	return Redirect::to('/');
})->before('csrf');

/* Route pour se déconnecter*/
Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('/login');
});

/********** 404 *************/ 
App::missing(function($exception){
    return Response::make('Page Introuvable', 404);
});