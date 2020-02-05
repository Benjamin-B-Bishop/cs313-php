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
foreach ($db->query('SELECT book, chapter, verse FROM scriptures ' ) as $row)
{
  echo 'Book: ' . $row['book'];
  echo ' - '    . $row['chapter'];
  echo ' : '    . $row['verse'] . ' ';
  echo '<br/>';
}  
?>

</body>
</html>