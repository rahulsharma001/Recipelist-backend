<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable=['title','description','user_photo'];

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
