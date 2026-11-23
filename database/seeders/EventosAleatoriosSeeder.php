<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventosAleatoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {

            $vagas = fake()->numberBetween(10, 100);

            DB::table('eventos')->insert([
                'titulo' => fake()->words(3, true),
                'tipo' => fake()->randomElement([
                    'workshop',
                    'palestra',
                    'hackathon'
                ]),
                'data' => fake()->dateTimeBetween('now', '+3 months'),
                'local' => fake()->city(),
                'descricao' => fake()->sentence(),
                'vagas' => $vagas,
                'inscritos' => fake()->numberBetween(0, $vagas),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
