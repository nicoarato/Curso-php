<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = 'images';
    
    //relacion 1..*
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    
    //relacion 1..* likes
    public function likes(){
        return $this->hasMany('App\Like');
    }
    
    //relacion *..1
    public function images(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
