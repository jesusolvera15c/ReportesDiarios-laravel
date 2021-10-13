<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class TipoEmpleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tipoEmpleado', function (Blueprint $table) {
            $table->bigIncrements('idTipoEmpleado');
            $table->string("etiqueta");
            $table->timestamps();
        });

        DB::table('tipoEmpleado')->insert([
            ["etiqueta"=> "ADMINISTRATIVO"],
            ["etiqueta"=> "CAMPO"],
            ["etiqueta"=> "COMUNITARIO"],
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
