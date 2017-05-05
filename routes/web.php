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
 * Route to CRUSTS adding form and information
 */

Route::group(['prefix' => 'crust'], function () {

    Route::get('/create', function () {
        return view('crusts');
    });

    Route::post('/create', ['as' => 'app.crusts.create', 'uses' => 'CrustsController@create']);

    Route::get('/', ['uses' => 'CrustsController@índex']);
});


/**
 * Route to CHEESES form and information
 */

Route::group(['prefix' => 'cheese'], function () {

    Route::get('/create', function () {
        return view('cheeses');
    });

    Route::post('/create', ['as' => 'app.cheeses.create', 'uses' => 'CheesesController@create']);

    Route::get('/', ['uses' => 'CheesesController@index']);

});

/**
 * Route to INGREDIENTS form and information
 */

Route::group(['prefix' => 'ingredient'], function () {

    Route::get('/create', function () {
        return view('ingredients');
    });
    Route::post('/create', ['as' => 'app.ingredients.create', 'uses' => 'IngredientsController@create']);

    Route::get('/', ['uses' => 'IngredientsController@index']);

});

/**
 * Route to PIZZA information, ordering form, order and order editing form
 */

Route::group(['prefix' => 'pizza'], function () {

    Route::get('/order', ['uses' => 'PizzasController@create']);

    Route::post('/order', ['as' => 'app.pizzas.store', 'uses' => 'PizzasController@store']);

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/edit', ['uses' => 'PizzasController@edit']);

        Route::post('/edit', ['as' => 'app.pizza.update', 'uses' => 'PizzasController@update']);

        Route::get('/', ['uses' => 'PizzasController@show']);
    });

    Route::get('/', ['uses' => 'PizzasController@index']);

});

