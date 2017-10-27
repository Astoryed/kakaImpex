@extends('layouts.app')

@section('content')

    <div id="login-bar">

    </div>

    <div id="welcome" class="animated fadeIn">
        <img src="\img\cargo.jpg">

    </div>

    <div id="welcome-note">

        <h1>WELCOME TO KAKAIMPEX</h1><br>

    <a href="{{route('home')}}" ><button id="login">Login</button></a>


        <h3>info@kakaimpex.com</h3>
        <h3>0336-0356729</h3>
    </div>

@endsection