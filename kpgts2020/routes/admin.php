<?php

Route::get ('/register', 'AdminController@create');
Route::post('/register', 'AdminController@store' );
Route::get ('/login'   , 'AdminController@login' );
Route::post('/login'   , 'AdminController@auth'  );
Route::get ('/logout'  , 'AdminController@logout');

Route::middleware(['admin'])->group(function () {
  // general
  Route::get('/', function() { return redirect('/admin/dashboard'); });
  Route::get('/dashboard'        , 'AdminController@dashboard');

  // post management
  Route::resource('/post'        , 'PostController');
  Route::get('/post/{id}/delete' , 'PostController@destroy');

  // user management
  Route::get('/user'             , 'AdminController@users');
  Route::get('/user/new'         , 'AdminController@createUser');
  Route::post('/user'            , 'AdminController@storeUser');
  Route::get('/user/{id}'        , 'AdminController@user');
  Route::get('/user/{id}/edit'   , 'AdminController@editUser');
  Route::put('/user/{id}'        , 'AdminController@updateUser');
  Route::post('/user/{id}/regist', 'AdminController@registUser');
  Route::post('/user/{id}/upload', 'AdminController@uploadKartu');
  Route::get('/user/{id}/reset/{new}'  , function($id, $new) {
    $user = App\User::find($id);
    $user->password = bcrypt($new);
    $user->save();
    return ["status" => "success"];
  });

  // reset password
  Route::get ('/change-password', 'AdminController@editPassword');
  Route::post('/change-password', 'AdminController@updatePassword');

  // daftar ulang
  Route::get('/daftar-ulang'    , function() {
    return View::make('page.admin.daftar_ulang', compact([]));
  });
});
