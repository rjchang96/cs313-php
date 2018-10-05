<?php
session_start();
$item = $_POST["item"];

 $_SESSION["cart"][$item]++;
 echo "added stuff";
 header("location: browse.php");
?>