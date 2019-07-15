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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Manganime', 'User\HomeUserController@index')->name('Manganime');

Route::get('/Admin', 'Admin\HomeAdminController@index')->name('Admin');

Route::group(['middleware'=> ['web']], function () {
	Route::resource('DataManga', 'Admin\DataMangaAdminController');
});

Route::group(['middleware'=> ['web']], function () {
	Route::resource('DataKomik', 'Admin\DataKomikAdminController');
});

Route::get('/Detail/{id}', 'User\HomeUserController@detail')->name('Detail');

Route::get('/SemuaManga', 'User\SemuaMangaController@index')->name('SemuaManga');

Route::get('/GenreManga', 'User\GenresController@index')->name('GenreManga');
Route::get('/SemuaKomentar', 'User\KomentarMangaController@index')->name('SemuaKomentar');

Route::get('/SemuaKomentarKomik', 'User\KomentarMangaController@komentarkomik')->name('SemuaKomentarKomik');

Route::get('/KomikPopuler', 'User\KomikPopulerController@index')->name('KomikPopuler');

Route::get('/MangaPopuler', 'User\KomikPopulerController@mangapopuler')->name('MangaPopuler');

Route::get('/MangaTerbaik', 'User\KomikPopulerController@mangaterbaik')->name('MangaTerbaik');

Route::get('/SemuaKomik', 'User\KomikPopulerController@semuakomik')->name('SemuaKomik');

Route::get('/SkorTerbaik', 'User\KomikPopulerController@skorterbaik')->name('SkorTerbaik');

Route::get('/manga/cari','User\SemuaMangaController@cari')->name('cari');

Route::group(['middleware'=> ['web']], function () {
	Route::resource('KomentarManga', 'User\HomeUserController');
});

Route::get('/manga/{id}', 'Admin\DataMangaAdminController@destroy')->name('HapusManga');

Route::get('/komik/{id}', 'Admin\DataKomikAdminController@destroy')->name('HapusKomik');

Route::get('/komentar/{id}', 'Admin\KomentarController@destroy')->name('HapusKomentar');

Route::get('/user/{id}', 'Admin\UserController@destroy')->name('HapusUser');

Route::group(['middleware'=> ['web']], function () {
	Route::resource('Komentar', 'Admin\KomentarController');
});

Route::get('/DetailKomik/{id}', 'User\DetailKomikController@detailkomik')->name('DetailKomik');

Route::group(['middleware'=> ['web']], function () {
	Route::resource('KomentarKomik', 'User\DetailKomikController');
});

Route::group(['middleware'=> ['web']], function () {
	Route::resource('User', 'Admin\UserController');
});

Route::get('/Profil', 'User\ProfilUserController@index')->name('Profil');
Route::get('/Tutorial', 'User\ProfilUserController@tutorial')->name('Tutorial');

Route::group(['middleware'=> ['web']], function () {
	Route::resource('Register', 'RegisterController');
});

Auth::routes();

Route::get('/login', 'UserAuthController@Login')->name('login');
Route::post('/login', 'UserAuthController@UserLogin')->name('dologin');
Route::get('/logout', 'UserAuthController@logout')->name('logout');

