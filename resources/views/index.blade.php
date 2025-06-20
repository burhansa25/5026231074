@extends('template')

@section('content')

	<h3>Data Nilai Mahasiswa</h3>

    {{-- @if(session('sukses'))  --}}
	<br/>

    <a href="/eas/tambahdata" class="btn btn-primary"> + Tambah Data</a>

    <br/>

    <hr>

	<table class="table table-striped table-hover">
		<tr style="text-align: center">
            <th>ID</th>
            <th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>
		@foreach($nilai as $n)
		<tr style="text-align: center">
            <td>{{ $n->id }}</td>
			<td>{{ $n->nomorinduksiswa }}</td>
			<td>{{ $n->nilaiangka }}</td>
			<td>{{ $n->sks }}</td>
			<td>
                @if($n->nilaiangka >= 81)
                    A
                @elseif($n->nilaiangka >= 61 && $n->nilaiangka <= 80)
                    B
                @elseif($n->nilaiangka >= 41 && $n->nilaiangka <= 60)
                    C
                @elseif($n->nilaiangka <= 40)
                    D
                @endif
            </td>
            <td>{{ number_format($n->nilaiangka * $n->sks) }}</td>
		</tr>
		@endforeach
	</table>
    <br/>

@endsection
