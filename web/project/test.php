<?php

require('dbConnect.php');
$db = get_db();
// query for all movies
// $stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
// $stmt->bindValue(':id', $id, PDO::PARAM_INT);
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);
// $stmt->execute();
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $uname = $_POST['name'];
// //echo "user input of hyperallergenic: $uhyperallergenic \n";
// $ucategory = $_POST['category'];
// //echo "user input of cost: $ucost \n";
// $urecipe = $_POST['recipe'];
//echo "user input of exercise: $uexercise \n";

// $stmt = $db->prepare('SELECT id, name, description, hyperAllergenic, P_temperment, size, P_hair, P_exercise, minCost, maxCost, professionalRating, overallUserRating, sizeRange FROM breeds');
// $stmt->execute();
// $dogs = $stmt->fetchAll(PDO::FETCH_ASSOC);

class food
{
   function __construct1()
   {
      $name = "";
      $category = "";
      $recipe = "";
   }
   public $category;
   public $name;
   public $recipe;
   function setName($namer)
   {
      $name = $namer;
   }
   function getName()
   {
      return $name;
   }


   // function output($stuff)
   // {
   //    echo "Name of food: $name <br>";
   //    echo "Category: $category <br>";
   //    echo "Recipe <br>";
   //    echo $recipe;
   // }
}

function putStuffIn()
{
   echo "<h1>in the begining</h1><br>";
   $stuff = new food();
   //$stuff->$category = "fat";
  // $stuff->$name = "pizza";
   //$stuff->$recipe = "make beautifulness";
   $stuff->setName("pizza");
  // echo "Stuff: " . $stuff->$name . " <br>";
   //echo "stuff recipe: " . $stuff->$recipe . "<br>";
   echo "stuf 2: ". $stuff->getName() . " <br>";

}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Stuffs</title>
   <style type="text/css">
      body{
         background-color: powderblue;
      }
   </style>
</head>
<body>
   <?php
   echo "putting things into put stuff in<br>";
   putStuffIn();
   ?>

</body>
</html>
