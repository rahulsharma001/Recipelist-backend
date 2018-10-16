<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['comment','recipe_id'];
    public function recipes(){
        return $this->belongsTo('App\Recipe');
    }
}
