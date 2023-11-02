<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNabiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nabi', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('thn_kelahiran');
            $table->string('usia');
            $table->text('description');
            $table->string('tmp');
            $table->string('image_url');
            $table->string('icon_url')->nullable();
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
        Schema::dropIfExists('nabi');
    }
}
