<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('no_kk');
            $table->string('nik_kk');
            $table->string('nama_kk');
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('tmpt_lhr');

            $table->string('tgl_lhr');
            $table->string('nik_ibu');
            $table->string('nama_ibu');
            
            $table->string('nik_ayah');
            $table->string('nama_ayah');
            
            $table->string('kelamin');
            $table->string('umur');
            $table->string('pendidikan');
            $table->string('hub_kel');
            $table->string('gol_darah');
            $table->string('perkawinan');
            $table->string('agama');
            $table->string('alamat');
            $table->string('kode_pos');
            $table->string('pekerjaan');
            $table->string('cacat');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('no_rt');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
}
