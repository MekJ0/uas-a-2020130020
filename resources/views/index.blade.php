@extends('layout.master')
@section('title', 'Main Page')
@push('css_after')
    <style>
        td {
            max-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
@endpush
@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-5 mb-3">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Number of Menus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center">{{ $menuCount }}</th>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-center">
                        <a class="btn btn-primary" href="{{ route('menus.index') }}" role="button">Menu List</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2 mb-3">
        </div>

        <div class="col-md-5 mb-3">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Number of Orders</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center">{{ $orderCount }}</th>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-center">
                        <a class="btn btn-primary" href="{{ route('orders.index') }}" role="button">Order List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection