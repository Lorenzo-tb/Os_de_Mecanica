<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>Novo Servico</h1>
        <form action="{{ route('servicos.insert') }}" method="post">
            @csrf <!-- Adiciona o token CSRF para proteção contra CSRF attacks -->
            <!-- Campos do formulário -->
            <label for="entrada">Entrada:</label>
            <input type="date" id="entrada" name="entrada" required>

            <label for="carro_id">Carro:</label>
            <select id="carro_id" name="carro_id" required>
                @foreach($carros as $carro)
                    <option value="{{ $carro->id }}">{{ $carro->placa }}</option>
                @endforeach
            </select>

            <label for="defeito">Defeito:</label>
            <input type="text" id="defeito" name="defeito" required>

            <label for="conserto">Conserto:</label>
            <input type="text" id="conserto" name="conserto" required>

            <label for="equipe_id">Equipe:</label>
            <select id="equipe_id" name="equipe_id" required>
                @foreach($equipes as $equipe)
                    <option value="{{ $equipe->id }}">{{ $equipe->nome }}</option>
                @endforeach
            </select>

            <label for="orcamento">Orcamento:</label>
            <input type="number" id="orcamento" name="orcamento" required>

            <label for="total">Total:</label>
            <input type="number" id="total" name="total" required>

            <label for="entregue">Entrega:</label>
            <input type="date" id="entregue" name="entregue" required>

            

            <!-- Botão de envio -->
            <button type="submit">Adicionar Carro</button>
            <a href="/clientes">Ir para Lista de Clientes</a>
        </form>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
