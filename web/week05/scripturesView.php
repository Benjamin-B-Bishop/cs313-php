<?php
require "connections.php";
$db = get_db();

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

<?php
echo 'testing 1 2 3';
foreach ($db->query('SELECT book FROM scripture' ) as $row)
{
  echo  'inside';
  echo 'Book: ' . $row['book'];

  echo '<br/>';
}  
?>

</body>
</html>