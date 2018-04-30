<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Usuarios.
 *
 * @author  The scaffold-interface created at 2018-04-18 09:35:31pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('usuarios',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nombre');
        
        $table->String('correo');
        
        $table->String('password');
        
        $table->String('telefono');
        
        $table->boolean('verificado')->default(0);
        
        $table->String('direccion');
        
        $table->String('nss');
        
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
        Schema::drop('usuarios');
    }
}
