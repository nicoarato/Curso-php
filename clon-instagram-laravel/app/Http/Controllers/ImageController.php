<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Image;
use App\Comment;
use App\Like;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create(){
        return view('image.create');
    }
    
    public function save(Request $request){
        //validacion
        $validate = $this->validate($request, [
            'description' => 'required',
            'image_path' => 'required|image'
        ]);
        
        //recoger datos
        $image_path = $request->file('image_path');
        $description = $request->input('description');
        
        //Asignar valores a nuevo objeto
        $user = \Auth::user();
        $image = new Image;
        $image->user_id = $user->id;
        $image->description = $description;
        
        //subir fichero
        if($image_path){
            $image_path_name = time().$image_path->getClientOriginalName();
            Storage::disk('images')->put($image_path_name,File::get($image_path));
            $image->image_path= $image_path_name;
        }
        $image->save();
        
        return redirect()->route('home')->with([
            'message' => 'Foto subida con Éxito'
        ]);
        
    }
    
    public function getImage($filename){
        $file = Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }
    
    public function detail($id){
        $image = Image::find($id);
        
        return view('image.detail',[
            'image' => $image
        ]);
    }
    
    public function delete($id){
        $user = \Auth::user();
        $image = Image::find($id);
        $comments = Comment::where('image_id',$id)->get();
        $likes = Like::where('image_id',$id)->get();
        
        if($user && $image && $image->user->id == $user->id){
            
            //elimino comentario
            if($comments && count($comments)>=1){
                foreach($comments as $comment){
                    $comment->delete();
                }
            }
            
            //elimino likes
            if($likes && count($likes)>=1){
                foreach($likes as $like){
                    $like->delete();
                }
            }
            //eliminar ficheros de imagen
            Storage::disk('images')->delete($image->image_path);
            
            //eliminar registro de la imagen
            $image->delete();
            $message = array('message' => 'La imagen se borró correctamente. :D');
        }else{
            $message = array('message' => 'La imagen no se borró.   :( ');
        }
        
        return redirect()->route('home')->with($message);
        
        
    }
}
