<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agencia;

class AgenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('editargaragem');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastrogaragem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gar = new Agencia();

        $gar->cnpj = $request->input('cnpj');
        $gar->razao_social = $request->input('razao_social');
        $gar->telefone = $request->input('telefone');
        $gar->email = $request->input('email');
        $gar->endereco = $request->input('cep');

        $gar->save();
        return redirect('controlegaragem');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gar = Agencia::find($id);

        return $gar;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gar = Agencia::find($id);

        if(isset($gar)){
            return view('editargaragem',compact('gar'));
        }
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
        $gar = Agencia::find($id);

        if(isset($gar)){
            $gar->cnpj = $request->input('cnpj');
            $gar->razao_social = $request->input('razao_social');

            $gar->save();
        }
        return redirect('/garagem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gar = Agencia::find($id);

        if(isset($gar)){
            $gar->delete();
        }
        return redirect('/garagem');
    }
}
