<?php
    // variable for submit contact form
    $submit=false;
    if(isset($_POST['name'])){
        $server="localhost";
        $username="root";
        $password="";
        $database="portfolio";
            
            $con = mysqli_connect($server,$username,$password);
            
            if(!$con){
                die("Connection failed: " . mysqli_connect_error());
            }
            //  echo "Success connection to database"; 
            
            mysqli_select_db($con, $database);

            $name=$_POST['name'];
            $email=$_POST['email'];
            $projectType=$_POST['projectType'];
            $budget=$_POST['budget'];
            $projectDetails=$_POST['projectDetails'];
            $sql="INSERT INTO `portfolio`.`projectinquiry` (`name`, `email`, `projectType`,`budget`,`projectDetails`, `date`) VALUES ('$name', '$email', '$projectType','$budget','$projectDetails', current_timestamp());";
            
            
            if ($con->query($sql) === true) {
                // Successfully inserted
                $submit = true;
    } 
            else{
                echo "insertion is failed Error :  $sql <br>$con->error ";
            }
            
            $con->close();
    }      
    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Inquiry Form</title>
    <link rel="stylesheet" href="projectInquiry.css">
</head>
<body>
    <div class="form-container">
        <h1>Project Inquiry Form</h1>
        <form action="index.php" method="post" id="inquiryForm" >
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="project-type">Project Type:</label>
            <select id="project-type" name="projectType" required>
                <option value="">Select Project Type</option>
                <option value="web-development">Web Development</option>
                <option value="graphic-design">Graphic Design</option>
                <option value="mobile-app">Mobile App</option>
                <option value="other">Other</option>
            </select>

            <label for="budget">Budget (USD):</label>
            <input type="number" id="budget" name="budget" placeholder="Your Budget" min="0">

            <label for="message">Project Details:</label>
            <textarea id="message" name="projectDetails" placeholder="Describe your project here..." rows="5" required></textarea>

            <button type="submit">Submit</button>
        </>
        <p id="form-status"></p>
    </div>
    <script src="projectInquiry.js"></script>
</body>
</html>
