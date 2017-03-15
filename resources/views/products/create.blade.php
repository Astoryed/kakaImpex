@extends('layouts.admin')

@section('admin')

    <div id="admin_section">

        <h1>Create Product</h1>

         {!! Form::open(['method'=>'POST', 'action'=>'ProductController@store', 'files'=> true ]) !!}

             <div class="form-group">
                 {!! Form::label('name', 'Name:') !!}
                 {!! Form::text('name', null, ['class'=>'form-control']) !!}
             </div>

            <div class="form-group">
                {!! Form::label('category', 'Category:') !!}
                {!! Form::text('category', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('price', 'Price:') !!}
                {!! Form::text('price', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('details', 'Details:') !!}
                {!! Form::text('details', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

             <div class="form-group">
                 {!! Form::submit('Create Product', ['class'=>'btn1 ']) !!}
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