<?php

use App\Http\Controllers\CalculosController;
use App\Http\Controllers\KeepinhoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/teste/{valor}', function ($valor) {
    return "Você digitou: {$valor}";
});

//Calculos
Route::get("/calc/somar/{x}/{y}", [CalculosController::class, "somar"]);
Route::get("/calc/sub/{x}/{y}", [CalculosController::class, "subtrair"]);
Route::get("/calc//{x}/{y}", [CalculosController::class, "multiplicar"]);
Route::get("/calc/sub/{x}/{y}", [CalculosController::class, "dividir"]);
Route::get("/calc/quad/{x}", [CalculosController::class, "quadrado"]);

//Rotas do keepinho
Route::prefix("/keep")->group(function(){
    Route::get('/', [KeepinhoController::class,'index']);
});
