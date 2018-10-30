<?php
require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('SELECT code, name, id FROM course');
$stmt->execute();
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
   <h1>Courses</h1>
   <ul>
      <?php
      foreach ($courses as $course) {
         $id = $course['id'];
         $name = $course['name'];
         $code = $course['code'];
         echo "<li><p><a href='notes.php?id=$id'>$code - $name</a></p></li>\n";
         # code...
      }
      ?>
   </ul>

</body>
</html>