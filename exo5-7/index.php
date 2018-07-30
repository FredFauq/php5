<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7</title>
</head>
<body>
  <?php
    // Création du tableau avec numéro de département en index et leur nom en valeur
    $region['60'] = 'Oise';
    $region['59'] = 'Nord';
    $region['80'] = 'Somme';
    $region['02'] = 'Aisne';
    $region['62'] = 'Pas-de-Calais';
    // Ajout de la valeur de l'index 51
    $region['51'] = 'Marne';
    // Affichage de la valeur de l'index 51
    echo $region['51'];
  ?>
</body>
</html>
