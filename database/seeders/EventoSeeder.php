<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('eventos')->insert([
            'titulo' => 'Hackathon ISLA 24h',
            'tipo' => 'hackathon',
            'data' => '2026-11-06',
            'local' => 'Auditório principal',
            'descricao' => 'Evento de hackathon com duração de 24 horas.',
            'vagas' => 60,
            'inscritos' => 41,
        ]);

        // Chamar o seeder de eventos
        $this->call(EventoSeeder::class);
    }
}
