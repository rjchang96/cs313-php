<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Login</title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 --><link rel = "style" href= "homeStyle.css">
<style type="text/css">
   body
   {
      background-image: url("blowup.jpg");
      background-size: 100%;
      background-repeat: no-repeat;
   }
</style>
</head>
<body>
<div class = "grid-container">
    <div class = "head">
  <header id = "head"> <!-- <img src = "images/07pics/HogwartsCrest.png" alt= "Hogwarts logo"
    class = "logo" style="float:left" > -->

    <h1 style ="font-size: 45;background-color: white">Destory your own Mountain</h1>

  </header>
</div>

<!-- //<div class = "white"> -->
 <!-- <div class = "top nav"> -->
    <!--<div class = "sidenav">
    <div><a href = "about.php">About</a></div>
    <br>
   <div> <a href= "home.php">Home </a></div>
   <br>
  <div> <a href="login.php">Login</a></div>
  <br>

</div> -->
<div class="topnav">
 <?php include 'nav.php';?>
</div>

<div class = "main" style=" font-size: 20px;">
 <p>
  <div style = "font-size: 20px; background-color: white">
   <a href="login"> Login as Admin</a>
   <br>
   <a href="tester">Login as Tester</a>
</div>
</div>

</div>

</body>
</html>