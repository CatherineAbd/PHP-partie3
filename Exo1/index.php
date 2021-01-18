<?php 
  include "..\..\\top_html.php";
  include "..\\top_p3.php";
  echo "Exercice 1";
  ?>
  <p class="topic">Créer une variable et l'initialiser à 0.  
Tant que cette variable n'atteint pas 10, il faut : <br>
- l'afficher<br>
- l'incrémenter
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        $i=0;
        while ($i < 10){
          echo $i . "<br>";
          $i++;
        }
      ?>
      </p>
    
  </body>
</html>

<?php include "..\..\bottom_html.php";