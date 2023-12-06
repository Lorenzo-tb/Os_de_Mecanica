<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
        <h1>Registro de Equipes</h1>
        <form action="{{ route('equipes.insert') }}" method="post">
            @csrf <!-- Adiciona o token CSRF para proteção contra CSRF attacks -->

            <!-- Campos do formulário -->
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <!-- Botão de envio -->
            <button type="submit">Adicionar Equipe</button>
            <a href="/equipes">Ir para Lista de Equipes</a>
        </form>
    </body>
</html>
