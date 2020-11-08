<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ProductController extends Controller
{


    protected $request, $user;

    //public function __construct(Request $request, User $user){
    public function __construct(Request $request){
        //dd($request->prm1);
        //$this->request = $request;

        //dd($request->prm1);
        $this->request = $request;
       // dd($user);
       // $this->user = $user;
       //this->middleware('auth')->only('create');



    }
   
     



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste='<h1>Olá</h1>';
        $teste2=123;
        $teste3='casa';

       // return view('teste',[
       //    'teste' => $teste
       //     
       // ]);

       //return view('teste', compact('teste')); 
        return view('admin.pages.produtos.index' , compact('teste','teste2','teste3'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
