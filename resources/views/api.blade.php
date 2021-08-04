<?php

$city_name = 'Mamuju';
$api_key = 'e4caeef136be476283580911f8a1a90e';


$api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;

$weather_data = json_decode (file_get_contents ($api_url),true);

$temperature = $weather_data['main']['temp'];
$temperatur_in_celicius = $temperature - 273.15;

$temperature_current_weather = $weather_data['weather'][0]['main'];
$temperature_current_weather_icon = $weather_data['weather'][0]['icon'];


echo round ($temperatur_in_celicius);

echo "<img src='http://openweathermap.org/img/wn/".$temperature_current_weather_icon."@2x.png'>";


//echo "<pre>";
//print_r($weather_data);

?>
