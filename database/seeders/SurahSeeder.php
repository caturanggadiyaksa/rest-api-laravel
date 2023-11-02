<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Baca data dari file JSON
         $json = file_get_contents('public/surah.json');
         $data = json_decode($json, true);

         foreach ($data['data'] as $surahData) {
            DB::table('surah')->insert([
                'number' => $surahData['number'],
                'sequence' => $surahData['sequence'],
                'numberOfVerses' => $surahData['numberOfVerses'],
                'shortName' => $surahData['name']['short'],
                'longName' => $surahData['name']['long'],
                'transliteration_en' => $surahData['name']['transliteration']['en'],
                'transliteration_id' => $surahData['name']['transliteration']['id'],
                'translation_en' => $surahData['name']['translation']['en'],
                'translation_id' => $surahData['name']['translation']['id'],
                'revelation_arab' => $surahData['revelation']['arab'],
                'revelation_en' => $surahData['revelation']['en'],
                'revelation_id' => $surahData['revelation']['id'],
                'tafsir_id' => $surahData['tafsir']['id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
