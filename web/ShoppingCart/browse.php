<?php
session_start(); // start up your PHP session! 
$_SESSION["Cup_Noodles"] = "FALSE";
$_SESSION["Portal_Device"] = "FALSE";

?>
 <!DOCTYPE html>
<html>
    <head>
        <title>Browse</title>        

    </head>
    <body>
        <form method="post" action="checkOut.php">
            <h1>Please, Browse at you're leisure!</h1></br>

            <label>
                <input type="checkbox" name="Cup_Noodles" value="Cup_Noodles" >
                <i></i> <img src="images/Cup_Noodles.jpg" alt="Cup_Noodles" style="width:422px;height:498px;">
            </label><br>

            <label>
                <input type="checkbox" name="items[]" value="Portal_Device" >
                <i></i> <img src="images/Portal_Device.jpg" alt="Portal_Device" style="width:512px;height:307px;">
            </label><br>
 
            <input type="submit" name="submit" value="Check Out">
        </form>
    </body>
</html>