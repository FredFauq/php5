<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 10</title>
</head>
<body>
  <?php
    // Création du tableau avec numéro de département en index et leur nom en valeur
    $region['60'] = 'Oise';
    $region['59'] = 'Nord';
    $region['80'] = 'Somme';
    $region['02'] = 'Aisne';
    $region['62'] = 'Pas-de-Calais';
    // Boucle de récupération des clés et des valeurs
    foreach($region as $number => $value) { ?>
        
    <!-- Affichage de la phrase avec concaténation -->
    <p>Le département <?= $value ?> a le numéro <?= $number ?></p>
  <?php 
    }
  ?>
</body>
</html>
