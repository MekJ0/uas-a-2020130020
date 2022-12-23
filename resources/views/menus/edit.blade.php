@extends('layout/master')
@section('title', 'Edit menu')
@section('content')
    <h2>Update New Movie</h2>
    <form action="{{ route('menus.update', ['menu' => $menu->id]) }}" method="POST">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="id">ID</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                    value="{{ old('id') ?? $menu->id }}">
                @error('id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="nama">nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    id="nama" value="{{ old('nama') ?? $menu->nama }}">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="rekomendasi">Rekomendasi</label>
                <input type="number" class="form-control @error('rekomendasi') is-invalid @enderror" name="rekomendasi"
                    min="0" max="10" value="{{ old('rekomendasi') ?? $menu->rekomendasi }}">
                @error('rekomendasi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="harga">Harga</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                    min="5000" max="1000000" value="{{ old('harga') ?? $menu->harga }}">
                @error('harga')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
    </form>
@endsection
