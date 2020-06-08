<?php

function myfunction($mystring, $mystring2) {
    return $mystring . $mystring2;
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>
<body>
    <h1>exercice3</h1>
    <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.</p>
    <p><?php echo myfunction('hello world !',' its me !') ?></p>


    
</body>
</html>