<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>xd</title>
  </head>
  <body>
    <h1>Proměné</h1>
<?php

    $age= 18 ;

    ?>
     <?php if ($age >=18)     {  ?>
      <img src="img/RS" alt="Ruskij Standart">

    <?php  }  elseif ($age >=15) {
      echo "sice máš občanku, ale pít ještě nemůžeš" ;
    }

    else { ?> <img src="img/RB" alt="Ruby buble">

  <?php } ?>




  </body>
</html>
