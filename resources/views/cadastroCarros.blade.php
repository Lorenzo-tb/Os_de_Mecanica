<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg bg-dark meu-nav sticky-top">
            <div class="container-fluid">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/logo.png') }}" alt="Bootstrap" width="50" height="50">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 me-5">
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cadastrar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/cadastroFuncionarios">Funcionários</a></li>
                                <li><a class="dropdown-item" href="/cadastroEquipes">Equipe</a></li>
                                <li><a class="dropdown-item" href="/cadastroPecas">Peça</a></li>
                                <li><a class="dropdown-item" href="/cadastroClientes">Cliente</a></li>
                                <li><a class="dropdown-item" href="/cadastroCarros">Carro</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Serviços
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/servicos">Lista</a></li>
                                <li><a class="dropdown-item" href="/cadastroServicos">Novo Serviço</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Listas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/funcionarios">Funcionçários</a></li>
                                <li><a class="dropdown-item" href="/equipes">Equipes</a></li>
                                <li><a class="dropdown-item" href="/clientes">Clientes</a></li>
                                <li><a class="dropdown-item" href="/pecas">Peças</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bg-secondary mb-5 row">
            <div class="col-1"></div>
            <div class="col-4 mt-2">
                <h1 class="text-white titulo ms-3">Registro de Carro</h1>
            </div>
        </div>
        <div class="row">
                <div class="col-1"></div>
                <div class="col-10 rounded bg-white">
                    <form action="{{ route('carros.insert') }}" method="post">
                        @csrf 
                        <div class="row mt-5">
                            <div class="col-1"></div>
                            <div class="col-4">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Placa</span>
                                    <input type="text" id="placa" name="placa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
                                </div>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-4">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Modelo</span>
                                    <input type="text" id="modelo" name="modelo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-1"></div>
                            <div class="col-4">
                                <div class="input-group mb-3 input-group-lg">
                                    <span class="input-group-text" id="basic-addon1">Cor</span>
                                    <input type="text" id="cor" name="cor" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-4">
                                <div class="input-group mb-3 input-group-lg">
                                    <span class="input-group-text" id="basic-addon1">Ano</span>
                                    <input type="number" id="ano" name="ano" min="1900" max="2099" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="input-group mb-3 input-group-lg">
                                    <label class="input-group-text" for="inputGroupSelect01">Dono</label>
                                    <select class="form-select" id="inputGroupSelect01" name="cliente_id">
                                        @foreach($clientes as $cliente)
                                            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="input-group mb-2 input-group-lg">
                                    <span class="input-group-text" id="basic-addon1">Número do Chassi</span>
                                    <input type="text" id="numeroChassi" name="numeroChassi" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5 mb-5">
                            <div class="col-7"></div>
                            <div class="col-2">
                                
                                    <a class="text-decoration-none" href="/funcionarios">
                                        <button type="button" class="btn btn-outline-danger">CANCELAR</button>
                                    </a>
                                
                            </div>
                            <div class="col-2">
                                <button class="btn btn-outline-success" type="submit">SALVAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
