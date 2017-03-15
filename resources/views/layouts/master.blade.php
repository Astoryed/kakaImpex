@extends('layouts.app')

@section('content')

    <div class="top-bar">

        <ul>
            <li><a href="{{route('products')}}">New Arrivals</a></li>

            <li><a href="#">Other Items</a> <span class="caret"></span>
                <ul>
                    <li><a href="#">Gloves</a></li>
                    <li><a href="#">Training Bibs</a></li>
                    <li><a href="#">Backpack</a></li>
                    <li><a href="#">Shorts</a></li>

                </ul>
            </li>

            <li><a href="#">Uniforms</a> <span class="caret"></span>
                <ul>
                    <li><a href="#">Soccer</a></li>
                </ul>
            </li>

            <li><a href="#">Warm up Items</a> <span class="caret"></span>
                <ul>

                    <li><a href="#">Jacket</a></li>
                    <li><a href="#">Trousers</a></li>
                    <li><a href="#">Suits</a></li>

                </ul>
            </li>

            <li><a href="#">Shirts</a> <span class="caret"></span>
                <ul>

                    <li><a href="#">Long Sleeves</a></li>
                    <li><a href="#">Short Sleeves</a></li>
                    <li><a href="#">Sleeves Less</a></li>
                    <li><a href="#">Polo Shirts</a></li>
                    <li><a href="#">Sublimation Shirts</a></li>
                    <li><a href="#">Sweat Shirts</a></li>
                    <li><a href="#">Baseball Jersey</a></li>

                </ul>
            </li>

            <li><a href="#">Jackets</a> <span class="caret"></span>
                <ul>
                    <li><a href="#">Rain</a></li>
                    <li><a href="#">Pullover</a></li>
                    <li><a href="#">Hooded</a></li>
                </ul>
            </li>

            <li><a href="{{route('home')}}">Home</a></li>

        </ul>
    </div>


    @yield('area')




    <div id="footer_page">

        <div id="address">

            <h3>About Kakaimpex:</h3>
            <p>Quality of our Company products is excellent <br>
                each time which served you since the 1990s.</p>

            <h3>Work time:</h3>
            Sunday - Saturday: 7 AM - 8 PM<br>
            we're open seven days in a week<br>
        </div>

        <div id="address">

            <h3>Designs - as you want</h3>
            Wide Variety Of Designs<br>
            Super Quality<br>
            Affordable Price<br>

            <h3>Give Us Feedback:</h3>
            <img class="icon col-sm-3" src="/images/icon-facebook.png">
            <img class="icon col-sm-3" src="/images/icon-twitter.png">
            <img class="icon col-sm-3" src="/images/icon-google.png">
            <img class="icon col-sm-3" src="/images/icon-insta.png">
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


    <script>

        $(document).ready(function () {
            $('.top-bar ul li').hover(function () {
                $(this).find('ul>li').stop(true, false,true).slideToggle(200);

            });
        });
    </script>

@endsection
