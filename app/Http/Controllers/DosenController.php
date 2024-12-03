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
        $allDosen = Dosen::all();
        return view('dosen.index', compact('allDosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat validasi
        $validatedData = $request->validate([
            'nidn' => 'required|max:10',
            'nama_dosen' => 'required|max:100'
        ]);

        // simpan data
        Dosen::create($validatedData);

        // redirect ke index Dosen
        return redirect()->route('dosen.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
        return view('dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        //
        return view('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        // buat validasi
        $validatedData = $request->validate([
            'nama_dosen' => 'required|max:100'
        ]);

        // update data
        $dosen->update($validatedData);

        // redirect ke index Dosen
        return redirect()->route('dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        //
        $dosen->delete();
        return redirect()->route('dosen.index');
    }
}
