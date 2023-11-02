<?php

namespace Database\Seeders;

use App\Models\Asmaulhusna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(SurahSeeder::class);
        $this->call(AyatsSeeder::class);
        $this->call(AsmaulHusnaSeeder::class);
        $this->call(NabiSeeder::class);
    }
}
