<?php
session_start(); // start up your PHP session! 
$_SESSION["Cup_Noodles"] = FALSE;
?>
 <!DOCTYPE html>
<html>
    <head>
        <title>Browse</title>        
        <script>
            function addToCart($item, $price) {
                $_SESSION["&item"] = TRUE;
                print_r($_SESSION);
            }
        </script>
    </head>
    <body>
        <form method="post" action="view.php">
            <h1>Please, Browse at you're leisure!</h1></br>

            <label>
                <input type="checkbox" name="items[]" value="Cup_Noodles"  onclick="addToCart('Cup_Noodles', '500')">
                <i></i> <img src="images/Cup_Noodles.jpg" alt="Cup_Noodles" style="width:422px;height:498px;">
            </label>

            <label>
                <input type="checkbox" name="items[]" value="Portal_Device" >
                <i></i> <img src="images/Portal_Device.jpg" alt="Portal_Device" style="width:512px;height:307px;">
            </label>
 
            <input type="submit" name="submit" value="View cart">
        </form>
    </body>
</html>