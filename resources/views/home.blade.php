@extends('layouts.app-admin')

@section('adminPanel')

    <!--NAv Bar -->
    <!-- ------ -->

    <header>
        <a href="{{route('home')}}"><img src="img/logo.jpg" id="logo-main"></a>

        <button class="nav-btn" onclick="w3_open()">&#9776;</button>
        <div id="mySidebar">
            <button id="nav-close" onclick="w3_close()"> &times;</button>
            <nav>

                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>

                    <li>
                        <a href="{{route('products')}}">
                            <div id="flash1">Sports & Fashion Apparel
                                <ul>
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
                            </div></a>
                    </li>

                    <li>
                        <a href="{{route('leatherProducts')}}">
                            <div id="flash">Leather
                                <ul>
                                    <li><a href="{{route('leatherMen')}}">Men</a></li>
                                    <li><a href="{{route('leatherWomen')}}">Women</a></li>

                                </ul>
                            </div></a>
                    </li>

                    <li><a href="{{route('printing')}}">

                            <div>Printing & Advertising</div></a>
                    </li>

                    <li>
                        <a href="{{route('newArrivals')}}">
                            <div id="flash">New Arrivals
                                <ul>
                                    <li><a href="{{route('bikersJacket')}}">Bikers Jacket</a></li>
                                    <li><a href="{{route('racingSuit')}}">Racing Suit</a></li>

                                </ul>
                            </div></a>
                    </li>

                    <li><a href="{{route('cart')}}" ><div class="glyphicon glyphicon-shopping-cart"></div>
                            <span class="badge" >{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        </div>
        </div>
    </header> <br><br><br><br>


<!--Username Bar -->
<!-- ----------- -->

<div  id="login-navbar" class="animated slideInDown">

    Welcome! {{ Auth::user()->name }} you are logged in

</div>


<!--Owl Carousel -->
<!-- ----------- -->

<div id="owl-demo" class="owl-carousel owl-theme">

    <div class="item1">
        <img src="img/poster1.jpg">
        <h1>High Quality leather Jackets</h1>
        <p>As you always want to get</p>
        <a href="{{route('leatherMen')}}"><button>Shop Now</button></a>
    </div>

    <div class="item2">
        <img src="img/poster2.jpg">
        <h1>New Collection of Sports wears</h1>
        <p>Now your problem is solved</p>
        <a href="{{route('soccer')}}"><button>Shop Now</button></a>
    </div>

    <div class="item3">
        <img src="img/poster3.jpg">
        <h1>Give Yourself A New Look</h1>
        <p>All Sportswear in Affordable price</p>
        <a href="{{route('pullover')}}"><button>Shop Now</button></a>
    </div>

</div>

<!--Featured -->
<!-- ------- -->

<div id="featured">

    <img src="img/feature.png">

</div>

<div id="collection">
    <a href="{{route('soccer')}}"><div id="cell"><p>Uniforms</p><img src="img/shirt.png"></div></a>
    <a href="{{route('cyclingGloves')}}"><div id="cell"><p>Gloves</p><img src="img/glove.png"></div></a>
    <a href="{{route('warmupTrousers')}}"><div id="cell"><p>Trousers</p><img src="img/trouser.png"></div></a>
    <a href="{{route('shorts')}}"><div id="cell"><p>Shorts</p><img src="img/short.png"></div></a>
    <a href="{{route('backpack')}}"><div id="cell"><p>Backpacks</p><img src="img/bag.png"></div></a>

</div>

<!--Overlay Section -->
<!-- -------------- -->

<div id="items" align="center">

    <div id="jumble">
        <img src="img/men2.jpg" alt="Avatar" class="image">
        <a href="{{'about'}}"><div class="overlay ">
                <div class="text"><h1>About</h1><hr>
                    <p>Our mission has always<br> been to do something<br> that suits everybody.</p>

                </div>
            </div></a>
    </div>


    <div id="jumble">
        <img src="img/men1.jpg" alt="Avatar" class="image">
        <a href="{{'feedback'}}"><div class="overlay">
                <div class="text"><h1>Our Vision</h1><hr>
                    <p>Our Vision has always<br> been to serve you<br> as better as we can.</p>
                </div>
            </div></a>
    </div>


    <div id="jumble">
        <img src="img/men3.jpg" alt="Avatar" class="image">
        <a href="{{'contact'}}"><div class="overlay">
                <div class="text"><h1>Contact</h1><hr>
                    <p>we provides<br> you a superior<br>sportswear experience.</p>

                </div>
            </div></a>
    </div>

</div><br><br>


<!--Sticky Slider -->
<!------------------>

<div id="featured">

    <img src="img/arrivals.png">

</div>

<div id="sticky" class="owl-carousel owl-theme">

    <a href="{{route('warmupJackets')}}"><div id="shirt"><img src="img/stuff-01.png"><p> WarmUp Jackets</p></div></a>
    <a href="{{route('poloUmpireShirts')}}"><div id="shirt"><img src="img/stuff-02.png"><p> Polo Shirts</p></div></a>
    <a href="{{route('hoodedJackets')}}"><div id="shirt"><img src="img/stuff-03.png"><p>Hoddies</p></div></a>
    <a href="{{route('shortSleeves')}}"><div id="shirt"><img src="img/stuff-04.png"><p> Tennis Shirts</p></div></a>
    <a href="{{route('pullover')}}"><div id="shirt"><img src="img/stuff-05.png"><p> Pullovers</p></div></a>
    <a href="{{route('bikersJacket')}}"><div id="shirt"><img src="img/stuff-06.png"><p> Bikers Jackets</p></div></a>
    <a href="{{route('racingSuit')}}"><div id="shirt"><img src="img/stuff-07.png"><p> Racing Suits</p></div></a>
    <a href="{{route('sleeveless')}}"><div id="shirt"><img src="img/stuff-08.png"><p> Basket Ball Shirt</p></div></a>

</div>


<!--News letter -->
<!-- ----------- -->

<div id="newsletter">

    <img id="bk-img" src="img/poster4.jpg">

    <section id="form-box">
        <img class="tag" src="img/newsletter.png">

        <form id="tag-info" class="form-inline">

            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email address">
            </div>
            <button type="submit" class="btn btn-default">Send</button>
        </form>
    </section>
</div>
<hr>


<!--Footer -->
<!-- ----- -->
<footer>

    <div id="social-icons">
        <img src="img/logo.jpg"><br><br>

        <i id="fb" class="fa fa-facebook fa-lg" aria-hidden="true"></i>
        <i id="you" class="fa fa-youtube fa-lg" aria-hidden="true"></i>
        <i id="tw" class="fa fa-twitter fa-lg" aria-hidden="true"></i>
        <i id="plus" class="fa fa-google-plus fa-lg" aria-hidden="true"></i>
        <i id="in" class="fa fa-linkedin fa-lg" aria-hidden="true"></i>
        <i id="pin" class="fa fa-pinterest fa-lg" aria-hidden="true"></i>
    </div>

    <div id="address-box" class="container-fluid">

        <div class="row">

            <div id="add" class="col-lg-2">
                <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i><br>
                #1517, Ward no6,<br>
                Saddar Bazar,Cantt<br>
                Sialkot,Punjab, Pakistan<br>
            </div>

            <div id="add" class="col-lg-2">
                <i class="fa fa-mobile fa-2x" aria-hidden="true"></i><br><br>
                0335-0356729<br>
                0344-6376356<br>
            </div>

            <div id="add" class="col-lg-2">
                <i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i><br><br>
                sales01@kakaimpex.com 	<br>
                sales02@kakaimpex.com
            </div>

            <div id="add" class="col-lg-2">
                <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i><br><br>
                Monday-Friday<br>
                10AM -7PM
            </div>

        </div>
    </div>

    <p>All Rights Reserved. Design By Astoryed</p>

</footer>


<script>

    $(document).ready(function() {

        $("#owl-demo").owlCarousel({
            items:1,
            loop:true,
            navigation : false
        });

    });

    $(document).ready(function() {

        $('#sticky').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
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

    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }

</script>

@endsection
