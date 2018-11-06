<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <title>Choose your pet</title>
   <link rel = "styleSheet" type="text/css" href="dogStyleSheet.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style type="text/css">
   </style>


</head>
<body>
   <div id = "grid-container">

      <div class="head">
         <img src = "logo1.png" alt= "pet logo"
    class = "logo" style="float:left" >
      <header><h1>Perfect Dog 4 U</h1></header>
      </div>

 <div class="menu">
      <div style="background-color: skyblue;">
        <a href = "homepage.php">Home</a>

      <a href= "form.php" style="margin-left: 10px;">Search </a>
    <?php
    if(isset($_SESSION['result']))
    {
      echo "<a href= 'results.php' style='margin-left: 10px;'>Results </a>";
    }

      ?>
      <a href = "dog.php"  style="margin-left: 10px;">Insert a Breed Review</a>
      <a href = "showAudienceRating.php"  style="margin-left: 10px;">Audience Reviews</a>
    </div>

         <div class="w3-content w3-section" style="max-width:500px;
         margin-left: 400px">
         <img class="mySlides" src="puppiesPlay2.jpg">
         <img class="mySlides" src="dogsRunning.jpg">
         <img class="mySlides" src="puppiesPlay3.jpg">
         <img class="mySlides" src="puppiesPlay4.jpg">
         </div>

   <script>
      var myIndex = 0;
      carousel();

   function carousel() {
       var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 2000); // Change image every 2 seconds
      }
   </script>

    <div class = "right">
  </div>

<div class = "main" style=" font-size: 20px;">
 <p>
  <div style = "font-size: 20px;">
 </div> <br>
   Providing quality reviews and other pet owners opinions on the
   best dog for you. Considering varying aspects such as children
   ages, dog temperment, hyperallergenic needs, cost, and exercise
   level. All helping you find your newest addition to your family
   that fits your current living circumstance.
  <br> <br>
 </p>
</div>

 <div class = "footer">
 <footer >
   <p style = "font-size: 15px"><b>Like what you see? Like us on Facebook or Twitter</b></p>
  <a href="https://www.facebook.com/"> <img src = "facebook.png" alt = "facebook" class = "icons"></a>
  <a href= "https://twitter.com/?lang=en" ><img src = "twitter.png" alt = "Twitter" class = "icons"></a>
 </footer>
</div>


   </div>
</body>
</html>