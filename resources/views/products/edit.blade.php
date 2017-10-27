@extends('layouts.admin')

@section('admin')

    <div id="admin_section">

        <h1>Edit Product</h1>

        <img class="img-rounded col-lg-4" src="{{$product->photo ? $product->photo->file: '/images/placeholder.jpg'}}">

        <div id="sm-form" class="col-lg-6 col-md-3-offset-3">

        {!! Form::model($product,['method'=>'PATCH', 'action'=>['ProductController@update', $product->id],'files'=> true ]) !!}

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
                'baseballPants'=>'baseball-Pants',
                'CyclingJerseys'=>'Cycling-Jerseys',
                'LeatherMen'=>'Leather-Men',
                'LeatherWomen'=>'Leather-Women',
                'BikersJacket'=>'Bikers-Jacket',
                'RacingSuit'=>'Racing-Suit',
                'NewArrivals'=>'New Arrivals'), null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('price', 'Price:') !!}
            {!! Form::text('price', null, ['class'=>'form-control']) !!}
        </div>

            <div class="form-group">
                {!! Form::label('role_id', 'For:') !!}
                {!! Form::select('role_id',$roles, null, ['class'=>'form-control']) !!}
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
            {!! Form::submit('Edit Product', ['class'=>'btn1 ']) !!}
        </div>

        {!! Form::close() !!}

        </div>

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