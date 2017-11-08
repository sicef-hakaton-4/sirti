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
    return view('pocetna');
});
Route::group(['middleware' => 'admin'], function () {


    Route::get('/ obrisi/{id}','SearchController@remove');
    Route::get('/dodaj_oglas2', 'CustomerController@loadAdvertForm2')->name('dodaj_oglas2');
    Route::post('/dodaj2', 'CustomerController@saveAdvert2')->name('dodaj2');

    Route::get('/admin', function () {
        return view('admin_panel2');
    });

    Route::post('admin/InsertKat', "AdminController2@InsertKat");

    Route::post('admin/InsertMod', "AdminController2@InsertMod");

    Route::post('admin/RemoveKat', "AdminController2@RemoveKat");

    Route::post('admin/RemoveMod', "AdminController2@RemoveMod");

    Route::post('admin/EditKat', "AdminController2@EditKat");

    Route::post('admin/EditMod', "AdminController2@EditMod");
});

Route::group(['middleware' => 'moderator'], function () {

    Route::get('/firma', function () {
        return view('admin_panel');
    });


    Route::get('/posao/{id}','SearchController@rangposla');

    Route::get('/obrisi/{id}','SearchController@remove');


    Route::get('/dodaj_oglas', 'CustomerController@loadAdvertForm')->name('dodaj_oglas');
    Route::post('/dodaj', 'CustomerController@saveAdvert')->name('dodaj');

    Route::get('/dodaj_posao', 'CustomerController@loadPosaoForm')->name('dodaj_posao');
    Route::post('/dodajposao', 'CustomerController@savePosao')->name('dodajposao');

    Route::get('/izmeniTest/{id}','SearchController@showEdit')->name('izmenitest');
    Route::post('/izmenaTesta', 'SearchController@edit')->name('izmenatesta');

});

    Route::get('/user/{id}','CustomerController@loadUser');
Auth::routes();
Route::get('/home', function () {
    return view('pocetna');
})->name('home');


Route::get('/profil', 'CustomerController@load')->name('profil');
Route::post('/profil_edit', 'CustomerController@EditProfile')->name('profil_edit');


Route::get('/kontakt/{id}','ContactController@makecontact');
Route::post('/api/kontakt2/', 'ContactController@contactUser')->name('kontakt3');

Route::get('/zakazi/{id}','ContactController@zakazi');
Route::post('/api/zakazi/', 'ContactController@zakazi_termin')->name('zakazi2');


Route::get('register/verify/{token}', 'Auth\RegisterController@verify');

Route::get('api/livesearch','SearchController@liveSearch');

/*  PRIJAVA */

Route::get('/prijava/{id}','SearchController@AdvertTest');
Route::post('/dodajprijavu/{ids}', 'SearchController@dodajprijavu')->name('dodajprijavu');
Route::post('/dodajprijavu2/{ids}', 'SearchController@dodajprijavu2')->name('dodajprijavu2');


Route::get('/vestina/{id}','SearchController@skillTest');
Route::post('/dodajvestinu/{ids}', 'SearchController@dodajprijavu')->name('dodajprijavu');



Route::get('/advert/{id}','SearchController@Advert');

Route::get('/category/{id}','SearchController@Category');


Route::get('/pretraga/{term}','SearchController@SearchResults');

Route::get('/kontakt', function () {
    return view('info.kontakt');
})->name('kontakt');
Route::post('/api/kontakt/', 'ContactController@sendcontact')->name('kontakt2');


Route::get('/onama', function () {
    return view('info.onama');
})->name('onama');
Route::get('/zamusterije', function () {
    return view('info.zamusterije');
})->name('zamusterije');
Route::get('/zapreduzetnike', function () {
    return view('info.zapreduzetnike');
})->name('zapreduzetnike');
Route::get('/tos', function () {
    return view('info.tos');
})->name('pravilakoriscenja');
