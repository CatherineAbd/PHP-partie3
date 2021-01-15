<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 exo7</title>
  </head>
  <body>
      <p>
      <?php
        for ($i = 1; $i <= 100 ; $i += 15){
          echo "i = $i On tient le bon bout ...<br>";
        }
      ?>
      </p>
    
  </body>
</html>



<!-- En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. -->