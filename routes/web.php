<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatalogoController;

Route::get('/', function () {
    $vistas = view('layout/header') . view('catalogo/index') . view('layout/footer');
    return $vistas;
});/* 
Route::get('/inicio', function () {
    $vistas = view('layout/header') . 
    view('catalogo/index') .
    view('layout/footer');
    return $vistas;
}); */
Route::get('/contactos', function () {
    $vistas = view('layout/header') . 
    view('catalogo/contactos') .
    view('layout/footer');
    return $vistas;
});
Route::get('/nosotros', function () {
    $vistas = view('layout/header') . 
    view('catalogo/nosotros') .
    view('layout/footer');
    return $vistas;
});

//Llama al formulario
Route::get('admin',[AdminController::class,'admin']);

//enviar al servidor o guardar 
Route::post('adminguardar',[AdminController::class,'adminguardar']);

//mostrar los productos de la bd
Route::get('producto', [CatalogoController::class, 'catalogo']);
