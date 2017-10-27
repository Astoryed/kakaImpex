@extends('layouts.master')

@section('area')

    <div id="product-bar">
        <a href="{{route('home')}}">Home</a> / <a href="#">Products</a>

    </div>

    <div class="container-fluid">
        <div class="row">

            <div id="side-bar" class="col-sm-3 col-md-2 sidebar">
                <h1>Categories</h1>
                <ul class="nav nav-sidebar">
                    <li><a href="{{route('warmupJackets')}}">Warm Up Jackets</a></li>
                    <li><a href="{{route('warmupTrousers')}}">Warm Up Trousers</a></li>
                    <li><a href="{{route('warmupSuits')}}">Warm Up Suits</a></li>
                    <li><a href="{{route('sleeveless')}}">Sleeveless Shirts</a></li>
                    <li><a href="{{route('shortSleeves')}}">Short Sleeve Shirts</a></li>
                    <li><a href="{{route('longSleeves')}}">Long Sleeve Shirts</a></li>
                    <li><a href="{{route('soccer')}}">Soccer Uniform</a></li>
                    <li><a href="{{route('shorts')}}">Shorts</a></li>
                    <li><a href="{{route('sublimation')}}">Sublimation Shirts</a></li>
                    <li><a href="{{route('rain')}}">Rain Jackets</a></li>
                    <li><a href="{{route('pullover')}}">Pull Over Jackets</a></li>
                    <li><a href="{{route('baseballGloves')}}">Baseball Batting Gloves</a></li>
                    <li><a href="{{route('bibs')}}">Training Bibs</a></li>
                    <li><a href="{{route('hoodedJackets')}}">Hooded Jackets</a></li>
                    <li><a href="{{route('sweatShirts')}}">Sweat Shirts</a></li>
                    <li><a href="{{route('backpack')}}">Back Packs</a></li>
                    <li><a href="{{route('cyclingGloves')}}">Cycling Gloves</a></li>
                    <li><a href="{{route('baseballJerseys')}}">Baseball Jerseys</a></li>
                    <li><a href="{{route('poloUmpireShirts')}}">Polo Umpire Shirts</a></li>
                    <li><a href="{{route('baseballPants')}}">Base Ball/Soft Ball Pants</a></li>
                    <li><a href="{{route('cyclingJerseys')}}">Cycling Jerseys</a></li>

                    </ul>
            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <div id="items" align="center">

            @if(Session::has('product_added'))

                <span class="addProduct">{{session('product_added')}}</span><br>

            @endif

            @if($products)
                @foreach($products as $product)
                        <div id="jumble">

                        <a href="{{route('details', $product->id)}}">
                                <div class="productOverlay ">
                                    <div class="text">
                                        <h1>Buy Now</h1><hr>
                                    </div>
                                </div><p>
                                <img class="productImage" src="{{$product->photo->file}}"></p></a>
                        <p><b>{{$product->name}}</b></p>
                            <p>{{$product->price}} Rs</p>
                        <p>{{$product->details}}</p>
                        <a href="{{route('more', $product->id)}}" ><button id="send-btn">Buy Product</button></a>

                        </div>

                @endforeach
            @endif
            </div>
        </div>
    </div>
    </div><br>


@stop