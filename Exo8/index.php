<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 exo8</title>
  </head>
  <body>
      <p>
      <?php
        for ($i = 0; $i <= 100 ; $i++){
          if ($i % 3 != 0){
            echo "i = $i n'est pas multiple de 3<br>";
          }
        }
      ?>
      </p>
    
  </body>
</html>



<!-- En allant de 0 à 100 avec un pas de 1, afficher tous ceux qui ne sont pas multiple de 3. -->