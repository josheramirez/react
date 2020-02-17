<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    public function subir(Request $request){

        $data = $request->input('image');
        $photo = $request->file('image')->getClientOriginalName();
        $destination = base_path() . '/public/uploads';
        $request->file('image')->move($destination, $photo);


        $path=$request->file('image')->getClientOriginalName();
        return $photo."/".base_path();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return $request->input();
        // $file = $request->file('image');
        // return $file->getClientOriginalExtension();
    }

    public function store(Request $request)
    {
        //Instanciamos la clase Pokemons
        $post = new Post;
        //Declaramos el nombre con el nombre enviado en el request
        $post->details=$request->details;
        $post->title=$request->title;
        $post->img=$request->img;
        //Guardamos el cambio en nuestro modelo
        $post->save();
    }

   
    public function show($id)
    {
        return Post::where('id', $id)->get();
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        $post->title=$request->input('title');
        $post->save();
        return $post;

    }

    public function destroy(Post $post)
    {
        $post->delete();
        return "dato eliminado";
    }
}
