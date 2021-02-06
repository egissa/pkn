<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSktmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sktm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('jabatan_id')->nullable();
            $table->string('nama');
            $table->string('kelamin');
            $table->string('kewarganegaraan');
            $table->string('tggl_lhr');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('perkawinan');
            $table->string('no_bdt')->nullable();
            $table->string('nik');
            $table->string('alamat');
            $table->string('nama_anak');
            $table->string('nis')->nullable();
            $table->string('sekolah');
            $table->string('almt_sekolah');
            $table->string('status')->default(1);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sktm');
    }
}
