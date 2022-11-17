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
        Schema::create('balitas', function (Blueprint $table) {
            $table->id();
            $table->string('kk');
            $table->foreignId('new_member_id')->constrained();
            $table->enum('jk', ['lk', 'pr']);
            $table->date('tgl_lahir');
            $table->string('berat_bdn');
            $table->string('panjang_bdn');
            $table->string('lingkar_lengan');
            $table->string('lingkar_kepala');
            $table->enum('kia', ['ya', 'tidak']);
            $table->enum('IMD', ['ya', 'tidak']);
            $table->string('nik_ortu');
            $table->string('alamat');
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
        Schema::dropIfExists('balitas');
    }
};
