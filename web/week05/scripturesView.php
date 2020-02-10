<?php
require "connections.php";
$db = get_db();

$query = 'SELECT id, book FROM scripture');
$stmt  = $db->prepare($query);
$stmt -> execute();
$scriptures = $stmt-fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scripture Resources</title>
</head>
<body>

<h1>Scripture Resources</h1>

<ul>

<?php
foreach ($scriptures as $scripture)
{
  $id   = $scripture['id'];
  $book = $scripture['book'];
  echo "<li><p>$book<p></li>";
}  
?>

</ul>

</body>
</html>