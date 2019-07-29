<?php
Route::get('/', 'PagesController@Home');
Route::get('/Home', 'PagesController@Home');
Route::get('/about','PagesController@About');
Route::get('/Service','PagesController@Service');
Route::get('/Register','PagesController@Register');
Route::get('/index','RegistrationController@index');
Route::get('/create','RegistrationController@Create');
Route::post('/create','RegistrationController@Add');
Route::post('/Account','RegistrationController@Login');
Route::get('/Home','RegistrationController@Login');
Auth::routes();
Route::get('/Account', 'AccountController@index');
Route::get('/admin','UsersController@Registered_Users');
Route::get('/upload','UsersController@Upload');
//Route::get('/login', 'RegisterController');
?>
