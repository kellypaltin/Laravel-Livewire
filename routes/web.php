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
