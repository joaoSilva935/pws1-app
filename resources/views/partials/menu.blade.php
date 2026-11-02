
<header class="topo">
    <div class="contentor">
        <nav aria-label="Navegação principal">
            <a href="{{ route('inicio') }}" class="marca">Início</a>
            <ul>
                <li><a href="{{ route('eventos.index') }}"
                    @if (request()->routeIs('eventos.*'))
                        aria-current="page" 
                    @endif>Eventos</a>
                </li>
            </ul>
        </nav>
    </div>
</header>