<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    //

    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       
        return view('empleados.empleados');
    }
}
