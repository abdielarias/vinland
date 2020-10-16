<?php
include 'meta.php';
include 'header.php';
?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin="">
 </script>

<div class="fullHeightSection" id="locationsPage">



  <div id="locationsBanner">
    <h2 id="location-title">Click the Map Icons to Explore the Park's Locations</h2><br>

  </div>

  <div id="mapid"></div>


  <!-- <div id="credits">
    <p>Icon Designers</p>
      <p>Castle by Begin sapdian from the Noun Project</p>
      <p>canoeing by Phạm Thanh Lộc from the Noun Project</p>
  </div> -->



<script>
  document.querySelector("header").style.backgroundColor = "white";

  var mymap = L.map('mapid').setView([54.455751, -3.220549], 13);

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibXItcm9ib3QteCIsImEiOiJja2ZkMHZ3YjAwaG5jMnFucDU3NzlmaThnIn0.V5xLcXYGYCstMkptObx3NA'
  }).addTo(mymap);



  var castleIcon = L.icon({
    iconUrl: 'images/marker-castle.png',
    // shadowUrl: 'images/castle.png',

    iconSize:     [120, 120], // size of the icon
    // shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [60, 120], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [0, -110] // point from which the popup should open relative to the iconAnchor
  });

  var minesIcon = L.icon({
    iconUrl: 'images/marker-mines.png',
    // shadowUrl: 'images/castle.png',

    iconSize:     [120, 120], // size of the icon
    // shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [60, 120], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [0, -110] // point from which the popup should open relative to the iconAnchor
  });

  var cavesIcon = L.icon({
    iconUrl: 'images/marker-cave.png',
    // shadowUrl: 'images/castle.png',

    iconSize:     [120, 120], // size of the icon
    // shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [60, 120], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [0, -110] // point from which the popup should open relative to the iconAnchor
  });

  var boatIcon = L.icon({
    iconUrl: 'images/marker-canoe.png',
    // shadowUrl: 'images/castle.png',

    iconSize:     [120, 120], // size of the icon
    // shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [60, 120], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [0, -110] // point from which the popup should open relative to the iconAnchor
  });


  var klingstonMarker = L.marker([54.455468, -3.197731], {icon: castleIcon}).addTo(mymap);
  klingstonMarker.bindPopup("<a href='gallery.php?image=castle.jpg'><p style='text-align: center;'><b>Klingston Castle</b><br><img width='100px' src='images/castle.jpg'></p></a>").openPopup();

  var mineMarker = L.marker([54.443761, -3.161707],  {icon: minesIcon}).addTo(mymap);
  mineMarker.bindPopup("<a href='gallery.php?image=hauntedShed.jpg'><p style='text-align: center;'><b>Joyride Mines</b><br><img width='100px' src='images/hauntedShed.jpg'></p></a>");

  var mineMarker = L.marker([54.442994, -3.238959],  {icon: cavesIcon}).addTo(mymap);
  mineMarker.bindPopup("<a href='gallery.php?image=cave2.jpg'><p style='text-align: center;'><b>Caves of Treachery</b><br><img width='100px' src='images/cave2.jpg'></p></a>");

  var canoeMarker = L.marker([54.454617, -3.271276],  {icon: boatIcon}).addTo(mymap);
  canoeMarker.bindPopup("<a href='gallery.php?image=canoe.jpg'><p style='text-align: center;'><b>King's Canoes</b><br><img width='100px' src='images/canoe.jpg'></p></a>");



</script>


</div>

<?php  include 'footer.php';  ?>
