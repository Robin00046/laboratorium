<?php

namespace App\Http\Controllers;

use App\Models\Laboratory;
use App\Http\Requests\StoreLaboratoryRequest;
use App\Http\Requests\UpdateLaboratoryRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $lab = Laboratory::join('pasiens', 'pasiens.id', '=', 'laboratories.pasien_id')
        ->join('diagnosas', 'diagnosas.id', '=', 'laboratories.diagnosa_id')
        ->select('laboratories.*', 'diagnosas.nama', 'pasiens.nama')
            ->get();
        // dd($lab);
        return view('laboratory.index', compact('lab'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tes = Laboratory::orderby('id', 'desc')->first()->id;
        
        // dd($tes,1));
        $table_no = $tes; // nantinya menggunakan database dan table sungguhan

        $tgl = 'Reg-';
        $no= $tgl.$table_no;
        $auto=substr($no,4);
        $auto=intval($auto)+1;
        $value=substr($no,0,4).str_repeat(0,(6-strlen($auto))).$auto;
    //    dd($auto_number); 
        // dd(Laboratory::latest()->first()->id);
        return view('laboratory.create', compact('value'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_lab' => 'required',
            'id_pasien' => 'required',
            'id_dokter' => 'required',
            'lab_id' => 'required',
            'tanggal' => 'required',
            'hasil_lab' => 'required',
            'keterangan' => 'required',
        ]);
        $validated['status'] = 1;
        $validated = $request->all();
        Laboratory::create($validated);
        return redirect()->route('laboratory.index');
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
    public function update(Request $request, Laboratory $laboratory)
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
