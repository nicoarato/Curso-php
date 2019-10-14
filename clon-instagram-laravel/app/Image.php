<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = 'images';
    
    //relacion 1..*
    public function comments(){
        return $this->hasMany('App\Comment')->orderBy('id','desc');
    }
    
    //relacion 1..* likes
    public function likes(){
        return $this->hasMany('App\Like');
    }
    
    //relacion *..1
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
