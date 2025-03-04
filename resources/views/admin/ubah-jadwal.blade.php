@extends('admin.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-6">
        <h2 class="text-center fw-bold mb-4 text-dark">Ubah Gambar Jadwal</h2>

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <div class="card shadow p-4">
            <form action="{{ route('admin.jadwal.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label fw-bold">Upload Gambar Jadwal</label>
                    <input type="file" name="gambar" class="form-control" required>
                </div>
                
                <div class="d-flex justify-content-center gap-3">
                    <button type="submit" class="btn btn-warning fw-bold px-4">Update</button>
                    <a href="/Homepage" class="btn btn-danger fw-bold px-4">Kembali</a>
                </div>
            </form>
        </div>

        {{-- <h5 class="text-center mt-4">Preview Gambar Saat Ini:</h5>
        <div class="text-center mt-2">
            @if($gambar)
                <img src="{{ asset('storage/' . $gambar->gambar) }}" class="img-fluid rounded shadow" width="300">
            @else
                <p class="text-muted">Belum ada gambar.</p>
            @endif
        </div> --}}
    </div>
</div>
@endsection
