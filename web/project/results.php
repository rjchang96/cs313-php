<?php
// connect to db
require('dbConnect.php');
$db = get_db();
// query for all movies
// $stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
// $stmt->bindValue(':id', $id, PDO::PARAM_INT);
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);
// $stmt->execute();
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$uhyperallergenic = $_POST['Hyperallergenic'];
echo "user input of hyperallergenic: $uhyperallergenic \n";
$ucost = $_POST['cost'];
echo "user input of cost: $ucost \n";
$uexercise = $_POST['exercise'];
echo "user input of exercise: $uexercise \n";
$usize = $_POST['size'];
echo "user input of size: $usize \n";
$utemperment = $_POST['temperment'];
echo "user input of temperment: $utemperment \n";
$uhair = $_POST['hair'];
echo "user input of hair: $uhair \n";

$stmt = $db->prepare('SELECT id, name, description, hyperAllergenic, P_temperment, size, P_hair, P_exercise, minCost, maxCost, professionalRating, overallUserRating, sizeRange FROM breeds');
$stmt->execute();
$dogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($dogs);

class compare{
   // compare($nName, $nDescript, $nSize, $nH, $nT, $nA,
   //    $nMinCost, $nMaxCost, $nE, $nPR)
   // {
   //    $name = $nName;
   //    $description = $nDescript;
   //    $professionalRating = $nPR;
   //    $size = $nSize;
   //    $hair = $nH;
   //    $exercise = $nE;
   //    $temperment = $nT;
   //    $allergy = $nA;
   //    $mincost = $nMinCost;
   //    $maxcost = $nMaxCost;
   // }
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
   function setName($nName)
   {
      $name = $nName;
   }
   function getName()
   {
      return $name;
   }


   function setPercentDifference($pDifference)
   {
      $pDiff= $pDifference;
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


function evaluate($list, $dogs)
{


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
      <a href = "results.php"  style="margin-left: 10px;">Doggos</a>

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
 Results</h2>

   <ul>
<?php
//psql changes everythings to lowercase when stored so
//when trying to access in php have to change it to all
//lower
echo "in this block of php\n";
function cmp($a, $b)
{
   if($a.$pDiff == $b.$pDiff)
      return 0;
   return ($a.$pDiff < $b.$pDiff) ? -1 : 1;
}

$list = array();
//evaluate($list, $dogs, $ucost);
////////////////////////////////////////////////////////////////////
      $s_wieght = 5;
      $t_weight = 6;
      $h_weight = 3;
      $e_weight = 2;
      $c_weight = 4;
      echo "in the begining of evaluate<br>";
      $uTot = $uhair + $usize + $uexercise + $utemperment + $ucost;


   foreach ($dogs as $breeds) {
   echo "in the begining of for each loop<br>";
      $dallergy = $breeds['hyperallergenic'];
      $dtemperment = $breeds['p_temperment'];
      $dexercise = $breeds['p_exercise'];
      $dhair = $breeds['p_hair'];
      $dsize = $breeds['sizeRange'];
      $dname = $breeds['name'];
      $ddescription = $breeds['description'];
      $dmax = $breeds['mincost'];
      $dmin = $breeds['maxcost'];
      $PR = $breeds['professionalRating'];
      echo "in for each $dname<br>";

      $data = new compare();
      $data->$name = $dname;
      echo "assignment of compare obj: " . $data->$name ."<br>";
      $data->$allergy = $dallergy;
      $data->$description = $ddescription;
      $data->$temperment = $dtemperment;
      $data->$size = $dsize;
      $data->$hair = $dhair;
      $data->$exercise = $dexercise;
      $data->$maxcost = $dmax;
      $data->$mincost = $dmin;

            echo "User cost: $ucost<br>";
      if($allergy == true)
      {
         if($uhyperallergenic.value == 'yes')
         {
            $costVal = costEvaluate($dmin, $dmax);
            echo "cost evaluate result $costVal <br>";
            // $cresult = (1-(($ucost - $costVal)/$ucost))*$c_weight;
            // echo "the cost result: " . $cresult . "<br>";
            // $hresult = (1-(($uhair - $hair)/$uhair))*$h_weight;
            // $tresult = (1-(($utemperment - $temperment)/$utemperment))*$t_weight;
            // $eresult = (1-(($uexercise - $exercise)/$uexercise))*$e_weight;
            // $sresult = (1-(($usize - $size)/$usize))*$s_weight;
            // $tot = (($sresult+$cresult+$hresult+$tresult+$eresult)-1) * 100;
            $cresult = $costVal*$c_weight;
            echo "the cost result: " . $cresult . "<br>";
            $hresult = $hair*$h_weight;
            $tresult = $temperment*$t_weight;
            $eresult = $exercise*$e_weight;
            $sresult = $size*$s_weight;
            $tot = (($uTot - ($sresult+$cresult+$hresult+$tresult+$eresult))/$uTot) * 100;
            echo "the percent difference: $tot <br>";
            $data->$pDiff = $tot;



            array_push($list, $data);

         }
         continue;
      }
      else
      {
         $costVal = costEvaluate($dmin, $dmax);
        //  echo "in else the cost result: " . $cresult . "<br>";
        // $cresult = (1-(($ucost - $costVal)/$ucost))*$c_weight;
        // $hresult = (1-(($uhair - $hair)/$uhair))*$h_weight;
        // $tresult = (1-(($utemperment - $temperment)/$utemperment))*$t_weight;
        // $eresult = (1-(($uexercise - $exercise)/$uexercise))*$e_weight;
        // $sresult = (1-(($usize - $size)/$usize))*$s_weight;
        // $tot = (($sresult+$cresult+$hresult+$tresult+$eresult)-1) * 100;
        // $data->setPercentDifference($tot);
        // echo "else the percent difference: $tot <br>";
        // array_push($list, $data);
            $cresult = $costVal*$c_weight;
            echo "the cost result: " . $cresult . "<br>";
            $hresult = $hair*$h_weight;
            $tresult = $temperment*$t_weight;
            $eresult = $exercise*$e_weight;
            $sresult = $size*$s_weight;
            $tot = (($uTot - ($sresult+$cresult+$hresult+$tresult+$eresult))/$uTot) * 100;
            echo "the percent difference: $tot <br>";
            $data->$pDiff = $tot;



            array_push($list, $data);
      }

   }


///////////////////////////////////////////////////////////////////

usort($list, "cmp");

foreach ($list as $key) {

   // var_dump($breeds);
   $hyperallergenic = $key['hyperallergenic'];
   $name = $key['name'];
   $description = $key['description'];
   $temper = $key['p_temperment'];

   echo "<li><p>$name <br> HyperAllergenic: ";
   if($hyperallergenic == true)
   echo "Yes<br>";
   else
   echo "No<br>";
   echo "Temperment: $temper<br>";
   echo "Minium Cost $" . $key['mincost'] . " Maximum Cost $" . $key['maxcost'] . "<br>";
   echo "Shedding Lvl: " . $key['hair'] . "<br>";
   echo "Exercise Lvl: " . $key['exercise'] . "<br>";
   echo "Scoring on a scale of 1-10, 1 being the toughest to easiest
         temperment<br>";
   echo "<h2>Description</h2> <br> $description <br></p></li>";

}

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