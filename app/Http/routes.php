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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
	Route::get('/', ['as' => 'dashboard_index', 'uses' => 'DashboardController@index']);
	Route::get('entry/create', ['as' => 'entry_create', 'uses' => 'EntryController@getCreate']);
	Route::post('entry', ['as' => 'post_entry_create', 'uses' => 'EntryController@postCreate']);

	Route::group(['prefix' => 'settings', 'namespace' => 'Settings'], function() {
		Route::get('/', ['as' => 'settings_index', 'uses' => 'DashboardController@index']);
		Route::get('templates', ['as' => 'template_index', 'uses' => 'TemplateController@index']);
		Route::get('regions', ['as' => 'region_index', 'uses' => 'RegionController@index']);
		Route::get('regions/create', ['as' => 'region_create', 'uses' => 'RegionController@getCreate']);
		Route::post('regions/create', ['as' => 'post_region_create', 'uses' => 'RegionController@postCreate']);
	});
});