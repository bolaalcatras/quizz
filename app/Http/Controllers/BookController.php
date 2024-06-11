<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index (){

        $datos = Book::all();
        return view('crud.index' , compact('datos'));
    }

    public function show ($datos){

        $datos = Book::find($datos);

        return view('crud.show' , compact('datos'));
    }
    
    public function create (){


        return view('crud.create');
    }

    public function store (Request $request){

        $newDatos = new Book();

        $newDatos->editorial=$request->editorial;
        $newDatos->telefono=$request->telefono;
        $newDatos->paginas=$request->paginas;
        $newDatos->isbn=$request->isbn;
        $newDatos->save();

        return "datos enviados con exito";
        return view('crud.create');


    }

    public function edit ($datos){

        $datos = Book::find($datos);
        return view('crud.edit', compact('datos'));
    }

    public function update (Request $request, $datos){


        $datos = Book::find($datos);

        $datos->nombre=$request->nombre;
        $datos->dni=$request->dni;
        $datos->telefono=$request->telefono;
        $datos->direccion=$request->direccion;
        $datos->save();

        return redirect(route('crud.show', $datos->id));
    }

    public function destroy ($datos){

        $datos = Book::find($datos);
        $datos->delete();

        
    }

    

}
