<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
        <h1>Login</h1>
        <form action="{{ route('adm.login') }}" method="post">
            @csrf <!-- Adiciona o token CSRF para proteção contra CSRF attacks -->

            <!-- Campos do formulário -->
            <label for="nome">cpf:</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="telefone">senha:</label>
            <input type="password" id="senha" name="senha" required>

            <!-- Botão de envio -->
            <button type="submit">LOGIN</button>
        </form>
    </body>
</html>
