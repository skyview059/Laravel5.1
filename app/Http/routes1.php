<?php

//Route::model('song', 'App\Song');

Route::bind('song', function($slug){
    //return App\Song::whereSlug($slug)->first();
    return App\Song::where('slug', $slug)->first();
});

//get('/', 'SongsController@index' );
//get('/song/{song}', 'SongsController@view' );
//get('/add', 'SongsController@create' );
//get('/edit/{id}', 'SongsController@edit' );
//get('/song/{song}/edit', 'SongsController@edit' );
//patch('/song/{song}', 'SongsController@update' );




//Route::bind('songs', function($slug){
//    return App\Song::whereSlug($slug)->first();
//});
//

$router->bind('songs', function($song){
    return App\Song::whereSlug($slug)->first();
});
$router->resource('songs', 'SongsController');






//get('/', 'CRUDController@insertData' );
//Route::get('/', function () { return view('welcome'); });
//$router->get('/', 'CRUDController@insertData');

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