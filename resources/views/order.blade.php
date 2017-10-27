@extends('layouts.master')

@section('area')

    <div id="checkout_page" >

            <span id="success" class="alert-success">{{session('order_submitted')}}</span><br>

        <h2>Order Details</h2><br>

        <table id="order-table" class="table table-responsive">

            @if($orders)
                @foreach($orders as $order)

                    <tr>
                        <td>Order ID:</td>
                        <td>{{$order->id}}</td>
                    </tr>

                    <tr>
                        <td>First Name:</td>
                        <td> {{$order->customer_name}}</td>
                    </tr>

                    <tr>
                        <td>Email:</td>
                        <td> {{$order->customer_email}}</td>
                    </tr>


                    <table id="order-table" class="table">
                        <h3>Purchased Items</h3>

                        <thead>
                        <tr>
                            <th>Items Name</th>
                            <th>Items Quantity</th>
                            <th>Items Price</th>
                        </tr>
                        </thead>

                        @foreach($order->cart->items as $item)

                            <tbody>
                            <tr>
                                <td>{{ $item['items']['name'] }}</td>
                                <td>{{ $item['size'] }}</td>
                                <td>{{ $item['qty'] }}</td>
                                <td> {{$item['price'] }}</td>
                            </tr>
                            </tbody>
                        @endforeach

                    </table>

                    <tr>
                        <td>TotalPrice:</td>
                        <td> Rs: {{ $order->cart->totalPrice }}</td>
                    </tr>
                @endforeach

            @endif

        </table>

    </div>

@stop