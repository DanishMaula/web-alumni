<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_gender')->unsigned();
            $table->string('name', 255);
            $table->string('nik', 11);
            $table->string('jurusan', 11);
            $table->string('kelas', 11);
            $table->string('angkatan', 255);
            $table->longText('alamat', 255);
            $table->timestamps();
            
            $table->foreign('id_gender')->references('id')->on('jenis_kelamin')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
