<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Nominas.
 *
 * @author  The scaffold-interface created at 2018-04-18 09:39:29pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Nominas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('nominas',function (Blueprint $table){

        $table->increments('id');
        
        $table->date('fecha');
        
        $table->string('pdf');
        
        $table->string('xml');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::dropIfExists('nominas');
    }
}
