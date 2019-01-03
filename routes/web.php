<?php

Route::get('/', 'AppController@accueil')->name('accueil');
Route::get('/contact', 'AppController@contact')->name('contact')->middleware('verified');
Route::get('/home', 'HomeController@index')->name('home');

//login an register
Auth::routes(['verify' => true]);

Route::get('/test',function(){
return('c est ma page de test');
})->middleware('verified');

//profile
route::get('/profile','ProfilController@show')->name('profile')->middleware('verified');
route::get('/edit/profile','ProfilController@create')->name('edit.profile');
route::post('/edit/profile','ProfilController@store');

//einzelne Raum
route::get('/post','PostController@show')->name('posts.show')->middleware('verified');

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
	// Category Routes
	Route::resource('admin/category','CategoryController');
	//Gebäude
	route::resource('admin/gebaude','GebaudeController');
	// Admin Auth Routes
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');
});

