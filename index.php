
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shreya.dev</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/3047116925.js" crossorigin="anonymous"></script>
</head>
<body>

    <div id="header">
        <div class="container">
        <nav>
            <div class="logo">My Logo</div>
            <ul id="sidemenu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                <i class="fa-solid fa-xmark fas" onclick="closeMenu()"></i>
            </ul>
            <i class="fa-solid fa-bars fas" onclick="openMenu()"></i>
        </nav>

            <div class="header-text">
               
                <h1>Hi, I'm <span>Shreya</span> <br>And I am a <br> <span id="element"></span> </h1>
            </div>
        </div>
    </div>
    <!-- ------Servicces------- -->

    <div id="services">
        <div class="container">
            <h3 class="sub-title">My Services</h3>
            <div class="service-list">
            <div>
                    <i class="fa-solid fa-crop"></i>
                    <h2>UI/UX Design</h2>
                    <p>Designing intuitive and user-friendly interfaces for applications, focusing on user experience and usability.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Custom Software Development</h2>
                    <p>Creating tailored software solutions that meet specific client needs, including desktop applications, mobile apps, and web applications.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Design</h2>
                    <p>Building and maintaining websites and web applications, including front-end (user interface) and back-end (server-side) development.</p>
                    <a href="#">Learn more</a>
                </div>

                <div>
                    <i class="fa-solid fa-crop"></i>
                    <h2>Database Design and Management</h2>
                    <p>Designing, implementing, and managing databases to store and retrieve data efficiently and securely.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-brands fa-app-store"></i>
                    <h2>E-commerce Solutions</h2>
                    <p>Developing and managing e-commerce platforms, including shopping cart integration, payment processing, and inventory management.</p>
                    <a href="#">Learn more</a>
                </div>
                
            </div>
        </div>
    </div>

    <!-- ------- about ---------- -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/img1.jpg">
                </div>
                <div class="about-col-2">
                    <h3 class="sub-title">About Me</h3><br>
                    <p>Hello, my name is <b class="shreya">Shreya</b>. I recently completed my Bachelor of Computer Science (BCS) degree in 2025 from SGM College in Karad, affiliated with Shivaji University. With a strong passion for computers and technology, I am excited to embark on my career as a Software Developer. I am eager to apply my knowledge and skills in programming and software development to create innovative solutions and contribute to impactful projects in the tech industry.
                    </p>

                   <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                   </div>
                   <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                        <li><span>Problem-Solving:</span><br> Ability to analyze problems and develop effective solutions.</li>
                        <li><span>Communication:</span><br> Strong verbal and written communication skills to collaborate with team members and stakeholders.</li>
                        <li><span>Teamwork: </span><br> Ability to work effectively in a team environment</li>
                        <li><span>Adaptability: </span><br>  Willingness to learn new technologies and adapt to changing project requirements.</li>
                    </ul>
                   </div>
                   <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>2025 - Current</span><br>Currently I have attended Nandi -Mahindra Pride Workshop </li>
                        <li><span>2024 - 2025</span><br>I also contribute in Open source projects on github .</li>
                        <li><span>2024 - 2025 </span><br>I started freelancing took some simple projects depends upon frontend</li>
                        <li><span>2023 - 2024 </span><br>Created own projects based on some experiments and technologies.There are some projects listed below and you can see on them on my github page.</li>
                    </ul>     
                   </div>
                   <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2020</span><br>I completed my 10th with 94.40% </li>
                        <li><span>2022</span><br>I have completed my 12th in science stream with 75.50%</li>
                        <li><span>2025 </span><br>I completed my BCS degree with aggregate percentage 85%</li>
                        <li><span>2025 </span><br>I started my MERN Stack Developer Journey</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------Servicces------- -->

    <div id="services">
        <div class="container">
            <h3 class="sub-title">My Services</h3>
            <div class="service-list">
            <div>
                    <i class="fa-solid fa-crop"></i>
                    <h2>UI/UX Design</h2>
                    <p>Designing intuitive and user-friendly interfaces for applications, focusing on user experience and usability.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Custom Software Development</h2>
                    <p>Creating tailored software solutions that meet specific client needs, including desktop applications, mobile apps, and web applications.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Design</h2>
                    <p>Building and maintaining websites and web applications, including front-end (user interface) and back-end (server-side) development.</p>
                    <a href="#">Learn more</a>
                </div>

                <div>
                    <i class="fa-solid fa-crop"></i>
                    <h2>Database Design and Management</h2>
                    <p>Designing, implementing, and managing databases to store and retrieve data efficiently and securely.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-brands fa-app-store"></i>
                    <h2>E-commerce Solutions</h2>
                    <p>Developing and managing e-commerce platforms, including shopping cart integration, payment processing, and inventory management.</p>
                    <a href="#">Learn more</a>
                </div>
                
            </div>
        </div>
    </div>

    <!-- --------Portfolio--------------- -->

    <div id="portfolio">
        <div class="container">
            <h3 class="sub-title">My Work</h3><br><br>
            <div class="work-list">
                <div class="work">
                    <img src="images/img2.jpg">
                    <div class="layer">
                        <h3>Social Media App</h3>
                        <p>The app connects you go the talented people around the world. Download it from play store.</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/img2.jpg">
                    <div class="layer">
                        <h3>Music App</h3>
                        <p>The app connects you go the talented people around the world. Download it from play store.</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/img2.jpg">
                    <div class="layer">
                        <h3>Online Shopping App</h3>
                        <p>The app connects you go the talented people around the world. Download it from play store.</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>  
            </div>
            <a href="#" class="btn">See more</a>
        </div>
    </div>


    <!-- --------Contact--------- -->

     <!-- php code for contact form -->
     <?php

