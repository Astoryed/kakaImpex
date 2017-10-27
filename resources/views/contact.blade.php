@extends('layouts.master')

@section('area')

    <div id="product-bar">
        <a href="index.php">Home</a> / <a href="#">Contact</a>

    </div>

    <div id="contact">
        <h1>Contact</h1><br>
        <div>
            Kakaimpex INDUSTRIES.<br>

            # 1517, Ward no 6,<br>
            Saddar Bazar,Cantt<br>
            Sialkot,Punjab<br>
            Pakistan<br><br>


            TEL:    +92 52 42910816<br>
            CELL:   +92 300 6191080<br>
            CELL:   +92 315 6191212<br>
            FAX:    +92 52 42726155<br>


            E-Mails:kakaimpex.Comsats.Net.Pk<br>
            E-Mails:Kakaimpex@Gmail.Com<br>

        </div>
        <!-- Add Google Maps -->

        <div id="map"></div>
    </div>
    <script>
        function initMap() {
            var uluru = {lat: 32.45998, lng: 74.49276};
            var map = new google.maps.Map(document.getElementById('map'), {zoom: 8,center: uluru});
            var marker = new google.maps.Marker({ position: uluru, map: map});
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhnZ3Vyhvn8Y89gkNqk0AEaFjhq22u7fo&callback=initMap">
    </script>


@stop


