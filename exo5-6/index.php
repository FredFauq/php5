<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 6</title>
</head>
<body>
  <?php
    // Création du tableau avec numéro de département en index et leur nom en valeur
    $region['60'] = 'Oise';
    $region['59'] = 'Nord';
    $region['80'] = 'Somme';
    $region['02'] = 'Aisne';
    $region['62'] = 'Pas-de-Calais';
    // Affichage de la valeur de l'index 59
    echo $region['59'];
    /* ou bien seconde écriture plus compacte :
     * $region = array['60' ==> 'Oise','59' ==> 'Nord','80' ==> 'Somme', '02' ==> 'Aisne', '62' ==> 'Pas-de-Calais']
     */
  ?>
</body>
</html>
