<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('idEmpleado');
            $table->integer('numeroEmpleado')->unique()->nullable();
            $table->string("nombre");
            $table->string("apellido");
            $table->integer("edad");
            //le decimos que cree por defecto como false y lo ejecute el cambio
            $table->boolean('status');
             //le decimos que no sea valor a cero y que sera entero la columna de la relacion
            $table->foreignId('id_tipoEmpleado')->references('idTipoEmpleado')->on('tipoEmpleado')->onUpdate("cascade");
            $table->timestamps();
        });

        DB::table('empleados')->insert([
            ["numeroEmpleado"=> "55280", "nombre" => "JESUS","apellido" =>"OLVERA","edad"=>"22","status"=>"TRUE", "id_tipoEmpleado"=>"1"  ],
            ["numeroEmpleado"=> "22343", "nombre" => "DANIEL","apellido" =>"CARDENAZ","edad"=>"12","status"=>"TRUE", "id_tipoEmpleado"=>"2"  ]
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

        Schema::drop('empleados');
    }
}
