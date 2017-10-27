@extends('layouts.admin')

@section('admin')

    <div id="admin_section" class="col-lg-6">

        @if(Session::has('product_created'))

            <span class="bg-info col-lg-12" style="color: black">{{session('product_created')}}</span>

        @endif

        <h1>Create Product</h1>

         {!! Form::open(['method'=>'POST', 'action'=>'ProductController@store', 'files'=> true ]) !!}

             <div class="form-group">
                 {!! Form::label('name', 'Name:') !!}
                 {!! Form::text('name', null, ['class'=>'form-control']) !!}
             </div>

            <div class="form-group">
                {!! Form::label('category', 'Category:') !!}
                {!! Form::select('category', array(
                'WarmUpJackets'=>'WarmUp-Jackets',
                'WarmUpTrousers'=>'WarmUp-Trousers',
                'WarmUpSuits'=>'WarmUp-Suits',
                'SleevesLess'=>'SleevesLess-Shirts',
                'ShortSleeves'=>'ShortSleeves-Shirts',
                'LongSleeves'=>'LongSleeves-Shirts',
                'Soccer'=>'Soccer-Uniform',
                'Shorts'=>'Shorts',
                'Sublimation'=>'Sublimation-Shirts',
                'Rain'=>'Rain-Jackets',
                'Pullover'=>'Pullover-Jackets',
                'BaseballBattingGloves'=>'Baseball-Gloves',
                'TrainingBibs'=>'Training-Bibs',
                'HoodedJackets'=>'Hooded-Jackets',
                'SweatShirts'=>'Sweat-Shirts',
                'Backpack'=>'Backpack',
                'CyclingGloves'=>'Cycling-Gloves',
                'BaseballJerseys'=>'Baseball-Jerseys',
                'PoloUmpireShirts'=>'PoloUmpire-Shirts',
                'BaseballPants'=>'baseball-Pants',
                'CyclingJerseys'=>'Cycling-Jerseys'), null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('price', 'Price:') !!}
                {!! Form::text('price', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'For:') !!}
                {!! Form::select('role_id',[''=>'Choose Option'] + $roles, null, ['class'=>'form-control']) !!}
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
                 {!! Form::submit('Create Product', ['id'=>"send-btn"]) !!}
             </div>

        {!! Form::close() !!}

    </div>



        @if(count($errors) > 0)

            <div id="error_box" class="alert alert-danger col-lg-6">

            <ol>
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach
            </ol>

            </div>
        @endif


@stop