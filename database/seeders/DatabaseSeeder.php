<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
   public function run(): void
{
    // Maak 2 receptionisten aan
    \App\Models\Receptionist::create(['naam' => 'Jan Janssen', 'email' => 'jan@bedrijf.nl', 'password' => bcrypt('geheim')]);
    \App\Models\Receptionist::create(['naam' => 'Annet de Vries', 'email' => 'annet@bedrijf.nl', 'password' => bcrypt('geheim')]);

    // Maak 5 bezoekerspassen aan
    for ($i = 101; $i <= 105; $i++) {
        \App\Models\Bezoekerspas::create(['nummer' => $i]);
    }
}
}
