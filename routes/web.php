<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/metric', function () {
    try {
        $count = DB::table('agents')->count();
        return "Número de agentes: {$count}";
    } catch (\Exception $e) {
        return "Error al conectar con la base de datos: " . $e->getMessage();
    }
});
