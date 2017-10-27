@extends('layouts.admin')

@section('admin')

    <div id="admin_section">

        <h1>Edit Customers</h1><br><br>

{!! Form::model($customer, ['method'=>'PATCH', 'action'=> ['CustomerController@update', $customer->id], 'files'=>true]) !!}

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
            {!! Form::submit('Edit Customer', ['class'=>'btn btn-primary']) !!}
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