<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class EventoController extends Controller
{
    public function index(Request $request): View
    {
        $eventos = config('eventos');
        $tipo = request('tipo');
        $disponibilidade = request('disponibilidade');

        if($tipo) {
            $eventos = array_filter($eventos, 
                fn ($evento) => $evento['tipo'] === $tipo);
        }

        if($disponibilidade === 'Esgotados') {
            $eventos = array_filter($eventos, 
                fn ($evento) => $evento['inscritos'] >= $evento['vagas']
            );
        } elseif ($disponibilidade === 'Disponíveis') {
            $eventos = array_filter($eventos,
                fn($evento) => $evento['inscritos'] < $evento['vagas']
            );
        }

        return view('eventos.index', [
            'eventos' => $eventos,
            'tipo' => $tipo,
        ]);
    }
    public function proximos(): view
    {
        $eventos = config('eventos');
        $hoje = date('Y-m-d');

        $eventos = array_filter(
            $eventos,
            fn($evento) => $evento['data'] >= $hoje
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
    }
    /**
     * Mostrar a forma para criar um novo recurso.
     */
    public function create()
    {
        //
    }
    /**
     * Armazenar um novo recurso criado no armazenamento.
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Mostrar um recurso específico.
     */
    public function show(int $id): View
    {
        $evento = $this->procurar($id);

        if($evento === null) {
            abort(404);
        }

        return view('eventos.show', ['evento' => $evento]);
    }

    private function procurar(int $id): ?array
    {
        foreach (config('eventos') as $evento) {
            if($evento['id'] === $id) {
                return $evento;
            }
        }

        return null;
    }

    public function porTipo(string $tipo): View 
    {
        // Obtém os eventos definidos em config/eventos.php
        $eventos = config('eventos');

        // Reune os tipos existentes para validar o parâmetro recebido no URL
        $tipos = array_column($eventos, 'tipo');

        // Se o tipo não existir, apresentar um 404
        if (!in_array($tipo, $tipos)) {
            abort(404);
        }

        // Mostrar apenas os eventos do tipo pedido
        $eventos = array_filter(
            $eventos,
            fn ($evento) => $evento['tipo'] === $tipo
        );

        return view('eventos.index', [
            'eventos' => array_filter(
                $eventos,
                fn($evento) => $evento['tipo'] === $tipo
            ),
            'tipo' => $tipo,
            'disponibilidade' => null,
        ]);
    }
    /**
     * Mostrar a forma para editar um recurso específico.
     */
    public function edit(string $id)
    {
        //
    }
    /**
     * Atualizar o recurso específico no armazenamento.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    /**
     * Remover o recurso específico no armazenamento.
     */
    public function destroy(string $id)
    {
        //
    }
}
