<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\CollectionstdClass;
use App\Aluguel;

class AluguelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $aluguel = Aluguel::find($id);
        return view('pagfim', compact('aluguel'));
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
        ->where('carros.id',$request->input('carro'))->first();
        //dd($valor_categoria->valor);

        $garagem = DB::table('agencias')
        ->join('carros', 'carros.agencia', '=', 'agencias.id')
        ->select('agencias.razao_social as agencia')
        ->where('carros.id', $request->input('carro'))->first();

        $aluguel->cliente = $request->input('cpf');
        $aluguel->carro = $request->input('carro');

        $aluguel->agencia = (string)$garagem->agencia;

        $aluguel->data_inicio = $request->input('data_inicio');
        $aluguel->data_fim = $request->input('data_fim');

        $time = strtotime($aluguel->data_fim);
        $newformat = date('d',$time);
        $final = (float) $newformat;

        $time = strtotime($aluguel->data_inicio);
        $newformat = date('d',$time);
        $inicio = (float) $newformat;

        $total = $final - $inicio;

        $resultado = $total * $valor_categoria->valor;

        $aluguel->valor_total = $resultado;

        $aluguel->save();

        return view('pagfim', compact('aluguel'));

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
