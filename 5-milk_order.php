<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk Order</title>
</head>
<body>
    <h1>Milk Order Page</h1>
    <h4>Milk=$33.4 per/lt</h4>
    <form action="5-milk_order.php" method="post">
        <label>Quantity:</label>
        <input type="number" name="quantity">
        <input type="submit" value="Total">
    </form>

    <?php
        $item="Milk";
        $price=33.4;
        $quantity=$_POST["quantity"];
        $total=null;
        $total=$quantity * $price;

        echo "<h3> You ordered $quantity x $item </h3>";
        echo " <h3>Your total is \$$total </h3>";
    ?>
</body>
</html>