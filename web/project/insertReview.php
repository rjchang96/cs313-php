<?php
$breedIds = $_POST['chkBreeds'];
// get the data from the POST

//echo "user input of hyperallergenic: $uhyperallergenic \n";
$cost = $_POST['cost'];
//echo "user input of cost: $ucost \n";
$exercise = $_POST['exercise'];
//echo "user input of exercise: $uexercise \n";
$size = $_POST['size'];
//echo "user input of size: $usize \n";
$temperment = $_POST['temperment'];
//echo "user input of temperment: $utemperment \n";
$hair = $_POST['hair'];
//echo "user input of hair: $uhair \n";
// For debugging purposes, you might include some echo statements like this
// and then not automatically redirect until you have everything working.
// echo "book=$book\n";
// echo "chapter=$chapter\n";
// echo "verse=$verse\n";
// echo "content=$content\n";
// we could (and should!) put additional checks here to verify that all this data is actually provided
require("dbConnect.php");
$db = get_db();
try
{
   // Add the Scripture
   // We do this by preparing the query with placeholder values
   $query = 'INSERT INTO audienceRating(temperment, breeds_id, exercise, cost,
   hair, name) VALUES(:temperment, :breeds_id, :exercise, :cost, :hair, :name)';
   $statement = $db->prepare($query);
   // Now we bind the values to the placeholders. This does some nice things
   // including sanitizing the input with regard to sql commands.
   $statement->bindValue(':temperment', $temperment);
    $statement->bindValue(':name', $name);
  // $statement->bindValue(':breeds_id', $breeds_id);
   $statement->bindValue(':exercise', $exercise);
   $statement->bindValue(':cost', $cost);
   $statement->bindValue(':hair', $hair);
   // $statement->bindValue(':cost', $cost);
   $statement->execute();
   // get the new id
   $audienceRatingId = $db->lastInsertId("audienceRating_id_seq");
   // Now go through each topic id in the list from the user's checkboxes
   foreach ($breedIds as $dogId)
   {
      echo "audienceRatingId: $audienceRatingId, DogId: $dogId";
      // Again, first prepare the statement
      $statement = $db->prepare('INSERT INTO audienceRating(audienceRatingId, dogId) VALUES(:audienceRatingId, :dogId)');
      // Then, bind the values
      $statement->bindValue(':audienceRatingId', $audienceRatingId);
      $statement->bindValue(':dogId', $dogId);
      $statement->execute();
   }
}
catch (Exception $ex)
{
   // Please be aware that you don't want to output the Exception message in
   // a production environment
   echo "Error with DB. Details: $ex";
   die();
}
// finally, redirect them to a new page to actually show the topics
header("Location: showAudienceRating.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.
?>