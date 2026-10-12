{{-- View Perfil --}}

<!DOCTYPE html>
<html lang="pt-PT">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil do utilizador</title>
        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    </head>
    <body>
        <main class = "container mt-5">
            <h1 class ="text-dark mb-4">Perfil do Utilizador</h1>

            <div class = "card">
                <div class = "card-body">
                    <p class="card-text"><strong>Nome:</strong> {{ $nome }}</p>
                    @if ($ano === 2)
                        <p class="alert alert-info">Está no último ano do CTeSP.</p>
                    @endif 
                    <p class="card-text"><strong>Curso:</strong> {{ $curso }}</p>
                    <p class="h5"><strong>Interesses: ({{ count($interesses ?? []) }}):</strong></p>
                    <ul class="list-group list-group-flush">
                        @foreach ($interesses ?? [] as $interesse)
                            <li class="list-group-item">{{ $interesse }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </main>
    </body>

</html>