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

use Anison\Song;

Route::get('/', function() {
    $song = Anison\Song::all();
    return view('home')->with('song', $song);
})->name('home');

Route::get('/songs', 'SongController@index')->name('songs');

Route::get('/requests', 'RequestController@index')->name('requests');

Route::get('/requests/new', function () { 
    return view('request');
})->name('newRequest');

Route::post('/requests/new', 'RequestController@submit')->name('submitRequest'); 

Route::get('/songs/new', function () { 
    return view('addsong');
})->name('newSong');

Route::post('/songs/new', 'SongController@submit')->name('submitSong'); 

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/play/{id}', 'SongController@play')->name('play');

// External routes
Route::get('/discord', function() {
    return Redirect::to('https://discord.gg/GUDK2GR');
})->name('discord');

Route::get('/paypal', function() {
    return Redirect::to('https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EV4TQ37W8QXML');
})->name('paypal');

Route::get('api', function() {
    return Song::all();
});

Route::get('/api/{type}={id}', 'ApiController@api')->name('api');