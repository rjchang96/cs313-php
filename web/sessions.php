<?php
//setcookie("fav-text", "c is for cookie", time() + (86400 * 7));
//$favorite = $_COOKIE["fav-text"];
session_start();
//$_SESSION["count"] = 0;
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
   <p>Hello user you have visted  </p>
<?php


echo $visits;
?>
</body>
</html>