<?php

include 'meta.php';
include 'header.php';
 ?>


 <div class="locationsPagePopup">
   <img src="" id="popUpImage">
 </div>


 <div class="fullHeightSection" id="galleryGrid">
   <h2 id="locationsTitle">Photo Gallery</h2>
   <div class="gallery">

     <img src="images/cave2.jpg" onclick="reImage(this)">

     <img src="images/castle.jpg" onclick="reImage(this)">

     <img src="images/corridor.jpg" onclick="reImage(this)">

     <img src="images/canoe.jpg" onclick="reImage(this)">

     <img src="images/hauntedShed.jpg" onclick="reImage(this)">

     <img src="images/cabin.jpg" onclick="reImage(this)">

     <img src="images/pub.jpg" onclick="reImage(this)">

     <img src="images/blacksmith.jpg" onclick="reImage(this)">

   </div>
 </div>


<script>

document.querySelector("header").style.backgroundColor = "white";

var galleryGrid = document.querySelector("#galleryGrid");
var popUpImageDiv = document.querySelector(".locationsPagePopup");
var popUpImage= document.querySelector("#popUpImage");
// document.querySelector("header").style.marginTop = "100px";

function reImage(callingImg){

  popUpImage.src = callingImg.src;
  // console.log(popUpImage.src);

  //darken background and then make the locationsPagePopup visible (remember to add event listener to clicking outside of locationsPagePopup to reverse these things)
  popUpImageDiv.style.visibility = "visible";
  galleryGrid.style.opacity = "30%";

  popUpImageDiv.addEventListener("click", (event)=>{

    var isClicked = popUpImageDiv.contains(event.target);

    if(isClicked){
      popUpImageDiv.style.visibility = "hidden";
      galleryGrid.style.opacity = "100%";
    }

  });

}

</script>

<?php

if(isset($_GET['image'])) echo '

<script>
function loadDefaultImage(){

  var getImage = "'.$_GET["image"].'";

  popUpImage.src = "images/"+getImage;


  //darken background and then make the locationsPagePopup visible (remember to add event listener to clicking outside of locationsPagePopup to reverse these things)
  popUpImageDiv.style.visibility = "visible";
  galleryGrid.style.opacity = "30%";

  popUpImageDiv.addEventListener("click", (event)=>{

    var isClicked = popUpImageDiv.contains(event.target);

    if(isClicked){
      popUpImageDiv.style.visibility = "hidden";
      galleryGrid.style.opacity = "100%";
    }

  });
}


loadDefaultImage();

</script>';
?>

<?php

include 'footer.php';

 ?>
