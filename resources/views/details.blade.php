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
             <img width="300px" height="400px" class="img-rounded productImage" src="{{$product->photo->file}}">
             </div>
         </div>

        <div id="detail-text">
            <h2>{{$product->name}}</h2>
            <h2>For {{$product->role->title}}</h2>
            <h1>Rs {{$product->price}}</h1>
            <p>{{$product->details}}</p>

            <form method="POST" action="{{route('addToCart', $product->id)}}" >
                {!! csrf_field() !!}

                <div id="size">
                    <h3>Size</h3>
                    <div class="btn-group">
                        <input name="size_btn" type="radio"  value="Small">S
                        <input name="size_btn" type="radio"  value="Medium" checked>M
                        <input name="size_btn" type="radio"  value="Large">L
                        <input name="size_btn" type="radio"  value="Extra Large">XL
                    </div>
                </div>

                <div id="quantity">
                    <h3>Quantity</h3><br><br>

                    <div id="adjust-btns">
                        <input class="dec-btn" onclick="decFunction()">

                        <input name="qty" title="place your value" class="input-btn"
                               readonly id="myNumber" type="number" value="1" min="1" >

                        <input class="inc-btn" onclick="incFunction()"><br>
                        <button type="submit" id="cart-btn">Add To Bag</button>

                    </div>
                </div>
            </form>

        </div>

             </div>
         </div>
        </div>
    </div>
        </div>


    <script>
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

