<?php
// connect to db
require('dbConnect.php');
$db = get_db();
// $uhyperallergenic = $_POST['Hyperallergenic'];
// //echo "user input of hyperallergenic: $uhyperallergenic \n";
// $ucost = $_POST['cost'];
// //echo "user input of cost: $ucost \n";
// $uexercise = $_POST['exercise'];
// //echo "user input of exercise: $uexercise \n";
// $usize = $_POST['size'];
// //echo "user input of size: $usize \n";
// $utemperment = $_POST['temperment'];
// //echo "user input of temperment: $utemperment \n";
// $uhair = $_POST['hair'];
//echo "user input of hair: $uhair \n";

// $stmt = $db->prepare('SELECT id, name, description, hyperAllergenic, P_temperment, size, P_hair, P_exercise, minCost, maxCost, professionalRating, overallUserRating, sizeRange FROM breeds');
// $stmt->execute();
// $dogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
   <title>Dog Reviews</title>
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

      <a href= "form.php" style="margin-left: 10px;">Search </a>
      <a href = "dog.php"  style="margin-left: 10px;">Insert a Breed Review</a>

    </div>
   <h1>Dog Reviews</h1>

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

     <?php
// This section will now generate the available check boxes for topics
// based on what is in the database
// As before, it would be better to break this out into a separate function
// in a separate file, that handled the DB interaction, and returned
// a list of topics. But to keep things as clear as possible we can
// also query and loop through the results, right here.
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
      // Also, so they can click on the label, and have it select the checkbox,
      // we need to use a label tag, and have it point to the id of the input element.
      // The trick here is that we need a unique id for each one. In this case,
      // we use "chkTopics" followed by the id, so that it becomes something like
      // "chkTopics1" and "chkTopics2", etc.
      echo "<label for='chkBreeds$id'>$name</label><br />";
      // put a newline out there just to make our "view source" experience better
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

         Size (1-3) Smallest-Large:
         <br>
          <input type="number" name="size"  min = "1" max = "3">
          <br>



         <input type="submit" value="Submit">
       </p>

  </form>
</div>
</body>
</html>