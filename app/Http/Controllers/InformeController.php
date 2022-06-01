<?php

namespace App\Http\Controllers;

use App\Models\informe;
use App\Http\Requests\StoreinformeRequest;
use App\Http\Requests\UpdateinformeRequest;

class InformeController extends Controller
{
   
    public function index()
    {
        $informes=informe::all();
        return view('informe.index', compact('informes'));
    }

    public function create()
    {
        return view('informe.create');
    }

    public function store(StoreinformeRequest $request)
    {
        $request->validate([
            'producto'     =>  'required',
            'cantidad'         =>  'required',
            'precio'         =>  'required'
            ]);
    
    
            informe::create([
                'producto'          =>  $request->producto,
                'cantidad'            =>  $request->cantidad,
                'precio'            =>  $request->precio
            ]);
    
            return redirect()->route('informe.index');
    }


    public function show(informe $informe)
    {
        return view('informe.show', compact('informe'));
    }

    public function edit(informe $informe)
    {
        return view('informe.edit', compact('informe'));
    }


    public function update(UpdateinformeRequest $request, informe $informe)
    {
        $request->validate([
            'producto'     =>  'required',
            'cantidad'         =>  'required',
            'precio'         =>  'required'
            ]);

            $informe->update($request->all());

            return redirect()->route('informe.index'); 
    }

    public function destroy(informe $informe)
    {
        $informe->delete();

        return redirect()->route('informe.index');
    }

    public function datatable()
    {
        $informes=informe::all();
        return view('informe.datatables',compact('informes'));
    }
}
