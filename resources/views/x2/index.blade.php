@extends('template')

@section('content')

	<h3>Data Karyawan</h3>

    {{-- @if(session('sukses'))  --}}
	<br/>

	<table class="table table-striped table-hover">
		<tr>
            <th>Kode Karyawan</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $kar)
		<tr>
            <td>{{ $kar->kodepegawai }}</td>
			<td>{{ strtoupper($kar->namalengkap) }}</td>
			<td>{{ $kar->divisi }}</td>
			<td>{{ strtolower($kar->departemen) }}</td>
			<td>
				<a href="/karyawan/hapusKaryawan/{{ $kar->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <a href="/karyawan/tambahKaryawan" class="btn btn-primary" style="margin-bottom: 20px"> + Tambah Karyawan Baru</a>
    <br>
    {{ $karyawan->links() }}
    <br/>

@endsection
