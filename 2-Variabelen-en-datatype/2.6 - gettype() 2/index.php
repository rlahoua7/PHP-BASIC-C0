<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
    $voornaam = "Rayan";
    echo gettype($voornaam); echo"<br>";
    
    $leeftijd = "17";
    echo $leeftijd;
    $kauwgom = "4,50"; echo"<br>";
    echo $kauwgom; echo"<br>";

    $test = true;
    echo "de waarde van test is: " . $test . "<br>";
    $test = null;
    echo "de waarde van test is: " . $test . "<br>";

?>
</body>
</html>