<?php
// connect to db
require('dbConnect.php');
$db = get_db();
// query for all movies
// $stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
// $stmt->bindValue(':id', $id, PDO::PARAM_INT);
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);
// $stmt->execute();
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = $db->prepare('SELECT id, name, description, P_temperment FROM breeds');
$stmt->execute();
$dogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
// go through each movie in the result and display it
?>
<!DOCTYPE html>
<html>
<head>
    <title>Choose your pet</title>
   <link rel = "styleSheet" type="text/css" href="dogStyleSheet.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Results</title>
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
        <a href = "homepage.html">Home</a>

      <a href= "form.html" style="margin-left: 10px;">Search </a>
      <a href = "results.php"  style="margin-left: 10px;">Doggos</a>

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
 Results</h2>

   <ul>
<?php
foreach ($dogs as $breeds) {
   $name = $breeds['name'];
   $temperment = $breeds['P_temperment'];
   $description = $breeds['description'];
   echo "<li><p>$name temperment score: $temperment </p></li>";
   echo "Description <br> $description <br>";
}
?>
   </ul>



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