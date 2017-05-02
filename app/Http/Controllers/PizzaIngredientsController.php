<?php namespace App\Http\Controllers;

use App\models\PizzaIngredients;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;

class PizzaIngredientsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pizzaingredients
	 *
	 * @return Response
	 */
	public function index()
	{
        return PizzaIngredients::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pizzaingredients/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $data = request()->all();
        $data['id'] = Uuid::uuid4();
        $record = PizzaIngredients::create($data);
        return view ('pizzaorder', $record->toArray());
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pizzaingredients
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pizzaingredients/{id}
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
	 * GET /pizzaingredients/{id}/edit
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
	 * PUT /pizzaingredients/{id}
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
	 * DELETE /pizzaingredients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}