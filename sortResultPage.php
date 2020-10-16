<?php

include 'meta.php';
include 'header.php';
 ?>

 <div class="fullHeightSection" id="resultPage">

   <div class="sortResultBanner">
    <h1 style="text-align:center;padding:20px;margin:0;">Welcome to House <?php echo $_GET['team'] ?></h1>

    <p style="text-align:center;color:white;padding-bottom:20px">
      <b>
      <?php
      if($_GET['team'] == "Kraken-Fire"){

        echo 'Cunning, Tenacious, Challenging';
      }
      else if($_GET['team'] == "Deepwater"){

        echo 'Strategic, Investigative, Adaptable';
      }
      else if($_GET['team'] == "Loyal-Earth"){

        echo 'Leadership, Unity, Respect';
      }
      else if($_GET['team'] == "Apex-Wind"){

        echo 'Courage, Integrity, Swiftness';
      }
       ?>
     </b>
  </p>


   </div>

<p style="text-align:center;color:white;">
<?php

if($_GET['team'] == "Kraken-Fire"){

  echo '<img id="resultRibbon" src="images/krakenRibbon.png">

   <script>

  //change the background to something fitting

  var background = document.querySelector(".fullHeightSection");
  background.style= "background-image: url(\'images/volcano.jpg\');";

  </script>

  ';
}

if($_GET['team'] == "Deepwater"){

  echo '<img id="resultRibbon" src="images/deepwaterRibbon.png">

  <script>

  //change the background to something fitting

  var background = document.querySelector(".fullHeightSection");
  background.style= "background-image: url(\'images/ocean.jpg\');";

  </script>

  ';
}

if($_GET['team'] == "Loyal-Earth"){

  echo '<img id="resultRibbon" src="images/loyalRibbon.png">

  <script>

  //change the background to something fitting

  var background = document.querySelector(".fullHeightSection");
  background.style= "background-image: url(\'images/nature.jpg\');";

  </script>

  ';
}

if($_GET['team'] == "Apex-Wind"){

  echo '<img id="resultRibbon" src="images/apexRibbon.png">

  <script>

  //change the background to something fitting

  var background = document.querySelector(".fullHeightSection");
  background.style= "background-image: url(\'images/summit.jpg\');";

  </script>

  ';
}


 ?>
</p>

 </div>




<script>




</script>

<?php

include 'footer.php';

 ?>
