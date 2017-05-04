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

/**
 * Route to CRUSTS form
 */

Route::get('/crusts', function () {
    return view('crusts');
});
Route::post('/crusts', ['as' => 'app.crusts.create', 'uses' => 'CrustsController@create']);


/**
 * Route to CHEESES form
 */

Route::get('/cheeses', function () {
    return view('cheeses');
});
Route::post('/cheeses', ['as' => 'app.cheeses.create', 'uses' => 'CheesesController@create']);


/**
 * Route to INGREDIENTS form
 */

Route::get('/ingredients', function () {
    return view('ingredients');
});
Route::post('/ingredients', ['as' => 'app.ingredients.create', 'uses' => 'IngredientsController@create']);


/**
 * Route to PIZZA ORDERING form
 */
Route::get('/pizzas', ['uses' => 'PizzasController@create']);
Route::post('/pizzas', ['as' => 'app.pizzas.store', 'uses' => 'PizzasController@store']);

