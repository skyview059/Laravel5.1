<?php

//Route::model('song', 'App\Song');

//Route::bind('song', function($slug){
//    //return App\Song::whereSlug($slug)->first();
//    return App\Song::where('slug', $slug)->first();
//});

//Route::bind('song', function($slug){
//    //return App\Song::whereSlug($slug)->first();
//    return \App\Song::whereSlug($slug)->first();
//});

function delete_form($routePrams, $label = 'Delete'){
    $form = Form::open( [ 'method'=>'DELETE', 'route' => $routePrams] );
    $form .= Form::submit($label, ['class' => 'btn btn-danger']);
    return $form .= Form::close();
}

$router->bind('songs', function($slug){
    //return App\Song::whereSlug($slug)->first();
    return App\Song::whereSlug($slug)->first();
});

$router->resource ('songs', 'SongsController');


//$router->resource ('songs', 'SongsController', [ 'only' => ['index', 'create', 'show', 'edit', 'update'] ]);
//$router->resource ('songs', 'SongsController', [ 'except' => ['index', 'show', 'edit', 'update'] ]);



//get('/', 'SongsController@index' );
//get('/songs/{song}', 'SongsController@show' );
//get('/songs/{song}/edit', 'SongsController@edit' );
//patch('/songs/{song}', 'SongsController@update' );
//get('/songs/create', 'SongsController@create' );
//post('/songs/store', 'SongsController@store' );



//get('/', 'CRUDController@insertData' );
//Route::get('/', function () { return view('welcome'); });
//$router->get('/', 'CRUDController@insertData');
