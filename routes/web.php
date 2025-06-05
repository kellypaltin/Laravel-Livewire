<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return "Saludos desde las rutas de Laravel";
});

Route::get("contacto", function () {
    // resources/view/contactenos.blade.php
    return view('contactenos');
});
Route::get("/nosotros", [PaginaController::class, "acercaDeNosotros"]);

Route::get("/servicios", [PaginaController::class, "nuestroServicios"]);

// /persona/nombre/{nom}

Route::get("/persona/nombre/{nom}", function ($mi_nombre){
    return["nombre" => $mi_nombre];
});

// /return/nombre/{nom}/edad/{ed}
Route::get("/persona/nombre/{nom}/{ed}", function ($mi_nombre, $edad){
    return["nombre" => $mi_nombre, "edad" => $edad, "direccion" => ["avenida" => "av123", "zona" => "abc"]];
});

Route::get("/componentes", function(){
    return view("componentes");
});