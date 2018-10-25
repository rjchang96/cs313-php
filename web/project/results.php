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
$ucost = $_POST['cost'];
$uexercise = $_POST['exercise'];
$size = $_POST['size'];
$utemperment = $_POST['temperment'];
$dname = $_POST['dname'];
$uhair = $_POST['hair'];

$stmt = $db->prepare('SELECT id, name, description, hyperAllergenic, P_temperment, size, P_hair, P_exercise, minCost, maxCost, professionalRating, overallUserRating FROM breeds');
$stmt->execute();
$dogs = $stmt->fetchAll(PDO::FETCH_ASSOC);

class compare{
   public $pDiff = 0;
   public $description = "";
   public $professionalRating = 0;
   public $name = "";
   public $size = "";
   public $hair = 0;
   public $exercise = 0;
   public $temperment = 0;
   public $allergy = false;
   public $mincost = 0;
   public $maxcost = 0;

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


function evaluate($list)
{
      $s_wieght = 4;
      $t_weight = 5;
      $h_weight = 2;
      $e_weight = 3;

   foreach ($dogs as $breeds) {
      $data = new compare();
      $dallergy = $breeds['hyperallergenic'];
      $dtemperment = $breeds['p_temperment'];
      $dexercise = $breeds['p_exercise'];
      $dhair = $breeds['p_hair'];
      $dsize = $breeds['size'];
      $dname = $breeds['name'];
      $ddescription = $breeds['description'];
      $dmax = $breeds['mincost'];
      $dmin = $breeds['maxcost'];

      if($allergy == true)
      {
         if($uhyperallergenic.value == 'yes')
         {
            $costVal = costEvaluate($dmin, $dmax);
            $cresult = (1-(($ucost - $costVal)/$ucost))*$s_weight;
            $hresult = (1-(($uhair - $hair)/$uhair))*$h_weight;
            $tresult = (1-(($utemperment - $temperment)/$utemperment))*$t_weight;
            $eresult = (1-(($uexercise - $exercise)/$uexercise))*$e_weight;
            $sresult = (1-(($usize - $size)/$usize))*$s_weight;
            $tot = (($sresult+$cresult+$hresult+$tresult+$eresult)-1) * 100;
            $data->setPercentDifference($tot);
            $data->$name = $dname;
            $data->$allergy = $dallergy;
            $data->$description = $ddescription;
            $data->$temperment = $dtemperment;
            $data->$size = $dsize;
            $data->$hair = $dhair;
            $data->$exercise = $dexercise;
            $data->$maxcost = $dmax;
            $data->$mincost = $dmin;

            array_push($list, $data);

         }
         continue;
      }
      else
      {
        $costVal = costEvaluate($dmin, $dmax);
        $cresult = (1-(($ucost - $costVal)/$ucost))*$s_weight;
        $hresult = (1-(($uhair - $hair)/$uhair))*$h_weight;
        $tresult = (1-(($utemperment - $temperment)/$utemperment))*$t_weight;
        $eresult = (1-(($uexercise - $exercise)/$uexercise))*$e_weight;
        $sresult = (1-(($usize - $size)/$usize))*$s_weight;
        $tot = (($sresult+$cresult+$hresult+$tresult+$eresult)-1) * 100;
        $data->setPercentDifference($tot);
        $data->$name = $dname;
        $data->$allergy = $dallergy;
        $data->$description = $ddescription;
        $data->$temperment = $dtemperment;
        $data->$size = $dsize;
        $data->$hair = $dhair;
        $data->$exercise = $dexercise;
        $data->$maxcost = $dmax;
        $data->$mincost = $dmin;
        array_push($list, $data);
      }

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
//lower case
function cmp($a, $b)
{
   if($a.$pDiff == $b.$pDiff)
      return 0;
   return ($a.$pDiff < $b.$pDiff) ? -1 : 1;
}

$list = array();
evaluate($list);
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