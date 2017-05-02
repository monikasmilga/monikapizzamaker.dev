<?php namespace App\Http\Controllers;

use App\models\PizzaCrusts;
use Illuminate\Routing\Controller;

class PizzaCrustsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pizzacrusts
	 *
	 * @return Response
	 */
	public function index()
	{
        return PizzaCrusts::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pizzacrusts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pizzacrusts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pizzacrusts/{id}
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
	 * GET /pizzacrusts/{id}/edit
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
	 * PUT /pizzacrusts/{id}
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
	 * DELETE /pizzacrusts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}