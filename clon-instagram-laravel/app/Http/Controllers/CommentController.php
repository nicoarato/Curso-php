<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function save(Request $request){
        
        //validar datos
        $validate = $this->validate($request, [
            'image_id' => 'integer|required',
            'content' => 'string|required',
        ]);
        
        //recoger datos
        $user = \Auth::user();
        $image_id = $request->input('image_id');
        $content = $request->input('content');
       
        //Asigno valores a nuevo objeto
        $comment = new Comment();
        
        $comment->user_id = $user->id;
        $comment->image_id = $image_id;
        $comment->content = $content;
        
        //guardo en bdatos
        $comment->save();
        
        //redireccion
        return redirect()->route('image.detail',['id' => $image_id])
                         ->with([
                             'message' => 'Has comentado correctamente'
                         ])
                ;
    }
    
    
}
