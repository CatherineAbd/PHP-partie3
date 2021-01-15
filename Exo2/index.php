<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 exo2</title>
  </head>
  <body>
      <p>
      <?php
        $i=0;
        $j=30;
        while ($i <= 20){
          echo ("Multiplication de $i par $j = ") . $i * $j . ("<br>");
          $i++;
        }
      ?>
      </p>
    
  </body>
</html>



<!-- Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas supérieure à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable -->