<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    public function create()
    {
        return view("paquetes.create");
    }

    public function store(Request $r)
    {

        $paquete = new Paquete();
        $paquete->direccion = $r->direccion;
        $paquete->entregado = $r->entregado;
        $paquete->imagen = $r->imagen;
        $paquete->save();

        return redirect()->route('transportistas.index', $paquete);
    }
}
