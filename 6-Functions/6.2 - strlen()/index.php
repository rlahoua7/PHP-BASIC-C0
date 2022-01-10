<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function mijnNaamIsGroot(){
    $voornaam = "Rayan";
    $achternaam = "Lahoua";
    $gehelenaam = "mijn naam is " . $voornaam . " " . $achternaam;
    $gehelenaam = strtoupper($gehelenaam);
    echo ($gehelenaam);
}
mijnNaamIsGroot();
?>
</body>
</html>