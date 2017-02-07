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

  Route::get('/', 'AgendaController@show');

  Route::get('/dokumentasi', 'DokumentasiController@show');
  //Route::post('/dokumentasi', 'DokumentasiController@show');

  Route::get('/berita', function () {return view('berita.berita');});

  Route::get('/tentang_kami', function () {return view('profil.profil');});

  Route::get('/kontak', function () {return view('kontak.kontak');});

  Route::get('/admin_dmp', function () {return view('admin.admin_login');});
  Route::post('/admin_dmpPost', 'AdminController@authenticate');

Route::group(['middleware' => 'web'], function () {
  Route::get('/agenda_index', 'AgendaController@index');
  Route::get('/agenda_create', 'AgendaController@create');
  Route::post('/agenda_store', 'AgendaController@store');
  Route::get('/agenda_edit/{id}', 'AgendaController@edit');
  Route::put('/agenda_update/{id}', 'AgendaController@update');
  // Route::get('/agenda_delete/{id}', 'AgendaController@destroy');

  Route::get('/dokumentasi_index', 'DokumentasiController@index');
  Route::get('/dokumentasi_create', 'DokumentasiController@create');
  Route::post('/dokumentasi_store', 'DokumentasiController@store');
  Route::get('/dokumentasi_edit/{id}', 'DokumentasiController@edit');
  Route::put('/dokumentasi_update/{id}', 'DokumentasiController@update');
  // Route::get('/dokumentasi_delete/{id}', 'AgendaController@destroy');

  Route::get('/quote_index', function () {return view('quote.index');});
});
// Auth::routes();
//
// Route::get('/admin_dmp', 'HomeController@index');
