<?php
session_start();
$item = $_POST["item"];

 $_SESSION["cart"][$item]++;
 // echo "added stuff " + $item;
 header("location: cart.php");
?>