
<?php
  session_start();

  //$_SESSION['called'] = true;
  // $_SESSION['results'] = true;
  // $_SESSION['exercise'] = $_POST['exercise'];
  // $_SESSION['hair'] = $_POST['hair'];
  // $_SESSION['size'] = $_POST['size'];
  // $_SESSION['Hyperallergenic'] = $_POST['Hyperallergenic'];

  // if(isset($_POST['Submit'])){
  //   $_SESSION['cost'] = $_POST['cost'];
  // }

  // echo "session input cost: "
  // . $_SESSION['cost'] . "<br>";
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
       <!-- <a href = "results.php"  style="margin-left: 10px;">Doggos</a> -->

    </div>
     <!--  <br>
      <div> <a href="academics.html">Academics</a></div>
      <br>
      <br>
      <div><a href = "athletics.html">Athletics</a></div>
      <br>
      <br>
      <div><a href = "campusMap.html">Campus Map</a></div> -->

    <div class = "right">
  </div>

<div class = "main" style=" font-size: 20px;">
 <p>
  <div style = "font-size: 20px;">
 </div> <br>
 <h2 style="margin:auto;text-align:center;">
 Finding the Perfect Dog for you</h2>
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

  <form action="results.php" method = "POST">
<p style="text-align: center;">
Please fill out the following to help our search for the perfect
    dog for you.<br>
    The following inputs on a scale of 1-10, 1 being low and 10 high
  </p>
    <br>
    <p style="margin-left: 350px;">
    Temperment (1-10 on hyper to mellow):<br>
         <input type="number" name="temperment" min = "1" max = "10">
         <br>
         <br>
          Cost:
         <input type="number" name="cost" min = "1" max = "5">
         <br>
         Exercise:
         <input type="number" name="exercise"  min = "1" max = "5">
         <br>
          Shedding:
         <input type="number" name="hair"  min = "1" max = "5">

         <br>

         Size (1-3) Smallest-Large:
         <br>
          <input type="number" name="size"  min = "1" max = "3">
          <br>
         Hyperallergenic:
         <br>
         <input type="radio" name="Hyperallergenic" value = "yes">yes<br>
         <input type="radio" name="Hyperallergenic" value = "no">no<br>
          <br>


         <input type="submit" name = "Submit" value="Submit">
       </p>

  </form>



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