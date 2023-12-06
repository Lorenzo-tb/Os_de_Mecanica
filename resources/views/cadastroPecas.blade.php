
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
        <h1>Registro de Pecas</h1>
        <form action="{{ route('pecas.insert') }}" method="post">
            @csrf <!-- Adiciona o token CSRF para proteção contra CSRF attacks -->
            <!-- Campos do formulário -->
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="telefone">Preco:</label>
            <input type="number" id="preco" name="preco" required>

            <label for="telefone">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" required>

            <!-- Botão de envio -->
            <button type="submit">Adicionar Peca</button>
            <a href="/funcionarios">Ir para Lista de Pecas</a>
        </form>
    </body>
</html>
