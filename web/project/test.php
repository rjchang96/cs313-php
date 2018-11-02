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
      $this->$name = "";
      $this->$category = "";
      $this->$recipe = "";
   }
   public $category;
   public $name;
   public $recipe;
   // function setName($namer)
   // {
   //    $this->$name = $namer;
   // }
   // function getName()
   // {
   //    return $this -> $name;
   // }
   // function getCategory()
   // {
   //    return $this->$category;
   // }
   // function setCategory($categoryr)
   // {
   //    $this->$category = $categoryr;
   // }
   // function getRecipe()
   // {
   //    return $this->$recipe;
   // }
   // function setRecipe($reciper)
   // {
   //    $this->$recipe = $reciper;
   // }
   public function __get($property){
      if (property_exists($this, $property))
         return $this->$property;
   }
public function __set($property, $value){
      if (property_exists($this, $value))
         $this->$property = $value;
      return $this;
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
   $stuff->__set($name, "pizza");
   echo "name: " . $stuff->__get($name);
   // $stuff->setName("pizza");
   // $stuff->setCategory("fat");
   // $stuff->setRecipe("make beautifulness");
  // echo "Stuff: " . $stuff->$name . " <br>";
   //echo "stuff recipe: " . $stuff->$recipe . "<br>";
   // echo "stuf name: ". $stuff->getName() . " <br>";
   //  echo "stuf recipe: ". $stuff->getRecipe() . " <br>";
   //   echo "stuf category: ". $stuff->getCategory() . " <br>";

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
