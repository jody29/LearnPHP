<?php

session_start();

$username = $_SESSION["username"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
   <h1>Welkom <?= $_SESSION["username"]; ?> </h1>
   
   <a href="logout.php">Uitloggen</a>
    
</body>
</html>