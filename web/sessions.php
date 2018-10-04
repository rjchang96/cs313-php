<?php
//setcookie("fav-text", "c is for cookie", time() + (86400 * 7));
$favorite = $_COOKIE["fav-text"];
?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
   <p>This is a page </p>
<?php
echo "Your favorite " + $favorite;
?>
</body>
</html>