@extends('layouts.master')

@section('area')

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

            <div id="detail-bar">
                <a href="{{route('home')}}">Home</a> / <a href="#">Details</a>

            </div>

        <div id="detail-sec">

            @if(Session::has('product_added'))

                <span class="addProduct">{{session('product_added')}}</span>

            @endif

         <div id="detail-box">
             <div id="white-img">
             <img class="img-rounded productImage" src="{{$product->photo->file}}">
             </div>
         </div>

        <div id="detail-text">
            <h2>{{$product->name}}</h2>
            <h2>For {{$product->role->title}}</h2>
            <h1>Rs {{$product->price}}</h1>
            <p>{{$product->details}}</p>

            <div id="size">
                <h3>Size
                    <div class="btn-group">
                        <button type="button" class="size-btn">S</button>
                        <button type="button" class="size-btn">L</button>
                        <button type="button" class="size-btn">XL</button>
                    </div>
                </h3>
            </div>

            <div id="quantity">
                <h3>Quantity</h3>

                <div id="adjust-btns">

                    <form method="POST" action="{{route('addToCart', $product->id)}}" >
                        {!! csrf_field() !!}

                        <input class="dec-btn" onclick="decFunction()">

                        <input name="qty" title="place your value" class="input-btn"
                        readonly id="myNumber" type="number" value="1" min="1" >

                        <input class="inc-btn" onclick="incFunction()">

                            <button type="submit" id="cart-btn">Add To Bag</button>

                    </form>

                    {{--<button class="dec-btn" onclick="decFunction()"> - </button>--}}

                        {{--<input name="$change" title="place your value" class="input-btn"--}}
                               {{--readonly id="myNumber" type="number" value="1" min="1">--}}

                    {{--<a href="#"><button class="inc-btn" onclick="incFunction()"> + </button></a>--}}

                 {{--</div>--}}

            {{--<a href="{{route('addToCart', $product->id)}}" ><button id="cart-btn">Add To Bag</button></a>--}}

        </div>

        </div>
    </div>

            <!--Sticky Slider -->
            <!------------------>

    <div id="featured">

        <img src="/img/arrivals.png">

    </div>


            <div id="sticky" class="owl-carousel owl-theme">

                <a href="{{route('rain')}}"><div id="shirt"><img src="/img/stuff-01.png"><p> Track Jacket</p><p> 2500 Rs</p></div></a>
                <a href="{{route('shortSleeves')}}"><div id="shirt"><img src="/img/stuff-02.png"><p> Polo Shirt</p><p> 1500 Rs</p></div></a>
                <a href="{{route('rain')}}"><div id="shirt"><img src="/img/stuff-03.png"><p> Red Hoddies</p><p>  3000 Rs</p></div></a>
                <a href="{{route('shortSleeves')}}"><div id="shirt"><img src="/img/stuff-04.png"><p> Tennis Shirt</p><p>  800 Rs</p></div></a>
                <a href="{{route('pullover')}}"><div id="shirt"><img src="img/stuff-05.png"><p> Pullover</p><p>  1000 Rs</p></div></a>
                <a href="{{route('rain')}}"><div id="shirt"><img src="/img/stuff-06.png"><p> Bike Men Shirt</p><p>  3500 Rs</p></div></a>
                <a href="{{route('sweatShirts')}}"><div id="shirt"><img src="/img/stuff-07.png"><p> Racing Shirt</p><p>  4000 Rs</p></div></a>
                <a href="{{route('sleeveless')}}"><div id="shirt"><img src="/img/stuff-08.png"><p> Basket Ball Shirt</p><p>  2000 Rs</p></div></a>

            </div>

        </div>
    </div>



    <script>

        $(document).ready(function() {

            $('#sticky').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
        });

        $(document).ready(function(){
            $(".size-btn").click(function(){
                $(this).toggleClass("black");
            });
        });

        function decFunction() {
            document.getElementById("myNumber").stepDown(1);
        }

        function incFunction() {
            document.getElementById("myNumber").stepUp(1);
        }
    </script>

@stop

