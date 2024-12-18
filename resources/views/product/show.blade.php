@extends('layout.app')

@section('content')
<table class="table table-bordered table-striped">
    <tr>
        <td width="20%">Id</td>
        <td>{{ $product->id }}</td>
    </tr>
    <tr>
        <td>Judul</td>
        <td>{{ $product->judul }}</td>
    </tr>
    <tr>
        <td>Gambar</td>
        <td>{{ $product->gambar }}</td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td>{{ $product->deskripsi }}</td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>{{ $product->harga }}</td>
    </tr>
</table>
@endsection