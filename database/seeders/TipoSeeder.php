<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Tipo;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipo::create(['nome' => 'Workshop', 'slug' => 'workshop']);
        Tipo::create(['nome' => 'Palestra', 'slug' => 'palestra']);
        Tipo::create(['nome' => 'Hackathon', 'slug' => 'hackathon']);
    }
}
