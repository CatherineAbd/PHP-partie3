<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 exo4</title>
  </head>
  <body>
      <p>
      <?php
        $i=1;
        while ($i <= 10){
          echo $i . "<br>";
          $i += $i/2;
        }
      ?>
      </p>
    
  </body>
</html>



<!-- Créer une variable et l'initialiser à 1.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur -->