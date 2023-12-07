<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/loginStyle.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="col-12 row mt-5">
            <div class="col-5"></div>
            <div class="col-3">
                <img src="{{ asset('images/logo.png') }}" alt="Exemplo de Imagem">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4"></div>
            <div class="col-4 mt-5">
                <form action="{{ route('adm.login') }}" method="post">
                    @csrf
                    <input type="text" id="cpf" name="cpf" class="form-control" placeholdeR="CPF" required>
                    <input type="password" id="senha" class="form-control mt-3" name="senha" placeholdeR="SENHA" required>
                    <div class="row">
                        <div class="col-5"></div>
                        <div class="col-5">
                            <button class="btn btn-danger mt-4" type="submit">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
