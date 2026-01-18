<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-warning">
                <h3 class="mb-0">Editar Cliente</h3>
            </div>
            <div class="card-body">

                <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                    @csrf
                    @method('PUT') <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" name="nome" value="{{ $cliente->nome }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_nascimento" value="{{ $cliente->data_nascimento }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">CEP</label>
                            <input type="text" class="form-control" id="cep" name="cep" value="{{ $cliente->cep }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="logradouro" name="endereco" value="{{ $cliente->endereco }}" required>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Número</label>
                            <input type="text" class="form-control" name="numero" value="{{ $cliente->numero }}" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $cliente->bairro }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-5">
                            <label class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="localidade" name="cidade" value="{{ $cliente->cidade }}" required>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">UF</label>
                            <input type="text" class="form-control" id="uf" name="uf" value="{{ $cliente->uf }}" required>
                        </div>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('cep').addEventListener('blur', function() {
            var cep = this.value.replace(/\D/g, '');
            if (cep != "") {
                var validacep = /^[0-9]{8}$/;
                if (validacep.test(cep)) {
                    fetch('/consultar-cep/' + cep).then(response => response.json())
                        .then(data => {
                            if (!("erro" in data)) {
                                document.getElementById('logradouro').value = (data.logradouro);
                                document.getElementById('bairro').value = (data.bairro);
                                document.getElementById('localidade').value = (data.localidade);
                                document.getElementById('uf').value = (data.uf);
                            }
                        });
                }
            }
        });
    </script>

</body>

</html>