<?php

namespace App\Http\Controllers;

use App\Models\Perro;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $datos['usuarios']=Usuario::all();
        return view('prueba.index', $datos);
    }

    public function dueñoperro()
    {
        $dueñoperro = Usuario::with('perros')->get();
        return view('prueba.perrosvista', compact('dueñoperro'));
    }

    /**
     * Show the form for creating a new resource.
     */

}
