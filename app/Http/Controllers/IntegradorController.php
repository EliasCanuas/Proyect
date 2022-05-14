<?php

namespace App\Http\Controllers;

use App\Models\Integrador;
use App\Http\Requests\StoreIntegradorRequest;
use App\Http\Requests\UpdateIntegradorRequest;

class IntegradorController extends Controller
{
   
    public function index()
    {
        $integradors = Integrador::all();
        return view('integradores.index', compact('integradors'));
    }

    
    public function create()
    {
        return view('integradores.create');
    }


    public function store(StoreIntegradorRequest $request)
    {
        $request->validate([
            'usuario'           =>  'required',
            'contrasenia'       =>  'required',
            'articulo'          =>  'required',
            'stock'             =>  'required',
            'precio'            =>  'required',
            'venta'             =>  'required',
            'facturas'          =>  'required'
            ]);
    
    
            Integrador::create([
                'usuario'              =>  $request->usuario,
                'contrasenia'          =>  $request->contrasenia,
                'articulo'             =>  $request->articulo,
                'stock'                =>  $request->stock,
                'precio'               =>  $request->precio,
                'venta'                =>  $request->venta,
                'facturas'             =>  $request->facturas
            ]);
    
            return redirect()->route('integrador.index');
    }

    
    public function show(Integrador $integrador)
    {
        return view('integradores.show', compact('integrador'));
    }

   
    public function edit(Integrador $integrador)
    {
        return view('integradores.edit', compact('integrador'));
    }

   
    public function update(UpdateIntegradorRequest $request, Integrador $integrador)
    {
       $request->validate([
            'usuario'           =>  'required',
            'contraseña'        =>  'required',
            'articulo'          =>  'required',
            'stock'             =>  'required',
            'precio'            =>  'required',
            'venta'             =>  'required',
            'facturas'          =>  'required'
            ]);

            $integrador->update($request->all());

            return redirect()->route('integradores.index'); 
    }



   
    public function destroy(Integrador $integrador)
    {
        $integrador->delete();

        return redirect()->route('integrador.index');
    }

    public function datatable()
    {
        $integradors=integrador::all();
        return view('integradors.datatables',compact('integradors'));
    }
}