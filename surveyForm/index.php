<?php
$submit=false;
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the form data
    $satisfaction = $_POST['satisfaction'];
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];

    // Validate the rating
    if ($rating < 1 || $rating > 5) {
        die("Rating must be between 1 and 5.");
    }

    // Database connection
    $server = "localhost"; // Your server name
    $username = "root"; // Your database username
    $password = ""; // Your database password
    $dbname = "portfolio"; // Your database name

    // Create connection
    $conn = new mysqli($server, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO `portfolio`.`survey` (satisfaction, rating, feedback) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Use 's' for string and 'i' for integer
    // Pass the variables directly without quotes
    $stmt->bind_param("sis", $satisfaction, $rating, $feedback);

    // Execute the statement
    if ($stmt->execute()) {
        // Successfully inserted
        $submit = true;
    } else {
        echo "Insertion failed. Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <link rel="stylesheet" href="survey.css">
</head>
<body>
    <div class="form-container">
        <h1>Survey/Questionnaire Form</h1>
        <p>We value your feedback! Please fill out this survey to help us improve.</p>
        <form id="surveyForm" action="index.php" method="post">
            <!-- Multiple-Choice Question -->
            <label for="satisfaction">How satisfied are you with our services?</label>
            <div class="options">
                <label><input type="radio" name="satisfaction" value="Very Satisfied" required> Very Satisfied</label>
                <label><input type="radio" name="satisfaction" value="Satisfied"> Satisfied</label>
                <label><input type="radio" name="satisfaction" value="Neutral"> Neutral</label>
                <label><input type="radio" name="satisfaction" value="Dissatisfied"> Dissatisfied</label>
                <label><input type="radio" name="satisfaction" value="Very Dissatisfied"> Very Dissatisfied</label>
            </div>

            <!-- Rating Scale -->
            <label for="rating">Rate our services (1 = Poor, 5 = Excellent):</label>
            <div class="rating-scale">
                <input type="range" id="rating" name="rating" min="1" max="5" value="3" oninput="updateRatingValue(this.value)">
                <span id="ratingValue">3</span>
            </div>

            <!-- Open-Ended Question -->
            <label for="feedback">What improvements would you suggest?</label>
            <textarea id="feedback" name="feedback" placeholder="Your suggestions..." rows="4" required></textarea>

            <!-- Submit Button -->
            <button type="submit" id="submit">Submit</button>
            <p id="form-status"><?php echo $submit ? "Submited successful!" : ""; ?></p>
        </form>
        
    </div>
    <script>
        function updateRatingValue(value) {
            document.getElementById('ratingValue').innerText = value;
        }
    </script>
</body>
</html>