<?php

session_start();

//Get the MAC addresses of AP and user

$_SESSION["id"] = $_GET["id"];
$_SESSION["ap"] = $_GET["ap"];

if (isset($_GET['venue-info-url'])) {
  header( "Content-type: application/json" );

  $jsonData = [
    "captive" => true,
    "user-portal-url" => "test",
    "venue-info-url" => "test",
    "seconds-remaining" => 63200,
    "can-extend-session" => true
  ];

  echo json_encode($jsonData);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>WiFi Portal</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
    <p>Welcome!</p>
    <form method="post" action="connect.php">
        <input type="submit" value="Connect">
    </form>
</body>
</html>
