<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $end = new Endereco();
        $end->cidade = $request->input('cidade');
        $end->estado = $request->input('estado');
        $end->rua = $request->input('rua');
        $end->numero = $request->input('numero');
        $end->cep = $request->input('cep');

        $end->save();

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
        $end = Endereco::find($id);
        if(isset($end)){
            return view('',compact('cat'));
        }else{
            return redirect('/garagem');
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
        $end = Endereco::find($id);
        if(isset($end)){
            $end->cidade = $request->input('cidade');
            $end->estado = $request->input('estado');
            $end->rua = $request->input('rua');
            $end->numero = $request->input('numero');
            $end->cep = $request->input('cep');

            $end->save();
        }else{
            return redirect('/garagem');
        }
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
