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
    if ($_GET["Operation"] == "Add") {
        $a = $_GET["Num1"] + $_GET["Num2"];
    } else if ($_GET["Operation"] == "Sub") {
        $a = $_GET["Num1"] - $_GET["Num2"];
    } else if ($_GET["Operation"] == "Mul") {
        $a = $_GET["Num1"] * $_GET["Num2"];
    } else {
        $a = 0;
    }

    ?>
    <form action="" method="get">
        <table>
            <tr>
                <td>User Name</td>
                <td><?php echo $_GET["Name"] ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?php echo $_GET["Pass"] ?></td>
            </tr>
            <tr>
                <td>Operation</td>
                <td><?php echo $_GET["Operation"] ?></td>
            </tr>
            <tr>
                <td>Resault</td>
                <td><?php echo $a ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>
    </form>
</body>

</html>