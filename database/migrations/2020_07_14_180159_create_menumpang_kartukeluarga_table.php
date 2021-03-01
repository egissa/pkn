<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenumpangKartuKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('menumpang_kartukeluarga', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nama_kk_lama');
            $table->string('no_kk_lama');
            $table->string('nik_kk_lama');
            $table->string('nama_kk_ditempati');
            $table->string('no_kk_ditempati');
            $table->string('nik_kk_ditempati');
            $table->string('alamat_kk_ditempati');
            $table->string('no_rt');
            $table->string('kelurahan');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('provinsi');
            $table->string('no_hp');
            $table->string('alasan_menumpang');
            $table->string('jumlah_anggota_menumpang');
            $table->text('daftar_anggota_nik', 65535)->nullable();
            $table->text('daftar_nama_anggota', 65535)->nullable();
            $table->timestamps();
            $table->bigInteger('users_id')->unsigned()->index('fk_kk_menumpang_kartukeluarga_users_idx');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menumpang_kartukeluarga');
    }
}
