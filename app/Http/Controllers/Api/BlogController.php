<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class BlogController extends Controller
{
    public function index(){
        $blog = Blog::all();

        $aqui = response()->json([
            "resultado" => $blog
        ], Response::HTTP_OK);

        return view('welcome', compact('blog'));
    }

    public function store(Request $request){
        $blog = new Blog();

        $blog->nombre = $request->nombre;
        $blog->descripcion = $request->descripcion;
        $blog->img = $request->img;
        $blog->save();

        return response()->json(['Resultado' => $blog], Response::HTTP_CREATED);
    }

    public function update(Request $request, $id){
        $blog = Blog::findOrFail($request->id);

        $blog->nombre = $request->nombre;
        $blog->descripcion = $request->descripcion;
        $blog->img = $request->img;
        $blog->save();

        return response()->json(['Resultado' => $blog], Response::HTTP_OK);
    }

    public function destroy($id){
        Blog::destroy($id);
        return response()->json(['Mensaje' => 'Registro eliminado'], Response::HTTP_OK);

    }
}
