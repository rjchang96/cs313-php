<?php
// connect to db
session_start();
// $_SESSION["results"] = true;

require('dbConnect.php');
$db = get_db();
//&& $_SESSION['called'] == true

//echo "outside session set if statement<br>";

  $uhyperallergenic = $_SESSION['hyperallergenic'];
 //echo "hyperallergenic: $uhyperallergenic<br>";
// if($uhyperallergenic == "yes")
//   echo "it is true<br>";
// else
//   echo "it is false<br>";
  $ucost =  $_SESSION['cost'];
  //echo "cost session " . $_SESSION['cost'] . "<br>";
  $uexercise =  $_SESSION['exercise'];
  //echo "exercise session " . $_SESSION['exercise'] . "<br>";
  $usize =  $_SESSION['size'];
  $utemperment =  $_SESSION['temperment'];
  $uhair =  $_SESSION['hair'];

//}
//$_SESSION['result'] = $_POST['called'];
//echo "session result after the if statements: "
//. $_SESSION['result'] . "<br>";

//echo "user input of hair: $uhair \n";
$stmt = $db->prepare('SELECT id, name, description, hyperAllergenic, P_temperment, size, P_hair, P_exercise, minCost, maxCost, professionalRating, overallUserRating, sizeRange FROM breeds');
$stmt->execute();
$dogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($dogs);
class compare{
   function __construct1()
   {
      $this->name = "";
      $this->description ="";
      $this->professionalRating = 0;
      $this->size =  0;
      $this->hair =  0;
      $this->exercise =  0;
      $this->temperment =  0;
      $this->allergy =  0;
      $this->mincost =  0;
      $this->maxcost =  0;
      $this->pDiff =  0;
   }
   public $pDiff;
   public $description;
   public $professionalRating;
   public $name;
   public $size;
   public $hair;
   public $exercise;
   public $temperment;
   public $allergy;
   public $mincost;
   public $maxcost;
   function setAll($nName, $nDescript, $nSize, $nH, $nT, $nA,
      $nMinCost, $nMaxCost, $nE, $nPR, $diff)
   {
    $this->setMaxcost($nMaxCost);
    $this->setMincost($nMinCost);
    $this->setName($nName);
    $this->setDescription($nDescript);
    $this->setSize($nSize);
    $this->setHair($nH);
    $this->setTemperment($nT);
    $this->setAllergy($nA);
    $this->setExercise($nE);
    $this->setPR($nPR);
    $this->setPercentDifference($diff);
   }
    function setMaxcost($maxcostr)
   {
      $this->maxcost = $maxcostr;
   }
   function getMaxcost()
   {
      return $this->maxcost;
   }
    function setMincost($mincostr)
   {
      $this->mincost = $mincostr;
   }
   function getMincost()
   {
      return $this->mincost;
   }
    function setAllergy($allergyr)
   {
      $this->allergy = $allergyr;
   }
   function getAllergy()
   {
      return $this->allergy;
   }
    function setTemperment($temper)
   {
      $this->temperment = $temper;
   }
   function getTemperment()
   {
      return $this->temperment;
   }
    function setExercise($exerciser)
   {
      $this->exercise = $exerciser;
   }
   function getExercise()
   {
      return $this->exercise;
   }
    function setHair($hairr)
   {
      $this->hair = $hairr;
   }
   function getHair()
   {
      return $this->hair;
   }
   function setSize($sizer)
   {
      $this->size = $sizer;
   }
   function getSize()
   {
      return $this->size;
   }
   function setName($nName)
   {
      $this->name = $nName;
   }
   function getName()
   {
      return $this->name;
   }
    function setDescription($descriptionr)
   {
      $this->description = $descriptionr;
   }
   function getDescription()
   {
      return $this->description;
   }
    function setPR($PRr)
   {
      $this->professionalRating = $PRr;
   }
   function getPR()
   {
      return $this->professionalRating;
   }


   function setPercentDifference($pDifference)
   {
      $this->pDiff= $pDifference;
   }
  function getPercentDifference()
   {
      return $this->pDiff;
   }
}
function costEvaluate($mincost, $maxcost)
{
    $costVal = 0;
   if($mincost <= 200 && $maxcost < 350)
      $costVal = 1;
   else if($mincost >= 350 && $maxcost <= 650)
      $costVal = 3;
   else if($mincost >= 650 && $maxcost <= 850)
      $costVal = 4;
   else
      $costVal = 5;
   return $costVal;
}

function cmp($a, $b)
{
   if($a->getPercentDifference() == $b->getPercentDifference())
      return 0;
   return ($a->getPercentDifference() < $b->getPercentDifference()) ? -1 : 1;
}

