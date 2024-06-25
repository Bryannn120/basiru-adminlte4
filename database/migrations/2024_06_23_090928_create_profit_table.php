<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_investor');
            $table->timestamp('tgl_keuntungan');
            $table->decimal('jumlah_keuntungan', 10, 2);
            $table->decimal('biaya_admin', 10, 2);
            $table->decimal('jumlah_bersih', 10, 2);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_investor')->references('id')->on('investors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profits');
    }
}

