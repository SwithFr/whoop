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

Route::get( "/about", "PagesController@about" );
Route::get( "/home", "PagesController@home" );

Route::get( "/articles", "ArticlesController@index" );
Route::get( "/article/{id}", "ArticlesController@show" )->name('showArticle')->where( "id", "[0-9]+" );
Route::get( "/article/create", "ArticlesController@create" );
Route::post( "/article/create", "ArticlesController@store" );
Route::get( "/article/{id}/edit", "ArticlesController@edit" )->where( "id", "[0-9]+" );
// patch update a partial of resource vs put update a complete resource
Route::patch( "/article/update", "ArticlesController@update" );