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
                <h1 class="text-white titulo ms-3">Registro de Funcionários</h1>
            </div>
        </div>

        <div class="row">
                <div class="col-1"></div>
                <div class="col-10 rounded bg-white">
                    <div class="row mt-2">
                        <div class="col-10"></div>
                        <div class="col-1 row">
                            <div class="col-6">
                                <h2>N: </h2>
                            </div>
                            <div class="col-6">
                                <h2 class="text-danger">{{$servico->id}}</h2>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('atualizarServico', ['id' => $servico->id]) }}" method="post">
                        @csrf 
                        @method('put')
                        <div class="row mt-5">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Entrada</span>
                                    <input value="{{$servico->entrada}}" type="date" name="entrada" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="input-group input-group-lg">
                                    <label class="input-group-text" for="inputGroupSelect01">Carro</label>
                                    <select class="form-select" id="inputGroupSelect01" name="carro_id" required>
                                            <option value="{{ $servico->carro->id }}">{{ $servico->carro->modelo }}| Placa: {{$servico->carro->placa}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <span class="input-group-text">Defeito</span>
                                    <textarea class="form-control" name="defeito" aria-label="With textarea" required>{{$servico->defeito}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <span class="input-group-text">Conserto</span>
                                    <textarea class="form-control" name="conserto" aria-label="With textarea" required>{{$servico->conserto}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="input-group input-group-lg">
                                    <label class="input-group-text" for="inputGroupSelect01">Peca</label>
                                    <select class="form-select" id="inputGroupSelect01" name="peca_id" required>
                                        @foreach($pecas as $peca)
                                            <option value="{{ $peca->id }}">{{ $peca->nome }} -> R${{$peca->preco}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="input-group mb-3 input-group-lg">
                                    <label class="input-group-text" for="inputGroupSelect01">Equipe</label>
                                    <select class="form-select" id="inputGroupSelect01" name="equipe_id" required>
                                        @foreach($equipes as $equipe)
                                            <option value="{{ $equipe->id }}">{{ $equipe->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Total</span>
                                    <input value="{{$servico->total}}" type="number" name="total" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="input-group input-group-lg">
                                    <label class="input-group-text" for="inputGroupSelect01">Aprovado</label>
                                    <select class="form-select" id="inputGroupSelect01" name="aprovado" required>
                                        <option value="2">Indefinido</option>
                                        <option value="1">Aprovado</option>
                                        <option value="0">Recusado</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Pronto</span>
                                    <input value="{{$servico->pronto}}" type="date" name="pronto" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Entregue</span>
                                    <input value="{{$servico->entregue}}" type="date" name="entregue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5 mb-5">
                            <div class="col-5"></div>
                            <div class="col-2">
                                <form action="{{ route('servicos.destroy', ['id' => $servico->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </div>
                            <div class="col-2">
                                <a class="text-decoration-none" href="/servicos">
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