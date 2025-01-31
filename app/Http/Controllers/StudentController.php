<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    
    public function index()
    {
        $students = Student::paginate(5); // Ambil data dari database
        return view('students.index', compact('students'));
    }
    

    public function adminIndex(Request $request)
    {
        $query = $request->input('search');

        // Filter berdasarkan pencarian
        if ($query) {
            $students = Student::where('nama_lengkap', 'like', '%' . $query . '%')->paginate(5);
        } else {
            $students = Student::paginate(5);
        }

        // Menggunakan tampilan di folder `students/index`
        return view('students.index', compact('students', 'query'));
    }

    // Menampilkan form pendaftaran
    public function create()
    {
        return view('students.create');
    }

    // Menyimpan data pendaftar baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nisn' => 'required|string|size:10',
            'nama_lengkap' => 'required|string|max:255',
            'no_kk' => 'required|string|size:16',
            'nik' => 'required|string|size:16',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|regex:/^08[0-9]{8,13}$/',
            'alamat' => 'required|string|max:500',
            'sekolah_asal' => 'required|string|max:255',
            'prestasi' => 'nullable|string|max:500',
            'program_pilihan' => 'required|in:MA,MTS',
            'bukti_prestasi' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        if ($request->hasFile('bukti_prestasi')) {
            $file = $request->file('bukti_prestasi');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/bukti_prestasi', $fileName, 'public');
            $validated['bukti_prestasi'] = $filePath;
        }

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Menampilkan form edit data
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    // Memperbarui data pendaftar
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'nisn' => 'required|string|size:10',
            'nama_lengkap' => 'required|string|max:255',
            'no_kk' => 'required|string|size:16',
            'nik' => 'required|string|size:16',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|regex:/^08[0-9]{8,13}$/',
            'alamat' => 'required|string|max:500',
            'sekolah_asal' => 'required|string|max:255',
            'prestasi' => 'nullable|string|max:500',
            'program_pilihan' => 'required|in:MA,MTS',
            'bukti_prestasi' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        if ($request->hasFile('bukti_prestasi')) {
            $file = $request->file('bukti_prestasi');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/bukti_prestasi', $fileName, 'public');
            $validated['bukti_prestasi'] = $filePath;

            // Hapus file lama jika ada
            if ($student->bukti_prestasi && Storage::disk('public')->exists($student->bukti_prestasi)) {
                Storage::disk('public')->delete($student->bukti_prestasi);
            }
        }

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Data berhasil diperbarui!');
    }

    // Menghapus data pendaftar
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        // Hapus file jika ada
        if ($student->bukti_prestasi && Storage::disk('public')->exists($student->bukti_prestasi)) {
            Storage::disk('public')->delete($student->bukti_prestasi);
        }

        $student->delete();

        return redirect()->route('students.index')->with('success', 'Data berhasil dihapus!');
    }
 
}


