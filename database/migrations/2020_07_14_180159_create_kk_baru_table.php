<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKkBaruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('kk_baru', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nama');
            $table->string('no_kk');
            $table->string('nik');
            $table->string('alamat');
            $table->string('no_rt');
            $table->string('no_hp');
            $table->string('alasan');
            $table->string('jumlah');
            $table->text('daftar_anggota_nik', 65535)->nullable();
            $table->text('daftar_nama_anggota', 65535)->nullable();
            $table->timestamps();
            $table->bigInteger('users_id')->unsigned()->index('fk_kk_baru_users_idx');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kk_baru');
    }
}
