<?php 
  include "..\..\\top_html.php";
  include "..\\top_p3.php";
  echo "Exercice 3";
  ?>
  <p class="topic">Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas inférieure ou égale à 10 : <br>
- multiplier la première variable avec la deuxième<br>
- afficher le résultat<br>
- décrémenter la première variable<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
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

<?php include "..\..\bottom_html.php";