// variable for submit contact form
$submit = false;
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "portfolio";

    // Create a connection
    $con = mysqli_connect($server, $username, $password, $database);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL statement
    $stmt = $con->prepare("INSERT INTO contact (name, email, msg, date) VALUES (?, ?, ?, current_timestamp())");
    
    // Bind parameters
    $stmt->bind_param("sss", $name, $email, $msg);

    // Get values from POST request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    // Execute the statement
    if ($stmt->execute()) {
        // Successfully inserted
        $submit = true;
    } else {
        // Log the error instead of displaying it
        error_log("Insertion failed: " . $stmt->error);
        echo "There was an error submitting your message. Please try again later.";
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>
    
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h3 class="sub-title">Get in Touch</h3>
                    <p><i class="fa-solid fa-paper-plane-top"></i> 
                    Contact@ex.com
                </p>
                <p><i class="fa-solid fa-square-phone"></i> 
                8421915279
                    </p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter-square"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                    </div>
                    <a href="images/resume.pdf"class="btn btn2" download>Download CV</a>
                </div>
                <div class="contact-right">
                    <form action="index.php" method="post">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="msg"rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2 submit">Submit</button>
                    </form>

                    <!-- Vote of thanks -->
                     <?php
                           if($submit==true){

                               echo "<div class='thanks'>Thanks for submitting your response</div>";
                            } 
                     ?>
                </div>
            </div>
        </div>
        <br>
        <div class="form">

            <button class="forms"><a href="eventRegistrationForm/index.php" class="btn1">Event Registration</a></button>
            <button class="forms"><a href="feedbackForm/index.php" class="btn1">Feedback</button>
            <button class="forms"><a href="surveyForm/index.php" class="btn1">Survey</button>
            <button class="forms"><a href="resumeSubmissionForm/index.php" class="btn1">Submit Resume</button>
            <button class="forms"><a href="projectInquiryForm/index.php" class="btn1">Project Inquiry</button>
        </div>
        <div class="copyright">
            <p>Copyright <i class="fa-regular fa-copyright"></i> Shreya <i class="fa-sharp fa-solid fa-heart"></i> </p>
        </div>
    </div>

    <div class="space"></div>
    
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    
    <script src="script.js"></script>
</body>
</html>