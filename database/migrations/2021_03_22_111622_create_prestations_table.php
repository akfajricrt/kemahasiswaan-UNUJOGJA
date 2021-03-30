<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestations', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('slug');
            $table->integer('nim');
            $table->string('prodi');
            $table->string('no_hp');
            $table->string('nama_acara');
            $table->string('institusi_pembuat_acara');
            $table->string('peringkat_perlombaan');
            $table->date('tanggal_pelaksanaan');
            $table->text('sertifikat');
            $table->text('dokumentasi_acara');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestations');
    }
}
