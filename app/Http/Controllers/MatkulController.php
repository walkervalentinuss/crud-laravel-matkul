<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Models\Dosen;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allMatkul = Matkul::all();
        return view('matkul.index', compact('allMatkul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $dosen = Dosen::all();
        $ruangan = Ruangan::all();
        return view('matkul.create', compact('dosen', 'ruangan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat validasi
        $validatedData = $request->validate([
            'kode' => 'required|max:10',
            'nama' => 'required|max:255',
            'tahun_kurikulum' => 'required|integer:4',
            'dosen_id' => 'required|max:100',
            'ruangan_id' => 'required|max:100',
        ]);

        // simpan data
        Matkul::create($validatedData);

        // redirect ke index Dosen
        return redirect()->route('matkul.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matkul $matkul)
    {
        //
        return view('matkul.show', compact('matkul'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matkul $matkul)
    {
        //
        $dosen = Dosen::all();
        $ruangan = Ruangan::all();
        return view('matkul.edit', compact('dosen', 'ruangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matkul $matkul)
    {
        // buat validasi
        $validatedData = $request->validate([
            'kode' => 'required|max:10',
            'nama' => 'required|max:255',
            'tahun_kurikulum' => 'required|integer:4',
            'dosen_id' => 'required|max:100',
            'ruangan_id' => 'required|max:100',
        ]);

        // update data
        $matkul->update($validatedData);

        // redirect ke index Dosen
        return redirect()->route('matkul.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matkul $matkul)
    {
        //
        $matkul->delete();
        return redirect()->route('matkul.index');
    }
}