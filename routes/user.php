<?php

Route::get ('/register', 'UserController@create');
Route::post('/register', 'UserController@store' );
Route::get ('/login'   , 'UserController@login' );
Route::post('/login'   , 'UserController@auth'  );
Route::get ('/logout'  , 'UserController@logout');

Route::middleware(['user'])->group(function () {
  // general
  Route::get('/', function() { return redirect('/user/dashboard'); });
  Route::get('/dashboard', 'UserController@dashboard');

  // manage registration
  Route::resource('/registration', 'RegistrationController');

  // reset password
  Route::get ('/change-password', 'UserController@editPassword');
  Route::post('/change-password', 'UserController@updatePassword');

  // FAQ
  Route::get('/faq', 'UserController@showFAQ');

  Route::get('/redirect-edit-data', function() {
    return redirect('/user/registration/'.Auth::user()->registration->id.'/edit');
  });
});