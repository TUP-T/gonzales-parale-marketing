<div class="w3-container w3-dark-grey">
  <h1>Using pure CSS</h1>
</div>


<div class="tab" >
  <button class="tablinks" onclick="openCity(event, 'index')">index.html</button>
  <button class="tablinks" onclick="openCity(event, 'css')">style.css</button>
 <button class="tablinks" onclick="openCity(event, 'sundemo')">demo</button> 
</div>


<div id="index" class="tabcontent" style="overflow-y: auto; max-height: 500px;">
   <img src="image/sunphp.jpg"/>
</div>

<div id="css" class="tabcontent" style="overflow-y: auto; max-height: 600px;">
  <img src="image/suncss.jpg"/>
</div>

<div id="sundemo" class="tabcontent" style="overflow-y: auto; max-height: 600px;">
  <?php include 'demosun.php'; ?>
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