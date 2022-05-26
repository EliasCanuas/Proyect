<?php

namespace App\Http\Controllers;

use App\Models\jefe;
use App\Http\Requests\StorejefeRequest;
use App\Http\Requests\UpdatejefeRequest;

class JefeController extends Controller
{

    public function index()
    {
        $jefes = jefe::all();
        return view('bosses.index', compact('jefes'));
    }

    public function create()
    {
        return view('bosses.create');
    }

    public function store(StorejefeRequest $request)
    {
        $request->validate([
            'articulo'          =>  'required',
            'precioventa'       =>  'required',
            'proveedor'         =>  'required'
            ]);
    
    
            jefe::create([
                'articulo'             =>  $request->articulo,
                'precioventa'          =>  $request->precioventa,
                'proveedor'            =>  $request->proveedor
            ]);
    
            return redirect()->route('jefe.index');
    }


    public function show(jefe $jefe)
    {
        return view('bosses.show', compact('jefe'));
    }

    public function edit(jefe $jefe)
    {
        return view('bosses.edit', compact('jefe'));
    }

    public function update(UpdatejefeRequest $request, jefe $jefe)
    {
        $request->validate([
            'articulo'          =>  'required',
            'precioventa'       =>  'required',
            'proveedor'         =>  'required'
            ]);

            $jefe->update($request->all());

            return redirect()->route('jefe.index'); 
    }

    public function destroy(jefe $jefe)
    {
        $jefe->delete();

        return redirect()->route('jefe.index');
    }

    public function datatable()
    {
        $jefes=jefe::all();
        return view('bosses.datatables',compact('jefe'));
    }
}
