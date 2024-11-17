<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "portfoliologin"; // Make sure to specify your database name

// Create a connection
$con = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection to this database failed due to " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are set
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Optional: Validate email format
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            die("Invalid email format.");
        }

        // Prepare the SQL statement to prevent SQL injection
        $stmt = $con->prepare("INSERT INTO `login` (`email`, `password`, `date`) VALUES (?, ?, current_timestamp())");
        if ($stmt === false) {
            die("MySQL prepare statement failed: " . htmlspecialchars($con->error));
        }

        // Bind parameters (s = string)
        $stmt->bind_param("ss", $email, $password);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . htmlspecialchars($stmt->error);
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Email and Password cannot be empty.";
    }
}

// Close the connection
mysqli_close($con);
?>