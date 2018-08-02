<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 8</title>
</head>
<body>
    <ul>
  <?php
    // Création du tableau avec numéro de département en index et leur nom en valeur
    $month = array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
    // Boucle pour recupération des valeurs de chaque index
    foreach ($month as $value) {
  ?>
        <li>
            <!-- Affichage de la valeur des index -->
            <?= $value ?>
        </li>
  <?php
    }
  ?>
</body>
</html>
