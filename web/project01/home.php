<?php
require "connections.php";
// $db = get_db();

$stmt  = $db->prepare("SELECT id, c_name FROM player") ;
$stmt->execute();
$players = $stmt->get_result();

?>
<!DOCTYPE html>
<html>
<style>
#grad1 {
  height: 100% ;
  background-color: gray; /* For browsers that do not support gradients */
  background-image: linear-gradient(white, lightgray); /* Standard syntax (mus  t be last) */
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

<h1>Create a new Character</h1>

<?PHP
try
{

	$query = 'INSERT INTO player(c_name, stat_str, stat_dex, stat_con, stat_int, stat_wis, stat_cha) VALUES(:c_name, :stat_str, :stat_dex, :stat_con, :stat_int, :stat_wis, :stat_cha)';
	$statement = $db->prepare($query);

	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindValue(':c_name'  , $c_name);
	$statement->bindValue(':stat_str', $stat_str);
	$statement->bindValue(':stat_dex', $stat_dex);
    $statement->bindValue(':stat_con', $stat_con);
    $statement->bindValue(':stat_int', $stat_int);
    $statement->bindValue(':stat_wis', $stat_wis);
    $statement->bindValue(':stat_cha', $stat_cha);

	$statement->execute();

	// get the new id
	$playerId = $db->lastInsertId("player_id_seq");

	// Now go through each topic id in the list from the user's checkboxes
	foreach ($playerIds as $playerId)
	{
		echo "playerId: $playerId, playerId: $playerId";

		// Again, first prepare the statement
		$statement = $db->prepare('INSERT INTO player(c_name, stat_str, stat_dex, stat_con, stat_int, stat_wis, stat_cha) VALUES(:c_name, :stat_str, :stat_dex, :stat_con, :stat_int, :stat_wis, :stat_cha)');

		// Then, bind the values
		$statement->bindValue(':c_name'  , $c_name);
		$statement->bindValue(':stat_str', $stat_str);
		$statement->bindValue(':stat_dex', $stat_dex);
		$statement->bindValue(':stat_con', $stat_con);
		$statement->bindValue(':stat_int', $stat_int);
		$statement->bindValue(':stat_wis', $stat_wis);
		$statement->bindValue(':stat_cha', $stat_cha);
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

die();

?>


</body>
</html>