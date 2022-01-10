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
function geefTienProcentKorting() {
    $koopprijs = 75;
    $korting = 10;
    $korting = ($koopprijs / 100) * $korting;
    return $koopprijs - $korting;
}
function totaleBedrag() {
    echo ("Het totale bedrag is " . geefTienProcentKorting() . " Euro");
}
totaleBedrag()
?>
</body>
</html>