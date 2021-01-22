<?php 
  include "..\\top_p3.php";
  echo "Exercice 4";
  ?>
  <p class="topic">Créer une variable et l'initialiser à 1.  
Tant que cette variable n'atteint pas 10, il faut : <br>
- l'afficher<br>
- l'incrementer de la moitié de sa valeur<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        $i=1;
        while ($i <= 10){
          echo $i . "<br>";
          $i += $i/2;
          // $i = $i + $i/2;
        }
      ?>
      </p>
    
<?php include "..\..\bottom_html.php";