<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
        <h1>Funcionarios</h1>
        @foreach($funcionarios as $funcionario)
            <h3>{{$funcionario->nome}}</h3>
            <p>{{$funcionario->email}}</p>
            <p>Equipe: {{$funcionario->equipe_id}}</p>
        @endforeach
        <a href="/cadastroFuncionarios">Ir para Registrar</a>
    </body>
</html>
