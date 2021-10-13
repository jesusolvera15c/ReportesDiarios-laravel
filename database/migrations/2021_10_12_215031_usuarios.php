<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('idUsuario');
            $table->string("nombre");
            $table->string("apellido");
            $table->string("dni")->unique()->nullable();
            $table->string("direccion");
            $table->timestamps();
        });

        DB::table('usuarios')->insert([
            ["nombre"=>"JOSEFINA", "apellido"=>"TRUJILLO","dni"=>"123JOSE","direccion"=>"VALLE DE TIGRIS 149"]
        ]);
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
