<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsmaulhusnaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asmaulhusna', function (Blueprint $table) {
            $table->id();
            $table->string('arab');
            $table->integer('id_asmaulhusna');
            $table->string('indo');
            $table->string('latin');
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
        Schema::dropIfExists('asmaulhusna');
    }
}
