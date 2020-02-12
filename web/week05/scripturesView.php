<?php
require ('connections.php');
$db = get_db();

$query = 'SELECT id, book FROM scripture';


?>
<!DOCTYPE html>
<html>
<head>
    <title>Scripture Resources</title>
</head>
<body>

<h1>Scripture Resources</h1>

<ul>

<?php
foreach ($scriptures as $scripture)
{
    $book = $scripture['book'];

    echo "<li><p> $book </p></li>";
}  
?>

</ul> 

</body>
</html>