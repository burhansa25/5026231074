<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Kue</h3>

	<a href="/kue"> Kembali</a>

	<br/>
	<br/>

	@foreach($kue as $k)
	<form action="/kue/updateKue" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $k->ID }}"> <br/>
		Nama Kue: <input type="text" required="required" name="merkkue" value="{{ $k->merkkue }}"> <br/>
        Harga Kue: <input type="number" required="required" name="hargakue" value="{{ $k->hargakue }}"> <br/>
        Tersedia:
        <input type="radio" name="tersedia" value="1" {{ $k->tersedia ? 'checked' : '' }}> Ya
        <input type="radio" name="tersedia" value="0" {{ !$k->tersedia ? 'checked' : '' }}> Tidak <br/>
        Berat (kg): <input type="text" required="required" name="berat" value="{{ $k->berat }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
</html>
