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
    return view('welcome');
});

Route::group([
    'middleware' => 'roles',
    'roles' => ['Admin', 'Moderator']
], function() {

    Route::get('pages', [
        'uses' => 'PagesController@index',
        'as' => 'pages.index'
    ]);

});

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

