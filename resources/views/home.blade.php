@extends('layouts.app')

@section('content')

<div  id="login-navbar" class="animated slideInDown">

    Welcome! Now you are logged in

</div>


    <div id="side_bar" class="animated fadeInUp">

        <div class="row">

            <div id="side_bar_items" class="col-sm-9">
                <a href="#demo" data-toggle="collapse">
                    <b>New Arrivals</b>
                </a>
                <div id="demo" class="collapse">
                    <hr><a href="#">All Arrivals</a><hr>
                </div>
            </div>

            <div id="side_bar_items" class="col-sm-9">
                <a href="#demo2" data-toggle="collapse">
                    <b>Warm Up Items</b>
                </a>
                <div id="demo2" class="collapse">
                    <hr> <a href="#">Warm Up Jackets</a><hr>
                    <a href="#">Warm Up Trousers</a><hr>
                </div>
            </div>


            <div id="side_bar_items" class="col-sm-9">
                <a href="#demo3" data-toggle="collapse">
                    <b>Jackets</b>
                </a>
                <div id="demo3" class="collapse">
                    <hr> <a href="#">Leather</a><hr>
                    <a href="#">Jeans</a><hr>

                </div>
            </div>

            <div id="side_bar_items" class="col-sm-9">
                <a href="#demo4" data-toggle="collapse">
                    <b>Uniforms</b>
                </a>
                <div id="demo4" class="collapse">
                    <hr> <a href="#">Soccer Uniforms</a><hr>
                    <a href="#">Football Uniform</a><hr>
                    <a href="#">Cricket Uniform</a><hr>
                </div>
            </div>
        </div>
    </div>


    <div class="jumbotron">
        <div class="container text-right">
            <img src="/images/kaka-logo.jpg"><br>
            <img src="/images/shop_tags.png">
        </div>
    </div>

    <div id="strip" class="animated bounceInLeft">
        <h3>Our Products Will Surely Satisfy Your Needs</h3>
    </div>



        <div id="footer_page">

            <div id="address">

                <h3>About Kakaipex:</h3>
                <p>Quality of our Company products is excellent <br>
                    each time which served you since the 1990s.</p>

                <h3>Work time:</h3>
                <p>Sunday - Saturday: 7 AM - 8 PM</p>
                <p> we're open seven days in a week</p>
            </div>

            <div id="address">

                <h3>Designs - as you want</h3>
                <p>Wide Variety Of Designs</p>
                <p>Super Quality</p>
                <p>Affordable Price</p>

            </div>

            <div id="address">
                <h3>Give Us Feedback:</h3>
                <img class="icon col-sm-3" src="/images/facebook.png">
                <img class="icon col-sm-3" src="/images/twitter.png">
                <img class="icon col-sm-3" src="/images/black_mail.png">
            </div>

            <div id="address">

                <h3>Get in Touch:</h3>
                <ul id="contact-info">
                    <li>
                        Phone:
                        0300-1234567
                    </li>

                    <li>
                        Email:
                        <a style="color: white" href="example@gmail.com">example@gmail.com</a>
                    </li>
                    <li>
                        Address:

                        North Nazimabad, <br />
                        Karachi,Pakistan

                    </li>
                </ul>
                © 2017-2018 Kakaimpex. All rights reserved.
            </div>
        </div>

@endsection
