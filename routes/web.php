<?php

use Illuminate\Support\Facades\Route;


Route::get('/login-medisin', function () {
    return view('login-medisin'); // Pastikan file 'login-medisin.blade.php' ada di resources/views
})->name('login-medisin');



// Mengaktifkan route bawaan untuk autentikasi (login/logout saja)
Auth::routes(['register' => false, 'reset' => false]); // Menonaktifkan fitur register/reset password

// Route untuk Halaman Landing (Setelah Login)
Route::get('/landing', function () {
    return view('landing'); // Pastikan file 'landing.blade.php' ada
})->middleware('auth');

// Route Home (Biasanya ini sudah ada secara otomatis)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route untuk halaman daftar dokter
Route::get('/dokter', function () {
    return view('dokter'); // Pastikan file 'dokter.blade.php' ada di resources/views
})->middleware('auth')->name('dokter');


// Route untuk halaman detail dokter
Route::get('/detail-dokter/{id}', function ($id) {
    return view('detail-dokter', ['id' => $id]);
})->middleware('auth')->name('detail-dokter');


// Route untuk halaman pengajuan appointment
Route::get('/pengajuan', function () {
    return view('pengajuan'); // Pastikan file 'pengajuan.blade.php' ada
})->middleware('auth')->name('pengajuan');

// Route untuk halaman pesan dan pengingat
Route::get('/pesan', function () {
    return view('pesan'); // Pastikan file 'pesan.blade.php' ada
})->middleware('auth')->name('pesan');

Route::get('/jadwal', function () {
    return view('jadwal'); // Pastikan file 'jadwal.blade.php' ada
})->middleware('auth')->name('jadwal');

// Route untuk halaman detail dokter
Route::get('/landing-dokter/{id}', function ($id) {
    return view('landing-dokter', ['id' => $id]);
})->middleware('auth')->name('landing-dokter');

Route::get('/akun-pasien/{id}', function ($id) {
    return view('akun-pasien', ['id' => $id]);
})->middleware('auth')->name('akun-pasien');

Route::get('/form-dokter/{id}', function ($id) {
    return view('form-dokter', ['id' => $id]);
})->middleware('auth')->name('form-dokter');

Route::get('/akun-dokter/{id}', function ($id) {
    return view('akun-dokter', ['id' => $id]);
})->middleware('auth')->name('akun-dokter');

Route::get('/pesan-dokter/{id}', function ($id) {
    return view('pesan-dokter', ['id' => $id]);
})->middleware('auth')->name('pesan-dokter');

Route::get('/pengajuan-dokter/{id}', function ($id) {
    return view('pengajuan-dokter', ['id' => $id]);
})->middleware('auth')->name('pengajuan-dokter');

Route::get('/login-dokter/{id}', function ($id) {
    return view('login-dokter', ['id' => $id]);
})->middleware('auth')->name('login-dokter');
