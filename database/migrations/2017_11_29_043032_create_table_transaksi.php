<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('transaksi',function(Blueprint $table){

            $table->string('id_transaksi')->primary();
            $table->string('id_costumer');
            $table->string('id_supplier');
            $table->integer('jumlah');
            $table->text('keterangan');
            $table->datetime('waktu');
            $table->timestamps();
             
        });

        Schema::table('transaksi',function(Blueprint $table){
            $table->foreign('id_costumer')
            ->references('id_costumer')
            ->on('costumer')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });


        Schema::table('transaksi',function(Blueprint $table){
            $table->foreign('id_supplier')
            ->references('id_supplier')
            ->on('supplier')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
