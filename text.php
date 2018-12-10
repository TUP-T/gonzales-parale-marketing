<center><div class="w3-container w3-dark-grey">
  <h1>Tex Animation</h1>
</div>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'textindex')">index.html</button>
  <button class="tablinks" onclick="openCity(event, 'textindex')">index.html</button>
  <button class="tablinks" onclick="openCity(event, 'textcss')">style.css</button>
  <button class="tablinks" onclick="openCity(event, 'textjs')">effect.js</button> 
  <button class="tablinks" onclick="openCity(event, 'textdemo')">demo</button>
</div>
</center>

<div id="textindex" class="tabcontent" style="overflow-y: auto; max-height: 600px;">
   <img src="image/textindext.jpg"/>
</div>

<div id="textcss" class="tabcontent" style="overflow-y: auto; max-height: 600px;">
  <img src="image/textcss.jpg"/>
</div>

<div id="textjs" class="tabcontent" style="overflow-y: auto; max-height: 600px;">
  <img src="image/textjs.jpg"/>
</div>

<div id="textdemo" class="tabcontent" style="overflow-y: auto; max-height: 600px;">
   <?php include 'textedit.html'; ?>
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