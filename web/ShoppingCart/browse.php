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
            <p>Please select from the following:</p><br><br><br>

            <input type="checkbox" name="addedItems[]" value="chair" onclick="addToCart('chair', '20')">
 
            <input type="submit" name="submit" value="View cart">
        </form>
    </body>
</html>