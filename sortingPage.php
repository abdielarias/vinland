<?php

include 'meta.php';
include 'header.php';
 ?>

 <div class="fullHeightSection">

   <h1 style="text-align:center;">Get sorted into a house in only 10 questions</h1>

   <div class="sortPageBanner">
    <img src="images/krakenRibbon.png">
    <img src="images/apexRibbon.png">
    <img src="images/loyalRibbon.png">
    <img src="images/deepwaterRibbon.png">
   </div>



<div id="quizDiv">

  <form action="sortVerify.php" method="POST">

    <p>1. What word best characterizes you?</p>
    <input type="radio" id="athletic" name="attitude" value="1" required>
    <label for="athletic">athletic</label><br>

    <input type="radio" id="brilliant" name="attitude" value="2" required>
    <label for="brilliant">brilliant</label><br>

    <input type="radio" id="clever" name="attitude" value="3" required>
    <label for="clever">clever</label><br>

    <input type="radio" id="friendly" name="attitude" value="4" required>
    <label for="friendly">friendly</label><br><br>

    <br>

    <p>2. Which of these would you prioritize in a game?</p>
    <input type="radio" id="defensive" name="strategy" value="2" required>
    <label for="defensive">focusing on defensive strategy</label><br>

    <input type="radio" id="team" name="strategy" value="1" required>
    <label for="team">assembling the right team</label><br>

    <input type="radio" id="weaknesses" name="strategy" value="3" required>
    <label for="weaknesses">learning your competition's weaknesses</label><br>

    <input type="radio" id="fair" name="strategy" value="4" required>
    <label for="fair">making sure everyone has a fair chance</label><br><br>

    <br>

    <p>3. How do you apparoach a problem?</p>
    <input type="radio" id="act" name="problem" value="1" required>
    <label for="act">act first, think later</label><br>

    <input type="radio" id="think" name="problem" value="2" required>
    <label for="think">think first, act later</label><br>

    <input type="radio" id="feel" name="problem" value="4" required>
    <label for="feel">feel first, act later</label><br>

    <input type="radio" id="feel-later" name="problem" value="3" required>
    <label for="feel-later">act first, feel later</label><br><br>

    <br>

    <p>4. Which would you prefer on a deserted island?</p>
    <input type="radio" id="umbrella" name="island" value="4" required>
    <label for="umbrella">umbrella</label><br>

    <input type="radio" id="tape" name="island" value="2" required>
    <label for="tape">duct tape</label><br>

    <input type="radio" id="knife" name="island" value="3" required>
    <label for="knife">knife</label><br>

    <input type="radio" id="shoes" name="island" value="1" required>
    <label for="shoes">shoes</label><br><br>

    <br>

    <p>5. Select a preferred element:</p>
    <input type="radio" id="fire" name="element" value="3" required>
    <label for="fire">fire</label><br>

    <input type="radio" id="wind" name="element" value="1" required>
    <label for="wind">wind</label><br>

    <input type="radio" id="earth" name="element" value="4" required>
    <label for="earth">earth</label><br>

    <input type="radio" id="water" name="element" value="2" required>
    <label for="water">water</label><br><br>

    <br>

    <p>6. Select a degree of intensity for a love potion:</p>
    <input type="radio" id="intrigue" name="potion" value="2" required>
    <label for="intrigue">intrigue</label><br>

    <input type="radio" id="love" name="potion" value="4" required>
    <label for="love">love</label><br>

    <input type="radio" id="lust" name="potion" value="1" required>
    <label for="lust">lust</label><br>

    <input type="radio" id="worship" name="potion" value="3" required>
    <label for="worship">worship</label><br><br>

    <br>

    <p>7. Select a preferred spell:</p>
    <input type="radio" id="electrify" name="spell" value="3" required>
    <label for="electrify">electrify</label><br>

    <input type="radio" id="fly" name="spell" value="1" required>
    <label for="fly">fly</label><br>

    <input type="radio" id="eyes" name="spell" value="2" required>
    <label for="eyes">eagle eyes</label><br>

    <input type="radio" id="regenerate" name="spell" value="4" required>
    <label for="regenerate">regenerate</label><br><br>

    <br>

    <p>8. Select an animal that you'd best prefer to morph into at will:</p>
    <input type="radio" id="cat" name="animal" value="4" required>
    <label for="cat">cat</label><br>

    <input type="radio" id="dog" name="animal" value="1" required>
    <label for="dog">dog</label><br>

    <input type="radio" id="lizard" name="animal" value="3" required>
    <label for="lizard">lizard</label><br>

    <input type="radio" id="pidgeon" name="animal" value="2" required>
    <label for="pidgeon">pigeon</label><br><br>

    <br>

    <p>9. You would be most offended if someone called you:</p>
    <input type="radio" id="soulless" name="offense" value="4" required>
    <label for="soulless">soulless</label><br>

    <input type="radio" id="spineless" name="offense" value="1" required>
    <label for="spineless">spineless</label><br>

    <input type="radio" id="unimaginative" name="offense" value="2" required>
    <label for="unimaginative">unimaginative</label><br>

    <input type="radio" id="worthless" name="offense" value="3" required>
    <label for="worthless">worthless</label><br><br>

    <br>

    <p>10. What would you prefer to do on your day off?</p>
    <input type="radio" id="gym" name="dayOff" value="3" required>
    <label for="gym">hit the gym</label><br>

    <input type="radio" id="friends" name="dayOff" value="4" required>
    <label for="friends">meet with friends</label><br>

    <input type="radio" id="place" name="dayOff" value="1" required>
    <label for="place">explore a new place</label><br>

    <input type="radio" id="career" name="dayOff" value="2" required>
    <label for="career">work on a career project</label><br><br>



    <br><br>


    <input type="submit" name="submitButton" value="Submit">
  </form>
</div>



<br><br>


 </div>




<script>




</script>

<?php

include 'footer.php';

 ?>
