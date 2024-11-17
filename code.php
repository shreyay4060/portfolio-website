<?php
if (isset($_POST['email'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "portfolio"; // Replace with your actual database name

    // Create connection
    $con = mysqli_connect($server, $username, $password);
    if (!$con) {
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL statement
    $sql = "INSERT INTO `portfolio`.`login` (`email`, `password`, `date`) VALUES ('$email', '$hashedPassword', current_timestamp());";

    if ($con->query($sql) === true) {
        // echo "Successfully inserted";
    } else {
        echo "Error: $sql <br> $con->error";
    }

    // Close connection
    $con->close();
}
?>