<?php
session_start();
// $text = $_POST["text"]
// $_SESSSION["address"][$text];
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport"
   content="width=device-width, initial scale=1">
   <!-- Latest compiled and minified CSS -->
   <link rel = "style" href = "meiDongxi.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <title>Shopping for foods</title>
</head>
<body>
<!-- <body style="background-image: url('chineseMarket.jpg');"> -->
   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" type="image" src="chineseLogo.jpg"
          width="48" height="48">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand">Cha Chang Foods</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="shoppingHome.php">Home</a></li>
              <li><a href="browse.php">Browse</a></li>
              <li><a href="cart.php">Cart</a></li>
               <li><a href="checkout.php">Checkout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container">

      <h1>Cha Chang Foods</h1>

      <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

<?php
//specialcharacters()
 echo "<pre>";
 print_r($_POST);
 echo "<pre>";
 echo "City: {$_POST['city']}" ."<br/>";
 echo "Street address: {$_POST['street']}" ."<br/>";
 echo "Zip Code: {$_POST['zip']}" ."<br/>";
 echo "State: {$_POST['state']}" ."<br/>";
 echo "Country: {$_POST['country']}" ."<br/>";

?>
<br>
<h2>Your Order summary</h2>
<?php
foreach ($cart as $key => $value)
      {
        if($value != 0)
         {
            if($key == 000)
            {
               $cost = 1.23 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'eggplant.jpg' alt = 'eggplant' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '000'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '000'></form>";
                   echo "You have purchased $value Eggplants. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'eggplant.jpg' alt = 'eggplant' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '000'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '000'></form>";
                   echo "You have purchased $value Eggplant. The Cost is: $ $cost";

               }
            }

            if($key == 001)
            {
               $cost = 2.00 * $value;
               // if($value > 1)
               // {
                  echo "<br><img src = 'spinach.jpg' alt = 'spinach' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '001'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '001'></form>";
                   echo "You have purchased $value Spinach. The Cost is: $cost";
            }

                if($key == 002)
               {
               $cost = 1.00 * $value;
                  echo "<br><img src = 'cabbage.jpg' alt = 'cabbage' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '002'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '002'></form>";
                   echo "You have purchased $value Cabbage. The Cost is: $cost";
                }


            if($key == 003)
            {
               $cost = 0.50 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'brusselSprouts.jpg' alt = 'brusselSprouts' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '003'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '003'></form>";
                   echo "You have purchased $value Brussel Sprouts. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'brusselSprouts.jpg' alt = 'Brussel Sprouts' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '003'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '003'></form>";
                   echo "You have purchased $value Brussl Sprout. The Cost is: $ $cost";

               }
            }
                if($key == 004)
               {
               $cost = 2.00 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'carrots.jpg' alt = 'carrots' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '004'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '004'></form>";
                   echo "You have purchased $value Carrots. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'carrots.jpg' alt = 'carrots' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '004'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '004'></form>";
                   echo "You have purchased $value Carrot. The Cost is: $ $cost";

               }
            }
                if($key == 005)
               {
               $cost = 3.50 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'potatoes.jpg' alt = 'potatoes' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '005'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '005'></form>";
                   echo "You have purchased $value Potatoes. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'potatoes.jpg' alt = 'potatoes' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '005'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '005'></form>";
                   echo "You have purchased $value Potatoe. The Cost is: $ $cost";

               }
            }
            if($key == 006)
             {
               $cost = 0.75 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'sprouts.jpg' alt = 'sprouts' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '006'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '006'></form>";
                   echo "You have purchased $value bunches of sprouts. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'sprouts.jpg' alt = 'sprouts' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '006'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '006'></form>";
                   echo "You have purchased $value bunch of sprouts. The Cost is: $ $cost";

               }
            }
            if($key == 007)
            {
               $cost = 0.50 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'apple.jpg' alt = 'apple' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '007'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '007'></form>";
                   echo "You have purchased $value apples. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'apples.jpg' alt = 'apples' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '007'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '007'></form>";
                   echo "You have purchased $value apples. The Cost is: $ $cost";

               }
            }
            if($key == 010)
            {
               $cost = 3.99 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'strawberries.jpg' alt = 'strawberries' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '010'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '010'></form>";
                   echo "You have purchased $value boxes of strawberries. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'strawberries.jpg' alt = 'strawberries' style = 'width: 200px; height:150px;'><br><br>";
                  // echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '010'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '010'></form>";
                   echo "You have purchased $value box of strawberries. The Cost is: $ $cost";

               }
            }

         }
        // echo "$key has this many $value items<br>";
      }

         # code...
     ?>
 <!-- City: <input type="text" name="city" value = ""><br>
            Street address: <input type="text" name="street" value = ""><br>
            Zip Code: <input type="text" name="zip" value = ""><br>
            State: <input type="text" name="state" value = ""><br><br>
            Country: <input type="text" name="country" value = ""><br> -->

    <!-- Indicators -->
    <!-- <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
<!--     <div class="carousel-inner">
      <div class="item active">
        <img src="blueberries.jpg" alt="Blueberries" style="width:300px; height:300px">
      </div>

      <div class="item">
        <img src="steak.jpg" alt="Steak" style="width:300px; height:300px">
      </div>

      <div class="item">
        <img src="frenchBread.jpg" alt="French Bread" style="width:300px; height:300px">
      </div>
    </div> -->

    <!-- Left and right controls -->
   <!--  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> -->

      <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

</body>
</html>