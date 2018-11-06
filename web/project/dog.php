<?php
// connect to db
session_start();

require('dbConnect.php');
$db = get_db();
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
    if(isset($_SESSION['result']) && $_SESSION['result'] == true)
    {
      echo "stuff in session temperment " . $_SESSION['temperment'] . "<br>";
      echo "<a href= 'results.php' style='margin-left: 10px;'>Results </a>";
    }
      ?>
      <a href = "dog.php"  style="margin-left: 10px;">Insert a Breed Review</a>
       <a href = "showAudienceRating.php"  style="margin-left: 10px;">Audience Reviews</a>
    </div>

 <form action="insertReview.php" method = "POST">
<p style="text-align: center;">
Please fill out the following to help our search for the perfect
    dog for you.<br>
    The following inputs on a scale of 1-10, 1 being low and 10 high
  </p>
    <br>
    <p style="margin-left: 350px;">
     <!--  <input type="text" name="dog_name"><br> -->

<label>Dog Names:</label>
<br>

     <?php
try
{
   // Notice that we do not use "SELECT *" here. It is best practice
   // to only bring back the fields that you need.
   // prepare the statement
   $statement = $db->prepare('SELECT id, name FROM breeds');
   $statement->execute();
   // Go through each result
   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
      $id = $row['id'];
      $name = $row['name'];
      // Notice that we want the value of the checkbox to be the id of the label
      echo "<input type='checkbox' name='chkBreeds[]' id='chkBreeds$id' value='$id'>";

      echo "<label for='chkBreeds$id'>$name</label><br />";

      echo "\n";
   }
}
catch (PDOException $ex)
{
   // Please be aware that you don't want to output the Exception message in
   // a production environment
   echo "Error connecting to DB. Details: $ex";
   die();
}
?>

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

        <!--  Size (1-3) Smallest-Large:
         <br>
          <input type="number" name="size"  min = "1" max = "3">
          <br> -->


          <input type="hidden" name="called" value = "true">
         <input type="submit" value="Submit">
       </p>

  </form>
</div>
</body>
</html>