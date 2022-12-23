@extends('layout.master')
@section('title', $menu->judul)
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

        span{color: white;}
        thead{color: white;}
        tbody{color: white;}
    </style>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>{{ $menu->judul }}</h2>
            </div>
            <div class="col-md-4">
                <div class="float-right">
                    <div class="btn-group" role="group">
                        <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-primary ml-3">Edit</a>

                        <form action="{{ route('menus.destroy', $menu->id) }}" method="POST">
                            <button type="submit" class="btn btn-danger ml-3">Delete</button>
                            @method('DELETE')
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <h2>{{ $menu->nama }}</h2>
        <h5>
            <span class="badge badge-primary">
                <i class="fa fa-star fa-fw"></i>
                {{ $menu->rekomendasi }}
            </span>
        </h5>
        <p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <i class="fa fa-th-large fa-fw"></i>
                <em>Rp {{ $menu->harga }}</em>
            </li>
        
        </ul>
        </p>
        <hr>

    </div>
@endsection
