<?php namespace App\Http\Controllers;

use App\models\Cheeses;
use App\models\Crusts;
use App\models\Ingredients;
use App\models\Pizzas;
use Illuminate\Routing\Controller;

class PizzasController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /pizzas
     *
     * @return Response
     */
    public function index()
    {
        $config = [];
        $config['list'] = Pizzas::with(['cheeses', 'crusts', 'ingredients'])->get()->toArray();

        return view('orderlist', $config);

    }


    public function getFormData()
    {
        $config['crusts'] = Crusts::pluck('name', 'id');
        $config['cheeses'] = Cheeses::pluck('name', 'id');
        $config['ingredients'] = Ingredients::pluck('name', 'id');

        return $config;

    }

    /**
     * Show the form for creating a new resource.
     * GET /pizzas/create
     *
     * @return Response
     */
    public function create()
    {
        $config = $this->getFormData();

        return view('pizzas', $config);
    }

    /**
     * Store a newly created resource in storage.
     * POST /pizzas
     *
     * @return Response
     */
    public function store()
    {
        $config = $this->getFormData();
        $data = request()->all();

        if (!isset($data['name'])) {
            $config['error'] = ['message' => 'Įrašykite savo vardą'];

            return view('pizzas', $config);
        }

        if (!isset($data['phone'])) {
            $config['error'] = ['message' => 'Įrašykite savo tel. nr.'];

            return view('pizzas', $config);
        }

        $record = Pizzas::create(
            [
                'crust_id' => $data['crust_id'],
                'cheese_id' => $data['cheese_id'],
                'name' => $data ['name'],
                'phone' => $data ['phone'],
                'comment' => $data ['comment']
            ]
        );

        if (isset($data['ingredient_id']))
            $record->ingredientsForSync()->sync($data['ingredient_id']);

        $config['success'] = ['message' => 'Užsakymas gautas, pradedame gamybą'];

        return view('pizzas', $config);
    }


    /**
     * Display the specified resource.
     * GET /pizzas/{id}
     *
     * @param  int $id
     * @return mixed
     */
    public function show($id)
    {
        return Pizzas::with('cheeses', 'crusts', 'ingredients')->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /pizzas/{id}/edit
     *
     * @param  int $id
     * @return mixed
     */
    public function edit($id)
    {
        $config = $this->getFormData();
        $config['item'] = Pizzas::with('cheeses', 'crusts', 'ingredients')->find($id);

        $config['ingredientsItems'] = $config['item']->ingredients->pluck('ingredient_id')->toArray();
        $config['item'] = $config['item']->toArray();
        return view('edit', $config);
    }

    /**
     * Update the specified resource in storage.
     * PUT /pizzas/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $data = request()->all();

        $record = Pizzas::find($id);
        $record->update([
            'name' => $data['name'],
            'cheese_id' => $data['cheese_id'],
            'crust_id' => $data['crust_id'],
            'phone' => $data['phone'],
            'comment' => $data['comment'],

        ]);

        if (!isset($data['ingredient_id']))
            $data['ingredient_id'] = [];

        $record->ingredientsForSync()->sync($data['ingredient_id']);

        $config = $this->getFormData();
        $config['item'] = Pizzas::with('cheeses', 'crusts', 'ingredients')->find($id);

        $config['ingredientsItems'] = $config['item']->ingredients->pluck('ingredient_id')->toArray();
        $config['item'] = $config['item']->toArray();

        return view('edit',$config);

    }

    /**
     * Remove the specified resource from storage.
     * DELETE /pizzas/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}