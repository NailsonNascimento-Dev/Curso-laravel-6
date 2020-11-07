<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Produto extends Model
{
    //public static function cadastar(Request $request)
    
    public static function cadastar($descricao, $valor)
    {   
        if (isset($descricao) == false || strlen($descricao) < 5) {
            return "Descrição invalida";
            
        }else if(isset($valor) == false || filter_var($valor, FILTER_VALIDATE_FLOAT) == false){
            
            return "Valor inválido";
        
        }else{
            //grava no banco ...
            //utiliza serviços / recursos
            
            return "Sucesso";
        }

    }
}
