<?php

namespace App\Http\Controllers;

use App\Models\almacen;
use App\Http\Requests\StorealmacenRequest;
use App\Http\Requests\UpdatealmacenRequest;

class AlmacenController extends Controller
{
    
    public function index()
    {
        $almacens=almacen::all();
        return view('almacen.index', compact('almacens'));
    }


    public function create()
    {
        return view('almacen.create');
    }

    public function store(StorealmacenRequest $request)
    {
        $request->validate([
            'producto'     =>  'required',
            'cantidad'         =>  'required'
            ]);
    
    
            almacen::create([
                'producto'          =>  $request->producto,
                'cantidad'            =>  $request->cantidad
            ]);
    
            return redirect()->route('almacen.index');
    }

    public function show(almacen $almacen)
    {
        return view('almacen.show', compact('almacen'));
    }

    public function edit(almacen $almacen)
    {
        return view('almacen.edit', compact('almacen'));
    }

    public function update(UpdatealmacenRequest $request, almacen $almacen)
    {
        $request->validate([
            'producto'     =>  'required',
            'cantidad'         =>  'required'
            ]);

            $almacen->update($request->all());

            return redirect()->route('almacen.index'); 
    }

    public function destroy(almacen $almacen)
    {
        $almacen->delete();

        return redirect()->route('almacen.index');
    }

    public function datatable()
    {
        $almacens=almacen::all();
        return view('almacen.datatables',compact('almacens'));
    }
}
