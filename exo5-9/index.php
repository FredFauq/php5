<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 9</title>
</head>
<body>
  <?php
    // Création du tableau avec numéro de département en index et leur nom en valeur
    $region['60'] = 'Oise';
    $region['59'] = 'Nord';
    $region['80'] = 'Somme';
    $region['02'] = 'Aisne';
    $region['62'] = 'Pas-de-Calais';
    // Boucle pour recupération des valeurs de chaque index
    foreach ($region as $value) {
  ?>
    <!-- Affichage de la valeur de l'index -->
    <p>
        <?= $value ?>
    </p>
  <?php
    }
  ?>
</body>
</html>
