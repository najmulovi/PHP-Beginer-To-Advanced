<?php
/*
    ## Null Coalescing Operator (??)

    Ex. We set default latitude & longitude value. If user give latitude & longitude value, then 
        show user given value.If user not give value, then show default value.
*/

//Declare Default Latitude & Longitude Value:
$default_lat = 23.9;
$default_lon = 90.8;

//Now user given value
$user_lat;
$user_lon = 88.4;

//First, solve this problem by using ternary operator
$lat = isset($user_lat) ? $user_lat : $default_lat;
$lon = isset($user_lon) ? $user_lon : $default_lon;
echo "Latitude = " . $lat . " and Longitude = " . $lon . "\n";

//Second, solve this problem by using null coalescing operator (??)
$lat = $user_lat ?? $default_lat;
$lon = $user_lon ?? $default_lon;
echo "Latitude = " . $lat . " and Longitude = " . $lon . "\n";
