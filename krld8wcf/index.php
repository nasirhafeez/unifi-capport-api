<?php

session_start();

$_SESSION["id"] = $_GET["id"];
$_SESSION["ap"] = $_GET["ap"];
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
