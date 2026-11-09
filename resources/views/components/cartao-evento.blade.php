@props(['evento'])

<!-- Juntar a classe 'cartao' às que view enviar -->
<article {{ $attributes->merge(['class' => 'cartao']) }}>
    <!-- Tipo do evento (a classe que no futuro irá permitir uma cor por tipo -->
    <span class="etiqueta etiqueta-
    {{ $evento['tipo'] }}">{{ ucfirst($evento['tipo']) }}</span>
    <!-- Título do evento com ligação para o detalhe -->
    <h3>
        <a href="{{ route('eventos.show', $evento['id']) }}">{{ $evento['titulo'] }}</a>
    </h3>
    <!-- Data do evento -->
    <p>{{ date('d/m/Y', strtotime($evento['data'])) }} . {{ $evento['local'] }}</p>
</article>