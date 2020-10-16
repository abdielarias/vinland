<?php

if(isset($_POST['submitButton'])){

  $darkTeam = 0;
  $niceTeam = 0;
  $adventureTeam = 0;
  $smartTeam = 0;

  if($_POST['attitude'] == 1){
    $adventureTeam+=7.4;
  }
  else if($_POST['attitude'] == 2){
    $smartTeam+=7.4;
  }
  else if($_POST['attitude'] == 3){
    $darkTeam+=7.4;
  }
  else if($_POST['attitude'] == 4){
    $niceTeam+=7.4;
  }

  if($_POST['strategy'] == 1){
    $adventureTeam+=6.5;
  }
  else if($_POST['strategy'] == 2){
    $smartTeam+=6.5;
  }
  else if($_POST['strategy'] == 3){
    $darkTeam+=6.5;
  }
  else if($_POST['strategy'] == 4){
    $niceTeam+=6.5;
  }

  if($_POST['problem'] == 1){
    $adventureTeam+=5.6;
  }
  else if($_POST['problem'] == 2){
    $smartTeam+=5.6;
  }
  else if($_POST['problem'] == 3){
    $darkTeam+=5.6;
  }
  else if($_POST['problem'] == 4){
    $niceTeam+=5.6;
  }

  if($_POST['island'] == 1){
    $adventureTeam+=4.35;
  }
  else if($_POST['island'] == 2){
    $smartTeam+=4.35;
  }
  else if($_POST['island'] == 3){
    $darkTeam+=4.35;
  }
  else if($_POST['island'] == 4){
    $niceTeam+=4.35;
  }

  if($_POST['element'] == 1){
    $adventureTeam+=3.7;
  }
  else if($_POST['element'] == 2){
    $smartTeam+=3.7;
  }
  else if($_POST['element'] == 3){
    $darkTeam+=3.7;
  }
  else if($_POST['element'] == 4){
    $niceTeam+=3.7;
  }

  if($_POST['potion'] == 1){
    $adventureTeam+=8.3;
  }
  else if($_POST['potion'] == 2){
    $smartTeam+=8.3;
  }
  else if($_POST['potion'] == 3){
    $darkTeam+=8.3;
  }
  else if($_POST['potion'] == 4){
    $niceTeam+=8.3;
  }

  if($_POST['spell'] == 1){
    $adventureTeam+=7.3;
  }
  else if($_POST['spell'] == 2){
    $smartTeam+=7.3;
  }
  else if($_POST['spell'] == 3){
    $darkTeam+=7.3;
  }
  else if($_POST['spell'] == 4){
    $niceTeam+=7.3;
  }

  if($_POST['animal'] == 1){
    $adventureTeam+=4.25;
  }
  else if($_POST['animal'] == 2){
    $smartTeam+=4.25;
  }
  else if($_POST['animal'] == 3){
    $darkTeam+=4.25;
  }
  else if($_POST['animal'] == 4){
    $niceTeam+=4.25;
  }

  if($_POST['offense'] == 1){
    $adventureTeam+=6.5;
  }
  else if($_POST['offense'] == 2){
    $smartTeam+=6.5;
  }
  else if($_POST['offense'] == 3){
    $darkTeam+=6.5;
  }
  else if($_POST['offense'] == 4){
    $niceTeam+=6.5;
  }

  if($_POST['dayOff'] == 1){
    $adventureTeam+=4.65;
  }
  else if($_POST['dayOff'] == 2){
    $smartTeam+=4.65;
  }
  else if($_POST['dayOff'] == 3){
    $darkTeam+=4.65;
  }
  else if($_POST['dayOff'] == 4){
    $niceTeam+=4.65;
  }


  $myArray = array($adventureTeam, $smartTeam, $darkTeam, $niceTeam);

  $largestIndex = array_keys($myArray, max($myArray))[0];

  print_r($myArray);
  print_r($largestIndex);

  if($largestIndex == 0){
    header("Location: sortResultPage.php?message=successfulSort&team=Apex-Wind");
  }
  else if($largestIndex == 1){
    header("Location: sortResultPage.php?message=successfulSort&team=Deepwater");
  }
  else if($largestIndex == 2){
    header("Location: sortResultPage.php?message=successfulSort&team=Kraken-Fire");
  }
  else if($largestIndex == 3){
    header("Location: sortResultPage.php?message=successfulSort&team=Loyal-Earth");
  }













  //send to results page
  // h

} else {
  header("Location: sortingPage.php?message=noSubmitBtn");
}


?>
