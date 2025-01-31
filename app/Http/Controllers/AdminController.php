<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Menampilkan daftar pendaftar
    public function index()
    {
        $students = Student::paginate(5); // Data pendaftar dengan pagination
        return view('admin.students', compact('students'));
    }
  

    public function show($id)
    {
        $student = Student::findOrFail($id); // Ambil data berdasarkan ID
        return view('admin.show', compact('student'));
    }


    // Verifikasi pendaftar
    public function verify(Request $request, $id)
    {
        $student = Student::findOrFail($id); // Mencari student berdasarkan ID
        $student->update(['status_verifikasi' => 'Sudah Diverifikasi']); // Mengubah status menjadi Sudah Diverifikasi

        return redirect()->route('admin.students.index')->with('success', 'Pendaftar berhasil diverifikasi.');
    }

    // Mendownload file bukti prestasi
    public function downloadPrestasi($id)
    {
        $student = Student::findOrFail($id);

        if ($student->bukti_prestasi && Storage::disk('public')->exists($student->bukti_prestasi)) {
            return response()->download(storage_path('app/public/' . $student->bukti_prestasi));
        }

        return redirect()->route('admin.students.index')->with('error', 'File prestasi tidak ditemukan.');
    }

    // Menghapus pendaftar
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        // Hapus file bukti prestasi jika ada
        if ($student->bukti_prestasi && Storage::disk('public')->exists($student->bukti_prestasi)) {
            Storage::disk('public')->delete($student->bukti_prestasi);
        }

        $student->delete();

        return redirect()->route('admin.students.index')->with('success', 'Data pendaftar berhasil dihapus.');
    }
 // Menampilkan form login
 public function showLoginForm()
 {
     return view('admin.login');
 }

 // Proses login admin
 public function login(Request $request)
 {
     $request->validate([
         'email' => 'required|email',
         'password' => 'required',
     ]);

     if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
        return redirect()->intended(route('admin.students.index'))->with('success', 'Berhasil login.');
    }
    

     return back()->with('error', 'Email atau password salah.');
 }

 // Logout admin
 public function logout()
{
    Auth::guard('admin')->logout();
    return redirect()->route('admin.login')->with('success', 'Berhasil logout.');
}

 // Konstruktor untuk middleware
 public function __construct()
 {
     $this->middleware('auth.admin')->except(['showLoginForm', 'login']);
 }
 
    // (Metode lain seperti index, show, verify tetap di sini)

}

