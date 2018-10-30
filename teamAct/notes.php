<?php
require('dbConnect.php');
$db = get_db();
$course_id = htmlspecialchars($_GET['id']);
$query = 'SELECT c.code, c.name, n.id AS note_id, n.content FROM note n JOIN course c ON n.course_id = c.id WHERE c.id = :course_id';

$stmt = $db->prepare('SELECT code, name, id FROM course');
$stmt->bindValue(':course_id', $course_id, PDO::PARAN_INT);
$stmt->execute();
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
$course_name = $notes[0]['name'];
$course_code = $notes[0]['code'];


?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
<h1>Notes for: <?php echo "$course_code - $course_name"; ?></h1>
<?php
foreach ($notes as $note) {
   echo "<p>$content</p>";
   # code...
}
?>

</body>
</html>