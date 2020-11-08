<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{

    public function create(){
        return "create novo produto";
    }


    public function show ($id){

        return "Exibindo o produto cujo id: {$id}";

    }

    public function index(){

        $produtos=['produto 01','produto 02','produto 03'];

        return $produtos;
    }

    public function edit ($id){

        return "O produto que será editado é: {$id}";

    }

    public function cadastro(){

        return "cadastro";

    }
    public function update($id){

        return "atualizando produto";

    }

    public function delete($id){

        return "delete produto";

    }


    

    
}
