@extends('layout.app')

@section('content')
<div class="m-3">
    <form action="{{ url('product/update/'.$product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-sm-8 mt-2">
            <label for="judul" class="form-label">Judul</label>
            <input type="hidden" class="form-control" name="id" placeholder="Masukkan Id" value="{{ $product->id }}" required="">
            <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" value="{{ $product->judul }}" required="">
        </div>
        <div class="col-sm-8 mt-2">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="text" class="form-control" name="gambar" placeholder="Masukkan gambar" value="{{ $product->gambar }}" required="">
        </div>
        <div class="col-sm-8 mt-2">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Masukkan deskripsi" required="">{{ $product->deskripsi }}</textarea>
        </div>
        <div class="col-sm-8 mt-2">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga" placeholder="Masukkan harga" value="{{ $product->harga }}" required="">
        </div>
        <div class="col-sm-8 mt-4">
            <a href="{{ route('product.index') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>
@endsection