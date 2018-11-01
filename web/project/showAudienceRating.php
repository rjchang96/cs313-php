<?php
require("dbConnect.php");
$db = get_db();

?>
<!DOCTYPE html>
<html>
<head>
   <title>Choose your pet</title>
   <link rel = "styleSheet" type="text/css" href="dogStyleSheet.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <a href = "dog.php"  style="margin-left: 10px;">Insert a Breed Review</a>

    </div>
<p style="text-align: center;">
  <h2 style = "text-align: center">Audience Reviews</h2>

  <?php
try
{
  // For this example, we are going to make a call to the DB to get the scriptures
  // and then for each one, make a separate call to get its topics.
  // This could be done with a single query (and then more processing of the resultset
  // afterward) as follows:
  //  $statement = $db->prepare('SELECT book, chapter, verse, content, t.name FROM scripture s'
  //  . ' INNER JOIN scripture_topic st ON s.id = st.scriptureId'
  //  . ' INNER JOIN topic t ON st.topicId = t.id');
  // prepare the statement
  $statement = $db->prepare('SELECT id, name, size, description, P_exercise, P_hair, P_temperment FROM breeds');
  $statement->execute();
  // Go through each result
  while ($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $name = $row['name'];
    echo '<div class "main">';
    echo "<h1  style = 'text-align:center;'>" . $row['name'] . "</h1>";

    echo "<img src = '$name.jpg' alt = 'dog' class = 'center'><br> ";
    echo "<div style = 'text-align:center;'><b>Temperment:</b> Lvl scale 1-10: " . $row['p_temperment'] . "<br>";
    echo  "<b>Exercise:</b> Lvl scale 1-5: ". $row['p_exercise'] . "<br>";
    echo "<b>Shedding:</b> Lvl scale 1-5: ". $row['p_hair'] . '<br>';
    // echo "<b>Cost:</b> Lvl scale 1-5: ". $row['p_hair'] . '<br>';
    echo "<b>Description</b><br>" . $row['description'] . "<br>";
    echo '<br /></div>';
    echo '<h3 style = "text-align:center;">Audience Reviews of '
    . $row['name'].': </h3>';
    // get the topics now for this scripture
    $stmtTopics = $db->prepare('SELECT temperment, exercise, cost, hair FROM audienceRating'
      . ' INNER JOIN breeds ON audienceRating.breeds_id = breeds.id'
      . ' WHERE audienceRating.breeds_id = :breeds_id');
    $stmtTopics->bindValue(':breeds_id', $row['id']);
    $stmtTopics->execute();
    // Go through each topic in the result
    while ($audienceRow = $stmtTopics->fetch(PDO::FETCH_ASSOC))
    {
     // $name = $audienceRow['name'];
      echo "<h4 style = 'text-align:center;'>" . $audienceRow['name'] . "</h4>";
     // echo "<li>";
      echo "<div style = 'text-align:center;'><b>Temperment</b> Lvl scale 1-10: " . $audienceRow['temperment'] . "<br>";
      echo  "<b>Exercise</b> Lvl scale 1-5: ". $audienceRow['exercise'] . "<br>";
      echo "<b>Cost</b> Lvl scale 1-5: " . $audienceRow['cost'] . "<br>";
      echo "<b>Shedding</b> Lvl scale 1-5: ". $audienceRow['hair'] . '<br>';
     // echo "<h2>Description</h2><br>" . $audienceRow['description'] . "<br>";
      echo '<br/></div>';
    }
    echo '</p>';
  }
}
catch (PDOException $ex)
{
  echo "Error with DB. Details: $ex";
  die();
}
?>

  </p>
    <br>
</div>
     <!--  <input type="text" name="dog_name"><br> -->

</body>
</html>