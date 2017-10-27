@extends('layouts.master')

@section('area')

    <div id="product-bar">
        <a href="{{route('home')}}">Home</a> / <a href="#">Printing & Advertising</a>

    </div>

    <div id="printing-boxes">

        <a href="{{route('embroidery')}}" ><div id="each-box" class="col-lg-4">
            <h2>Embroidery</h2>
            <img src="\img\embroidery.png">
        </div></a>

        <a href="{{route('digital')}}" ><div id="each-box" class="col-lg-4">
            <h2>Digital Printing</h2>
            <img src="\img\digital-printing.png">
        </div></a>

        <a href="{{route('screen')}}" ><div id="each-box" class="col-lg-4">
            <h2>Screen Printing</h2>
            <img src="\img\screen-printing.png">
        </div></a>

        <a href="{{route('offset')}}" ><div id="each-box" class="col-lg-4">
            <h2>Offset Printing</h2>
            <img src="\img\offset-printing.png">
        </div></a>

        <a href="{{route('customize')}}" ><div id="each-box" class="col-lg-4">
            <h2>Customize Gifts</h2>
            <img src="\img\customize-gifts.png">
        </div></a>

        <a href="{{route('promotional')}}" ><div id="each-box" class="col-lg-4">
            <h2>Promotional Gifts</h2>
            <img src="\img\promotional-gifts.png">
        </div></a>

        <a href="{{route('acrylic')}}" ><div id="each-box" class="col-lg-4">
            <h2>Acrylic Signs</h2>
            <img src="\img\acrylic-signs.png">
        </div></a>

    </div>

@stop