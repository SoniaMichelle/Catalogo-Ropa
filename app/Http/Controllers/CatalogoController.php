<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\File;
class CatalogoController extends Controller
{
    public function catalogo(){
        /* Mandamos a llamar todo lo que tenga nuestra tabla */
        $products = Post::all();
        /* Y lo mandamo a mostrar a nuestra vista */
        $vistas= view('layout/header'). 
        view('catalogo/producto',compact('products')) .
        view('layout/footer');
        return $vistas;
    }
}
