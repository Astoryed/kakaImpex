@extends('layouts.master')

@section('area')

    <div id="product-bar">
        <a href="{{route('home')}}">Home</a> / <a href="#">Checkout</a>

    </div>

    <div id="all_accordion">

        <button class="accordion">Step 1: Login</button>
        <div class="panel">
            <h3>Login Customer</h3>
        </div>

        <button class="accordion">Step 2: Customer Information</button>
        <div class="panel">

            <div id="checkout">
                <h1>Customer Information</h1><br>

                {!! Form::open(['method'=>'POST', 'action'=> 'CheckoutController@store']) !!}

                <div class="form-group col-lg-4">

                    @foreach($orders as $order)

                    {!! Form::hidden('order_id',$order->id, null, ['class'=>'form-control']) !!}

                    @endforeach
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
                    {!! Form::submit('Send Inquiry', ['id'=>"send-btn"]) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>

        <button class="accordion">Step 3: Review Your Order</button>
        <div class="panel">
            <h3>Review Your Order</h3>
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


@stop