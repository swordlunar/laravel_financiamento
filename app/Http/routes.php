<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/projeto', 'ProjetoController', ['except' => ['destroy']]);

Route::resource('/apoiadores_projeto', 'ApoiadoresProjetoController', ['except' => ['destroy']]);

Route::get('/projeto/{projeto}/delete', 'ProjetoController@destroy')->name('projeto.destroy');

Route::get('/projeto/{projeto}/mostrar', 'ProjetoController@mostrar_especifico')->name('projeto.mostrar');

Route::get('/apoiadores_projeto/upload', 'ProjetoController@upload')->name('apoiadores_projeto.upload');