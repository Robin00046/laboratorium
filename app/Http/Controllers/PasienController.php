<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Http\Requests\StorePasienRequest;
use App\Http\Requests\UpdatePasienRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        if (auth()->user()->hasRole('Dokter')) {
            $pasien = Pasien::join('users', 'users.id', '=', 'pasiens.user_id')
            ->select('pasiens.*', 'users.name as dokter')->where('user_id', '=', Auth::user()->id)
            ->get();
        } elseif (auth()->user()->hasAnyRole('Admin|Lab')) {
            $pasien = Pasien::join('users', 'users.id', '=', 'pasiens.user_id')
            ->select('pasiens.*', 'users.name as dokter')->orderby('id', 'desc')
            ->get();
        }
        
        // dd($pasien);
        return view('admin.pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $dokter = User::whereHas('roles', function ($query) {
            $query->where('name', 'dokter');
        })->get();
        // dd($dokter);
        return view('admin.pasien.create', compact('dokter'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $validated = $request->validate([
            'user_id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required',
        ]);
        Pasien::create($validated);
        return redirect()->route('pasien.index')->with('success', 'Data berhasil ditambahkan');
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
        // dd($pasien);
        $dokter = User::whereHas('roles', function ($query) {
            $query->where('name', 'dokter');
        })->get();
        return view('admin.pasien.edit', compact('pasien', 'dokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        //
       $validated = $request->validate([
            'user_id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required',
        ]);
        $pasien->update($validated);
        return redirect()->route('pasien.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        //
        $pasien->delete();
        return redirect()->route('pasien.index')->with('success', 'Data berhasil dihapus');
    }
}