function evaluate($list)
{
     $s_wieght = 5;
      $t_weight = 6;
      $h_weight = 4;
      $e_weight = 3;
      $c_weight = 2;
     // echo "in the evaluate<br>";
      //echo "in the begining of evaluate<br>";
      $uTot = ($uhair*$h_weight) + ($usize*$s_wieght) + ($uexercise * $e_weight) + ($utemperment * $t_weight) + ($ucost*$c_weight);
     // echo"user input total: $uTot<br>";
   foreach ($dogs as $breeds) {
   //echo "in the begining of for each loop<br>";
      $dallergy = $breeds['hyperallergenic'];
      $dtemperment = $breeds['p_temperment'];
      $dexercise = $breeds['p_exercise'];
      $dhair = $breeds['p_hair'];
      $dsize = $breeds['sizerange'];

      $dname = $breeds['name'];
      $ddescription = $breeds['description'];
      $dmax = $breeds['mincost'];
      $dmin = $breeds['maxcost'];
      $PR = $breeds['professionalrating'];

      if($uhyperallergenic == "yes")
      {
        //echo "in the first if<br>";
         if($dallergy == true)
         {
         // echo "in the allergy true case <br>";
            $costVal = costEvaluate($dmin, $dmax);
            $cresult = $costVal*$c_weight;
            $hresult = $dhair*$h_weight;
            $tresult = $dtemperment*$t_weight;
            $eresult = $dexercise*$e_weight;
            $sresult = $dsize*$s_weight;
            $result = $sresult+$cresult+$hresult+$tresult+$eresult;
            //echo "overall dog result: $result <br>";
            $tot = abs((($uTot - $result)/$uTot)) * 100;
             $data = new compare();

             $data->setAll($dname, $ddescription,
               $dsize, $dhair, $dtemperment, $dallergy,
               $dmin, $dmax, $dexercise, $PR, $tot);
            array_push($list, $data);
         }
         continue;
      }
      else
      {

         $costVal = costEvaluate($dmin, $dmax);
            $cresult = $costVal*$c_weight;
            //echo "the cost result: " . $cresult . "<br>";
            $hresult = $dhair*$h_weight;
           // echo "the hair result: " . $hresult . "<br>";
            $tresult = $dtemperment*$t_weight;
           // echo "the temperment result: " . $tresult . "<br>";
            $eresult = $dexercise*$e_weight;
            //echo "the exercise result: " . $eresult . "<br>";
            $sresult = $dsize*$s_weight;
           // echo "size: " . $dsize . "<br>";
            //echo "the size result: " . $sresult . "<br>";
            $result = $sresult+$cresult+$hresult+$tresult+$eresult;
            //echo "overall dog result: $result <br>";
            $tot = abs((($uTot - $result)/$uTot)) * 100;
            //echo "the name: $dname <br>";
            $data = new compare();

             $data->setAll($dname, $ddescription,
               $dsize, $dhair, $dtemperment, $dallergy,
               $dmin, $dmax, $dexercise, $PR, $tot);
            // echo "datas name: " . $data->getName() . "<br>";
            // var_dump($data);
            array_push($list, $data);
            // $list[] = $data;
            //echo "name in the list: " . $list[0]->$name . "<br>";

      }
   }
}

function mult($weight, $value)
{
  return $value * $weight;
}

function display($list)
{
  foreach ($list as $key) {
    $hyperallergenic = $key->getAllergy();
    $name = $key->getName();
    $description = $key->getDescription();
    $temper = $key->getTemperment();
    echo "<img src = '$name.jpg' alt = 'dog' class = 'center'><br>";
    echo "<p><h2 style = 'text-align:center;'>$name </h2><br>";
   // echo "percent match: " . $key->getPercentDifference()
  //  . "%<br>";
    echo "<div style = 'text-align:center;'>
      Scoring scale 1-5 except temperment is 1-10<br>";
    echo "<b>HypoAllergenic:</b> ";
    if($hyperallergenic == true)
      echo "Yes<br>";
    else
      echo "No<br>";
    echo "<b>Temperment:</b> $temper<br>";
    echo "<b>Minimum Cost</b> $" . $key->getMincost()
    . "<br> <b>Maximum Cost</b> $"
    . $key->getMaxcost() . "<br>";
    echo "<b>Shedding Lvl least to most:</b> " . $key->getHair() . "<br>";
    echo "<b>Exercise Lvl least to most:</b> " . $key->getExercise() . "<br>";

     echo "<b>Description</b> <br> $description <br></p></div>";
  }
}
// go through each movie in the result and display it
?>
<!DOCTYPE html>
<html>
<head>
    <title>Choose your pet</title>
   <link rel = "styleSheet" type="text/css" href="dogStyleSheet.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Results</title>
   <style type="text/css">
     .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    }
   </style>
