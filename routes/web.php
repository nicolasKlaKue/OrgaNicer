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

Route::get('/','HomeController@index')->name('home');

Auth::routes();

Route::resource('tasks', 'TaskController');
Route::resource('project', 'ProjectController');
Route::delete('tasks/{task}', 'TaskController@delete');
Route::post('tasks/{task}/done', 'TaskController@done');
Route::post('tasks/{task}/notDone', 'TaskController@notDone');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{user}/doneTasks', 'HomeController@doneTasks');
