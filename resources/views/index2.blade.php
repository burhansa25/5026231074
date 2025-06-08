@extends('template')

@section('content')

	<h3>Data Kue</h3>

	<a href="/kue/tambahKue" class="btn btn-primary"> + Tambah Kue Baru</a>

	<p>Cari Data Kue :</p>
	<form action="/kue/cariKue" method="GET">
		<input type="text" class="form-control" name="cariKue" placeholder="Cari Kue ...">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
    {{-- @if(session('sukses'))  --}}
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Harga</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($kue as $k)
		<tr>
			<td>{{ $k->merkkue }}</td>
			<td>{{ $k->hargakue }}</td>
			<td>
                @if($k->tersedia == 1)
                    Ya
                @else
                    Tidak
                @endif
            </td>
			<td>{{ $k->berat }}</td>
			<td>
				<a href="/kue/editKue/{{ $k->ID }}" class="btn btn-success">Edit</a>
				|
				<a href="/kue/hapusKue/{{ $k->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $kue->links() }}
    <br/>

@endsection
