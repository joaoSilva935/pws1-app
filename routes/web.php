<?php

use Illuminate\Support\Facades\Route;

$eventos = [
    [
        'id' => 1, 
        'titulo' => 'Workshop de Laravel', 
        'tipo' => 'workshop',
        'data' => '2026-10-14', 
        'local' => 'Laboratório 2.05', 
        'vagas' => 20, 'inscritos' => 12
    ],
    [
        'id' => 2, 
        'titulo' => 'Palestra: Carreiras em Cibersegurança', 
        'tipo' => 'palestra',
        'data' => '2026-10-21', 
        'local' => 'Auditório', 
        'vagas' => 120, 
        'inscritos' => 120
    ],
    [
        'id' => 3, 
        'titulo' => 'Hackathon ISLA 24h', 
        'tipo' => 'hackathon',
        'data' => '2026-11-06', 
        'local' => 'Átrio principal', 
        'vagas' => 60, 
        'inscritos' => 41
    ],
    [
        'id' => 4, 
        'titulo' => 'Git e GitHub para iniciantes', 
        'tipo' => 'workshop',
        'data' => '2026-09-30', 
        'local' => 'Laboratório 1.02', 
        'vagas' => 25, 
        'inscritos' => 25
    ],
    [
        'id' => 5, 
        'titulo' => 'Conversa com antigos alunos DWDM', 
        'tipo' => 'palestra',
        'data' => '2026-12-02', 
        'local' => 'Sala 3.10', 
        'vagas' => 40, 
        'inscritos' => 9
    ],
    [
        'id' => 6,
        'titulo' => 'Palestra: O futuro das tecnologias',
        'tipo' => 'palestra',
        'data' => '2026-12-14',
        'local' => 'Auditório',
        'vagas' => 40,
        'inscritos' => 27
    ],
];

Route::get('/', function () {
    return view('inicio');
});

Route::get('/ola', function () {
    return view('Olá mundo');
});

Route::get('/ola/{nome}', function () {
    return "Olá, " . e($nome) . "!";
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/perfil', function () {
    return view('perfil', [
        'nome' => 'João Silva',
        'ano' => 2,
        'curso' => 'DWDM',
        'interesses' => ['Laravel', 'MySQL', 'PHP']
    ]);
});

Route::get('/perfil/{interesse}', function (string $interesse) {
    $interesses = ['Laravel', 'MySQL', 'PHP'];

    return in_array($interesse, $interesses)
        ? "$interesse está na minha lista de interesses."
        : "$interesse não está na minha lista de interesses.";
    
});

Route::get('/eventos', function () use ($eventos) {
    $tipo = request('tipo');
    $disponibilidade = request('disponibilidade');

    if ($tipo) {
        $eventos = array_filter($eventos, 
            fn($evento) => $evento['tipo'] === $tipo
        );
    }

    return view('eventos.index', [
        'eventos' => $eventos,
        'tipo' => $tipo,
        'disponibilidade' => $disponibilidade 
    ]);

    if($disponibilidade === 'Esgotados') {
        $eventos = array_filter(
            $eventos,
            fn ($evento) => $evento['inscritos'] >= $evento['vagas']
        );
    } elseif ($disponibilidade === 'Disponíveis') {
            $eventos = array_filter(
                $eventos,
                fn($evento) => $evento['inscritos'] <= $evento['vagas']
            );
    }
});

Route::get('/eventos/proximos', function() use($eventos) {
    $hoje = date('Y-m-d');

    $eventos = array_filter(
        $eventos,
        fn ($evento) => $evento['data'] >= $hoje
    );

    usort(
        $eventos,
        fn($a, $b) => $a['data'] <=> $b['data']
    );

    return view('eventos.index', [
        'eventos' => $eventos,
        'tipo' => null,
        'disponibilidade' => null,
    ]);
});

Route::get('/eventos/{id}', function (int $id) use ($eventos) {
    // Filtrar o evento pelo ID
    $evento = null;

    foreach ($eventos as $item) {
        if($item['id'] === $id) {
            $evento = $item;
        }
    }

    if($evento === null) {
        abort(404);
    }

    return view('eventos.show', [
        'evento' => $evento,
    ]);
})->whereNumber('id');

Route::get('/ola/{nome}/{curso}', function (string $nome, string $curso) {
    return e($nome) . " está no curso de " . e($curso) . ".";
});

Route::get('/saudacao/{nome?}', function (?string $nome = null) {
    return "Bem-vindo, " .e($nome ?? 'visitante') . "!";
});

Route::get('/dobro/{numero}', function (int $numero) {
    return 'O dobro de ' . e($numero) . ' é ' . e($numero * 2);
})->whereNumber('number');

Route::get('/sobre', function() {
    return view('sobre');
});
