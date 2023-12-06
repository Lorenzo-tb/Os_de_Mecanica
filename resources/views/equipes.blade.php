<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
        <h1>Equipes</h1>
        @foreach($equipes as $equipe)
            <h3>Equipe: {{ $equipe->nome }}</h3>
            <h3>Funcionarios:</h3>
            @foreach($equipe->funcionarios as $funcionario)
                <p>{{ $funcionario->nome }}</p>
            @endforeach
        @endforeach
        <a href="/cadastroEquipes">Ir para Registrar</a>
    </body>
</html>
