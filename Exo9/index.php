<?php 
  include "..\..\\top_html.php";
  include "..\\top_p3.php";
  echo "Exercice 9";
  ?>
  <p class="topic">Créer une variable nombre aléatoire et l'initialiser avec un nombre aléatoire compris entre 0 et 30.
En allant de 1 à 100 avec un pas de 1, afficher les nombres jusqu'au nombre aléatoire, puis sortir de la boucle. <br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        $j = random_int(0, 30);
        echo("nombre aléatoire généré : $j <br>");
        for ($i = 1; $i <= 100 ; $i++){
          if ($i != $j){
            echo "i = $i<br>";
          }else{
            break;
          }
        }
      ?>
      </p>
    
  </body>
</html>

<?php include "..\..\bottom_html.php";