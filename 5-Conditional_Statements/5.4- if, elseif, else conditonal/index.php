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
$prod_besteld = 9;

if ($prod_besteld < 20){
    $prijs = 1.70 ;
} elseif ($prod_besteld < 30){
    $prijs = 1.50 ;
} else {
    $prijs = 1.25 ;
}
echo ($prijs);

$prod_besteld = 59;

if ($prod_besteld < 23){
    $prijs = 4.0 ;
} elseif ($prod_besteld < 20){
    $prijs = 1.25 ;
} else {
    $prijs = 1.00 ;
}
echo ($prijs);

$prod_besteld = 43;

if ($prod_besteld < 30){
    $prijs = 2.20 ;
} elseif ($prod_besteld < 60){
    $prijs = 1.55 ;
} else {
    $prijs = 4.00 ;
}
echo ($prijs);
?>

    
</body>
</html>