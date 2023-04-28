<?php

use App\Http\Controllers\Dashboard;
use App\Models\Diagnosa;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\JenisTesController;
use App\Http\Controllers\LaboratoryController;
use App\Models\Pasien;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::middleware('auth')->group(function () {
    Route::get('/dashboard_admin', [Dashboard::class, 'admin'])->name('dashboard_admin')->middleware('role:Admin');
    Route::get('/dashboard_dokter', [Dashboard::class, 'dokter'])->name('dashboard_dokter')->middleware('role:Dokter');
    Route::get('/dashboard_lab', [Dashboard::class, 'lab'])->name('dashboard_lab')->middleware('role:Lab');
    Route::resource('user', UserController::class)->name('user', 'users')->except(['show'])->middleware('role:Admin');
    Route::resource('pasien', PasienController::class)->name('pasien', 'pasiens')->except(['show']);
    Route::resource('laboratory', LaboratoryController::class)->name('laboratory', 'laboratories')->except(['show']);
    Route::resource('diagnosa', DiagnosaController::class)->name('diagnosa', 'diagnosas')->except(['show']);
    Route::resource('jenis', JenisTesController::class)->name('jenis', 'jenis')->except(['show'])->parameters(['jenis' => 'jenis']);
    Route::put('hasil/{laboratory}', [LaboratoryController::class, 'update_hasil'])->name('hasil.update_hasil');
    Route::get('hasil', [LaboratoryController::class, 'hasil'])->name('laboratory.hasil');
    Route::get('getdiagnosa/{id}', function ($id) {
        $diagnosa = Diagnosa::where('id_jenis',$id)->get();
        // dd($diagnosa);
        return response()->json(['diagnosa'=>$diagnosa]);
    });
    Route::get('getpasien/{id}', function ($id) {
        $pasien = Pasien::where('id',$id)->first();

        // dd($pasien);
        return response()->json(['pasien'=>$pasien]);
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
