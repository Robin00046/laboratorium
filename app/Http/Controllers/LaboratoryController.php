<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Pasien;
use App\Models\Diagnosa;
use App\Models\Laboratory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreLaboratoryRequest;
use App\Http\Requests\UpdateLaboratoryRequest;
use App\Models\Jenis_Tes;

class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (auth()->user()->hasRole('Dokter')) {
            $lab = Laboratory::join('pasiens', 'pasiens.id', '=', 'laboratories.pasien_id')
        ->join('diagnosas', 'diagnosas.id', '=', 'laboratories.diagnosa_id')
        ->select('laboratories.*', 'pasiens.nama as pasien', 'diagnosas.nama as diagnosa')
        ->where('status', '=', 1)
        ->where('user_id', '=', Auth::user()->id)
        ->get();
        } elseif (auth()->user()->hasRole('Lab')) {
            $lab = Laboratory::join('pasiens', 'pasiens.id', '=', 'laboratories.pasien_id')
        ->join('diagnosas', 'diagnosas.id', '=', 'laboratories.diagnosa_id')
        ->select('laboratories.*', 'pasiens.nama as pasien', 'diagnosas.nama as diagnosa')
        ->where('status', '=', 1)
        ->get();
        }
        
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
        // $user = User::all();
        $pasien = Pasien::where('user_id', '=', Auth::user()->id)
            ->get();
        $jenis = Jenis_Tes::all();
            // dd($pasien);
    //    dd($auto_number); 
        // dd(Laboratory::latest()->first()->id);
        return view('laboratory.create', compact('value', 'pasien', 'jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_lab' => 'required',
            'pasien_id' => 'required',
            'diagnosa_id' => 'required',
            'tanggal' => 'required',
        ]);
        $validated['dokter_id'] = Auth::user()->id;
        $validated['status'] = 1;
        // dd($validated);
        
        Laboratory::create($validated);
        return redirect()->route('laboratory.index')->with('success', 'Data berhasil di input');
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
        $laboratory->load('pasien', 'diagnosa');
        // $laboratory;
        // $student = Student::where('id',$id)->get();
        $pasien = Pasien::where('user_id', '=', Auth::user()->id)
            ->get();
        $jenis = Jenis_Tes::all();
        $diagnosa = Diagnosa::where('id',$laboratory['diagnosa_id'])->get();
        // dd($diagnosa);
        return view('laboratory.edit', compact('laboratory', 'diagnosa', 'pasien', 'jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laboratory $laboratory)
    {
        //
        // dd($laboratory);
        $validated = $request->validate([
            'no_lab' => 'required',
            'pasien_id' => 'required',
            'diagnosa_id' => 'required',
            'tanggal' => 'required',
        ]);
        $validated['dokter_id'] = Auth::user()->id;
        $validated['status'] = 1;
        $laboratory->update($validated);
        return redirect()->route('laboratory.index')->with('success', 'Data Berhasil di Update');
    }

    public function update_hasil(Request $request, Laboratory $laboratory)
    {
        // dd($laboratory);
        $validated = $request->validate([
            'hasil' => 'required',
        ]);
        $validated['status'] = 2;
        // dd($validated);
        
        $laboratory->update($validated);
        return redirect()->route('laboratory.index')->with('success', 'Hasil berhasil di input');
    }

    // hasil
    public function hasil()
    {
        //
        if (auth()->user()->hasRole('Dokter')) {
            $lab = Laboratory::join('pasiens', 'pasiens.id', '=', 'laboratories.pasien_id')
        ->join('diagnosas', 'diagnosas.id', '=', 'laboratories.diagnosa_id')
        ->select('laboratories.*', 'pasiens.nama as pasien', 'diagnosas.nama as diagnosa')
        ->where('status', '=', 2)
        ->where('user_id', '=', Auth::user()->id)
        ->get();
        } elseif (auth()->user()->hasRole('Lab')) {
            $lab = Laboratory::join('pasiens', 'pasiens.id', '=', 'laboratories.pasien_id')
        ->join('diagnosas', 'diagnosas.id', '=', 'laboratories.diagnosa_id')
        ->select('laboratories.*', 'pasiens.nama as pasien', 'diagnosas.nama as diagnosa')
        ->where('status', '=', 2)
        ->get();
        }
        
        // dd($lab);
        return view('laboratory.hasil', compact('lab'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laboratory $laboratory)
    {
        //
        $laboratory->delete();
        return redirect()->route('laboratory.index')->with('success', 'Data Berhasil di Hapus');
    }
}
