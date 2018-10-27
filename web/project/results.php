<?php
// connect to db
require('dbConnect.php');
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
   <title>Dog Reviews</title>
</head>
<body>
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