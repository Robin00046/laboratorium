<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Http\Requests\StorePasienRequest;
use App\Http\Requests\UpdatePasienRequest;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pasien = Pasien::all();
        return view('admin.pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePasienRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
        return view('admin.pasien.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        //
        return view('admin.pasien.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePasienRequest $request, Pasien $pasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        //
    }
}
