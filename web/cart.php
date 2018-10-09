
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
        if($value != 0)
         {
            if($key == 000)
            {
               $cost = 1.23 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'eggplant.jpg' alt = 'eggplant' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '000'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '000'></form>";
                   echo "You have purchased $value Eggplants. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'eggplant.jpg' alt = 'eggplant' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '000'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '000'></form>";
                   echo "You have purchased $value Eggplant. The Cost is: $ $cost";

               }
            }

            if($key == 001)
            {
               $cost = 2.00 * $value;
               // if($value > 1)
               // {
                  echo "<br><img src = 'spinach.jpg' alt = 'spinach' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '001'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '001'></form>";
                   echo "You have purchased $value Spinach. The Cost is: $cost";
            }

                if($key == 002)
               {
               $cost = 1.00 * $value;
                  echo "<br><img src = 'cabbage.jpg' alt = 'cabbage' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '002'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '002'></form>";
                   echo "You have purchased $value Cabbage. The Cost is: $cost";
                }


            if($key == 003)
            {
               $cost = 0.50 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'brusselSprouts.jpg' alt = 'brusselSprouts' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '003'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '003'></form>";
                   echo "You have purchased $value Brussel Sprouts. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'brusselSprouts.jpg' alt = 'Brussel Sprouts' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '003'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '003'></form>";
                   echo "You have purchased $value Brussl Sprout. The Cost is: $ $cost";

               }
            }
                if($key == 004)
               {
               $cost = 2.00 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'carrots.jpg' alt = 'carrots' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '004'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '004'></form>";
                   echo "You have purchased $value Carrots. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'carrots.jpg' alt = 'carrots' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '004'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '004'></form>";
                   echo "You have purchased $value Carrot. The Cost is: $ $cost";

               }
            }
                if($key == 005)
               {
               $cost = 3.50 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'potatoes.jpg' alt = 'potatoes' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '005'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '005'></form>";
                   echo "You have purchased $value Potatoes. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'potatoes.jpg' alt = 'potatoes' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '005'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '005'></form>";
                   echo "You have purchased $value Potatoe. The Cost is: $ $cost";

               }
            }
            if($key == 006)
             {
               $cost = 0.75 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'sprouts.jpg' alt = 'sprouts' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '006'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '006'></form>";
                   echo "You have purchased $value bunches of sprouts. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'sprouts.jpg' alt = 'sprouts' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '006'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '006'></form>";
                   echo "You have purchased $value bunch of sprouts. The Cost is: $ $cost";

               }
            }
            if($key == 007)
            {
               $cost = 0.50 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'apple.jpg' alt = 'apple' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '007'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '007'></form>";
                   echo "You have purchased $value apples. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'apples.jpg' alt = 'apples' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '007'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '007'></form>";
                   echo "You have purchased $value apples. The Cost is: $ $cost";

               }
            }
            if($key == 008)
            {
               $cost = 3.99 * $value;
               if($value > 1)
               {
                  echo "<br><img src = 'apple.jpg' alt = 'apple' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '007'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '007'></form>";
                   echo "You have purchased $value apples. The Cost is: $cost";
               }
               else
               {
                  echo "<br><img src = 'apples.jpg' alt = 'apples' style = 'width: 200px; height:150px;'><br><br>";
                  echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '007'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '007'></form>";
                   echo "You have purchased $value apples. The Cost is: $ $cost";

               }
            }

            // if($key == 008)
            // {
            //    $cost = 3.99 * $value;
            //    if($value > 1)
            //    {
            //       echo "<br><img src = 'strawberries.jpg' alt = 'strawberries' style = 'width: 200px; height:150px;'><br><br>";
            //       echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '008'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '008'></form>";
            //        echo "You have purchased $value boxes of Strawberries. The Cost is: $cost";
            //    }
            //    else
            //    {
            //       echo "<br><img src = 'strawberries.jpg' alt = 'strawberries' style = 'width: 200px; height:150px;'><br><br>";
            //       echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '008'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '008'></form>";
            //        echo "You have purchased $value box of Strawberries. The Cost is: $ $cost";

            //    }
            // }
            // if($key == 009)
            // {
            //    $cost = 1.23 * $value;
            //    if($value > 1)
            //    {
            //       echo "<br><img src = 'eggplant.jpg' alt = 'eggplant' style = 'width: 200px; height:150px;'><br><br>";
            //       echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '000'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '000'></form>";
            //        echo "You have purchased $value Eggplants. The Cost is: $cost";
            //    }
            //    else
            //    {
            //       echo "<br><img src = 'eggplant.jpg' alt = 'eggplant' style = 'width: 200px; height:150px;'><br><br>";
            //       echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '000'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '000'></form>";
            //        echo "You have purchased $value Eggplant. The Cost is: $ $cost";

            //    }
            // }
            //     if($key == 000)
            // {
            //    $cost = 1.23 * $value;
            //    if($value > 1)
            //    {
            //       echo "<br><img src = 'eggplant.jpg' alt = 'eggplant' style = 'width: 200px; height:150px;'><br><br>";
            //       echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '000'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '000'></form>";
            //        echo "You have purchased $value Eggplants. The Cost is: $cost";
            //    }
            //    else
            //    {
            //       echo "<br><img src = 'eggplant.jpg' alt = 'eggplant' style = 'width: 200px; height:150px;'><br><br>";
            //       echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '000'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '000'></form>";
            //        echo "You have purchased $value Eggplant. The Cost is: $ $cost";

            //    }
            // }
            //     if($key == 000)
            // {
            //    $cost = 1.23 * $value;
            //    if($value > 1)
            //    {
            //       echo "<br><img src = 'eggplant.jpg' alt = 'eggplant' style = 'width: 200px; height:150px;'><br><br>";
            //       echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '000'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '000'></form>";
            //        echo "You have purchased $value Eggplants. The Cost is: $cost";
            //    }
            //    else
            //    {
            //       echo "<br><img src = 'eggplant.jpg' alt = 'eggplant' style = 'width: 200px; height:150px;'><br><br>";
            //       echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '000'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '000'></form>";
            //        echo "You have purchased $value Eggplant. The Cost is: $ $cost";

            //    }
            // }
            // if($key == 000)
            // {
            //    $cost = 1.23 * $value;
            //    if($value > 1)
            //    {
            //       echo "<br><img src = 'eggplant.jpg' alt = 'eggplant' style = 'width: 200px; height:150px;'><br><br>";
            //       echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '000'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '000'></form>";
            //        echo "You have purchased $value Eggplants. The Cost is: $cost";
            //    }
            //    else
            //    {
            //       echo "<br><img src = 'eggplant.jpg' alt = 'eggplant' style = 'width: 200px; height:150px;'><br><br>";
            //       echo "<form action = 'caddFood.php' method = 'POST' style =' margin-left: 7%; position: relative;'> <input type='submit' value='+'><input type='hidden' name='item' value = '000'></form> <form action = 'minusFood.php' method = 'POST' style =' margin-left: 10%; position: relative;'> <input type='submit' value='-'><input type='hidden' name='item' value = '000'></form>";
            //        echo "You have purchased $value Eggplant. The Cost is: $ $cost";

            //    }
            // }

         }
        // echo "$key has this many $value items<br>";
      }

         # code...
     ?>

    </div>
</body>
</html>