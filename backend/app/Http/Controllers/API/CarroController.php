<?php

namespace App\Http\Controllers\API;

use App\Models\Carro;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Carro as CarroResource;

class CarroController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carros = Carro::all();
        
        return $this->sendResponse(
            CarroResource::collection($carros),
            'Carros recuperados com sucesso!'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $carro = Carro::create($input);
        
        return $this->sendResponse(
            new CarroResource($carro),
            'Carro cadastrado com sucesso!'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carro  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carro = Carro::find($id);
        
        return $this->sendResponse(
            new CarroResource($carro),
            'Carro recuperado com sucesso!'
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carro $carro)
    {
        $carro->update($request->all());
        
        return $this->sendResponse(
            new CarroResource($carro),
            'Carro atualizado com sucesso!'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carro $carro)
    {
        $carro->delete();

        return $this->sendResponse([], 'Carro deletado com sucesso!');
    }
}
