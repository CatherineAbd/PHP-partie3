<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 exo6</title>
  </head>
  <body>
      <p>
      <?php
        for ($i = 20; $i >= 0 ; $i--){
          echo "i = $i C'est presque bon ...<br>";
        }
      ?>
      </p>
    
  </body>
</html>



<!-- En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. -->