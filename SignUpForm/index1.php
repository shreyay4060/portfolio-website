<?php
$server = "localhost";
$username = "root"; // Changed from $email to $username for clarity
$password = "";
$database = "portfoliosignup"; // Specify your database name here

// Establishing a connection to the database
$con = mysqli_connect($server, $username, $password, $database); 

if (!$con) {
    die("Connection failed due to: " . mysqli_connect_error());
}

echo "Connection is successful<br>";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email, password, and confirm password are set
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        // Optional: Validate email format
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            die("Invalid email format.");
        }

        // Optional: Check if passwords match
        if ($password !== $confirmPassword) {
            die("Passwords do not match.");
        }

        // Prepare the SQL statement to prevent SQL injection
        $stmt = $con->prepare("INSERT INTO `signup` (`email`, `password`, `confirm password`, `date`) VALUES (?, ?, ?, current_timestamp())");
        if ($stmt === false) {
            die("MySQL prepare statement failed: " . htmlspecialchars($con->error));
        }

        // Bind parameters (s = string)
        $stmt->bind_param("sss", $email, $password, $confirmPassword);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . htmlspecialchars($stmt->error);
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Email, Password, and Confirm Password cannot be empty.";
    }
}

// Close the connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp Form For Portfolio</title>
    <link rel="stylesheet" href="signup.css" />
</head>
<body>
    <div class="container">
        <h2>Create a new account!</h2>
        <p>Fill up the necessary details</p>
        <form action="index.php" method="post">
            <h2>Signup Form</h2>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter email" required />

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required />

            <label for="confirmPassword">Confirm Password</label>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password" required />

            <button type="submit" class="submit">Submit</button>
        </form>
    </div>

    <script src="signup.js"></script>
</body>
</html>
