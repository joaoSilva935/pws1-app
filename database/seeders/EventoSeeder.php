<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Tipo;
use App\Models\Evento;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = Tipo::pluck('id', 'slug');
        Evento::create([
            'titulo' => 'Hackathon ISLA 24h',
            'tipo_id' => $tipos['hackathon'],
            'data' => '2026-11-06',
            'local' => 'Auditório principal',
            'descricao' => 'Evento de hackathon com duração de 24 horas.',
            'vagas' => 60,
            'inscritos' => 41,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Evento::create([
            'titulo' => 'Workshop de Laravel', 
            'tipo_id' => $tipos['workshop'],
            'data' => '2026-11-18',
            'local' => 'Laboratório 2.05',
            'descricao' => 'Evento de workshop sobre a framework Laravel.', 
            'vagas' => 20, 
            'inscritos' => 12,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Evento::create([
            'titulo' => 'Palestra: Carreiras em Cibersegurança', 
            'tipo_id' => $tipos['palestra'],
            'data' => '2026-11-20', 
            'local' => 'Auditório',
            'descricao' => 'Palestra sobre carreiras em Cibersegurança.', 
            'vagas' => 120, 
            'inscritos' => 120,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Evento::create([
            'titulo' => 'Git e GitHub para iniciantes', 
            'tipo_id' => $tipos['workshop'],
            'data' => '2026-11-23',
            'local' => 'Laboratório 1.02',
            'descricao' => 'Evento de workshop sobre Git e GitHub para iniciantes.', 
            'vagas' => 25, 
            'inscritos' => 25,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Evento::create([
            'titulo' => 'Conversa com antigos alunos DWDM', 
            'tipo_id' => $tipos['palestra'],
            'data' => '2026-12-02',
            'local' => 'Sala 3.10',
            'descricao' => 'Palestra sobre à conversa com antigos alunos DWDM.', 
            'vagas' => 40, 
            'inscritos' => 9,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Evento::create([
            'titulo' => 'Palestra: O futuro das tecnologias',
            'tipo_id' => $tipos['palestra'],
            'data' => '2026-12-14',
            'local' => 'Auditório',
            'descricao' => 'Palestra sobre o futuro das tecnologias.',
            'vagas' => 40,
            'inscritos' => 27,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Chamar o seeder de eventos
        // $this->call(EventoSeeder::class);
    }
}
