<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
        <h1>Registro de Carros</h1>
        <form action="{{ route('carros.insert') }}" method="post">
            @csrf <!-- Adiciona o token CSRF para proteção contra CSRF attacks -->
            <!-- Campos do formulário -->
            <label for="placa">Placa:</label>
            <input type="text" id="placa" name="placa" required>

            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" required>

            <label for="cor">Cor:</label>
            <input type="text" id="cor" name="cor" required>

            <label for="ano">Ano:</label>
            <input type="number" id="ano" name="ano" min="1900" max="2099" required>

            <label for="numeroChassi">Numero de Chassi:</label>
            <input type="text" id="numeroChassi" name="numeroChassi" required>

            <label for="cliente_id">Dono:</label>
            <select id="cliente_id" name="cliente_id" required>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>

            <!-- Botão de envio -->
            <button type="submit">Adicionar Carro</button>
            <a href="/clientes">Ir para Lista de Clientes</a>
        </form>
    </body>
</html>
