<?php namespace App\Http\Controllers;

use App\models\Crusts;
use Illuminate\Routing\Controller;

class CrustsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crusts
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crusts/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $data = request()->all();
        $record = Crusts::create(array(
            'name' => $data['crusts'],
            'calories' => $data['calories']
        ));
        return view('crusts', $record->toArray());
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crusts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crusts/{id}
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
	 * GET /crusts/{id}/edit
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
	 * PUT /crusts/{id}
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
	 * DELETE /crusts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}