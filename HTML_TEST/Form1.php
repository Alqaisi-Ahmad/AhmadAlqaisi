<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="Form2.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="t1" id="" value=""></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="r1" id="" value="Male" checked> Male
                    <input type="radio" name="r1" id="" value="Female"> Female
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td><select name="s1" id="">
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                    </select></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="b1" id="" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>