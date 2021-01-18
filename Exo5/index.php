<?php 
  include "..\..\\top_html.php";
  include "..\\top_p3.php";
  echo "Exercice 5";
  ?>
  <p class="topic">En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. <br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        for ($i = 1; $i <= 15 ; $i++){
          echo "i = $i On y arrive presque...<br>";
        }
      ?>
      </p>

<?php include "..\..\bottom_html.php";
