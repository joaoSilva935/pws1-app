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
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Workshop de Laravel', 
            'tipo' => 'workshop',
            'data' => '2026-11-18',
            'local' => 'Laboratório 2.05',
            'descricao' => 'Evento de workshop sobre a framework Laravel.', 
            'vagas' => 20, 
            'inscritos' => 12,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Palestra: Carreiras em Cibersegurança', 
            'tipo' => 'palestra',
            'data' => '2026-11-20', 
            'local' => 'Auditório',
            'descricao' => 'Palestra sobre carreiras em Cibersegurança.', 
            'vagas' => 120, 
            'inscritos' => 120,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Git e GitHub para iniciantes', 
            'tipo' => 'workshop',
            'data' => '2026-11-23',
            'local' => 'Laboratório 1.02',
            'descricao' => 'Evento de workshop sobre Git e GitHub para iniciantes.', 
            'vagas' => 25, 
            'inscritos' => 25,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Conversa com antigos alunos DWDM', 
            'tipo' => 'palestra',
            'data' => '2026-12-02',
            'local' => 'Sala 3.10',
            'descricao' => 'Palestra sobre à conversa com antigos alunos DWDM.', 
            'vagas' => 40, 
            'inscritos' => 9,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'titulo' => 'Palestra: O futuro das tecnologias',
            'tipo' => 'palestra',
            'data' => '2026-12-14',
            'local' => 'Auditório',
            'descricao' => 'Palestra sobre o futuro das tecnologias.',
            'vagas' => 40,
            'inscritos' => 27,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Chamar o seeder de eventos
        $this->call(EventoSeeder::class);
    }
}
