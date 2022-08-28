<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css" type="text/css">
    <title>Hello Baby</title>
</head>

<body style="text-align: center;">

    <?php
    //  connection of database
    $conn = mysqli_connect("localhost", "root", "", "db_hellobaby");
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking values from the form input
    $mothers_name = $_REQUEST['mothers_name'];
    $dob = $_REQUEST['dob'];
    $birth_time = $_REQUEST['birth_time'];
    $gender = $_REQUEST['gender'];
    $address = $_REQUEST['address'];

    // inserting form inputs to our databse
    $sql = "INSERT INTO tbl_baby VALUES ('$mothers_name',
			'$dob','$birth_time','$gender','$address')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>Data stored in a database successfully.</h3>";
        echo "\n<h4>Recently inserted data : </h4>";
        echo ("\n$mothers_name\n $dob\n "
            . "$birth_time\n $gender\n $address");
    } else {
        echo "ERROR: Sorry $sql. "
            . mysqli_error($conn);
    }

    // Closing connection
    mysqli_close($conn);
    ?>
</body>

</html>