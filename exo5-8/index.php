<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 8</title>
</head>
<body>
  <?php
    // Création du tableau avec numéro de département en index et leur nom en valeur
    $month = array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
    // Boucle pour recupération des valeurs de chaque index
    foreach ($month as $value) {
      // Affichage de la valeur des index
      echo $value."  ";
    }
  ?>
</body>
</html>
