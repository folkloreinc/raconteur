<?php

/*
 *
 * Language
 *
 */
$languages = Config::get('app.languages');
$locale = Request::segment(1);
if(in_array($locale, $languages)){
	App::setLocale($locale);
} else {
	$locale = null;
}

/*
 *
 * Normal routes
 *
 */
Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@index'
));

/*
 *
 * Admin routes
 *
 */
Route::controller('login', 'AdminLoginController');
Route::group(array(
	'prefix' => 'admin',
	'before' => 'auth'
), function() {

	Route::get('/', array(
		'as' => 'admin',
		'uses' => 'AdminController@index'
	));
	
	Route::controller('upload', 'AdminUploadController');
	Route::resource('pages', 'AdminPagesController');
	Route::resource('users', 'AdminUsersController');

});


/*
 *
 * 404 errors
 *
 */
App::missing(function($exception)
{
	//Throw errors only if
	$url = Request::path();
	$pattern = '#^files\/photos\/(.*)-([0-9_]+)x([0-9_]+)?(-[0-9a-z(),\-._]+)*\.(jpg|jpeg|png|gif)$#i';
	if (!preg_match($pattern, $url, $matches)) {
    	return View::make('layouts.main')
    				->nest('content','errors.404');
    }
});



/*
 *
 * View Composers
 *
 */
require app_path().'/composers.php';