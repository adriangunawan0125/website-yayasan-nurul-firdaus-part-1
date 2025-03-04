<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\GambarMenuPPDBController;
use App\Http\Controllers\GambarJadwalPPDBController;





/*
|-------------------------------------------------------------------------- 
| Web Routes
|-------------------------------------------------------------------------- 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
*/
Route::get('/Homepage', [HomepageController::class, 'index'])->name('homepage.index'); //route homepage/beranda PPDB
Route::resource('students', StudentController::class);
Route::get('/students', [StudentController::class, 'adminIndex'])->name('students.index'); //route formulir ppdb

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminController::class, 'login'])->name('login.post');

    Route::middleware('auth:admin')->group(function() {    //route admin all fitur
        Route::get('/dashboardPPDB', function () {
            return view('admin.AdminPPDB');
        });
        Route::get('/ubah-background', [GambarMenuPPDBController::class, 'index'])->name('ubah-background');  //ganti background di beranda PPDB section menu
        Route::post('/ubah-background', [GambarMenuPPDBController::class, 'update'])->name('update-background');
        Route::get('/ubah-jadwal', [GambarJadwalPPDBController::class, 'edit'])->name('jadwal.edit'); //gantu gambar jadwal di beranda PPDB
        Route::put('/ubah-jadwal', [GambarJadwalPPDBController::class, 'update'])->name('jadwal.update');
        Route::get('students', [AdminController::class, 'index'])->name('students.index'); //data PPDB
        Route::post('students/verify/{id}', [AdminController::class, 'verify'])->name('students.verify'); //verifikasi PPDB
        Route::get('students/download/{id}', [AdminController::class, 'downloadPrestasi'])->name('students.download'); //download file prestasi PPDB
        Route::delete('students/{id}', [AdminController::class, 'destroy'])->name('students.destroy'); // hapus data PPDB
        Route::get('students/{id}', [AdminController::class, 'show'])->name('students.show'); //lohata detail dataa PPDB
        Route::post('logout', [AdminController::class, 'logout'])->name('logout');
    });
});

Route::get('/', function () {
    return view('dashboard.beranda');
});

Route::get('/profil', function () {
    return view('dashboard.profile');
});

// Route::get('/pengumuman', function () {
//     return view('dashboard.pengumuman');
// });

Route::get('/rdm', function () {
    return view('dashboard.rdm');
});
Route::get('/hubungi', function () {
    return view('dashboard.hubungi');
});

Route::get('/ppdb', function () {
    return view('Homepage.index');
});

Route::get('/export-excel', [ExportController::class, 'export'])->name('export.excel'); //route export excel PPDB 


