<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tugas', function (Blueprint $table) {
            $table->id('id_tugas');
            $table->string('nama_tugas');
            $table->string('berkas_tugas')->nullable();
            $table->timestamp('waktu');
            $table->string('penulis')->default('Herry Liukae');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tugas');
    }
}
