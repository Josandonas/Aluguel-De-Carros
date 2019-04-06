<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Endereco;

class Agencia extends Model
{
    function endereco($cep){
        $end = Endereco::find($cep);

        if(isset($end)){
            return $end->id;
        }
    }

    function local(){
        return $this->belongsTo('App\Endereco');
    }
}
