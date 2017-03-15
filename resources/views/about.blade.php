@extends('layouts.master')

@section('area')

    <div id="about">

    <h1>About</h1>

        <p>These are among the famous sports brands which are very well known and popular with good demand Worldwide.
        We are also specialized in manufacturing and supplying export standard sports wears in different verities
        Our range of Sports Design covers Jackets, Gloves, Uniforms are for all type of sports.
        We have professional experts holding years of experience in handwork</p>

        <p>If you are interested in expanding your business with these varieties,
        please let us know your requirement so that we may send you more detail and price.
            We are sure that you will get very good results and response from your customers.

        To start with, we are also ready to supply you smaller quantities by post of any number of pieces
            just for you to test and try your market and later on you can let us have your order on the basis
            of which your customer liked the most.</p>

        <p>We can be contacted on:</p>

        Saira Siddiqu<br>
        ss@pkgarments.com<br>
        FIRST CHOICE INTERNATIONAL<br>
        Karachi – Pakistan<br>
        Phone: (92-21) 36360782, 32029696, 35345531, 34249620<br>
        Mobile: (92-334) 3948583, (92-324) 2582464, (92-336) 2537464<br>

    </div>

    <div id="items" align="center">
        <br>
        <h1>Your Selection</h1><br>

        <div id="jumble">
            <img src="/images/aboutus.jpg" alt="Avatar" class="image">
            <a href="{{route('about')}}"><div class="overlay">
                    <div class="text">Our Mission</div>
                </div></a>
        </div>


        <div id="jumble">
            <img src="/images/feedback.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">Our Vision</div>
            </div>
        </div>


        <div id="jumble">
            <img src="/images/contact.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>

    </div>
@stop

