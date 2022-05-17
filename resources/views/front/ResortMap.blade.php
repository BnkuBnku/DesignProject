@extends('layout')

            @section('content')
              
            <div class="card">
                <a class="btn btn-danger" href="{{ redirect()->getUrlGenerator()->previous() }}" role="button"> Back to Selection</a>
            </div>
            
            <div id="map"></div>

            <script type="text/javascript">


                    // The location of Uluru
                    const uluru = { lat: {{ $resorts->ResortLatitude_Coor }}, lng: {{ $resorts->ResortLongitude_Coor }} };
                    // The map, centered at Uluru
                    const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 15,
                        center: uluru,  
                    });
                    // The marker, positioned at Uluru
                    const marker = new google.maps.Marker({
                        position: uluru,
                        map: map,
                    });

                   


            </script>

            

            

            @endsection

