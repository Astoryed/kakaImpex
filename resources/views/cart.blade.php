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

                        <table class="table table-striped table-responsive">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <td>Photo</td>
                                <th>Name</th>
                                <th>Unit Price</th>
                                <th>Size</th>
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
                                        <td><img class="img-rounded" height="75" width="75" src="{{$product['items']['photo']['file']}}"> </td>
                                        <td><strong>{{$product['items'][ 'name']}}</strong></td>
                                        <td><strong>{{$product['items'][ 'price']}}</strong></td>
                                        <td>{{$product['size']}}</td>
                                        <td>{{$product['qty']}}</td>
                                        <td>{{$product['price']}}</td>

                                        <td><a href="{{route('remove', ['id'=> $product['items']['id']])}}">
                                                <button class="btn btn-danger glyphicon glyphicon-remove"></button></a></td>
                                    </tr>
                                    </tbody>
                                @endforeach

                            @endif


                        </table><br><hr>

                        <div id="total" class="row col-sm-offset-3">
                            <strong> Total Price : {{$totalPrice}}</strong><br>
                            <strong> Total Quantity :{{$totalQty}}</strong><br>

                        </div>

                        <a href="{{route('deleteCart')}}"><button id="clearCart" class="btn btn-danger">Clear your Cart</button></a>
                        {{--Second Page of customer information--}}

                        <button id="proceed" class="accordion">Proceed</button>


                        <div class="panel">

                            <div id="checkout">
                                <h1>Customer Information</h1>
                                <br>

                                {!! Form::open(['method'=>'POST', 'action'=> 'CheckoutController@store']) !!}

                                <div class="form-group col-lg-6">

                                    <b>Please fill the information</b>
                                    <br>
                                    <br>
                                    {!! Form::label('name', 'Name:*') !!}
                                    {!! Form::text('name', null, ['class'=>'form-control']) !!}

                                    {!! Form::label('address', 'Address:*') !!}
                                    {!! Form::text('address', null, ['class'=>'form-control']) !!}

                                    {!! Form::label('company', 'Company:*') !!}
                                    {!! Form::text('company', null, ['class'=>'form-control']) !!}

                                    {!! Form::label('country', 'Country:*') !!}
                                    {!! Form::text('country', null, ['class'=>'form-control']) !!}

                                    <div class="form-group">
                                        <div id="country"></div>
                                    </div>


                                    {!! Form::label('phone', 'Phone:') !!}
                                    {!! Form::text('phone', null, ['class'=>'form-control']) !!}

                                    {!! Form::label('cellNo', 'Cell:*') !!}
                                    {!! Form::text('cellNo', null, ['class'=>'form-control']) !!}

                                    {!! Form::label('email', 'Email:*') !!}
                                    {!! Form::text('email', null, ['class'=>'form-control']) !!}

                                    {!! Form::label('comments', 'Comments:') !!}
                                    {!! Form::textarea('comments', null, ['class'=>'form-control']) !!}
                                    <br>
                                    {!! Form::submit('Order Confirmed', ['id'=>"send-btn"]) !!}
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
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

                    @else

                        <div class="col-sm-6">
                            <p>Your cart is empty.</p>
                            <p>Get the items from product menu</p>
                        </div><br><br>
                    @endif
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#country').countrySelector({
                value:'ID',
                codeMode:'alpha3',
                showFlag:true
            })
        });
    </script>
@stop

