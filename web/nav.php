<?php
$file = basename($_SERVER['PHP_SELF']);

if($file === "about.php")
   echo "<div><a href = 'about.php' class = 'active'>About</a></div>";
else
    echo "<div><a href = 'about.php'>About</a></div>";

if($file === "login.php")
   echo "<div><a href = 'login.php' class = 'active'>Login</a></div>";
else
   echo "<div><a href = 'login.php'>Login</a></div>";

if($file === "home.php")
   echo "<div><a href = 'home.php' class = 'active'>Home</a></div>";
else
    echo "<div><a href = 'home.php'>Home</a></div>";


// echo "
//     <br>
//    <div> <a href= 'home.php'>Home </a></div>
//    <br>
//   <div> <a href='login.php'>Login</a></div>
//   <br>";
?>