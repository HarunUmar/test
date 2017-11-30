<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('supplier',function(Blueprint $table){

            $table->string('id_supplier')->primary();
            $table->string('username');
            $table->string('nama');
            $table->string('nama_toko');
            $table->text('alamat_toko');
            $table->string('jenis_toko');
            $table->string('slogan_toko');
            $table->enum('status_aktif',['0','1']);
            $table->timestamps();
        });

        Schema::table('supplier',function(Blueprint $table){

            $table->foreign('username')
            ->references('username')
            ->on('users')
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
