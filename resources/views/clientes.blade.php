<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
        <h1>Clientes</h1>
            @foreach($clientes as $cliente)
                <h2>{{$cliente->nome}}</h2>
                <p>{{$cliente->email}}</p>
                <h3>Carros: </h3>
                @foreach($cliente->carros as $carro)
                    <p>{{$carro->placa}}</p>
                @endforeach
            @endforeach

            <a href="/cadastroClientes">Ir para Registrar</a>
            <a href="/cadastroCarros">Cadastrar carro</a>
    </body>
</html>
