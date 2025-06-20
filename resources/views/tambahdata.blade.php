@extends('template')

@section('content')

	<h3>Tambah Data Nilai</h3>

	<a href="/eas" class="btn btn-info">Kembali</a>

    <hr>

	<form action="/eas/storedata" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nomorinduksiswa">Nomor Induk Siswa</label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="text"
                       id="nomorinduksiswa"
                       name="nomorinduksiswa"
                       placeholder="Masukkan Nomor Induk Siswa"
                       maxlength="5"
                       required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nilaiangka">Nilai Angka</label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="text"
                       id="nilaiangka"
                       name="nilaiangka"
                       placeholder="Masukkan Nilai Angka"
                       required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="sks">SKS</label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="text"
                       id="sks"
                       name="sks"
                       placeholder="Masukkan SKS"
                       required>
            </div>
        </div>

		<input type="submit" value="SIMPAN" class="btn btn-success">
	</form>
@endsection

