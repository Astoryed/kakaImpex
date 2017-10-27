@extends('layouts.master')

@section('area')

    <div id="product-bar">
        <a href="{{route('home')}}">Home</a> / <a href="#">Your Shopping Cart</a>

    </div>

        <div id="all_accordion">

            {{--First Page of cart view--}}

            <button class="accordion">Shopping Cart</button>
            <div class="panel1">
                <div id="cart-box">

                    <h1>Shopping Cart</h1><br>

                    @if(Session::has('cart'))

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Price</th>
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
                                        {{--<td>--}}

                                            {{--{!!Form::open(['method'=>'PUT','action'=>['CheckoutController@update',$product['items']['id']]])!!}--}}

                                            {{--<input name="qty" type="text" size="10" value="{{$product['qty']}}">--}}
                                            {{--<input type="submit" name="Update">--}}

                                            {{--{!!Form::close()!!}--}}

                                        {{--</td>--}}

                                        {{--<td><a href="{{route('more', ['id'=> $product['items']['id']])}}">--}}
                                                {{--<button class="btn btn-success">Add</button></a></td>--}}


                                        <td><a href="{{route('remove', ['id'=> $product['items']['id']])}}">
                                                <button class="btn btn-danger glyphicon glyphicon-remove"></button></a></td>
                                    </tr>
                                    </tbody>
                                @endforeach

                            @endif


                        </table><br><hr>

                        <div class="row col-sm-offset-3">
                            <strong> Total Price : {{$totalPrice}}</strong><br>
                            <strong> Total Quantity :{{$totalQty}}</strong>
                        </div>
                    @else

                        <div class="col-sm-6">
                            <p>Your cart is empty.</p>
                            <p>Get the items from product menu</p>
                        </div><br><br>

                    @endif

            </div>
                </div>

            {{--Second Page of customer information--}}

            <button class="accordion">Customer Information</button>
            <div class="panel">

                <div id="checkout">
                  <h1>Customer Information</h1>
                    <br>

                    {!! Form::open(['method'=>'POST', 'action'=> 'CheckoutController@store']) !!}

                    <div class="form-group col-lg-4">

                        <br>
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}

                        {!! Form::label('address', 'Address:') !!}
                        {!! Form::text('address', null, ['class'=>'form-control']) !!}

                        {!! Form::label('company', 'Company:') !!}
                        {!! Form::text('company', null, ['class'=>'form-control']) !!}

                        {!! Form::label('country', 'Country:') !!}
                        {!! Form::text('country', null, ['class'=>'form-control']) !!}

                        {!! Form::label('phone', 'Phone:') !!}
                        {!! Form::text('phone', null, ['class'=>'form-control']) !!}

                        {!! Form::label('cellNo', 'Cell:') !!}
                        {!! Form::text('cellNo', null, ['class'=>'form-control']) !!}

                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::text('email', null, ['class'=>'form-control']) !!}

                        {!! Form::label('comments', 'Comments:') !!}
                        {!! Form::textarea('comments', null, ['class'=>'form-control']) !!}
                        <br>
                        {!! Form::submit('Order Confirmed', ['id'=>"send-btn"]) !!}
                    </div>

                    {!! Form::close() !!}
                </div>

                    @if(count($errors) > 0)

                        <div id="checkout_error" class="alert alert-danger col-lg-4">
                            <ol>
                                @foreach($errors->all() as $error)

                                    <li>{{$error}}</li>

                                @endforeach
                            </ol>
                        </div>

                    @endif

            </div>

            {{--Third Page of Order Review--}}

            <button class="accordion">Review Your Order</button>
            <div class="panel">
                <h3>Review Your Order</h3>

                <div id="checkout_page" >

                    @if(Session::has('order_submitted'))

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
                            @endif
                    </table>

                </div>
            </div>

        </div>
</div>

@stop