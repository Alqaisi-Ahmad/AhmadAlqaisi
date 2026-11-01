<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <table>
            <tr>
                <td>User Name</td>
                <td>.........</td>
            </tr>
            <tr>
                <td>Product</td>
                <td><?php echo $_GET["P1"] ?></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><?php echo $_GET["P2"] ?></td>
            </tr>
            <tr>
                <td>Qty</td>
                <td><?php echo $_GET["Qty"] ?></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><?php echo (int) $_GET["Qty"] * (int) $_GET["P2"] ?></td>
            </tr>
            <tr>
                <td><input type="submit" value="Next" id=""></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>

</html>