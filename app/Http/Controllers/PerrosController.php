<?php

namespace App\Http\Controllers;

use App\Models\Perro;
use Illuminate\Http\Request;

class PerrosController extends Controller
{
    public function perros(){

        $datosperro['perros']=Perro::all();
        return view('prueba.perro', $datosperro);

    }
}
