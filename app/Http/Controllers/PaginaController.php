<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function acercaDeNosotros(){
        return view("sitio.nosotros");
    }

    public function nuestroServicios(){
        return view("sitio.servicios");
    }
}
