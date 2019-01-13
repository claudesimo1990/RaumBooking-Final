<?php

Route::get('/', 'AppController@accueil')->name('accueil');
Route::get('/contact', 'AppController@contact')->name('contact')->middleware('verified');

 Route::get('/home', 'HomeController@index')->name('home');

//login an register
Auth::routes(['verify' => true]);

//Qr-code
Route::get('qr-code', function () 
{
   return QRCode::sms('+55 (31) 1234-5678', 'Text to send!')
                         ->setSize(4)
                         ->setMargin(2)
                         ->png();     
});

//profile
route::get('/profile','ProfilController@show')->name('profile')->middleware('verified');
route::get('/edit/profile','ProfilController@create')->name('edit.profile');
route::post('/edit/profile','ProfilController@store');

//einzelne Raum
route::get('/post','PostController@show')->name('posts.show')->middleware('verified');

//Gebaude
route::get('/gebaude','GebaudeController@index')->name('gebaude_index');

route::get('/gebaude/{gebaude}','GebaudeController@show')->name('gebaude.show');

//Buchung
route::get('/gebaude/{id}/{name}','BuchungController@create')->name('Buchung.create');

route::post('/gebaude/{id}/{name}','BuchungController@store');

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
	// Admin Auth Routes
	Route::get('admin', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin', 'Auth\LoginController@login');
});

