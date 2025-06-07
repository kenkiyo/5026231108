<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Sembako - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Sembako</h3>

	<a href="/sembako"> Kembali</a>

	<br/>
	<br/>

	@foreach($sembako as $s)
	<form action="/sembako/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $s->id }}"> <br/>

		Merk Sembako <input type="text" required="required" name="merksembako" value="{{ $s->merksembako }}"> <br/>
		Harga Sembako <input type="number" required="required" name="hargasembako" value="{{ $s->hargasembako }}"> <br/>
		Tersedia
		<input type="radio" name="tersedia" value="1" {{ $s->tersedia ? 'checked' : '' }}> Ya
		<input type="radio" name="tersedia" value="0" {{ !$s->tersedia ? 'checked' : '' }}> Tidak
		<br/>
		Berat (kg) <input type="number" step="0.01" required="required" name="berat" value="{{ $s->berat }}"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
</html>
