<?php
session_start();
//if(isset($_POST['size']) )
//{
 // echo "in the postSeach php file\n";
$_SESSION['size'] = $_POST['size'];
//echo "checking size: " . $_SESSION['size']. "<br>";
 // $uhyperallergenic = $_POST['Hyperallergenic'];
  $_SESSION['hyperallergenic'] = $_POST['Hyperallergenic'];
//$uhyperallergenic = $_SESSION['Hyperallergenic'];
//echo "user input of hyperallergenic: $uhyperallergenic \n";
$_SESSION['cost']= $_POST['cost'];
//$ucost =  $_SESSION['cost'];
//echo "user input of cost: $ucost \n";
$_SESSION['exercise'] = $_POST['exercise'];
//$uexercise =  $_SESSION['exercise'];
//echo "user input of exercise: $uexercise \n";
//$_SESSION = $_POST['size'];
//$usize =  $_SESSION['size'];
//echo "user input of size: $usize \n";
$_SESSION['temperment'] = $_POST['temperment'];
//$utemperment =  $_SESSION['temperment'];
//echo "user input of temperment: $utemperment \n";
$_SESSION['hair'] = $_POST['hair'];
$_SESSION['result'] = $_POST['called'];
//$uhair =  $_SESSION['hair'];
//echo "user input for the hair $uhair\n";

//}
header("location: results.php");

?>