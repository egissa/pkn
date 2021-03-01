<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelahiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelahiran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('user_id');
            $table->unsignedBiginteger('jabatan_id')->nullable();
            $table->string('srt_pengantar');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tpt_lahir');
            $table->string('tgl_lahir');
            $table->string('no_kk');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('nama_pelapor');
            $table->string('no_pelapor');
            $table->string('srt_pengantar_rt');
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
        Schema::dropIfExists('kelahiran');
    }
}
