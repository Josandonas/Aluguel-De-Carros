<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carro;

class CarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $carros = Carro::all();
        return view('editarcarros', compact('carros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastrocarro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carro = new Carro();
        $carro->nome = $request->input('nome');
        $carro->modelo = $request->input('modelo');
        $carro->potencia = $request->input('potencia');
        $carro->aceleracao = $request->input('aceleracao');
        $carro->dimensao = $request->input('dimensao');        
        $carro->motor = $request->input('motor');
        $carro->categoria = $request->input('categoria');
        $carro->agencia = $request->input('agencia');
        $carro->disponivel = $request->input('disponivel');
        $carro->imagem = $request->input('imagem'); 
        $carro->save();

        return redirect('/garagem');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
