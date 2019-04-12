<?php

Route::get('/escolher',function(){
    return view('escolhacar');
});

Route::get('/', function(){
    return view('index');
});

Route::get('/mostrar',function(){
    return view('mostrar');
});

Route::get('/basico',function(){
    return view('carBauto');
});

Route::get('/intermediario',function(){
    return view('carIauto');
});

Route::get('/luxo',function(){
    return view('carsluxo');
});

Route::get('/posLogin', function(){
    return view('posLogin');
});

Route::get('/garagem',function(){
    return view('controlegaragem');
});
Route::get('garagem-cadastro','AgenciaController@create');
Route::post('garagem_cadastro/', 'AgenciaController@store');
Route::get('garagem_editar', 'AgenciaController@index');
Route::get('garagem_carro_cadastro', 'CarrosController@create');
Route::post('garagem_carro-cadastro', 'CarrosController@store');
Route::get('garagem_carro_editar', 'CarrosController@index');
Route::post('garagem_carro_editar/{id}', 'CarrosController@update');
Route::post('cadastro','ClienteController@store');
Route::post('/login', 'ClienteController@login');