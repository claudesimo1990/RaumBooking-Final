<?php

Route::get('/', 'AppController@accueil')->name('accueil');
Route::resource('/notications', 'notificationController');

Route::group(['middleware' => 'auth'], function () {
Route::get('/welcome', 'AppController@SendWelcomeEmail');
Route::get('/contact', 'AppController@contact')->name('contact')->middleware('verified');
//Calendar
 Route::get('buchungskalendar', 'EventController@index')->name('events');
 Route::get('raumkalendar/{raum_number}', 'EventController@eventRaum')->name('eventRaum');
 Route::get('/home', 'HomeController@index')->name('home');
//profile
route::get('/profile','ProfilController@show')->name('profile')->middleware('verified');
route::get('/edit/profile','ProfilController@create')->name('edit.profile');
route::post('/edit/profile','ProfilController@store');

//profile Update
route::get('/profile/{id}','ProfilController@edit');
route::post('/profile/{id}','ProfilController@update');

//einzelne Raum
route::get('/post','PostController@show')->name('posts.show')->middleware('verified');
//Gebaude
route::get('/gebaude','GebaudeController@index')->name('gebaude_index');
route::get('/gebaude/{gebaude}','GebaudeController@show')->name('gebaude.show');
//Buchung
route::get('/gebaude/{id}/{name}','BuchungController@create')->name('Buchung.create');
route::post('/buchung','BuchungController@store')->name('Buchung.store');
route::get('/singlebuchung','BuchungController@UserBuchung')->name('singlebuchung');

});

//login an register
Auth::routes(['verify' => true]);

//Admin Routes
Route::group(['namespace' => 'Admin'],function(){
	Route::get('admin/home','HomeController@index')->name('admin.home');
	// Users Routes
	Route::resource('admin/user','UserController');
	// Roles Routes
	Route::resource('admin/role','RoleController');
	// Permission Routes
	Route::resource('admin/permission','PermissionController');
	// Post Routes
	Route::resource('admin/post','PostController');
	// Tag Routes
	Route::resource('admin/tag','TagController');
	// Räume Routes
	Route::resource('admin/raume','RaumController');
	//  benutzer
	Route::resource('admin/benutzer','benutzerController');
	//Gebäude
	route::resource('admin/gebaude','GebaudeController');
	//Buchungen
	route::resource('admin/buchungen','BuchungController');
	// Admin Auth Routes
	Route::get('admin', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin', 'Auth\LoginController@login');
});

