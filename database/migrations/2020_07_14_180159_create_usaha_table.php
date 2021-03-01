<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usaha', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('user_id');
            $table->unsignedBiginteger('jabatan_id')->nullable();
            $table->string('nama');
            $table->string('kelamin');
            $table->string('kewarganegaraan');
            $table->string('tggl_lhr');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('perkawinan');
            $table->string('nik');
            $table->string('alamat');
            $table->string('nama_usaha');
            $table->string('mulai_usaha');
            $table->string('jenis_usaha');
            $table->string('alamat_usaha');
            $table->string('panjang');
            $table->string('lebar');
            $table->string('status')->default(1);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usaha');
    }
}
