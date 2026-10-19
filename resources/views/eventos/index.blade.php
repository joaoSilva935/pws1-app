<!DOCTYPE html>
<html lang="pt-PT">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eventos</title>
        {{-- Pico CSS --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    </head>
    <body>
        <main class="container">
            <p><a href="/" role="button" class="secondary">Voltar ao início</a></p>
            <h1>Eventos</h1>

            <table>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Evento</th>
                        <th scope="col">Data</th>
                        <th scope="col">Vagas disponíveis</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($eventos as $evento)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $evento['titulo'] }}</td>
                            <td>{{ date('d/m/Y', strtotime($evento['data'])) }}</td>
                            <td>
                                @if ($evento['inscritos'] => $evento['vagas'])
                                    <strong>Esgotado</strong>
                                @else 
                                    {{ $evento['vagas'] - $evento['inscritos'] }}
                                @endif
                            </td>

                        </tr>
                    @empty
                        <tr><td colspan="4">Não há eventos para mostrar.</td></tr>
                    @endforelse
            </table>
        </main>
    </body>

</html>