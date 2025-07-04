@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ strtolower($k->departemen) }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger btn-sm">Hapus Data</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/karyawan/tambah" class="btn btn-primary mt-3">+ Tambah Data</a>

    <br><br>
    {{ $karyawan->links() }}
@endsection
