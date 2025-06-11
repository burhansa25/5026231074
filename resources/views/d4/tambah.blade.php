@extends('template')

@section('content')

	<h3>Data Karyawan</h3>

	<a href="/keranjangbelanja" class="btn btn-info">< Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/storeBarang" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="kodebarang">
                Kode Barang
            </label>
            <div class="col-sm-6" style="margin-bottom: 18px;">
                <input class="form-control"
                    type="number"
                    id="kodebarang"
                    placeholder="Masukkan Kode Barang (Contoh: 101)"
                    name="kodebarang"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="jumlah">
                Jumlah
            </label>
            <div class="col-sm-6" style="margin-bottom: 18px;">
                <input class="form-control"
                    type="number"
                    id="jumlah"
                    placeholder="Masukkan Jumlah Barang"
                    name="jumlah"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="harga">
                Harga per Item
            </label>
            <div class="col-sm-6" style="margin-bottom: 18px;">
                <input class="form-control"
                    type="number"
                    id="harga"
                    placeholder="Masukkan Harga per Item"
                    name="harga"
                    required="required">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection

