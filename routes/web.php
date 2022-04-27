<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@index')->name('page.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'role:super-admin']], function() {
    Route::resource('permissions', 'PermissionController');
    Route::resource('roles', 'RoleController');
    Route::resource('topics', 'TopicController');
    Route::resource('categories', 'CategoryController');

    Route::resource('users', 'UserController')->except([
        'index'
    ]);
    Route::get('/users/{q?}', 'UserController@index')->name('users.index');

    // Route::resource('questions', 'QuestionController')->except([
    //     'create','edit','index'
    // ]);
    // Route::get('/questions/create/{topic?}', 'QuestionController@create')->name('questions.create');
    // Route::get('/questions/create/{topic?}', 'QuestionController@create')->name('questions.create');
    // Route::get('/questions/{question}/edit/{topic?}', 'QuestionController@edit')->name('questions.edit');

    Route::get('/testresult','UserController@result')->name('testresult');
    Route::get('/testresult/{user}','UserController@resultDetail')->name('testresult.detail');
});
