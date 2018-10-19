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
      <div><a href = "homepage.html">Home</a></div>
      <br>
      <div> <a href= "search.php">Search </a></div>
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
  <form action="search.php" method = "GET">

    Temperment 1-10 on mellow to hyper:
         <input type="number" name="temperment">

    The following inputs on a scale of 1-10, 1 being low and 10 high
    <br>
          Cost:
         <input type="number" name="cost">
         Exercise:
         <input type="number" name="exercise">
          Shedding:
         <input type="number" name="hair">


         Size:
         <input type="radio" name="size" value = "small">Small<br>
         <input type="radio" name="size" value = "medium">Medium<br>
         <input type="radio" name="size" value = "large">Large<br>

         Hyperallergenic:
         <input type="radio" name="size" value = "yes">yes<br>
         <input type="radio" name="size" value = "no">no<br>

         <input type="submit" value="Submit">

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