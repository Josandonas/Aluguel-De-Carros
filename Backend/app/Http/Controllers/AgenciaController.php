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
        return view('cadastroagenciaagem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agencia = new Agencia();

        $agencia->cnpj = $request->input('cnpj');
        $agencia->razao_social = $request->input('razao_social');
        $agencia->telefone = $request->input('telefone');
        $agencia->email = $request->input('email');
        $agencia->cidade = $request->input('cidade');
        $agencia->estado = $request->input('estado');
        $agencia->rua = $request->input('rua');
        $agencia->numero = $request->input('numero');
        $agencia->cep = $request->input('cep');

        $agencia->save();
        return redirect('controleagenciaagem');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agencia = Agencia::find($id);

        return $agencia;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agencia = Agencia::find($id);

        if(isset($agencia)){
            return view('editargaragem',compact('agencia'));
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
        $agencia = Agencia::find($id);

        if(isset($agencia)){
            $agencia->cnpj = $request->input('cnpj');
            $agencia->razao_social = $request->input('razao_social');
            $agencia->telefone = $request->input('telefone');
            $agencia->email = $request->input('email');
            $agencia->cidade = $request->input('cidade');
            $agencia->estado = $request->input('estado');
            $agencia->rua = $request->input('rua');
            $agencia->numero = $request->input('numero');
            $agencia->cep = $request->input('cep');

            $agencia->save();
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
        $agencia = Agencia::find($id);

        if(isset($agencia)){
            $agencia->delete();
        }
        return redirect('/garagem');
    }
}
