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
Route::get('/garagem/cadastro','AgenciaController@create');
Route::post('/garagem/cadastro/', 'AgenciaController@store');
Route::get('/garagem/editar', 'AgenciaController@index');
Route::get('/garagem/carro/cadastro', 'CarrosController@create');
Route::post('/garagem/carro/cadastro/', 'CarrosController@store');
Route::get('/garagem/carro/editar', 'CarrosController@index');

Route::post('/cadastro','ClienteController@store');