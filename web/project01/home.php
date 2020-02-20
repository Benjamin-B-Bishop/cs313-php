<?php
require "C:\Users\BaldBen\cs313-php\web\week05\connections.php";
$db = get_db();

$stmt  = $db->prepare("SELECT id, c_name FROM player") ;
$stmt->execute();
$players = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<style>
#grad1 {
  height: 100% ;
  background-color: gray; /* For browsers that do not support gradients */
  background-image: linear-gradient(white, lightgray); /* Standard syntax (must be last) */
}
</style>
   <title>Characters</title>
</head>
<body id="grad1">

<h1>Select a Character</h1>

<ul>

<?php
foreach ($players as $player)
{
    $c_name = $player['c_name'];

    echo "<li><p> $c_name </p></li>";
}  
?>

</ul> 

</body>
</html>