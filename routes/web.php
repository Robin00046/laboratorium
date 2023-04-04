<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LaboratoryController;
use App\Models\Diagnosa;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('user', UserController::class)->name('user', 'users')->except(['show'])->middleware('role:Admin');
    Route::resource('pasien', PasienController::class)->name('pasien', 'pasiens')->except(['show']);
    Route::resource('laboratory', LaboratoryController::class)->name('laboratory', 'laboratories')->except(['show']);
    Route::put('hasil/{laboratory}', [LaboratoryController::class, 'update_hasil'])->name('hasil.update_hasil');
    Route::get('hasil', [LaboratoryController::class, 'hasil'])->name('laboratory.hasil');
    Route::get('getdiagnosa/{id}', function ($id) {
        $diagnosa = Diagnosa::where('id_jenis',$id)->get();
        // dd($diagnosa);
        return response()->json(['diagnosa'=>$diagnosa]);
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
