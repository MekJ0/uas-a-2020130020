@extends('layout.master')
@section('title', 'Order List')
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

<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-10">
                    <h2>Order List</h2>
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('orders.create') }}" class="btn btn-success">
                        <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                        <span>Add New Order</span>
                    </a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Status</th>
                    <th colspan="2">Detail</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $order->id }}</td>
                    @if (strcasecmp($order->status, "selesai") == 0)
                    <td>Selesai</td>
                    @else
                    <td>Menunggu Pembayaran</td>
                    @endif
                    <td colspan="2">
                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary">
                            <p class="text-white m-0">
                               
                                Show Detail
                            </p>
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="3">No data yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


@endsection