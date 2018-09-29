<!-- <?php
// $file = basename($_SERVER['PHP_SELF']);

// if($file === 'about.php')
//    echo "<div><a href = 'about.php' class = 'active'>About</a></div>";
// else
//     echo "<div><a href = 'about.php'>About</a></div>";

// if($file === 'login.php')
//    echo "<div><a href = 'login.php' class = 'active'>Login</a></div>";
// else
//    echo "<div><a href = 'login.php'>Login</a></div>";

// if($file === 'home.php')
//    echo "<div><a href = 'home.php' class = 'active'>Home</a></div>";
// else
//     echo "<div><a href = 'home.php'>Home</a></div>";


// echo "
//     <br>
//    <div> <a href= 'home.php'>Home </a></div>
//    <br>
//   <div> <a href='login.php'>Login</a></div>
//   <br>";
?> -->
<nav>
   <?php
   $file = basename($_SERVER["SCRIPT_FILENAME"]);

   ?>
   <a
   <?php
   if($file == 'page')
      echo "class = 'currentPage'";
   ?>
   href = "page.php">Home</a>
    <a
   <?php
   if($file == 'index.html')
      echo "class = 'currentPage'";
   ?>
   href = "index.html">Assignments</a>

</nav>