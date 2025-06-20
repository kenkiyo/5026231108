@extends('template')

@section('content')
<h3>Tambah Data Nilai</h3>

<a href="/eas" class="btn btn-info">Kembali</a>

<br><br>

<form action="/eas/store" method="post">
    {{ csrf_field() }}
    <div class="row mb-3">
        <div class="col-3">Nomor Induk Siswa</div>
        <div class="col-8">
            <input type="text" name="nomorinduksiswa" required maxlength="5" class="form-control">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-3">Nilai Angka</div>
        <div class="col-8">
            <input type="number" name="nilaiangka" class="form-control">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-3">SKS</div>
        <div class="col-8">
            <input type="number" name="sks" required maxlength="10" class="form-control">
        </div>
    </div>
    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>
@endsection
