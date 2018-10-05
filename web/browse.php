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
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="blueberries.jpg" alt="Blueberries" style="width:300px; height:300px">
      </div>

      <div class="item">
        <img src="steak.jpg" alt="Steak" style="width:300px; height:300px">
      </div>

      <div class="item">
        <img src="frenchBread.jpg" alt="French Bread" style="width:300px; height:300px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

      <!-- <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p> -->
    <br/>
    <div>
    <!-- <img src = "eggplant.jpg" alt = "eggplant" class = "imgFirst">
    <img src = "spinach.jpg" alt = "spinach" class = "imgMid">
    <img src = "cabbage.jpg" alt = "cabbage" class = "imgLast" class = "imgLast">
    <b class = "underFirst">Eggplant</b>
    <b class = "underMid">Spinach</b>
    <b class = "underLast">Cabbage</b>
    <br/>
    <span class = "underFirst" style = "background-color: white;">Price: $1.23</span>
    <span style = "margin-left:37%; position: relative; margin-top: 10%;">Price: $2.00</span>
    <span style = "margin-left:29%; position: relative; margin-top: 10%;">Price: $1.00</span>
    </div>
    <br/> -->
    <br/>
    <div>
    <img src = "brusselSprouts.jpg" alt = "Brussel Sprouts" style = "margin-left: 20%; position:relative; margin: auto; width: 200px; height:150px;">
    <img src = "carrots.jpg" alt = "Carrots" style = "position:relative;
        margin-left:15%; width: 250px; height: 200px;">
    <img src = "potatoes.jpg" alt = "Potatoes" style=" position:relative;
        margin-left:10%; width: 250px; height: 200px;">

    <b style = "margin-top: 10%; margin-left:8%;">Brussels</b>
    <b style = " margin-top: 10%; position: relative; margin-left: 33%;">Carrots</b>
    <b style = "margin-top: 10%; position: relative; margin-left: 27%;">Potatoes</b>
    <br/>
    <span class = "underFirst" style = "background-color: white;">Price: $0.50</span>
    <span style = "margin-left:36%; position: relative; margin-top: 10%;">Price: $2.00</span>
    <span style = "margin-left:27%; position: relative; margin-top: 10%;">Price: $3.50</span>
    </div>
    <br/>
    <br/>
    <div>
    <img src = "sprouts.jpg" alt = "sprouts" class = "imgFirst">
    <img src = "apples.jpg" alt = "Apple" class = "imgMid">
    <img src = "strawberries.jpg" alt = "strawberries" class = "imgLast" class = "imgLast">
    <b class = "underFirst">Sprouts</b>
    <b class = "underMid">Apple</b>
    <b class = "underLast">Strawberries</b>
    <br/>
    <span class = "underFirst">Price: $0.75</span>
    <span style = "margin-left:37%; position: relative; margin-top: 10%;">Price: $0.50</span>
    <span style = "margin-left:27%; position: relative; margin-top: 10%;">Price: $3.99</span>
    </div>

<br/>
<!-- <h3>Treat Your Buddy</h3>
 <br/>
    <div>
    <img src = "images/03pics/biscuits.jpg" alt = "biscuits" class = "imgFirst">
    <img src = "images/03pics/chickenjerky.jpg" alt = "chicken jerky" class = "imgMid">
    <img src = "images/03pics/Dentastix.jpg" alt = "Dentastix" class = "imgLast">
    <b class = "underFirst">Tasty Biscuits</b>
    <b class = "underMid">Chicken jerky</b>
    <b class = "underLast">Dentastix</b>
    <br/>
    <span class = "underFirst" style = "background-color: white;">Price: $5.99</span>
    <span style = "margin-left:35%; position: relative; margin-top: 10%;">Price: $7.99</span>
    <span style = "margin-left:28%; position: relative; margin-top: 10%;">Price: $8.99</span>
    </div>
    <br/>
    <br/>
     <div>
    <img src = "images/03pics/grandebones.jpg" alt = "grande bones" class = "imgFirst">
    <img src = "images/03pics/milkbone.jpg" alt = "milk bone" class = "imgMid">
    <img src = "images/03pics/pumpkinTreat.jpg" alt = "pumpkin Treat" class = "imgLast">
    <b class = "underFirst">Grande Bones</b>
    <b class = "underMid">Milk Bones</b>
    <b class = "underLast">Pumpkin Treat</b>
    <br/>
    <span class = "underFirst" style = "background-color: white;">Price: $5.99</span>
    <span style = "margin-left:35%; position: relative; margin-top: 10%;">Price: $7.99</span>
    <span style = "margin-left:27%; position: relative; margin-top: 10%;">Price: $4.99</span>
    </div>
    <br/>
    <br/>
    <br/>
     <div>
    <img src = "images/03pics/pup-peroni.jpg" alt = "Pup-peroni" class = "imgFirst">
    <img src = "images/03pics/smokehouseBone.jpg" alt = "Smokehouse Bone" class = "imgMid" style = "height:150px;">
    <img src = "images/03pics/pigear.jpg" alt = "Pig Ear" class = "imgLast">
    <b class = "underFirst">Pup-peroni</b>
    <b class = "underMid">SmokeHouse Bone</b>
    <b class = "underLast">Pig Ear</b>
    <br/>
    <span class = "underFirst" style = "background-color: white;">Price: $8.99</span>
    <span style = "margin-left:33%; position: relative; margin-top: 10%;">Price: $9.99</span>
    <span style = "margin-left:31%; position: relative; margin-top: 10%;">Price: $5.99</span>
    </div> -->
<br/>

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