<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surah', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->integer('sequence');
            $table->integer('numberOfVerses');
            $table->string('shortName');
            $table->string('longName');
            $table->string('transliteration_en');
            $table->string('transliteration_id');
            $table->string('translation_en');
            $table->string('translation_id');
            $table->string('revelation_arab');
            $table->string('revelation_en');
            $table->string('revelation_id');
            $table->text('tafsir_id');
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
        Schema::dropIfExists('surah');
    }
}
