<?php

namespace App\Http\Controllers;
use App\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        // $b=$request->all();
        $comment =new Comment;
        $comment->comment=$request->comment;
        $comment->recipe_id=$request->recipe_id;
        // print_r($comment);
        // die();
        $comment->save();
    // Comment::create(['comment'=>$b]);
    }
}
