<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lansias', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tinggi_bdn');
            $table->string('berat_bdn');
            $table->string('tensi');
            $table->string('gula_darah');
            $table->string('asam_urat');
            $table->string('kolesterol');
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
        Schema::dropIfExists('lansias');
    }
};
