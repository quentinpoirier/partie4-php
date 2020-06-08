<?php
$string = 'hello world !';

function myfunction($mystring) {
    return $mystring;
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice2</title>
</head>
<body>
    <h1>exercice2</h1>
    <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
    <p><?php echo myfunction($string) ?></p>


    
</body>
</html>