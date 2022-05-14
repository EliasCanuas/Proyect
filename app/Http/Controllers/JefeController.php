<?php

namespace App\Http\Controllers;

use App\Models\jefe;
use App\Http\Requests\StorejefeRequest;
use App\Http\Requests\UpdatejefeRequest;

class JefeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $integradors = boss::all();
        return view('bosses.index', compact('jeves'));
    }

    public function create()
    {
        return view('bosses.create');
    }

    public function store(StorejefeRequest $request)
    {
        $request->validate([
            'articulo'          =>  'required',
            'precioventa'            =>  'required'
            ]);
    
    
            jefe::create([
                'articulo'             =>  $request->articulo,
                'precioventa'               =>  $request->precioventa
            ]);
    
            return redirect()->route('bosses.index');
    }


    public function show(jefe $jefe)
    {
        return view('bosses.show', compact('boss'));
    }

    public function edit(jefe $jefe)
    {
        return view('bosses.edit', compact('boss'));
    }

    public function update(UpdatejefeRequest $request, jefe $jefe)
    {
        $request->validate([
            'articulo'          =>  'required',
            'precioventa'       =>  'required'
            ]);

            $jefe->update($request->all());

            return redirect()->route('bosses.index'); 
    }

    public function destroy(jefe $jefe)
    {
        $jefe->delete();

        return redirect()->route('boss.index');
    }

    public function datatable()
    {
        $integradors=boss::all();
        return view('jeves.datatables',compact('jeves'));
    }
}
