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
            <ul>
                @forelse ($proximos as $evento)
                    <li>
                        <a href="{{ route('eventos.show', $evento['id']) }}">
                            {{ $evento['titulo'] }}
                        </a>
                        - {{ date('d/m/Y', strtotime($evento['data'])) }}
                    </li>
                @empty
                    <li>Não há próximos eventos.</li>
                @endforelse
            </ul>
        </main>
    </body>

</html>