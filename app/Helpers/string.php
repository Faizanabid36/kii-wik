<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


if(!function_exists('storeImage')){
    function storeImage($image,$folderName='images')
    {   
        $path = 'images/'.$folderName;
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $extension = "." . $image->getClientOriginalExtension();
        $name = rand(1, 100) . time() . $extension;
        $image->move($path, $name);

            return url($path.'/'.$name);
        if (!Storage::disk('public')->exists($folderName)) {
            echo"---------";
            echo Storage::disk('public')->makeDirectory($folderName);
        }
        $currentDate = Carbon::now()->toDateString();
        $imagename = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
        $imagemedia = Image::make($image)->stream();
        
        Storage::disk('public')->put($folderName . '/' . $imagename, $imagemedia);
        return asset(Storage::url($folderName . '/' . $imagename));
    }
}
if(!function_exists('storeFile')){
    function storeFile($file,$folderName='files')
    {
        if (!Storage::disk('public')->exists($folderName)) {
            Storage::disk('public')->makeDirectory($folderName);
        }
        $currentDate = Carbon::now()->toDateString();
        $filename = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
        $filemedia = File::get($file);
        Storage::disk('public')->put($folderName . '/' . $filename, $filemedia);
        return asset(Storage::url($folderName . '/' . $filename));
    }
}
if(!function_exists('approveUser')){
    function approveUser($approve,$id)
    {
       if($approve==0)
       {
           return '<div   data-id="'.$id.'" class="chip chip-danger approve_user">

           <div class="chip-body">
               <div  class="chip-text">Disapproved</div>
           </div>

       </div>';
       }
       return '<div  data-id="'.$id.'" class="chip chip-success approve_user">
       <div class="chip-body">
           <div class="chip-text">Approved</div>
       </div>
   </div>';
    }
}
if(!function_exists('resolveReport')){
    function resolveReport($resolve,$id)
    {
       if($resolve==0) {

           return '<div   data-id="' . $id . '" class="chip chip-danger resolve">

           <div class="chip-body">
               <div  class="chip-text">Unresolved</div>
           </div>

       </div>';
       }

        return '<div  data-id="' . $id . '" class="chip chip-success resolve">
       <div class="chip-body">
           <div class="chip-text">Resolved</div>
       </div>
   </div>';
    }
}

if(!function_exists('filterRating')){
    function filterRating($my_array,$allowed)
    {
        $filtered = array_filter(
            $my_array,
            function ($val) use ($allowed) {

                return $val['rating'] == $allowed;
            }
        );
        return $filtered;
    }
}

if (!function_exists('getDistance')){
    function getDistance($addressFrom, $addressTo, $unit = '') {
        $apiKey = 'AIzaSyCXbxezejqlYJ0h3DXj9FrgToRkNhgT0eU';

        // Change address format
        $formattedAddrFrom = str_replace(' ', '+', $addressFrom);
        $formattedAddrTo = str_replace(' ', '+', $addressTo);

        // Geocoding API request with start address
        $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . $formattedAddrFrom . '&sensor=false&key=' . $apiKey);
        $outputFrom = json_decode($geocodeFrom);
        if (!empty($outputFrom->error_message)) {
            return $outputFrom->error_message;
        }

        // Geocoding API request with end address
        $geocodeTo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . $formattedAddrTo . '&sensor=false&key=' . $apiKey);
        $outputTo = json_decode($geocodeTo);
        if (!empty($outputTo->error_message)) {
            return $outputTo->error_message;
        }

        // Get latitude and longitude from the geodata
        $latitudeFrom = $outputFrom->results[0]->geometry->location->lat;
        $longitudeFrom = $outputFrom->results[0]->geometry->location->lng;
        $latitudeTo = $outputTo->results[0]->geometry->location->lat;
        $longitudeTo = $outputTo->results[0]->geometry->location->lng;

        // Calculate distance between latitude and longitude
        $theta = $longitudeFrom - $longitudeTo;
        $dist = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) + cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;

        // Convert unit and return distance
        $unit = strtoupper($unit);
        if ($unit == "K") {
            return round($miles * 1.609344, 2) . ' km';
        } elseif ($unit == "M") {
            return round($miles * 1609.344, 2) . ' meters';
        } else {
            return round($miles, 2) . ' miles';
        }
    }
}
