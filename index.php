<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css" type="text/css">
    <title>Hello Baby</title>
</head>

<body>

    <h1>Hello Baby</h1>
    <form action="process.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="MothersName">Mothers Name:</label>
                </td>
                <td>
                    <input type="text" name="mothers_name" id="mothersName">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Dob">Date of Birth :</label>
                </td>
                <td>
                    <input type="date" name="dob" id="dob">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="birthTime">Birth Time :</label>
                </td>
                <td>
                    <input type="time" name="birth_time" id="birthTime">
                </td>
            </tr>
            <tr>
                <td rowspan="2">
                    <label for=" Gender">Gender :</label>
                </td>
                <td>
                    <input type="radio" name="gender" value="male">Male
                </td>
            <tr>
                <td>
                    <input type="radio" name="gender" value="female">Female
                </td>
            </tr>
            </tr>
            <tr>
                <td>
                    <label for="Address">Address :</label>
                </td>
                <td>
                    <input type="text" name="address" id="Address">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Clear">
                </td>
            </tr>

        </table>

    </form>
    <?php
    echo "<br/>";

    ?>
</body>

</html>