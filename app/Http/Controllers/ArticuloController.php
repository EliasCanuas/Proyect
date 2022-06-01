<?php

namespace App\Http\Controllers;

use App\Models\articulo;
use App\Http\Requests\StorearticuloRequest;
use App\Http\Requests\UpdatearticuloRequest;

class ArticuloController extends Controller
{
    
    public function index()
    {
        $articulos=articulo::all();
        return view('articulo.index', compact('articulos'));
    }


    public function create()
    {
        return view('articulo.create');
    }

   
    public function store(StorearticuloRequest $request)
    {
        $request->validate([
            'producto'     =>  'required',
            'cantidad'         =>  'required',
            'precio'         =>  'required'
            ]);
    
    
            articulo::create([
                'producto'          =>  $request->producto,
                'cantidad'            =>  $request->cantidad,
                'precio'            =>  $request->precio
            ]);
    
            return redirect()->route('articulo.index');
    }

    public function show(articulo $articulo)
    {
        return view('articulo.show', compact('articulo'));
    }

    public function edit(articulo $articulo)
    {
        return view('articulo.edit', compact('articulo'));
    }

   
    public function update(UpdatearticuloRequest $request, articulo $articulo)
    {
        $request->validate([
            'producto'     =>  'required',
            'cantidad'         =>  'required',
            'precio'         =>  'required'
            ]);

            $articulo->update($request->all());

            return redirect()->route('articulo.index'); 
    }

    public function destroy(articulo $articulo)
    {
        $articulo->delete();

        return redirect()->route('articulo.index');
    }

    public function datatable()
    {
        $articulos=articulo::all();
        return view('articulo.datatables',compact('articulos'));
    }
}
