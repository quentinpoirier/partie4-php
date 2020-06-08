<?php

function myfunction($firstNumber = 0, $secondNumber = 0, $thirdNumber = 0) {
    return $firstNumber  +  $secondNumber  +  $thirdNumber;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice8</title>
</head>
<body>
    <h1>exercice8</h1>
    <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
    Tous les paramètres doivent avoir une valeur par défaut.</p>
    <p><?php echo myfunction(5, 2) ?></p>


    
</body>
</html>