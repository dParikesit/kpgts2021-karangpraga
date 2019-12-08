<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\Registration;
use Carbon\Carbon;

Route::get('/'              , 'PageController@home');
Route::get('/home'          , 'PageController@home');
Route::get('/berita'        , 'PageController@berita');
Route::get('/berita/{slug}' , 'PageController@beritaOne');
Route::get('/panitia'       , 'PageController@panitia');
Route::get('/kontak'        , 'PageController@kontak');
Route::get('/karang-praga'  , 'PageController@karangPraga');
Route::get('/roadshow-sekolah', 'PageController@jadwalSekolah');
Route::get('/info-fakultas' , 'PageController@infoFakultas');
Route::get('/jadwal-to'     , 'PageController@jadwalTo');
Route::get('/pembayaran'    , 'PageController@pembayaran');
Route::get('/galeri'        , 'PageController@galeri');
Route::get('/dokumentasi'   , 'PageController@dokumentasiFull');
Route::get('/dokumentasi/{sma}', 'PageController@dokumentasi');
// Route::get('/rank-nasional' , 'PageController@rank'); DIGANTI_YAA