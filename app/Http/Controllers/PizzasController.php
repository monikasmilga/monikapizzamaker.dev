<?php namespace App\Http\Controllers;

use App\models\Cheeses;
use App\models\Crusts;
use App\models\Ingredients;
use App\models\Pizzas;
use Illuminate\Routing\Controller;

class PizzasController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pizzas
	 *
	 * @return Response
	 */
	public function index()
	{
//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pizzas/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $config = [];
        $config['crusts'] = Crusts::pluck('name', 'id')->toArray();
        $config['cheeses'] = Cheeses::pluck('name', 'id')->toArray();
        $config['ingredients'] = Ingredients::pluck('name', 'id')->toArray();
        return view('pizzas',$config );
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pizzas
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pizzas/{id}
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
	 * GET /pizzas/{id}/edit
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
	 * PUT /pizzas/{id}
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
	 * DELETE /pizzas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}