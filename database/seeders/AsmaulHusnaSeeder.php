<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AsmaulHusnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $json = File::get(public_path('asmaul_husna/asmaulhusna.json'));
        $data = json_decode($json);

        foreach ($data->data as $item) {
            DB::table('asmaulhusna')->insert([
                'arab' => $item->arab,
                'id_asmaulhusna' => $item->id,
                'indo' => $item->indo,
                'latin' => $item->latin,
            ]);
        }
    }
}
