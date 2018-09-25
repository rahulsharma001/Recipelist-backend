<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(){
        return Recipe::all();
    }

    public function show($id){
        return Recipe::find($id);
    }

    public function store(Request $request){
    $filePath = '';
    if ($request->user_photo) {
    $photoName = time().'.'.$request->user_photo->getClientOriginalExtension();
    $uploadStatus = $request->user_photo->move(public_path('avatar'), $photoName);
    if ($uploadStatus) {
        $filePath = public_path('avatar').'/'.$photoName;
    }
}

        $responseArr = $request->all();
    $responseArr['user_photo'] = env('APP_URL').'/avatar/'.$photoName; 

       
        $result= Recipe::create($responseArr);

        if($result){
            $responseArr['errorCode']=0;
            $responseArr['errorMessage']='Successful';
            $responseArr['data']=$result;
        }else{
            $responseArr['errorCode']=1;
            $responseArr['errorMessage']='Unsuccessful';
            $responseArr['data']=$result;
        }

        return response($responseArr,200)->header('Content-Type','application/json');
    }
}
