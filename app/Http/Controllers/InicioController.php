<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
// use Illuminate\Support\Facades\DB;
use App\Models\Evento;

class InicioController extends Controller
{
    /**
     * Exibir a lista do recurso.
     */
    public function index(): View
    {
        // $proximos = config('eventos');
        // $hoje = date('Y-m-d');

        // $proximos = array_filter(
        //     config('eventos'),
        //     fn ($evento) => $evento['data'] >= $hoje
        // );

        // usort(
        //     $proximos,
        //     fn ($a, $b) => strcmp($a['data'], $b['data'])
        // );
        $proximos = Evento::query()
            ->where('data', '>=', now()->toDateString())
            ->orderBy('data')
            ->limit(3)
            ->get();

        return view('inicio', [
            'proximos' => $proximos,
        ]);
    }
    /**
     * Mostrar a forma de criar um novo recurso.
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
     * Exibir o recurso específico.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Mostrar a forma de editar o recurso específico.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Atualizar o recurso especificado no armazenamento.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remover o recurso especificado do armazenamento.
     */
    public function destroy(string $id)
    {
        //
    }
}
