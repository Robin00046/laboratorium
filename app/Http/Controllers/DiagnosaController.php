<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Http\Requests\StoreDiagnosaRequest;
use App\Http\Requests\UpdateDiagnosaRequest;
use App\Models\Jenis_Tes;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $diagnosa = Diagnosa::join('jenis__tes', 'diagnosas.id_jenis', '=', 'jenis__tes.id')->select('diagnosas.*', 'jenis__tes.nama as nama_jenis')->get();
        // dd($diagnosa);
        return view('admin.diagnosa.index', compact('diagnosa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $jenis = Jenis_Tes::all();
        return view('admin.diagnosa.create', compact('jenis'));
        // return view('admin.diagnosa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiagnosaRequest $request)
    {
        //
        // dd($request->all());
        Diagnosa::create($request->all());
        return redirect()->route('diagnosa.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagnosa $diagnosa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diagnosa $diagnosa)
    {
        //
        $jenis = Jenis_Tes::all();
        $diagnosa->load('jenis_tes');
        // dd($diagnosa);
        return view('admin.diagnosa.edit', compact('diagnosa', 'jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiagnosaRequest $request, Diagnosa $diagnosa)
    {
        //
        // dd($request->all());
        $diagnosa->update($request->all());
        return redirect()->route('diagnosa.index')->with('success', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnosa $diagnosa)
    {
        //
        $diagnosa->delete();
        return redirect()->route('diagnosa.index')->with('success', 'Data berhasil dihapus');
        
    }
}
