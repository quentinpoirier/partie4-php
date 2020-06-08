<?php

function myfunction($age, $gender) {
    if ($age >= 18 && $gender == 'homme') {
        return 'Vous êtes un homme et vous êtes majeur';
    } 
    if ($age < 18 && $gender == 'homme') {
        return 'Vous êtes un homme et vous êtes mineur';
    }
    if ($age >= 18 && $gender == 'femme') {
        return 'Vous êtes une femme et vous êtes majeure';
    }
    if ($age < 18 && $gender == 'femme') {
        return 'Vous êtes une femme et vous êtes mineure';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice7</title>
</head>
<body>
    <h1>exercice7</h1>
    <p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :</p>
    <ul>
        <li>Homme</li>
        <li>Femme</li>
    </ul>
    <p>La fonction doit renvoyer en fonction des paramètres :</p>
    <ul>
        <li>Vous êtes un homme et vous êtes majeur</li>
        <li>Vous êtes un homme et vous êtes mineur</li>
        <li>Vous êtes une femme et vous êtes majeure</li>
        <li>Vous êtes une femme et vous êtes mineure</li>
    </ul>
    <p><?php echo myfunction(5, 'femme') ?></p>


    
</body>
</html>