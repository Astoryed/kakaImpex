@extends('layouts.master')

@section('area')

    <div id="about-bar">
        <a href="{{route('home')}}">Home</a> / <a href="#">About</a>
        </div>

    <div id="about">

    <h1>About Kakaimpex</h1>

        <p><b>We have many famous sports brands which are very well known and popular with good demand Worldwide.
        We are also specialized in manufacturing and supplying export standard sports wears in different verities
        Our range of Sports Design covers Jackets, Gloves, Uniforms which are for all type of sports.
        We have professional experts holding years of experience in handwork</b></p>

        {{--<form method="POST" action="/postUser" >--}}
            {{--{!! csrf_field() !!}--}}

            {{--<h6>Name</h6>--}}
            {{--<input name="username" value="" maxlength="16" />--}}

            {{--<h6>Pass</h6>--}}
            {{--<input name="password" value="" maxlength="16" />--}}



            {{--<input type="submit" name="submit" value="done">--}}
        {{--</form>--}}

      <form>
        <input name="username" value="" maxlength="16" />


        <input name="size_btn" type="checkbox" class="size-btn" value="small">S
        <input name="size_btn" type="checkbox" class="size-btn" value="Large">L
        <input name="size_btn" type="checkbox" class="size-btn" value="Extra Large">XL


        <input type="submit" name="submit" value="done">
        </form>
    </div>

@stop

