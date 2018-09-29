<!DOCTYPE html>
<html>
<head>
    <link rel = "styleSheet" href = "homeStyle.css">
   <title>Rachel's Homepage</title>
   <script>
function bigImg(x) {
    x.style.height = "500px";
    x.style.width = "450px";
}

function normalImg(x) {
   // x.style.height = "200px";
    x.style.width = "200px";
}

// function roar()
// {
//   print ""

// }

</script>
</head>
<body>

<div class = "grid-container">
    <div class = "head">
  <header> <img src = "africaSafariLogo.jpg" alt= "Safari logo"
    class = "logo" onmouseover = "bigImag(this)"
   onmouseout = "normalImg(this)">

    <h1>African Safari adventures</h1>

  </header>
</div>

<!--  <div class = "menu"> -->
 <!--    <div class = "sidenav">-->
    <!-- <div><a href = "assign01.html">Home</a></div>
    <br>
   <div> <a href= "sortingHat.html"> </a></div>
   <br>
  <div> <a href="academics.html">Academics</a></div>
  <br>
  <br>
  <div><a href = "athletics.html">Athletics</a></div>
  <br>
  <br>
  <div><a href = "campusMap.html">Campus Map</a></div>
 </div>
</div>  -->
<div class = "right">
   <img src = "lion.jpg" alt = "lion" id = "sideimg"
   onmouseover = "roar()">
   <p class="smallText">
    Under the Stars with the Lions Safari
    <br>come on a safari to watch lions <br>prowl
    under the night sky.
   </p>

   <?php
     <!--  echo "Please enter how many times you want to
      hear a lion Roar: "; -->
      for($x = 0; $x < 4; $x++)
            echo "Roar!";
   ?>
   <img src = "giraffeBreakfast.jpg" alt = "giraffe"
   id= "sideimg" >
   <p class ="smallText">
    Breakfast with giraffes!
    <br> Have breakfast from the comfort <br>of your
    hotel and enjoy the company of giraffes.
   </p>
  </div>

<div class = "main">
 <p>
  <div class ="smallText"> <b>Hakuna Matata</b><br>
   What a wonderful phrase, <br><b> Hakuna Matata</b> <br>
  ain't no passing craze, <br> it means no worries...<br>
  <i>-The Lion King</i>
 </div> <br>
  <img src = "africanSafari.jpg" alt = "Safari" style = " text-align: center;
  width:800px; height:auto; max-width: 100%;">
  <br> <br>
  We've worked to help bring families, first timers, honeymooners
 the best trip to Africa for the past 20 years. Our attention to
 detail extending from food, lodging, and general experiance has
 gauranteed to give you memories of a life time.
 </p>
</div>

 <div class = "footer">
 <footer >
   <p ><b class = "white">Like what you see? Like us on Facebook or Twitter</b></p>
  <a href="https://www.facebook.com/"> <img src = "fb.png" alt = "facebook" class = "icons"></a>
  <a href= "https://twitter.com/?lang=en" ><img src = "twitter.png" alt = "Twitter" class = "icons"></a>
 </footer>
</div>
</div>
</body>
</html>
<!-- <br>
<b >Hakuna Matata!</b>
  <br/> What a wonderful phrase<br>
<b >Hakuna Matata!</b><br/>
What a wonderful phrase<b>
   <br>
Hakuna Matata</b><br/>
Ain't no passing craze!!<br/>
<b>
It means no worries</b><br/>
for the rest of your days!<br/>
<i>-"The Lion King"</i>
<br> -->
