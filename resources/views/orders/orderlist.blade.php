@extends('layouts.admin')

@section('admin')

    <div id="admin_section">

        <h2 class="sub-header">Order Details</h2><br>

        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Order ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Order</th>
                <th>Total Price</th>
                <th>Quantity</th>
                <th>Created</th>

            </tr>
            </thead>

            <tbody>

            @if($orders)
                @foreach($orders as $order)

                    <tr>
                        <th>{{$order->id}}</th>
                        <td>{{$order->customer_name}}</td>
                        <td>{{$order->customer_email}}</td>

                        <td>
                            @foreach($order->cart->items as $item)
                                {{$item['qty']}} = {{ $item['items']['name'] }}<br>
                            @endforeach
                        </td>

                        <td>{{ $order->cart->totalPrice }}</td>
                        <td>{{$order->cart->totalQty}}</td>
                        <td>{{$order->created_at->diffForHumans()}}</td>
                        <td><a href="{{route('inquiry', $order->id)}}"><button class="btn btn-success">Show Inquiry</button></a></td>

                    </tr>

                @endforeach
            @endif

            </tbody>
        </table>

    </div>

@stop