<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitePublicoController extends Controller
{
    public function paginaPricipal()
    {
        $usuario = "André";

        return view('viewPrincipal')->with('usuario', $usuario);

    }


    public function produtos()
    {
        $produtos = array('tv','celular', 'computador', 'fogao');
        return view('ViewProdutos')->with('produtos', $produtos);
    }

    public function informacoes()
    {
        $usuario = "André";
        $produtos = array('tv','celular', 'computador', 'fogao');



        return view('ViewInformacoes',compact('usuario','produtos'));

    }
}
