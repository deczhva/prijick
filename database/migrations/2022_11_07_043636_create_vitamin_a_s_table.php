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
        Schema::create('vitamin_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->enum('jk', ['lk', 'pr']);
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->date('tgl_pemberian');
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
        Schema::dropIfExists('vitamin_a_s');
    }
};
