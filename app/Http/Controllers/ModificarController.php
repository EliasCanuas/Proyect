<?php

namespace App\Http\Controllers;

use App\Models\modificar;
use App\Http\Requests\StoremodificarRequest;
use App\Http\Requests\UpdatemodificarRequest;

class ModificarController extends Controller
{
    
    public function index()
    {
        $modificars=modificar::all();
        return view('modificar.index', compact('modificars'));
    }

    public function create()
    {
        return view('modificar.create');
    }

    public function store(StoremodificarRequest $request)
    {
        $request->validate([
            'producto'     =>  'required',
            'cantidad'         =>  'required',
            'precio'         =>  'required'
            ]);
    
    
            modificar::create([
                'producto'          =>  $request->producto,
                'cantidad'            =>  $request->cantidad,
                'precio'            =>  $request->precio
            ]);
    
            return redirect()->route('modificar.index');
    }

    public function show(modificar $modificar)
    {
        return view('modificar.show', compact('modificar'));
    }

    public function edit(modificar $modificar)
    {
        return view('modificar.edit', compact('modificar'));
    }

  
    public function update(UpdatemodificarRequest $request, modificar $modificar)
    {
        $request->validate([
            'producto'     =>  'required',
            'cantidad'         =>  'required',
            'precio'         =>  'required'
            ]);

            $modificar->update($request->all());

            return redirect()->route('modificar.index'); 
    }

   
    public function destroy(modificar $modificar)
    {
        $modificar->delete();

        return redirect()->route('modificar.index');
    }

    public function datatable()
    {
        $modificars=modificar::all();
        return view('modificar.datatables',compact('modificars'));
    }
}
