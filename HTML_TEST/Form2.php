<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a= $_GET["t1"];
    $b= $_GET["r1"];
    $c= $_GET["s1"];
    if(isset($_GET["b2"])){
        header("Location: Form1.php");
    }
    ?>
    <form method="get">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="t1" id="" value="<?php echo $a?>"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="r1" id="" value="<?php echo $b?>"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="s1" id="" value="<?php echo $c?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="b2" id="" value="Back"></td>
            </tr>
        </table>
    </form>
</body>

</html>