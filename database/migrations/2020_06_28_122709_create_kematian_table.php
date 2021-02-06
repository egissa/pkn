<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKematianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kematian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('jabatan_id')->nullable();
            $table->string('nama');
            $table->string('kelamin');
            $table->string('tggl_lhr');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('nik');
            $table->string('alamat');
            $table->text('keterangan');
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
        Schema::dropIfExists('kematian');
    }
}
