@extends('layouts.master')

@section('area')

    <div id="product-bar">
        <a href="index.php">Home</a> / <a href="#">Contact</a>

    </div>

    <div id="contact">
        <h1>Contact</h1><br>
        <div>
            Kaka Impex INDUSTRIES.<br>

            # 1517, Ward no 6,<br>
            Saddar Bazar,Cantt<br>
            Sialkot,Punjab<br>
            Pakistan<br><br>

            CELL:   0335-0356729<br>
            CELL:   0344-6376356<br><br>

            WhatsApp: 0331-1398992<br><br>

            E-Mails: info@kakaimpex.com<br>
            E-Mails: sales01@kakaimpex.com <br>
            E-Mails: sales02@kakaimpex.com<br>

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


