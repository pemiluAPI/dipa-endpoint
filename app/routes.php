<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::pattern('id', '[0-9]+');

Route::get('/', function() {

    return Redirect::to('api/dipa');
    // return XApi::response(array('error'=>400, 'message' => 'Not ready yet.'), 400);
});

Route::group(array('prefix' => 'api'), function() {

    Route::group(array('prefix' => 'dipa'), function() {
    	Route::get('/', function(){ return "/api/dipa"; });
    });
});

App::missing(function($exception) {

    return XApi::response(array('error'=>400, 'message' => 'Route unknown. For documentation see: http://docs.dipa.apiary.io/'), 400);
});
