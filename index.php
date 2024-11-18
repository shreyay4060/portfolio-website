
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
                <!-- <img src="images/logo2.png" height="30px" class="logo"> -->
                <ul id="sidemenu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                    <i class="fa-solid fa-xmark fas" onclick="closemenu()" ></i>
                </ul>
                <i class="fa-solid fa-bars fas" onclick="openmenu()" ></i>
            </nav>
            <div class="header-text">
               
                <h1>Hi, I'm <span>Shreya</span> <br>And I am a <br> <span id="element"></span> </h1>
            </div>
        </div>
    </div>
    <!-- ------- about ---------- -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/img3.jpg">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam provident nobis quibusdam esse odio porro accusantium, deleniti iusto eveniet officiis, consequuntur, at quas doloribus veniam nisi excepturi. Voluptas, debitis quae.
                   </p>

                   <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                   </div>
                   <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                        <li><span>Web Development</span><br>Designing Web/App interfaces</li>
                        <li><span>App Development </span><br>Building Android/iOS apps</li>
                    </ul>
                   </div>
                   <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>2021 - Current</span><br>UI/UX Design Training at ET Institute</li>
                        <li><span>2019 - 2021</span><br>Team lead at StarApp LLC.</li>
                        <li><span>2017 - 2019 </span><br>UI/UX Design Executive at Coin Digital Ltd.</li>
                        <li><span>2016 - 2017 </span><br>Internship at ekart eCommerce.</li>
                    </ul>     
                   </div>
                   <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2016</span><br>UI/UX Design Training at ET Institute</li>
                        <li><span>2016</span><br>MBA from MIT Bangalore</li>
                        <li><span>2014 </span><br>BBA from ISM Bangalore</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------Servicces------- -->

    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="service-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Design</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deleniti aspernatur nostrum, sed reiciendis .</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-crop"></i>
                    <h2>UI/UX Design</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deleniti aspernatur nostrum, sed reiciendis .</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-brands fa-app-store"></i>
                    <h2>App Design</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deleniti aspernatur nostrum, sed reiciendis .</p>
                    <a href="#">Learn more</a>
                </div>
                
            </div>
        </div>
    </div>

    <!-- --------Portfolio--------------- -->

    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Work</h1>
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
            $msg=$_POST['msg'];
            $sql="INSERT INTO `portfolio`.`contact` (`name`, `email`, `msg`, `date`) VALUES ('$name', '$email', '$msg', current_timestamp());";
            
            
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
    
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Get in Touch</h1>
                    <p><i class="fa-solid fa-paper-plane-top"></i> 
                    Contact@ex.com
                </p>
                <p><i class="fa-solid fa-square-phone"></i> 
                786786878
                    </p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter-square"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
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
        <div class="copyright">
            <p>Copyright <i class="fa-regular fa-copyright"></i> Shreya. Made with <i class="fa-sharp fa-solid fa-heart"></i> by easy tutorial</p>
        </div>
    </div>


    
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    
    <script src="script.js"></script>
</body>
</html>