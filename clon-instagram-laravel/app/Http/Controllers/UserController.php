<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage; //para usar el storage
use Illuminate\Support\Facades\File; //para el objeto storage

class UserController extends Controller
{
    public function config(){
        return view('user.config');
    }
    
    public function update(Request $request){
       
        
        //conseguir usuario autentificado
        $user = \Auth::user();
        $id = $user->id;
        
        //validacion del formulario
        $validate = $this->validate($request , [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'nick' => 'required|string|max:255|unique:users,nick,'.$id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$id
        ]);
        
        //recoger datos del form
        $name = $request->input('name');
        $surname = $request->input('surname');
        $nick = $request->input('nick');
        $email = $request->input('email');
        
         
        //subir la imagen
        $image_path = $request->file('image_path');
        
        if($image_path){
            //poner nombre unico
            $image_path_name = time(). $image_path->getClientOriginalName();
            
            //colocar la imagen en storage/app/users
            Storage::disk('users')->put($image_path_name, File::get($image_path));
            
            //seteo nombre en el objeto
            $user->image = $image_path_name;
        }
        
        
        //Asignar nuevos valores al objeto usuario
        
        $user->name = $name;
        $user->surname = $surname;
        $user->nick = $nick;
        $user->email = $email;
        
        //Ejecutar consulta y update
        $user->update();
        
        return redirect()->route('config')
                         ->with(['message'=>'Usuario actualizado correctamente']);
    }
    
    public function getImage($filename){
        $file = Storage::disk('users')->get($filename);
        return new Response($file, 200);
    }
}
