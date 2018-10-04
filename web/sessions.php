<?php
//setcookie("fav-text", "c is for cookie", time() + (86400 * 7));
//$favorite = $_COOKIE["fav-text"];
session_start();
$_SESSION["count"] = 0;
?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
   <p>Hello user you have visted  </p>
<?php
if(!isset($_SESSION))
$_SESSION = 1;
else
$_SESSION +=1;

echo $_SESSION;
?>
</body>
</html>