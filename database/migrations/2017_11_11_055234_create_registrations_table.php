<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpgts2020_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nomor_peserta');
            $table->string('sma');
            $table->string('kelompok_ujian');
            $table->integer('sesi');
            $table->integer('biaya');
            $table->string('no_hp');
            $table->string('no_wa');
            $table->string('id_line');
            $table->string('metode_pembayaran');
            $table->integer('registered_by')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('kpgts2020_users')->onDelete('cascade');
            $table->foreign('registered_by')->references('id')->on('kpgts2020_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kpgts2020_registrations');
    }
}
