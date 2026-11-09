@extends('layouts.app')

@section('titulo', 'Eventos')

@section('conteudo')
    <p><a href="/" role="button" class="secondary">Voltar ao início</a></p>
    <h1>Eventos @if ($tipo) - ({{ ucfirst($tipo) }})@endif</h1>

    <hr>
        <div class="grid">
            <div>
                <p><a href="{{ route('eventos.index') }}">Todos os eventos</a></p>
                <p><a href="{{ route('eventos.index', ['disponibilidade' => 'Disponíveis']) }}">Disponíveis</a></p>
            </div>
            <div>
                <p><a href="{{ route('eventos.index', ['tipo' => 'workshop']) }}">Workshops</a></p>
                <p><a href="{{ route('eventos.index', ['disponibilidade' => 'Esgotados']) }}">Esgotados</a></p>
            </div>
            <div>
                <p><a href="{{ route('eventos.index', ['tipo' => 'palestra']) }}">Palestras</a></p>
                <p><a href="{{ route('eventos.proximos') }}">Próximos eventos</a></p>
            </div>
            <div>
                <p><a href="{{ route('eventos.index', ['tipo' => 'hackathon']) }}">Hackathons</a></p> 
            </div>
        </div>
        {{-- <nav>
            <a href="/eventos">Todos os eventos</a>
            <a href="/eventos?tipo=workshop">Workshops</a>
            <a href="/eventos?tipo=palestra">Palestras</a>
            <a href="/eventos?tipo=hackathon">Hackathons</a>
        </nav> --}}
    </hr>

    {{-- <hr>
        <nav>
            <a href="/eventos">Disponíveis</a>
            <a href="/eventos?disponibilidade=Esgotados">Esgotados</a>
        </nav>
    </hr> --}}
    @if (empty($eventos))
        <x-alerta tipo="aviso">Não há eventos para mostrar</x-alerta>
    @else
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
                @foreach($eventos as $evento)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href={{ route('eventos.show', $evento['id']) }}">{{ $evento['titulo'] }}</a></td>
                        <td>{{ date('d/m/Y', strtotime($evento['data'])) }}</td>
                        <td>
                            @if ($evento['inscritos'] >= $evento['vagas'])
                                <strong>Esgotado</strong>
                            @else 
                                {{ $evento['vagas'] - $evento['inscritos'] }}
                            @endif
                        </td>

                    </tr>
                
                @endforeach
        </table>        
    @endif
@endsection
   