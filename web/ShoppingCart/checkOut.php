<?php
$cup = htmlspecialchars($_POST["Cup_Noodles"]);
$gun = htmlspecialchars($_POST["Portal_Device"]);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Submission Results</title>
</head>

<body>
	<h1>Submission Results</h1>

	<p>Items in Cart <br>
        <?=$cup ?> <br>
        <?=$gun ?> <br> 
    </p>

</body>

</html>