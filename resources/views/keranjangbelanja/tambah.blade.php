@extends('template')

@section('content')
    <h3>Tambah Data Keranjang Belanja</h3>

    <a href="/keranjangbelanja" class="btn btn-info">Kembali</a>
    <br><br>

    <form action="/keranjangbelanja/store" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label>Kode Barang</label>
            <input type="number" name="KodeBarang" required class="form-control">
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="Jumlah" required class="form-control">
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="Harga" required class="form-control">
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
