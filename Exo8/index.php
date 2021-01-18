<?php 
  include "..\..\\top_html.php";
  include "..\\top_p3.php";
  echo "Exercice 8";
  ?>
  <p class="topic">En allant de 0 à 100 avec un pas de 1, afficher tous ceux qui ne sont pas multiple de 3.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
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

<?php include "..\..\bottom_html.php";