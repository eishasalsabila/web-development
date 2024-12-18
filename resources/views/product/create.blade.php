@extends('layout.app')

@section('content')
<div class="m-3">
    <form action="{{ url('product/store'.$product->id) }}" method="POST">
        @csrf
        @method('POST')
        <div class="col-sm-8">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" value="" required>
        </div>
        <div class="col-sm-8">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="text" class="form-control" name="gambar" placeholder="Masukkan Gambar" value="" required>
        </div>
        <div class="col-sm-8">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Masukkan deskripsi" required></textarea>
        </div>
        <div class="col-sm-8">
            <label for="harga" class="form=label">Harga</label>
            <input type="number" class="form-control" name="harga" placeholder="Masukkan harga" value="" required>
        </div>
        <div class="col-sm-8">
            <a href="{{ route('product.index') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>
@endsection