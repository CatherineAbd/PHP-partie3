<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 exo10</title>
  </head>
  <body>
      <p>
      <?php
        $j = random_int(0, 30);
        echo("nombre aléatoire généré : $j <br>");
        for ($i = 1; $i <= 100 ; $i++){
          if ($i != $j){
            echo "i = $i<br>";
          }
        }
      ?>
      </p>
    
  </body>
</html>



<!-- Créer une variable nombre aléatoire et l'initialiser avec un nombre aléatoire compris entre 0 et 30.
En allant de 1 à 100 avec un pas de 1, afficher tous les nombres sauf celui correspondant au nombre aléatoire.
 -->
