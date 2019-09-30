<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
