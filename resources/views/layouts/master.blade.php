@extends('layouts.app-admin')

@section('adminPanel')

    <!--NAv Bar -->
    <!-- ------ -->

    <header>
            <div><a href="{{route('home')}}"><img src="/img/logo.jpg" id="logo-main"></a>

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
                    <a href="{{route('newArrivals')}}"><div id="flash">New Arrivals
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
    </header> <br><br><br><br>



    @yield('area')




    <!--Footer -->
    <!-- ----- -->
    <footer>

        <div id="social-icons">
            <img src="/img/logo.jpg"><br><br>

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
                    sales01@kakaimpex.com <br>
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

        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>


@endsection
