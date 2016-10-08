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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');

    Route::get('tags', 'TagsController@index');
    Route::get('tags/create', 'TagsController@create');
    Route::post('tags', 'TagsController@store');
    Route::get('tags/{tag}', 'TagsController@show');
    Route::get('tags/{tag}/edit', 'TagsController@edit');
    Route::put('tags/{tag}', 'TagsController@update');
    Route::delete('tags/{tag}', 'TagsController@destroy');

    Route::get('skills', 'SkillsController@index');
    Route::get('skills/create', 'SkillsController@create');
    Route::post('skills', 'SkillsController@store');
    Route::get('skills/{skill}', 'SkillsController@show');
    Route::get('skills/{skill}/edit', 'SkillsController@edit');
    Route::put('skills/{skill}', 'SkillsController@update');
    Route::delete('skills/{skill}', 'SkillsController@destroy');

    Route::get('series', 'SeriesController@index');
    Route::get('series/create', 'SeriesController@create');
    Route::post('series', 'SeriesController@store');
    Route::get('series/{serie}', 'SeriesController@show');
    Route::get('series/{serie}/edit', 'SeriesController@edit');
    Route::put('series/{serie}', 'SeriesController@update');
    Route::delete('series/{serie}', 'SeriesController@destroy');

    Route::get('lessons', 'LessonsController@index');
    Route::get('lessons/create', 'LessonsController@create');
    Route::post('lessons', 'LessonsController@store');
    Route::get('lessons/{lesson}', 'LessonsController@show');
    Route::get('lessons/{lesson}/edit', 'LessonsController@edit');
    Route::put('lessons/{lesson}', 'LessonsController@update');
    Route::delete('lessons/{lesson}', 'LessonsController@destroy');
});