<?php
session_start();

$_SESSION['size'] = $_POST['size'];
$_SESSION['hyperallergenic'] = $_POST['Hyperallergenic'];
$_SESSION['cost']= $_POST['cost'];
$_SESSION['exercise'] = $_POST['exercise'];
$_SESSION['temperment'] = $_POST['temperment'];

$_SESSION['hair'] = $_POST['hair'];
$_SESSION['result'] = $_POST['called'];

header("location: results.php");

?>