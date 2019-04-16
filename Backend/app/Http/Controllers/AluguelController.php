<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Aluguel;

class AluguelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluguel = new Aluguel();
        $valor_categoria = DB::table('carros')
        ->join('categorias', 'carros.categoria','=','categorias.id')
        ->select('categorias.valor_diaria as valor')
        ->where('carros.id',$request->input('carro'));

        $aluguel->cliente = $request->input('cpf');
        $aluguel->carro = $request->input('carro');
        $aluguel->data_inicio = $request->input('data_inicio');
        $aluguel->data_fim = $request->input('data_fim');

        $diferenca = strtotime($aluguel->data_fim) - strtotime($aluguel->data_inicio);
        $total = floor($diferenca / (60 * 60 * 24));

        $aluguel->valor_total = (float)$total * (float)$valor_categoria;

        $aluguel->save();

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
