
<?php
session_start();
 //if(isset($_SESSION["cart"]))

   $cart = $_SESSION["cart"];
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <!--  <meta name="viewport"
   content="width=device-width, initial scale=1"> -->
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

     <?php
    // if(isset($_SESSION["cart"]))
      foreach ($cart as $key => $value)
      {
         // if($value > 0)
         // {
            if($key == 000)
            {
                // echo "<form action = 'addFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '001'></form>" + "<form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '001'></form>";

                  // echo "You have purchased $value Eggplants. The Cost is: " + $value*1.23;
               if(getValue($value) != 0)
               {
                  $cost = getValue($value) * 1.23;
                   echo "You have purchased $value Eggplants. The Cost is: $cost";
               }
            }
           //  switch ($key) {
           //     case 000:
           //        // echo "<br><img src = 'eggplant.jpg' alt = 'eggplant'><br><br>";
           //        echo "<form action = 'addFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '001'></form>" + "<form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '001'></form>";

           //        echo "You have purchased $value Eggplants. The Cost is: " + $value*1.23;

           //        break;
           //        case 001:
           //        # code...
           //        break;
           //        case 002:
           //        # code...
           //        break;
           //        case 003:
           //        # code...
           //        break;
           //        case 004:
           //        # code...
           //        break;
           //        case 005:
           //        # code...
           //        break;
           //        case 006:
           //        # code...
           //        break;
           //        case 007:
           //        # code...
           //        break;
           //        case 008:
           //        # code...
           //        break;
           //        case 009:
           //        # code...
           //        break;
           //        case 010:
           //        # code...
           //        break;
           //        case 011:
           //        # code...
           //        break;
           //         case 012:
           //        # code...
           //        break;

           //     default:
           //        # code...
           //        break;
           // }
        // }
        // echo "$key has this many $value items<br>";
      }

         # code...
     ?>

    </div>
</body>
</html>