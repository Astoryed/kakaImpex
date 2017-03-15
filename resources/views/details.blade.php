@extends('layouts.master')

@section('area')


<div id="products">

    <h1>Details</h1>

    <div id="detail">
        <img height="300" src="{{$product->photo->file}}">

    </div>

    <div id="detail_info">
        <p><strong>{{$product->name}}</strong></p>
        <p><small>Rs</small> {{$product->price}}</p>
        <p>{{$product->description}}</p>
        <a href="{{route('addToCart', $product->id)}}" ><button class="btn btn-success">Buy Product</button></a>

    </div>

</div>


@stop