<?php namespace App\Http\Controllers;

use App\models\PizzaCrustsCheesesIngredientsConnection;
use Illuminate\Routing\Controller;

class PizzaCrustsCheesesIngredientsConnectionController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pizzacrustscheesesingredientsconnection
	 *
	 * @return Response
	 */
	public function index()
	{
        return PizzaCrustsCheesesIngredientsConnection::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pizzacrustscheesesingredientsconnection/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pizzacrustscheesesingredientsconnection
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pizzacrustscheesesingredientsconnection/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pizzacrustscheesesingredientsconnection/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pizzacrustscheesesingredientsconnection/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pizzacrustscheesesingredientsconnection/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}