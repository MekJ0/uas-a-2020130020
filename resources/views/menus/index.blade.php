@extends('layout.master')
@section('title','menus List')
@push('css_after')
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

        span{color: white;}
        thead{color: white;}
        tbody{color: white;}
    </style>
@endpush
@section('content')
{{ session()->get('success') }}
<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>menus List</h2>
                </div>
                <div class="col-sm-6">
                        <a href="{{ route('menus.create') }}" class="btn btn-success">
                            <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                            <span>Add New Menu</span>
                        </a>
                    </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Rekomendasi</th>
                    <th>Harga</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($menus as $menu)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <a href="{{ route('menus.show', $menu->id) }}">
                            {{ $menu->nama }}
                        </a>
                    </td>

                    <td>{{ $menu->rekomendasi }}</td>
                    <td>{{ $menu->harga }}</td>
                    <td><a href="{{ route('menus.edit', $menu->id) }}">
                            <button class="btn btn-warning btn-sm">Edit</button></a></td>
                    <td>
                        <form action="{{ route('menus.destroy', $menu->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onClick="return confirm('Yakin mau dihapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td align="center" colspan="6">No data yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection