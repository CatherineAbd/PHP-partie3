<?php 
  include "..\..\\top_html.php";
  include "..\\top_p3.php";
  echo "Exercice 7";
  ?>
  <p class="topic">En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        for ($i = 1; $i <= 100 ; $i += 15){
          echo "i = $i On tient le bon bout ...<br>";
        }
      ?>
      </p>

<?php include "..\..\bottom_html.php";