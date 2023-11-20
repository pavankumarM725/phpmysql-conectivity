<!DOCTYPE html>
<html>
<head>
    <title>Insert Page</title>
</head>
<body style="text-align:center;font-size:200%;color:mediumblue;">
    <center>
        <?php
        //servername=>localhost
        //username=>root
        //password=>empty
        //database=>employee
        $conn = mysqli_connect("localhost", "root", "", "employee");

        //check connection
        if ($conn == false) {
            die("ERROR: could not connect." . mysqli_connect_error());
        }

        //Taking all 5 Values from the form data(input)
        $first_name = $_REQUEST['fname'];
        $second_name = $_REQUEST['sname'];
        $last_name = $_REQUEST['lname'];
        $age = $_REQUEST['age'];
        $dob = $_REQUEST['dob'];
        $gender = $_REQUEST['gender'];
        $exp = $_REQUEST['exp'];
        $skills = $_REQUEST['skills'];
        $number = $_REQUEST['num'];
        $email = $_REQUEST['mail'];
        $cgpa = $_REQUEST['cgpa'];
        
        $sql = "INSERT INTO personal_details VALUES ('$first_name', '$second_name', '$last_name', '$age', '$dob', '$gender')";
        $sqli = "INSERT INTO proffessional_details VALUES ('$exp', '$skills', '$number', '$email', '$cgpa')";
        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data stored in the database successfully. Please browse your localhost php my admin to view the updated data.</h3><br><h2>Personal details</h2>";
            echo nl2br("\n$first_name\n$second_name\n$last_name\n$age\n$dob\n$gender");
        } else {
            echo "ERROR: Sorry $sql." . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sqli)) {
            echo "<h3>Data stored in the database successfully. Please browse your localhost php my admin to view the updated data.</h3><br><h2>Proffesional details</h2>";
            echo nl2br("\n$exp\n$skills\n$number\n$email\n$cgpa");
        } else {
            echo "ERROR: Sorry $sqli." . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
    </center>
</body>
</html>
