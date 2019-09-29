<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PeliculaController extends Controller
{
    public function index($pagina = 1) {
        $titulo = 'Listado de mis peliculas';
        return view('pelicula.index',[
            'titulo' => $titulo,
            'pagina' => $pagina
            ]);
    }

    public function detalle($year=null){
        return view('pelicula.detalle');
    }

    public function redirigir(){
        return redirect()->action('PeliculaController@detalle');
    }
    
    public function redirigir2(){
        return redirect('/peliculas');
    }
    
    public function redirigir3(){
        return redirect()->route('detalle.pelicula');
    }
    
    public function formulario(){
        return view('pelicula.formulario');
    }
    
    public function recibir(Request $request){
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        
       return "El nombre es : $nombre y su correo es : $email";
    }
}