@extends('layouts.app')

@section('conteudo')

    <h1>{{ $tipo->nome }}</h1>

    <div class="grelha">
        @forelse ($eventos as $evento)
            <x-cartao-evento :evento="$evento" />
        @empty
            <x-alerta>Não existem eventos deste tipo.</x-alerta>
        @endforelse
    </div>
@endsection

