<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
        <h1>servicos</h1>
        @foreach($servicos as $servico)
            <h3>ID: {{$servico->id}}</h3>
            <p>Equipe: {{$servico->equipe->nome}}</p>
            <p>Carro: {{$servico->carro->placa}}</p>
        @endforeach
        <a href="/cadastroServicos">Ir para Registrar</a>
    </body>
</html>
