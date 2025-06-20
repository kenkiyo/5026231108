@extends('template')

@section('content')
    <h3>Data Nilai</h3>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nomor Induk Siswa</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot SKS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilai as $n)
            <tr>
                <td>{{ $n->id }}</td>
                <td>{{ $n->nomorinduksiswa }}</td>
                <td>{{ $n->nilaiangka }}</td>
                <td>{{ $n->sks }}</td>
                <td>
                    @php
                        $na = $n->nilaiangka;
                        if ($na <= 40) {
                            $huruf = 'D';
                        } elseif ($na <= 60) {
                            $huruf = 'C';
                        } elseif ($na <= 80) {
                            $huruf = 'B';
                        } else {
                            $huruf = 'A';
                        }
                    @endphp
                    {{ $huruf }}
                </td>
                <td>{{ ($n->nilaiangka * $n->sks) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/eas/tambah" class="btn btn-primary mt-3">+ Tambah Data</a>

    <br><br>
    {{ $nilai->links() }}
@endsection
