@extends('admin.layout')

@section('content')
<div class="container">
    <h1>Detail Data Pendaftar</h1>
    <div class="card">
        <div class="card-header">
            <h3>{{ $student->nama_lengkap }}</h3>
        </div>
        <div class="card-body mb-3">
            <table class="table">
                <tr>
                    <th>NISN</th>
                    <td>{{ $student->nisn }}</td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $student->nama_lengkap }}</td>
                </tr>
                <tr>
                    <th>No KK</th>
                    <td>{{ $student->no_kk }}</td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td>{{ $student->nik }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $student->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{ $student->tempat_lahir }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $student->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <th>Nama Ayah</th>
                    <td>{{ $student->nama_ayah }}</td>
                </tr>
                <tr>
                    <th>Nama Ibu</th>
                    <td>{{ $student->nama_ibu }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $student->email }}</td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>{{ $student->no_hp }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $student->alamat }}</td>
                </tr>
                <tr>
                    <th>Sekolah Asal</th>
                    <td>{{ $student->sekolah_asal }}</td>
                </tr>
                <tr>
                    <th>Prestasi</th>
                    <td>{{ $student->prestasi }}</td>
                </tr>
                <tr>
                    <th>Program Pilihan</th>
                    <td>{{ $student->program_pilihan }}</td>
                </tr>
            </table>
            <div class="d-flex mt-3">
                <a href="{{ route('admin.students.index') }}" class="btn btn-secondary me-5">Kembali</a>
                <button class="btn btn-primary" onclick="printPage()">Print</button>
            </div>
        </div>
    </div>
</div>

<script>
    function printPage() {
        window.print();
    }
</script>
@endsection
