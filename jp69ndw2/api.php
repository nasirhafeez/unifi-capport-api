<?php

if (isset($_GET['venue-info-url'])) {
  header( "Content-type: application/json" );

  $jsonData = [
    "captive" => true,
    "user-portal-url" => 'https://capport.nasirhafeez.com/guest/s/jp69ndw2',
    "venue-info-url" => 'https://capport.nasirhafeez.com/guest/s/jp69ndw2',
    "seconds-remaining" => 63200,
    "can-extend-session" => true
  ];

  echo json_encode($jsonData, JSON_PRETTY_PRINT);
}
