<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function cadastroAbrir ()
    {
        return view('ViewProdutoCadastro');
    }

    public function cadastroProcessar(Request $request){
        $resultado = Produto::cadastar($request->produtoDescricao, $request->produtoValor);

        if($resultado == "Sucesso"){
            // encaminhar para view de sucesso
            return view("ViewProdutoSucesso");
        }else{
            return view("ViewProdutoCadastro", compact('resultado', 'request'));
        }
    }
}
