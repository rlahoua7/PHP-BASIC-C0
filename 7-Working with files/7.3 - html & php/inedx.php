<?php  
    $leeftijd = 16;
?>
<html>
<head>
</head>
<body>
    <div id="IsMeerderJarig">
        <?php
            if($leeftijd < 18 ){
                echo "<h1>deze pagina is niet geschikt voor minderjarige</h1>";
            }
        ?>
    </div>

</body>
</html>