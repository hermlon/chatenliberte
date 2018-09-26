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
    return redirect(route('create'));
});
Route::view('s/create', 'statements.create.simple')->name('create');
Route::view('s/create/advanced', 'statements.create.advanced')->name('create_advanced');

Route::post('s', 'StatementController@store')->name('statement');
Route::get('s/{statement}', 'StatementController@show');
