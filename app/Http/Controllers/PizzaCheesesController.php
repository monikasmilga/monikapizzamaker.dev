<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PizzaCheesesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pizzacheeses
	 *
	 * @return Response
	 */
	public function index()
	{
        return PizzaCheesesController::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pizzacheeses/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pizzacheeses
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pizzacheeses/{id}
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
	 * GET /pizzacheeses/{id}/edit
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
	 * PUT /pizzacheeses/{id}
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
	 * DELETE /pizzacheeses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}