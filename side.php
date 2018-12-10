<!DOCTYPE html>
<html>
<title>CODES</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
html, body {margin: 0; height: 100%; overflow: hidden}
body {font-family: Arial;}

* {
  box-sizing: border-box;
}
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}
.tab button:hover {
    background-color: #ddd;
}
.tab button.active {
    background-color: #ccc;
}
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>

<body>


<?php include 'index.html'; ?>

<div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:130px">
  <h5 class="w3-bar-item">Menu</h5>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Fade')">Rising Sun and Moon</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Left')">Screaming Sun</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Right')">Typing Text</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Top')"></button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Bottom')">Rate US</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Zoom')"></button>
</div>

<div style="margin-left:130px">

 
  <div id="Fade" class="w3-container city w3-animate-opacity" style="display:none">
    <?php include 'rising.php'; ?>
   </div>

  <div id="Left" class="w3-container city w3-animate-left" style="display:none">
    <?php include 'screaming.php'; ?>
  </div>

  <div id="Right" class="w3-container city w3-animate-opacity" style="display:none">
    <center><?php include 'text.php'; ?></center>
   </div>

  <div id="Top" class="w3-container city w3-animate-bottom" style="display:none">
   <center> <?php include 'animate.php'; ?></center>
  </div>

  <div id="Zoom" class="w3-container city w3-animate-zoom" style="display:none">
    
  </div>

</div>

<!-- <?php include 'animatebg.php'; ?> -->

<script>
function openLink(evt, animName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(animName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

</body>
</html>
