@extends('layouts.master')

@section('area')

<div id="products" align="center">

    @if($products)
        @foreach($products as $product)

            <div id="each_product" class="row text-center col-sm-3 thumbnail">

                <a href="{{route('details', $product->id)}}"><p><img height="50" src="{{$product->photo->file}}" class="image"></p></a>
                <p><b>{{$product->name}}</b></p>
                <p>Rs:{{$product->price}}</p>
                <p>{{$product->details}}</p>
                <a href="{{route('addToCart', $product->id)}}" ><button class="btn btn-success">Buy Product</button></a>

            </div>

        @endforeach
    @endif


</div>


@stop