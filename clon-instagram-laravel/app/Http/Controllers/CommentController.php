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
    
    public function delete($id){
        //obtener usuario
        $user = \Auth::user();
        
        //Obtener comentario
        $comment = Comment::find($id);
        
        //Ver si soy dueño del comentario o la publicacion
        if($user && ($user->id == $comment->user_id || $comment->image->user_id == $user->id)){
            $comment->delete();
            
            //redireccion
            return redirect()->route('image.detail',['id' => $comment->image->id])
                             ->with([
                                 'message' => 'Cometario borrado correctamente'
                             ]);
        }else{
            return redirect()->route('image.detail',['id' => $comment->image->id])
                             ->with([
                                 'message' => 'El cometario no se ha eliminado.'
                             ]);
        }
        
    }
    
    
}
