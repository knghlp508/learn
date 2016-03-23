<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');

});*/
Route::get('/', 'SitesController@index');

Route::get('/about','SitesController@about');
Route::get('contact','SitesController@contact');

Route::get('auth/login','Auth\AuthController@getLogin');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::post('auth/login','Auth\AuthController@postLogin');
    Route::get('auth/register','Auth\AuthController@getRegister');
    Route::post('auth/register','Auth\AuthController@postRegister');
    Route::get('auth/logout','Auth\AuthController@getLogout');
    Route::resource('/articles','ArticlesController');
});
