<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\fakultas;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::all();

      
      
        return view('prodi.index',compact('prodi'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = fakultas::all();
        $prodi = Prodi::all();
        
        return view('prodi.create',compact('prodi','fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{


   $prodi = Prodi::create([
    'name_prodi'=>$request->nama_prodi,
    'kode_prodi'=>$request->kode_prodi,
    'fakultas_id'=>$request->fakultas_id,
]);

  
     return redirect()->route('prodi.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
 public function edit($id)
{
    $prodi = Prodi::findOrFail($id);
    return view('prodi.edit', compact('prodi'));
}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
    $prodi = Prodi::findOrFail($id);

    $prodi->update([
        'nama_prodi' => $request->name,
        'kode_prodi'   => $request->kode,
    ]);

    return redirect()->route('prodi.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();
        return redirect()->route('prodi.index');
    }
}
