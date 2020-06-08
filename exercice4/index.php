<?php

function myfunction($myFirstNumber, $mySecondNumber) {
    if ($myFirstNumber > $mySecondNumber) {
        return 'Le premier nombre est plus grand';
    } 
    if ($myFirstNumber < $mySecondNumber) {
        return 'Le premier nombre est plus petit';
    }
    if ($myFirstNumber == $mySecondNumber) {
        return 'Les deux nombres sont idantiques';
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice4</title>
</head>
<body>
    <h1>exercice4</h1>
    <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
    <ul>
        <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
        <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
        <li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
    </ul>
    <p><?php echo myfunction(4, 4) ?></p>


    
</body>
</html>