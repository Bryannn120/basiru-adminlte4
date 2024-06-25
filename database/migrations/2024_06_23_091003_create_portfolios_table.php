<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_entrepreneur');
            $table->string('nama_produk_umkm');
            $table->text('deskripsi');
            $table->decimal('target_dana', 10, 2);
            $table->string('kondisi_produk_umkm');
            $table->date('tgl_mulai');
            $table->date('tgl_berakhir');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_umkm')->references('id')->on('umkms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}

