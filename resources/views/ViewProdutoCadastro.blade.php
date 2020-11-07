<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadasro de produto</h1>


    @if(isset($resultado))
        <h2>{{ $resultado }}</h2>
    @endif



   



    <form method="POST" action="?">

        Descrição: <input type="text" name='produtoDescricao' value="@if(isset($request->produtoDescricao)){{ $request->produtoDescricao }}@endif"><br>

        Valor: <input type="text" name="produtoValor" value="@if(isset($request->produtoValor)){{ $request->produtoValor }}@endif"><br>
        <input type="submit" value="Cadastrar">
    
    </form>
    
</body>
</html>