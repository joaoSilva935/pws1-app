<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;


Route::get('/', function () {
    return view('inicio');
});

// Route::get('/ola', function () {
//     return view('Olá mundo');
// });

// Route::get('/ola/{nome}', function () {
//     return "Olá, " . e($nome) . "!";
// });

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/test2', function () {
//     return view('test2');
// });

// Route::get('/perfil', function () {
//     return view('perfil', [
//         'nome' => 'João Silva',
//         'ano' => 2,
//         'curso' => 'DWDM',
//         'interesses' => ['Laravel', 'MySQL', 'PHP']
//     ]);
// });

// Route::get('/perfil/{interesse}', function (string $interesse) {
//     $interesses = ['Laravel', 'MySQL', 'PHP'];

//     return in_array($interesse, $interesses)
//         ? "$interesse está na minha lista de interesses."
//         : "$interesse não está na minha lista de interesses.";
    
// });

Route::get('/eventos', [EventoController::class, 'index'])
    ->name('eventos.index');

//     if($disponibilidade === 'Esgotados') {
//         $eventos = array_filter(
//             $eventos,
//             fn ($evento) => $evento['inscritos'] >= $evento['vagas']
//         );
//     } elseif ($disponibilidade === 'Disponíveis') {
//             $eventos = array_filter(
//                 $eventos,
//                 fn($evento) => $evento['inscritos'] <= $evento['vagas']
//             );
//     }
// });

Route::get('/eventos/proximos', [EventoController::class, 'proximos'])
    ->name('eventos.proximos');
    // $eventos = config('eventos');
    // $hoje = date('Y-m-d');

    // $eventos = array_filter(
    //     $eventos,
    //     fn ($evento) => $evento['data'] >= $hoje
    // );

    // usort(
    //     $eventos,
    //     fn($a, $b) => $a['data'] <=> $b['data']
    // );

    // return view('eventos.index', [
    //     'eventos' => $eventos,
    //     'tipo' => null,
    //     'disponibilidade' => null,
    // ]);


Route::get('/eventos/{id}', [EventoController::class, 'show'])
    ->whereNumber('id')
    ->name('eventos.show');
//     $eventos = config('eventos');
//     // Filtrar o evento pelo ID
//     $evento = null;

//     foreach ($eventos as $item) {
//         if($item['id'] === $id) {
//             $evento = $item;
//         }
//     }

//     if($evento === null) {
//         abort(404);
//     }

//     return view('eventos.show', [
//         'evento' => $evento,
//     ]);
// })->whereNumber('id');

// Route::get('/ola/{nome}/{curso}', function (string $nome, string $curso) {
//     return e($nome) . " está no curso de " . e($curso) . ".";
// });

// Route::get('/saudacao/{nome?}', function (?string $nome = null) {
//     return "Bem-vindo, " .e($nome ?? 'visitante') . "!";
// });

// Route::get('/dobro/{numero}', function (int $numero) {
//     return 'O dobro de ' . e($numero) . ' é ' . e($numero * 2);
// })->whereNumber('number');

// Route::get('/sobre', function() {
//     return view('sobre');
// });
