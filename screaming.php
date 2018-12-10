<div class="w3-container w3-dark-grey">
  <h1>Using CSS and Javascript</h1>
</div>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'moonindex')">index.html</button>
  <button class="tablinks" onclick="openCity(event, 'mooncss')">style.css</button>
  <button class="tablinks" onclick="openCity(event, 'js')">effect.js</button> 
  <button class="tablinks" onclick="openCity(event, 'moondemo')">demo</button> 
  
</div>


<div id="moonindex" class="tabcontent" style="overflow-y: auto; max-height: 500px;">
   <img src="image/moonindex.jpg"/>
</div>

<div id="mooncss" class="tabcontent" style="overflow-y: auto; max-height: 600px;">
  <img src="image/mooncss.jpg"/>
</div>

<div id="js" class="tabcontent" style="overflow-y: auto; max-height: 600px;">
  <img src="image/moonjs.jpg"/>
</div>

<div id="moondemo" class="tabcontent" style="overflow-y: auto; max-height: 600px;">
  <?php include 'demomoonjs.php'; ?>
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