<?php

function myfunction($lastName, $firstName, $age) {
    return 'Bonjour ' . $lastName . ' ' . $firstName . ', tu as ' . $age;
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice6</title>
</head>
<body>
    <h1>exercice6</h1>
    <p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :  
Bonjour + nom + prénom + , tu as + age + ans.</p>
    <p><?php echo myfunction('Doe', 'John', 35) ?></p>


    
</body>
</html>