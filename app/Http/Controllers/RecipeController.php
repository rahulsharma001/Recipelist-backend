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
        $responseArr=array();
        $result= Recipe::create($request->all());
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
