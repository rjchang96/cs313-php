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
//echo "user input of hyperallergenic: $uhyperallergenic \n";
$ucost = $_POST['cost'];
//echo "user input of cost: $ucost \n";
$uexercise = $_POST['exercise'];
//echo "user input of exercise: $uexercise \n";
$usize = $_POST['size'];
//echo "user input of size: $usize \n";
$utemperment = $_POST['temperment'];
//echo "user input of temperment: $utemperment \n";
$uhair = $_POST['hair'];
//echo "user input of hair: $uhair \n";
$stmt = $db->prepare('SELECT id, name, description, hyperAllergenic, P_temperment, size, P_hair, P_exercise, minCost, maxCost, professionalRating, overallUserRating, sizeRange FROM breeds');
$stmt->execute();
$dogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($dogs);
class compare{
   function __construct2($nName, $nDescript, $nSize, $nH, $nT, $nA,
      $nMinCost, $nMaxCost, $nE, $nPR, $diff)
   {
      $name = $nName;
      $description = $nDescript;
      $professionalRating = $nPR;
      $size = $nSize;
      $hair = $nH;
      $exercise = $nE;
      $temperment = $nT;
      $allergy = $nA;
      $mincost = $nMinCost;
      $maxcost = $nMaxCost;
      $pDiff = $diff;
   }
   function __construct1()
   {
      $name = "";
      $description ="";
      $professionalRating = 0;
      $size =  0;
      $hair =  0;
      $exercise =  0;
      $temperment =  0;
      $allergy =  0;
      $mincost =  0;
      $maxcost =  0;
      $pDiff =  0;
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
// function evaluate($list, $dogs)
// {
// }
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
 Results</h2>

   <ul>
<?php
//psql changes everythings to lowercase when stored so
//when trying to access in php have to change it to all
//lower
function cmp($a, $b)
{
   if($a->$pDiff == $b->$pDiff)
      return 0;
   return ($a->$pDiff < $b->$pDiff) ? -1 : 1;
}
$list = array();
//
//////////////////////////////////////////////////////////////////
      $s_wieght = 5;
      $t_weight = 6;
      $h_weight = 3;
      $e_weight = 2;
      $c_weight = 4;
      $counter = 0;
      //echo "in the begining of evaluate<br>";
      $uTot = ($uhair*$h_weight) + ($usize*$s_wieght) + ($uexercise * $e_weight) + ($utemperment * $t_weight) + ($ucost*$c_weight);
     // echo"user input total: $uTot<br>";
   foreach ($dogs as $breeds) {
   //echo "in the begining of for each loop<br>";
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
      //echo "in for each $dname<br>";
      // $data = new compare();
           // echo "User cost: $ucost<br>";
      if($allergy == true)
      {
         if($uhyperallergenic.value == 'yes')
         {
            $costVal = costEvaluate($dmin, $dmax);
            $cresult = $costVal*$c_weight;
           // echo "the cost result: " . $cresult . "<br>";
            $hresult = $dhair*$h_weight;
            //echo "the hair result: " . $hresult . "<br>";
            $tresult = $dtemperment*$t_weight;
            //echo "the temperment result: " . $tresult . "<br>";
            $eresult = $dexercise*$e_weight;
            //echo "the exercise result: " . $eresult . "<br>";
            $sresult = $dsize*$s_weight;
            //echo "the size result: " . $sresult . "<br>";
            $result = $sresult+$cresult+$hresult+$tresult+$eresult;
            //echo "overall dog result: $result <br>";
            $tot = abs((($uTot - $result)/$uTot)) * 100;
            //echo "the percent difference: $tot <br>";
             //$data = new compare();
            // $data->$name = $dname;
            // // echo "assignment of compare obj: " . $data->$name ."<br>";
            // $data->$allergy = $dallergy;
            // $data->$description = $ddescription;
            // $data->$temperment = $dtemperment;
            // $data->$size = $dsize;
            // $data->$hair = $dhair;
            // $data->$exercise = $dexercise;
            // $data->$maxcost = $dmax;
            // $data->$mincost = $dmin;
            // $data->$pDiff = $tot;
             $data = new compare($dname, $ddescription,
               $dsize, $dhair, $dtemperment, $dallergy,
               $dmin, $dmax, $dexercise, $PR, $tot);
            $list[] = $data;
            //$counter++;
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
            echo "the size result: " . $sresult . "<br>";
            $result = $sresult+$cresult+$hresult+$tresult+$eresult;
            //echo "overall dog result: $result <br>";
            $tot = abs((($uTot - $result)/$uTot)) * 100;
            //echo "the percent difference: $tot <br>";
             $data = new compare($dname, $ddescription,
               $dsize, $dhair, $dtemperment, $dallergy,
               $dmin, $dmax, $dexercise, $PR, $tot);
             echo "datas name: $dname <br>";
             echo "datas temperment: $dtemperment<br>";
           //$data->$pDiff = $tot;
     //  $data->$name = $dname;
     // // echo "assignment of compare obj: " . $data->$name ."<br>";
     //  $data->$allergy = $dallergy;
     //  $data->$description = $ddescription;
     //  $data->$temperment = $dtemperment;
     //  $data->$size = $dsize;
     //  $data->$hair = $dhair;
     //  $data->$exercise = $dexercise;
     //  $data->$maxcost = $dmax;
     //  $data->$mincost = $dmin;
            array_push($list, $data);
            // $list[] = $data;
            //echo "name in the list: " . $list[0]->$name . "<br>";

      }
   }
///////////////////////////////////////////////////////////////////
var_dump($list);
evaluate($list, $dogs, $ucost);
foreach ($list as $data) {
   echo "stuff in list: " . $data->name. "<br>";
   # code...
}
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






/////////////////////////////////////regular lazy output ////////////////////
foreach ($dogs as $key) {
   // var_dump($breeds);
   $hyperallergenic = $key['hyperallergenic'];
   $name = $key['name'];
   $description = $key['description'];
   $temper = $key['p_temperment'];
   echo "<img src = '$name.jpg' alt = 'dog'><br>";
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