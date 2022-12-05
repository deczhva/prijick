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
        Schema::create('new_members', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anak');
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->string('nik_anak', 16);
            $table->string('nama_ortu');
            $table->string('nik_ortu', 16);
            $table->string('no_kk', 16);
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
        Schema::dropIfExists('new_members');
    }
};
