<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Tes;
use App\Http\Requests\StoreJenis_TesRequest;
use App\Http\Requests\UpdateJenis_TesRequest;

class JenisTesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jenis = Jenis_Tes::all();
        return view('admin.jenis_tes.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.jenis_tes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJenis_TesRequest $request)
    {
        //
        Jenis_Tes::create($request->all());
        return redirect()->route('jenis.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis_Tes $jenis_Tes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis_Tes $jenis)
    {
        //
        return view('admin.jenis_tes.edit', compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJenis_TesRequest $request, Jenis_Tes $jenis)
    {
        
            $jenis->update($request->all());
            return redirect()->route('jenis.index')->with('success', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis_Tes $jenis)
    {
        //
        $jenis->delete();
        return redirect()->route('jenis.index')->with('success', 'Data berhasil dihapus');
    }
}
