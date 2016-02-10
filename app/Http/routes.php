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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index');
Route::get('/docs', 'DocsController@index');
Route::get('/regs', 'RegsController@index');
Route::get('/cal', 'CalController@index');
Route::get('/aud', 'AudController@index');
Route::get('/analise', 'AnaliseController@index');
Route::get('/cargos', 'CargosController@index');
Route::get('/func', 'FuncController@index');
Route::get('/fornec', 'FornecController@index');
Route::get('/login', 'Auth/AuthController@index');


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
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/admin', 'AdminController@index');
});
