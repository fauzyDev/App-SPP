<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nisn');
            $table->foreignId('spp_id');
            $table->foreignId('user_id');
            $table->date('tgl_bayar');
            $table->string('bln_bayar','10');
            $table->string('thn_bayar','5');
            $table->integer('jumlah_bayar');
            $table->enum('status',['Lunas','Cicil']);
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
        Schema::dropIfExists('pembayarans');
    }
}
