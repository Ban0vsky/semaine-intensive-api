<?php
    if(!empty($_GET) and !empty($_GET['address']))
    {

        // Address treatment
        $address = str_replace(' ','+',$_GET['address']);

        // Request 1 : Geocoding
        $request1 = curl_init();
        curl_setopt($request1, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/geocode/json?address='.$address.'+paris&key=AIzaSyBk-OSdp7TIS3sVlIQxMC-taE1x_5ZbKjw');
        curl_setopt($request1, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($request1, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($request1, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($request1, CURLOPT_SSL_VERIFYHOST, false);
        $latLng = curl_exec($request1);

        $latLng = json_decode($latLng)->results[0]->geometry->location;
        $latitude = $latLng->lat;
        $longitude = $latLng->lng;

        curl_close($request1);

        // Request 2 : Places
        $radius='200';
        $request2 = curl_init();
        curl_setopt($request2, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$latitude.','.$longitude.'&radius='.$radius.'&keyword=bar&key=AIzaSyBk-OSdp7TIS3sVlIQxMC-taE1x_5ZbKjw');
        curl_setopt($request2, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($request2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($request2, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($request2, CURLOPT_SSL_VERIFYHOST, false);
        $barsList = curl_exec($request2);
        $barsList = json_decode($barsList);
        curl_close($request2);
        
        // Request 3 : Maps
        // $barsMap = 'https://maps.googleapis.com/maps/api/staticmap?center='.$latitude.','.$longitude.'$zoom=14$scale=2&size=500x400&key=AIzaSyBk-OSdp7TIS3sVlIQxMC-taE1x_5ZbKjw&markers=size:small|color:black|';
        // foreach ($barsList->results as $bar) {
        //     $markerLat = $bar->geometry->location->lat;
        //     $markerLng = $bar->geometry->location->lng;
        //     $barsMap = $barsMap.$markerLat.','.$markerLng.'|';
        // }
        $barsMap = 'https://www.google.com/maps/embed/v1/search?key=AIzaSyBk-OSdp7TIS3sVlIQxMC-taE1x_5ZbKjw&center='.$latitude.','.$longitude.'&zoom=14&q=bar';
   
        $placeholder = 0;
    }
    
    // Geolocalisation
    elseif (!empty($_GET) and !empty($_GET['geolocalisation'])) 
    {
        $latitude = 0;
        $longitude = 0;
        $placeholder = 0;
    }

    else
    {
        $latitude = 48.8534;
        $longitude = 2.3488;   
        $placeholder = 1;    
    }
?>