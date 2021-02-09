<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;

class TransportistaController extends Controller
{
    public function index()
    {
        $transportistas = Transportista::all();
        return view("transportistas.index", compact("transportistas"));
    }


    public function show(int $id)
    {
        $transportista = Transportista::find($id);
        return view('transportistas.show', compact("transportista"));
    }


}
