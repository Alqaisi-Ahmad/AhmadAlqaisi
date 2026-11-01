<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = "";
    $b = "";
    if (isset($_POST["B1"])) {
        $a = $_POST["U1"];
        $b = $_POST["U1"];
        if ($a == "php" && $b == "php") {
            header("Location: Form2.php?U1=$a");
        }
    }
    ?>
    <form method="post">
        <table>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="U1"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="PASS"></td>
            </tr>
            <tr>
                <td><input type="submit" name="B1" value="LogIn"></td>
            </tr>
        </table>
    </form>
</body>

</html>