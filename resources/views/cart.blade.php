@extends('layouts.master')

@section('area')

<div id="cart">

    <h1>Shopping Cart</h1>

    @if(Session::has('cart'))

        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <th>Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Add</th>
                <th>Delete</th>
            </tr>
            </thead>

            @if($products)

                @foreach($products as $product)

                    <tbody>
                    <tr>
                        <td>{{$product['items']['id']}}</td>
                        <td><strong>{{$product['items'][ 'name']}}</strong></td>
                        <td><strong>{{$product['items'][ 'price']}}</strong></td>
                        <td>{{$product['qty']}}</td>
                        <td>{{$product['price']}}</td>
                        <td><a href="{{route('more', ['id'=> $product['items']['id']])}}"><button class="btn btn-success">Add Item</button></a></td>
                        <td><a href="{{route('remove', ['id'=> $product['items']['id']])}}"><button class="btn btn-danger">Delete</button></a></td>
                    </tr>
                    </tbody>
                @endforeach

            @endif


        </table><br><hr>

        <div class="row col-sm-offset-3">
            <strong> Total Price : {{$totalPrice}}</strong>

            <a href="#"><button class="btn btn-success">Checkout</button></a>

        </div>
    @else

        <div class="col-sm-6">
            <h3>Your Shopping Cart is empty!!!</h3>
        </div>

    @endif
</div>

@stop