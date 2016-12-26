<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('authorize', array('uses'=>'AuthorizeController@getLogin', 'as'=>'authorize'));
Route::get('/', function () {
    if(Session::get('user')) {
    	return Redirect::to('/inbox/Inbox');
    }
    else
    	return Redirect::to('/login');
});
Route::get('inbox/{mailbox}', array('uses'=>'BasicController@inbox','as'=>'home'));
Route::get('login', array('uses'=>'Auth\LoginController@form','as'=>'login'));
Route::get('contact',array('uses'=>'BasicController@contacts','as'=>'contact'));
Route::get('calendar', array('uses'=>'BasicController@calendar','as'=>'calendar'));
Route::get('compose', array('uses'=>'BasicController@compose','as'=>'compose'));
Route::get('composer', array('uses'=>'BasicController@composer','as'=>'composer'));
Route::post('send', array('uses'=>'BasicController@send','as'=>'send'));
Route::post('sender', array('uses'=>'BasicController@sender','as'=>'sender'));