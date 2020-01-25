 <!DOCTYPE html>
<html>
    <head>
        <title>Browse</title>        
        <script>
            function addToCart(itemName, price) {

            }
        </script>
    </head>
    <body>
        <form method="post" action="view.php">
            <h1>Please, Browse at you're leasure!</h1></br>

            <label>
                <input type="checkbox" name="items[]" value="Cup_Noodles" >
                <i></i> <img src="images/Cup_Noodles.jpg" alt="Cup_Noodles" style="width:634px;height:748px;">
            </label>

            <label>
                <input type="checkbox" name="items[]" value="Portal_Device" >
                <i></i> <img src="images/Portal_Device.jpg" alt="Portal_Device" style="width:512px;height:307px;">
            </label>
 
            <input type="submit" name="submit" value="View cart">
        </form>
    </body>
</html>