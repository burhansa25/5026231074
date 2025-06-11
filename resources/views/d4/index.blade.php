@extends('template')

@section('content')

	<h3>Data Keranjang Belanja </h3>

    {{-- @if(session('sukses'))  --}}
	<br/>

	<table class="table table-striped table-hover">
		<tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
			<th>Jumlah</th>
			<th>Harga per Item</th>
            <th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $item)
		<tr>
            <td>{{ $item->ID }}</td>
			<td>{{ $item->KodeBarang }}</td>
			<td>{{ $item->Jumlah }}</td>
			<td>{{ $item->Harga }}</td>
			<td>{{ number_format($item->Jumlah * $item->Harga) }}</td>
			<td>
                <a href="/keranjangbelanja/tambahBarang/" class="btn btn-sm btn-info">Beli</a>
                <a href="/keranjangbelanja/hapusBarang/{{ $item->ID }}" class="btn btn-sm btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br>
    {{ $keranjangbelanja->links() }}
    <br/>

@endsection
