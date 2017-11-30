<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCostumer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('costumer',function(Blueprint $table){
            $table->string('id_costumer')->primary();
            $table->string('username')->index();
            $table->timestamps();
        });



 




        Schema::table('costumer', function(Blueprint $table){
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
