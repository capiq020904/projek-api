<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view("mahasiswa.index", compact("mahasiswa"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = fakultas::all();
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.create',compact('mahasiswa','fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswa = mahasiswa::create([
            "nama_mahasiswa" => $request->nama_mahasiswa,
            "nim_mahasiswa" => $request->nim_mahasiswa,
            "fakultas_id" => $request->fakultas_id,
        ]);
        return redirect()->route('mahasiswa.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mahasiswa = mahasiswa::findOrFail($id);
        return view("mahasiswa.edit", compact("mahasiswa"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim_mahasiswa' => $request->nim_mahasiswa,

        ]);
        return redirect()->route("mahasiswa.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = mahasiswa::findorfail($id);
        $mahasiswa->delete();
        return redirect()->route("mahasiswa.index");
    }
}
