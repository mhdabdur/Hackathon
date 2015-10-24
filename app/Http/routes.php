<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::resource('posyandu','IbuController');
Menu::make('main', function($m) {
    $m->add('Home');
    $m->add('About', 'about');
    $m->add('Services', 'services');
    $m->add('Contact', 'contact') ;
    $m->add('Portfolio', 'portfolio');
}); 

Route::get('tes', 'tesController@index');