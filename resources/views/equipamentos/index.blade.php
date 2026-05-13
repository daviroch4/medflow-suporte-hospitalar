<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedFlow - Inventário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-primary mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">MedFlow - Gestão Hospitalar</span>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Inventário de Ativos (TI)</h5>
                <a href="/teste-hospital" class="btn btn-sm btn-success">+ Gerar Teste</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Patrimônio</th>
                            <th>Tipo</th>
                            <th>Setor</th>
                            <th>Modelo</th>
                            <th>Data Cadastro</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($equipamentos as $eq)
                        <tr>
                            <td>{{ $eq->id }}</td>
                            <td><span class="badge bg-info text-dark">{{ $eq->patrimonio }}</span></td>
                            <td>{{ $eq->tipo }}</td>
                            <td>{{ $eq->setor }}</td>
                            <td>{{ $eq->modelo }}</td>
                            <td>{{ $eq->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>