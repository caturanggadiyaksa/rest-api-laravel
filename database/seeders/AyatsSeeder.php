<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AyatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            $file_path = 'public/postman/114.json';
            $surah_data = json_decode(file_get_contents($file_path), true);

            foreach ($surah_data['data']['verses'] as $verse) {
                DB::table('ayats')->insert([
                    'surah_number' => $surah_data['data']['number'],
                    'verse_number' => $verse['number']['inSurah'],
                    'arabic_text' => $verse['text']['arab'],
                    'transliteration_en' => $verse['text']['transliteration']['en'],
                    'translation_en' => $verse['translation']['en'],
                    'translation_id' => $verse['translation']['id'],
                    'audio_primary' => $verse['audio']['primary'],
                    'audio_secondary_1' => $verse['audio']['secondary'][0],
                    'audio_secondary_2' => $verse['audio']['secondary'][1],
                    'tafsir_id_short' => $verse['tafsir']['id']['short'],
                    'tafsir_id_long' => $verse['tafsir']['id']['long'],
                    'tafsir_en' => $verse['tafsir']['id']['short'],
                ]);
            }
        
    }
}
