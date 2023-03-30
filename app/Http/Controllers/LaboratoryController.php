<?php

namespace App\Http\Controllers;

use App\Models\Laboratory;
use App\Http\Requests\StoreLaboratoryRequest;
use App\Http\Requests\UpdateLaboratoryRequest;

class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('laboratory.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('laboratory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLaboratoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Laboratory $laboratory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laboratory $laboratory)
    {
        //
        return view('laboratory.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLaboratoryRequest $request, Laboratory $laboratory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laboratory $laboratory)
    {
        //
    }
}