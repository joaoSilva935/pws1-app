{{-- Ficheiro de transformação do 'welcome.blade.php' --}}

<!DOCTYPE html>
<html lang="pt-PT">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }}</title>
        {{-- Pico CSS --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    </head>
    <body>
        <main class="container">
            <h1>{{ config('app.name') }}</h1>
            <p>Workshops, palestras e hackathons do ISLA Gaia.</p>
            <p><a href="/eventos" role="button">Ver eventos</a></p>
        </main>
    </body>

</html>