<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
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

Route::get('/ola/{nome}/{curso}', function (string $nome, string $curso) {
    return e($nome) . " está no curso de " . e($curso) . ".";
});

Route::get('/saudacao/{nome?}', function (?string $nome = null) {
    return "Bem-vindo, " .e($nome ?? 'visitante') . "!";
});

Route::get('/dobro/{numero}', function (int $numero) {
    return 'O dobro de ' . e($numero) . ' é ' . e($numero * 2);
})->whereNumber('number');
