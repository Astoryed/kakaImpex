@extends('layouts.master')

@section('area')

    <div id="product-bar">
        <a href="{{route('home')}}">Home</a> / <a href="#">Feedback</a>

    </div>

    <div id="contact">
        <h1>Feedback</h1><br>
        <div>
            <form class="form-group">

                <div class="form-group col-lg-4">
                    <label>Username</label>
                    <input name="username" class="form-control" type="text" placeholder="Username"><br>
                    <label>Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email address"><br>
                    <label>Message</label>
                    <textarea name="msg" class="form-control" cols="50" rows="3" placeholder="Type your message here"></textarea><br>

                    <button type="submit" id="send-btn">Send</button>
                </div>
            </form>
        </div>
    </div><br><br><br>

@stop