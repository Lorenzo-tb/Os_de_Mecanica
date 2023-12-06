
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
        <h1>Registro de Clientes</h1>
        <form action="{{ route('clientes.insert') }}" method="post">
            @csrf <!-- Adiciona o token CSRF para proteção contra CSRF attacks -->

            <!-- Campos do formulário -->
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>

            <!-- Botão de envio -->
            <button type="submit">Adicionar Cliente</button>
            <a href="/clientes">Ir para Lista de Clientes</a>
        </form>
    </body>
</html>
