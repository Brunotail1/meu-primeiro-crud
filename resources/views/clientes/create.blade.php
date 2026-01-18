<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Novo Cliente</h3>
            </div>
            <div class="card-body">

                @if(session('sucesso'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('sucesso') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="{{ route('clientes.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="col-md-6">
                            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="cep" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="cep" name="cep" maxlength="9" placeholder="00000-000" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="endereco" class="form-label">Endereço (Rua)</label>
                            <input type="text" class="form-control" id="logradouro" name="endereco" required>
                        </div>
                        <div class="col-md-2">
                            <label for="numero" class="form-label">Número</label>
                            <input type="text" class="form-control" id="numero" name="numero" required>
                        </div>
                        <div class="col-md-4">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-5">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="localidade" name="cidade" required>
                        </div>
                        <div class="col-md-2">
                            <label for="uf" class="form-label">Estado (UF)</label>
                            <input type="text" class="form-control" id="uf" name="uf" maxlength="2" required>
                        </div>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-success">Salvar Cliente</button>
                    <a href="#" class="btn btn-secondary">Cancelar</a>
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary ms-3">Ver Lista de Clientes</a>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('cep').addEventListener('blur', function() {
            var cep = this.value.replace(/\D/g, '');

            if (cep != "") {

                var validacep = /^[0-9]{8}$/;

                if (validacep.test(cep)) {

                    document.getElementById('logradouro').value = "...";
                    document.getElementById('bairro').value = "...";
                    document.getElementById('localidade').value = "...";
                    document.getElementById('uf').value = "...";


                    fetch('/consulta-cep/' + cep)
                        .then(response => response.json())
                        .then(data => {
                            if (!("erro" in data)) {

                                document.getElementById('logradouro').value = (data.logradouro);
                                document.getElementById('bairro').value = (data.bairro);
                                document.getElementById('localidade').value = (data.localidade);
                                document.getElementById('uf').value = (data.uf);


                                document.getElementById('numero').focus();
                            } else {
                                alert("CEP não encontrado.");
                                limpa_formulário_cep();
                            }
                        })
                        .catch(error => {
                            console.error('Erro:', error);
                            alert("Erro ao consulta CEP.");
                        });
                } else {
                    alert("Formato de CEP inválido.");
                    limpa_formulário_cep();
                }
            } else {
                limpa_formulário_cep();
            }
        });

        function limpa_formulário_cep() {
            document.getElementById('logradouro').value = ("");
            document.getElementById('bairro').value = ("");
            document.getElementById('localidade').value = ("");
            document.getElementById('uf').value = ("");
        }
    </script>
</body>

</html>