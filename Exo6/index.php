<?php 
  include "..\..\\top_html.php";
  include "..\\top_p3.php";
  echo "Exercice 6";
  ?>
  <p class="topic">En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. <br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        for ($i = 20; $i >= 0 ; $i--){
          echo "i = $i C'est presque bon ...<br>";
        }
      ?>
      </p>

<?php include "..\..\bottom_html.php";