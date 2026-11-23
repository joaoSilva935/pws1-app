<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;

class TipoController extends Controller
{
    public function show(Tipo $tipo) 
    {
        $eventos = $tipo->eventos()
            ->orderBy('data')
            ->get();
        
        return view('tipos.show', compact('tipo', 'eventos'));
    }
}
