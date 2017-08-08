<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

/*
$app->get('user/{id}', function($id){
	return 'user '.$id;
});*/

$app->get('user/{id}', 'UserController@show');
$app->get('/categories', 'CategoriesController@index');
$app->get('/categories/{categories}', 'CategoriesController@getCategories');
$app->post('/categories/add', 'CategoriesController@createNewCategory');

$app->put('/categories/edit/{id}', 'CategoriesController@updateCategory');

// meetups
$app->get('/meetups', 'MeetupsController@index');
$app->post('/meetups/add', 'MeetupsController@createNewMeetup');