<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 exo3</title>
  </head>
  <body>
      <p>
      <?php
        $i=100;
        $j=30;
        while (!($i <= 10)){
          echo ("Multiplication de $i par $j = ") . $i * $j . ("<br>");
          $i--;
        }
      ?>
      </p>
    
  </body>
</html>



<!-- Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas inférieure ou égale à 10 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- décrémenter la première variable -->