@extends('template')

@section('content')

	<h3>Data Karyawan</h3>

	<a href="/karyawan" class="btn btn-info">Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/storeKaryawan" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="kodepegawai">Kode Karyawan</label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="text"
                       id="kodepegawai"
                       name="kodepegawai"
                       placeholder="Masukkan Kode Pegawai (Contoh: K0001)"
                       maxlength="5"
                       required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="namalengkap">Nama Lengkap</label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="text"
                       id="namalengkap"
                       name="namalengkap"
                       placeholder="Masukkan Nama Lengkap Karyawan"
                       maxlength="50"
                       required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="divisi">Divisi</label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="text"
                       id="divisi"
                       name="divisi"
                       placeholder="Masukkan Divisi (Contoh: HRD, IT)"
                       maxlength="5"
                       required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="departemen">Departemen</label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="number"
                       id="departemen"
                       name="departemen"
                       placeholder="Masukkan Kode Departemen"
                       required>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection

