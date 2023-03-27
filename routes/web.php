<?php

use App\Http\Controllers\OlahNilaiController;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});


Route::get('/dashboard-interpreter', function () {
    return view('dashboard-interpreter', [
        "title" => "dashboard-interpreter",
    ]);
});

Route::get('/jadwal-berlangsung-interpreter', function () {
    return view('jadwal-berlangsung-interpreter', [
        "title" => "jadwal-berlangsung-interpreter",
    ]);
});

Route::get('/jadwal-mendatang-interpreter', function () {
    return view('jadwal-mendatang-interpreter', [
        "title" => "jadwal-mendatang-interpreter",
    ]);
});

Route::get('/jadwal-riwayat-interpreter', function () {
    return view('jadwal-riwayat-interpreter', [
        "title" => "jadwal-riwayat-interpreter",
    ]);
});

Route::get('/olah-nilai', [OlahNilaiController::class, 'index']);
Route::get('/olah-nilai/tambah-nilai', [OlahNilaiController::class, 'create']);
Route::post('/olah-nilai/tambah-nilai', [OlahNilaiController::class, 'store']);
Route::get('/edit-nilai/{id}',[OlahNilaiController::class, 'edit']);
Route::post('/update/{id}', [OlahNilaiController::class, 'update']);
Route::get('/delete/{id}',[OlahNilaiController::class, 'destroy']);

Route::get('/dashboard-plp', function () {
    return view('dashboard-plp', [
        "title" => "dashboard-plp",
    ]);
});

Route::get('/tambah-jadwal-plp', function () {
    return view('tambah-jadwal-plp', [
        "title" => "tambah-jadwal-plp",
    ]);
});

Route::get('/jadwal-berlangsung-plp', function () {
    return view('jadwal-berlangsung-plp', [
        "title" => "jadwal-berlangsung-plp",
    ]);
});

Route::get('/jadwal-mendatang-plp', function () {
    return view('jadwal-mendatang-plp', [
        "title" => "jadwal-mendatang-plp",
    ]);
});

Route::get('/jadwal-riwayat-plp', function () {
    return view('jadwal-riwayat-plp', [
        "title" => "jadwal-riwayat-plp",
    ]);
});

Route::get('/olah-nilai-plp', function () {
    return view('olah-nilai-plp', [
        "title" => "olah-nilai-plp",
    ]);
});

Route::get('/cetak', function () {
    return view('cetak', [
        "title" => "cetak",
    ]);
});

Route::get('/interpreter', function () {
    return view('interpreter', [
        "title" => "interpreter",
    ]);
});

Route::get('/interpreter/tambah-interpreter', function () {
    return view('tambah-interpreter', [
        "title" => "tambah-interpreter",
    ]);
});

Route::get('/plp', function () {
    return view('plp', [
        "title" => "plp",
    ]);
});

Route::get('/plp/tambah-plp', function () {
    return view('tambah-plp', [
        "title" => "tambah-plp",
    ]);
});