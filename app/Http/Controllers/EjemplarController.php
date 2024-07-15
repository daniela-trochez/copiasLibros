<?php

namespace App\Http\Controllers;

use App\Models\Ejemplar;
use App\Models\Libro;
use Illuminate\Http\Request;

class EjemplarController extends Controller
{
   
    public function index()
    {
        $ejemplars = Ejemplar::with('libro')->get();
        return view('ejemplars.index', compact('ejemplars'));
    }

    
    public function create()
    {
        $libros = Libro::all();
        return view('ejemplars.create',compact('libros'));
    }


    public function store(Request $request)
    {
        Ejemplar::create($request->all());
        return redirect()->route('ejemplars.index');
    }

   
    public function show(Ejemplar $ejemplar)
    {
        return view('ejemplars.show',compact('ejemplar'));

    }

    
    public function edit(Ejemplar $ejemplar)
    {
        $libros = Libro::all();
        return view('ejemplars.edit',compact('libros','ejemplar'));

    }

    public function update(Request $request, Ejemplar $ejemplar)
    {
        $ejemplar->update($request->all());
        return redirect()->route('ejemplars.show', $ejemplar);
    }

    
    public function destroy(Ejemplar $ejemplar)
    {
        $ejemplar->delete();
        return redirect()->route('ejemplars.index');
    }
}
