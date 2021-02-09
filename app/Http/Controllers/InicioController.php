<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function home()
    {
        return redirect()->action([TransportistaController::class, "index"]);
    }
}
