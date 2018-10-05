<?php
//setcookie("fav-text", "c is for cookie", time() + (86400 * 7));
//$favorite = $_COOKIE["fav-text"];
session_start();
$_SESSION["count"] = 0;
// class Food
// {
//    public $amount;
//    public $item;
//    public $price;
// };

// $cart = array();
// if(!isset($_SESSION["cart"]))
//    $_SESSION["cart"];

if(isset($_SESSION["visits"]))
$_SESSION["visits"]++;
else
$_SESSION["visits"] = 1;

$visits = $_SESSION["visits"];
?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
   <h1><b>Welcome user</b></h1>
<?php


echo "Hello user you have visted $visits times";
?>
</body>
</html>