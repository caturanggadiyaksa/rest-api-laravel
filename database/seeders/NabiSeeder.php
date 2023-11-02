<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NabiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $json = File::get(public_path('kisah_nabi/kisahnabi.json'));
        $data = json_decode($json);

        foreach ($data as $item) {


            DB::table('nabi')->insert([
                'name' => $item->name,
                'thn_kelahiran' => $item->thn_kelahiran,
                'usia' => $item->usia,
                'description' => $item->description,
                'tmp' => $item->tmp,
                'image_url' => $item->image_url,
                'icon_url' => $item->icon_url,

            ]);
        }
    }
}
