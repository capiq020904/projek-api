<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        return view("dosen.index", compact("dosens"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosen = Dosen::all();
        return view("dosen.create", compact("dosen"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dosen = Dosen::create([
            "nama_dosen" => $request->nama_dosen,
            "nid_dosen" => $request->nid_dosen,
        ]);

        return redirect()->route("dosen.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {        
        $dosen = Dosen::findOrFail($id);
        $dosen->update([
            'nama_dosen'=> $request->nama_dosen,
            'nid_dosen'=> $request->nid_dosen,
            ]);

            return redirect()->route('dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        
        $dosen->delete();
        return redirect()->route('dosen.index');
    }
}
