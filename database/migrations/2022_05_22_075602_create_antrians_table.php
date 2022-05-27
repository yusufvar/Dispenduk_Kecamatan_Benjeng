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
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nik')->nullable();
            $table->string('nama');
            $table->date('tgl_datang');
            $table->string('desa');
            $table->string('no_hp');
            $table->string('keperluan');
            $table->string('nomor_antri');
            $table->enum('status',['datang','tidak datang','belum datang']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrians');
    }
};
