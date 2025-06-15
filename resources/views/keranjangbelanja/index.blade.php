@extends('template')

@section('content')
    <h3>Data Keranjang Belanja</h3>

    <a href="/keranjangbelanja/tambah" class="btn btn-success mb-3">
        <i class="fa fa-cart-plus"></i> Beli
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keranjangbelanja as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbelanja/tambah" class="btn btn-success btn-sm">
                        <i class="fa fa-cart-plus"></i> Beli
                    </a>
                    <a href="/keranjangbelanja/hapus/{{ $k->ID }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-times-circle"></i> Batal
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
