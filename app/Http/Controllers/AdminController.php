<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class AdminController extends Controller
{   
    public function admin(){
        //creacion de formulario
        return view('admin');
    }


    //metodo para guardar la imagen
    public function adminguardar(Request $request){
       /*validacion para seleccionar la imagen, no debe de estar bacio y solo 
       aceptara imagenes */ 
       /* request es la variable donde se guardaran los datos que el usuario
       ingreso en el formulario */
        $request->validate([
          'imagen' => 'required|image'
      ]);
      /* Creamos un nuevo objeto donde mandaremos a llamar a nuestro modelo post*/
        $newPost =new Post();
        /* Verificamos que que nuestro formulario este lleno que no este vacio */
        if ($request->hasFile('imagen')) {
            /* Guardamos en nombre de la imagen o la ruta en una variable */
           /* Obtenemos el archivo de la imagen */
            $file = $request->file('imagen');
             /* Renombrar el nombre de nuestra imagen */
            $filenombre = Str::slug($request->nombre).".".$file->guessExtension();
            /* Ruta donde se guardaran las imagenes subidas a la base de datos */
            $url = 'img/';
            /* Subir la imagen a la base de datis    movemos la imagen hacia la carpeta */
            $uploadSucces = $request->file('imagen')->move($url,$filenombre);
            /* Guardamos el campo en la base de datos y concatenamos el nombre que le hemos dado */
            $newPost->imagen = $url . $filenombre;
        }
        /* LLenar los campos con los datos que ingreso el usario
        y los colocamos en las columnas de la base de datos */
        $newPost->nombre=$request->nombre;
        $newPost->descripcion=$request->descripcion;
        $newPost->precio=$request->precio;
        /* Guardamos los cambio y las subidas de archivos */
        $newPost->save();

       /*  return redirect()->back(); */
        /* return redirect()->route('/'); */
    }
        
}
