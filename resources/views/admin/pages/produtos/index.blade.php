@extends('admin.layouts.app')

@section('titulo', 'cadastro')


@section('content')
    <h1>Exibindo os produtos</h1>
    {{$teste}}
    <br>

    <!-- só entra se for verdadeiro-->
    
    @if($teste2 === '123')
        É igual
    @elseif($teste2 == 123)
        É igual a 123
    @else
        É diferente
    @endif

    <!-- só entra se for falso-->
    @unless ($teste === '123')
        
    @isset($teste3)
        existe
       
    @endisset

    @empty($teste3)
        
    @endempty

    @endunless


@endsection