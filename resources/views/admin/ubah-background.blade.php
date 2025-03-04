@extends('admin.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-6">
        <h2 class="text-center text-dark fw-bold mb-4">Ubah Gambar</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow p-4">
            <form action="{{ route('admin.update-background') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-bold">Gambar Latar Belakang</label>
                    <input type="file" name="background" class="form-control" required>
                </div>

                <div class="d-flex justify-content-center gap-3">
                    <button type="submit" class="btn btn-warning fw-bold px-4">Simpan</button>
                    <a href="/Homepage" class="btn btn-danger fw-bold px-4">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