</head>
<body>


   <div id = "grid-container">

      <div class="head">
         <img src = "logo1.png" alt= "pet logo"
    class = "logo" style="float:left" >
      <header><h1>Perfect Dog 4 U</h1></header>
      </div>

    <div class="menu">
      <div style="background-color: skyblue;">
        <a href = "homepage.html">Home</a>

      <a href= "form.php" style="margin-left: 10px;">Search </a>
      <a href = "results.php"  style="margin-left: 10px;">Results</a>
      <a href = "showAudienceRating.php"  style="margin-left: 10px;">Audience Reviews</a>

    </div>
     <!--  <br>
      <div> <a href="academics.html">Academics</a></div>
      <br>
      <br>
      <div><a href = "athletics.html">Athletics</a></div>
      <br>
      <br>
      <div><a href = "campusMap.html">Campus Map</a></div> -->

    <div class = "right">
  </div>

<div class = "main" style=" font-size: 20px;">
 <p>
  <div style = "font-size: 20px;">
 </div> <br>
 <h2 style="margin:auto;text-align:center;">
 Highest Percent Match Results</h2>

   <ul>
<?php

//psql changes everythings to lowercase when stored so
//when trying to access in php have to change it to all
//lower
$list = array();
//
//evaluate($list);
//////////////////////////////////////////////////////////////////
      $s_wieght = 5;
      $t_weight = 6;
      $h_weight = 3;
      $e_weight = 2;
      $c_weight = 4;
      //echo "in the begining of evaluate<br>";
      $uTot = ($uhair*$h_weight) + ($usize*$s_wieght) + ($uexercise * $e_weight) + ($utemperment * $t_weight) + ($ucost*$c_weight);
     // echo"user input total: $uTot<br>";
   foreach ($dogs as $breeds) {
   //echo "in the begining of for each loop<br>";
      $dallergy = $breeds['hyperallergenic'];
      $dtemperment = $breeds['p_temperment'];
      $dexercise = $breeds['p_exercise'];
      $dhair = $breeds['p_hair'];
      $dsize = $breeds['sizerange'];

      $dname = $breeds['name'];
      $ddescription = $breeds['description'];
      $dmax = $breeds['maxcost'];
      $dmin = $breeds['mincost'];
      $PR = $breeds['professionalrating'];
      //echo "in for each $dname<br>";
      // $data = new compare();
           // echo "User cost: $ucost<br>";
      if($uhyperallergenic == "yes")
      {
         if($dallergy == true)
         {
         // echo "in the allergy<br>";
            $costVal = costEvaluate($dmin, $dmax);
            $cresult = $costVal*$c_weight;
            $hresult = $dhair*$h_weight;
            $tresult = $dtemperment*$t_weight;
            $eresult = $dexercise*$e_weight;
            $sresult = $dsize*$s_weight;
            $result = $sresult+$cresult+$hresult+$tresult+$eresult;
            //echo "overall dog result: $result <br>";
            $tot = abs((($uTot - $result)/$uTot)) * 100;
             $data = new compare();

             $data->setAll($dname, $ddescription,
               $dsize, $dhair, $dtemperment, $dallergy,
               $dmin, $dmax, $dexercise, $PR, $tot);
            array_push($list, $data);
         }
         continue;
      }
      else
      {
         $costVal = costEvaluate($dmin, $dmax);
            $cresult = $costVal*$c_weight;
            $hresult = $dhair*$h_weight;
            $tresult = $dtemperment*$t_weight;
            $eresult = $dexercise*$e_weight;
            $sresult = $dsize*$s_weight;
            $result = $sresult+$cresult+$hresult+$tresult+$eresult;

            $tot = abs((($uTot - $result)/$uTot)) * 100;

            $data = new compare();

             $data->setAll($dname, $ddescription,
               $dsize, $dhair, $dtemperment, $dallergy,
               $dmin, $dmax, $dexercise, $PR, $tot);

            array_push($list, $data);
      }
   }
///////////////////////////////////////////////////////////////////

usort($list, "cmp");
display($list);

?>
   </ul>



  <br> <br>
 </p>
</div>

 <div class = "footer">
 <footer >
   <p style = "font-size: 15px"><b>Like what you see? Like us on Facebook or Twitter</b></p>
  <a href="https://www.facebook.com/"> <img src = "facebook.png" alt = "facebook" class = "icons"></a>
  <a href= "https://twitter.com/?lang=en" ><img src = "twitter.png" alt = "Twitter" class = "icons"></a>
 </footer>
</div>



   </div>

</body>
</html>