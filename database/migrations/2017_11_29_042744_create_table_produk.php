<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        Schema::create('produk',function(Blueprint $table){

            $table->string('id_produk')->primary();
            $table->string('id_supplier');
            $table->string('jenis_produk');
            $table->string('nama_produk');
            $table->string('harga_produk');
            $table->enum('status',['true','false']);
            $table->timestamps();

        });

        Schema::table('produk',function(Blueprint $table){
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
