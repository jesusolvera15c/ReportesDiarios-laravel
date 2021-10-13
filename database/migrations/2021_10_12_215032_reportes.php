<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reportes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reportes', function (Blueprint $table) {
            $table->bigIncrements('idReporte');
            $table->string("detallePago");
            $table->float('cantidadPago', 8, 2);
            //le decimos que no sea valor a cero y que sera entero la columna de la relacion
            $table->foreignId('id_empleado')->references('idEmpleado')->on('empleados');

            //le decimos que no sea valor a cero y que sera entero la columna de la relacion
            $table->foreignId('id_usuariofk')->references('idUsuario')->on('usuarios');
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
        //
    }
}
