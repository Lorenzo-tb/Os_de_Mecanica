<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
        <h1>Peças</h1>
        @foreach($pecas as $peca)
            <h3>{{$peca->nome}}</h3>
            <p>{{$peca->quantidade}}</p>
            <p>Preço: R${{$peca->preco}}</p>
        @endforeach
        <a href="/cadastroPecas">Ir para Registrar</a>
    </body>
</html>
