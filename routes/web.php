<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('siswa', function () {

//     $siswa = [
//         [
//             'nama' => 'Alung',
//             'alamat' => 'Jambewangi',
//             'jenis_kelamin' => 'Laki-Laki',
//         ],
//         [
//             'nama' => 'Fikri',
//             'alamat' => 'Kedungwaru',
//             'jenis_kelamin' => 'Laki-Laki',
//         ]
//         ];
//         return view('siswa', compact('siswa'));
// });

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class,'store'])->name('siswa.store');
