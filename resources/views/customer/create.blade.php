@extends('layouts.admin')

@section('admin')

    <div id="admin_section" class="col-lg-6">

        @if(Session::has('Customer_created'))

            <p class="addProduct col-lg-6">{{session('Customer_created')}}</p>

        @endif


        <h1>Create Customers</h1><br><br>

        {!! Form::open(['method'=>'POST', 'action'=> 'CustomerController@store', 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name', 'FirstName:') !!}<br>
            {!! Form::text('name', null, ['class'=> 'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}<br>
            {!! Form::text('email', null, ['class'=> 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}<br>
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Customer', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

    @if(count($errors) > 0)

        <div id="error_box" class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach
            </ul>
        </div>

    @endif

@stop