<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="test2.php" method="get">
        <table>
            <tr>
                <td>User Name</td>
                <td><input type="text" value="" name="Name"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" value="" name="Pass"></td>
            </tr>
            <tr>
                <td>Operation</td>
                <td><input type="radio" name="Operation" value="Sub"> sub
                    <input type="radio" name="Operation" value="Add"> add
                    <input type="radio" name="Operation" value="Mul"> mul
                </td>
            </tr>
            <tr>
                <td>Number1</td>
                <td><input type="text" value="" name="Num1"></td>
            </tr>
            <tr>
                <td>Number2</td>
                <td><input type="text" value="" name="Num2"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Next" name="B1"></td>
            </tr>
        </table>
    </form>
</body>

</html>