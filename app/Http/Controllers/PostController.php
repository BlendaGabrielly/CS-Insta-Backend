<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function listar(){
        $posts=Post::all();
        return $posts;
    }
    public function create(Request $request){
        $Post=new Post();
        $Post->nome=$request->nome;
        $Post->imagem=$request->imagem;
        $Post->legenda=$request->legenda;
        $status=$Post->save();
    if($status){
        return \response("gravado",201);
    }
    }
}
