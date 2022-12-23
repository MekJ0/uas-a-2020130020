@extends('layout.master')
@section('title', 'Add New menu')
@section('content')
<style>
        td {
            max-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        body{background-color: black;}
    
        h2{color: aqua;}

        label{color: white;}
    </style>
<h2>Add New menu</h2>
<form action="{{ route('menus.store') }}" method="POST">
    @csrf
    <div class="row">
            <div class="col-md-6 mb-3">
                <label for="id">ID</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                    value="{{ old('id') }}">
                @error('id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
    
        <div class="col-md-6 mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('title') }}">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="rekomendasi">Rekomendasi</label>
            <input type="number" step="0.1" class="form-control @error('rekomendasi') is-invalid @enderror" name="rekomendasi" id="rekomendasi" min="1" max="10" value="{{ old('rekomendasi') }}">
            @error('rekomendasi')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="harga">Harga</label>
            <input type="number" step="0.1" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga" min="5000" max="100000" value="{{ old('harga') }}">
            @error('harga')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
</form>
@endsection