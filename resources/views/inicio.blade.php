{{-- Ficheiro de transformação do 'welcome.blade.php' --}}

<!DOCTYPE html>
<html lang="pt-PT">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }}</title>
        {{-- Pico CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" rel="stylesheet">
    </head>
    <body>
        <main class="container">
            <h1>{{ config('app.name') }}</h1>
            <p>Workshops, palestras e hackathons do ISLA Gaia.</p>
            <p><a href="{{ route('eventos.index') }}" role="button">Ver eventos</a></p>

            <h2>Próximos Eventos</h2>
            <div class="grelha">
                @forelse ($proximos as $evento)
                    <x-cartao-evento :evento="$evento" />
                @empty
                    <x-alerta>Ainda não há eventos marcados.</x-alerta>
                @endforelse
            </div>
        </main>
    </body>

</html>