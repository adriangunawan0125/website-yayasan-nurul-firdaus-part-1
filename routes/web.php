<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;

/*
|-------------------------------------------------------------------------- 
| Web Routes
|-------------------------------------------------------------------------- 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
*/
Route::get('/Homepage', [HomepageController::class, 'index'])->name('homepage.index');
Route::resource('students', StudentController::class);
Route::get('/students', [StudentController::class, 'adminIndex'])->name('students.index');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminController::class, 'login'])->name('login.post');

    Route::middleware('auth:admin')->group(function() {
        Route::get('students', [AdminController::class, 'index'])->name('students.index');
        Route::post('students/verify/{id}', [AdminController::class, 'verify'])->name('students.verify');
        Route::get('students/download/{id}', [AdminController::class, 'downloadPrestasi'])->name('students.download');
        Route::delete('students/{id}', [AdminController::class, 'destroy'])->name('students.destroy');
        Route::get('students/{id}', [AdminController::class, 'show'])->name('students.show');
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

Route::get('/export-excel', [ExportController::class, 'export'])->name('export.excel');

