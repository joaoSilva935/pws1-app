{{-- Ficheiro de transformação do 'welcome.blade.php' --}}

<!DOCTYPE html>
<html lang="pt-PT">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Minha aplicação Laravel</title>
        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    </head>
    <body>
        <div class = "container mt-5">
            <h1 class="text-dark">Olá, Laravel!</h1>
            <a href="/perfil" class="btn btn-primary">Ver Perfil</a>
        </div>
    </body>

</html>