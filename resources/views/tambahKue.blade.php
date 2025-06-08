@extends('template')

@section('content')

	<h3>Data Kue</h3>

	<a href="/kue" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/kue/storeKue" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="merkkue">
                Nama Kue
            </label>
            <div class="col-sm-6" style="margin-bottom: 18px;">
                <input class="form-control"
                    type="text"
                    id="merkkue"
                    placeholder="Masukkan Nama Kue"
                    name="merkkue" required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="hargakue">
                Harga Kue
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="number"
                    id="hargakue"
                    placeholder="Masukkan Harga Kue (contoh: 35000)"
                    name="hargakue" required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="tersedia">
                Tersedia
            </label>
            <div class="col-sm-6">
                <label class="radio-inline">
                    <input type="radio" name="tersedia" value="1" checked> Ya
                </label>
                <label class="radio-inline">
                    <input type="radio" name="tersedia" value="0"> Tidak
                </label>
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="berat">
                Berat (kg)
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text" id="berat"
                    placeholder="Masukkan Berat Kue dalam kg (contoh: 0.5)"
                    name="berat" required="required">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection

