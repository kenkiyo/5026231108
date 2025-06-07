@extends('template')

@section('content')
	<h3>Data Sembako</h3>

	<a href="/sembako/tambah" class="btn btn-primary"> + Tambah Sembako Baru</a>
	<p>Cari Data Sembako :</p>
	<form action="/sembako/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Sembako .." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

	<br/>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merk</th>
			<th>Harga</th>
			<th>Tersedia</th>
			<th>Berat (kg)</th>
			<th>Opsi</th>
		</tr>
		@foreach($sembako as $s)
		<tr>
			<td>{{ $s->merksembako }}</td>
			<td>Rp{{ number_format($s->hargasembako, 0, ',', '.') }}</td>
			<td>{{ $s->tersedia ? 'Ya' : 'Tidak' }}</td>
			<td>{{ $s->berat }}</td>
			<td>
				<a href="/sembako/edit/{{ $s->id }}" class="btn btn-success">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a href="/sembako/hapus/{{ $s->id }}" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i> Hapus
                </a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $sembako->links() }}

@endsection
