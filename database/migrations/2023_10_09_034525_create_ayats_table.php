<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayats', function (Blueprint $table) {
            $table->id();
            $table->integer('surah_number');
            $table->integer('verse_number');
            $table->text('arabic_text');
            $table->text('transliteration_en');
            $table->text('translation_en');
            $table->text('translation_id');
            $table->string('audio_primary');
            $table->string('audio_secondary_1')->nullable();
            $table->string('audio_secondary_2')->nullable();
            $table->text('tafsir_id_short');
            $table->text('tafsir_id_long');
            $table->text('tafsir_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ayats');
    }
}
