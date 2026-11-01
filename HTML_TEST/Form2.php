<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="Form3.php">
        <table>
            <tr>
                <td>User Name</td>
                <td><?php echo $_GET["U1"] ?></td>
            </tr>
            <tr>
                <td>Product</td>
                <td><input type="text" name="P1" id=""></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="P2"></td>
            </tr>
            <tr>
                <td>Qty</td>
                <td><select name="Qty" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select></td>
            </tr>
            <tr>
                <td><input type="submit" value="Report"></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>

</html>