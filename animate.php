<center><div class="w3-container w3-dark-grey">
  <h1>Text Title</h1>
</div></center>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'animindex')">index.html</button>
  <button class="tablinks" onclick="openCity(event, 'animindex')">index.html</button>
  <button class="tablinks" onclick="openCity(event, 'animcss')">style.css</button>
  <button class="tablinks" onclick="openCity(event, 'animjs')">effect.js</button> 
    <button class="tablinks" onclick="openCity(event, 'animdemo')">demo</button> 
</div>


<div id="animindex" class="tabcontent" style="overflow-y: auto; max-height: 600px;">
   <img src="image/animindex.jpg"/>
</div>

<div id="animcss" class="tabcontent" style="overflow-y: auto; max-height: 600px;">
  <img src="image/animcss.jpg"/>
</div>

<div id="animjs" class="tabcontent" style="overflow-y: auto; max-height: 600px;">
  <img src="image/animjs.jpg"/>
</div>

<div id="animdemo" class="tabcontent" style="overflow-y: auto; max-height: 600px;">
 <!--    <?php include 'animation.php'; ?> -->
</div>



<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>