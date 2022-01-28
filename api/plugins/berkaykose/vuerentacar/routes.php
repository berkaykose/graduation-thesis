<?php

use Berkaykose\Vuerentacar\Models\Vehicle;
use Berkaykose\Vuerentacar\Models\Location;

Route::get('vehicles', function() {
    $vehicles = Vehicle::with(['locations', 'image', 'dates'])->get();
    
    return $vehicles;
});

Route::get('locations', function() {
    $locations = Location::all();
    
    return $locations;
});

Route::get('locations/list', function() {
    $locations = Location::all();
    
    foreach ($locations as $location) {
         $location['label'] = $location['title'];
         $location['value'] = $location['id'];

         unset ($locations['title']);
         unset ($locations['id']);
         unset ($locations['slug']);
    }


    return $locations;
});



