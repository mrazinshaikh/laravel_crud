@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Is Delivered</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->title }}</td>
                                <td>{{ $order->description }}</td>
                                <td>{{ $order->price }}</td>
                                <td>{{ $order->is_delivered }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-11">
                {{ $orders->onEachSide(2)->links() }}
            </div>
        </div>
    </div>
@endsection
