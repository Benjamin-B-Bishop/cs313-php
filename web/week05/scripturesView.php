<?php
require ('connections.php');
$db = get_db();

$query = 'SELECT id, book FROM scripture';
$stmt  = $db->prepare($query);
$stmt -> execute();
$scriptures = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>>
    <title>Scripture Resources</title>
</head>
<body>

<h1>Scripture Resources</h1>

<ul>



</ul> 

</body>
</html>