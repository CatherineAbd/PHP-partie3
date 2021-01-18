<?php 
  include "..\..\\top_html.php";
  include "..\\top_p3.php";
  echo "Exercice 2";
  ?>
  <p class="topic"> Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas supérieure à 20 : <br>
- multiplier la première variable avec la deuxième<br>
- afficher le résultat<br>
- incrementer la première variable<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
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

<?php include "..\..\bottom_html.php";