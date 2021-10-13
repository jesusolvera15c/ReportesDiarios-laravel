<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    protected $fillable = [
        "idEmpleado",
        "numeroEmpleado",
        "nombre",
        "apellido",
        "edad",
        "status",
        "id_tipoEmpleado"
    ];
}             
