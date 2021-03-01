<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKtpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('ktp', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('permohonan');
            $table->string('nama');
            $table->string('no_kk');
            $table->string('nik_kk')->nullable();
            $table->string('alamat');
            $table->string('no_rt');
            $table->string('kode_pos');
            $table->string('no_hp');
            $table->timestamps();
            $table->bigInteger('users_id')->unsigned()->index('fk_kategori_users_idx');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ktp');
    }
}
