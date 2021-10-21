<?php 
session_start();
    if(!isset($_SESSION['email'])){
    header('location: signin.php');
    }
    include "koneksi.php";
    $qry=mysqli_query($conn,"select * from user where email = '".$_SESSION['email']."'");
    $dt_user=mysqli_fetch_array($qry);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tech Course</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section id="home">
            <!-- NAVBAR-->
            <nav>
                <img src="logo.svg" alt="LogoTechCourse" class="logo" width="35" height="35">

            <!-- MENU -->
            <ul>
                <li><a href="#" class="active">HOME</a></li>
                <li><a href="#class">CLASS</a></li>
                <li><a href="#resources" >RESOURCES</a></li>
                <li><a href="#community" >COMMUNITY</a></li>
                <li><a href="#rate" >RATE</a></li>
                <a href="logout.php"><button class="signin" onclick="alert('Are you sure to log out?')">LOG OUT</button></a>
                <a href="tampil_profile.php"><button class="signup">PROFILE</button></a>
            </ul>
            </nav>

            <!-- HERO -->
            <div class="text-container" id="text">
                <img src="hero1.png" alt="illushero" width="620" height="480" align="right">
                <h1>Hello <?php echo $dt_user['name'] ?></h1>
                <p>Tech Course - A new generation of online courses with the best tutors. Grow up your hard skills and soft skills with Tech Course. Let's build your future career with Tech Course!</p>
                <a href="signup.html"><button class="register" onclick="alert('Do you want to register Tech-Course')">REGISTER</button></a> 
                <a href="catalog.html"><button class="catalog">CATALOG</button></a>
                <div class="searchbox">
                    <input type="text" class="box" placeholder="What class are you looking for?">
                    <button class="search">SEARCH</button>
                </div>
            </div>
        </section>  

        <!--Class Section-->
        <div class="class-container" id="class">
            <h2>What Class Do You Need ?</h2>
            <div class="class-box">
                <div class="box">
                    <div class="class">
                        <img src="coding.png" alt="coding" height="160px" width="230px" class="illus">
                        <h3>Coding</h3>
                        <p>Make website and application</p>
                        <a href="coding.html"><i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
                <div class="box">
                    <div class="class">
                        <img src="graphicdesign.png" alt="graphicdesign" height="160px" width="190px" class="illus2 ">
                        <h3>Graphic design</h3>
                        <p>UI/UX Design and Graphic Design </p>
                        <a href="graphic.html"><i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
                <div class="box">
                    <div class="class">
                        <img src="video.png" alt="video" height="163px" width="220px" class="illus">
                        <h3>Video Editing</h3>
                        <p>Edit video and Create animation</p>
                        <a href="editing.html"><i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!--Resources-->
        <div class="resources-container" id="resources">
            <h2>What Will You Get ?</h2>
            <div class="resources-box">
                <div class="box">
                    <div class="resources">
                        <img src="handbook.png" alt="handbook" height="160px" width="230px" class="illus1">
                        <h3>HandBook</h3>
                        <p>Study guide and career in IT</p>
                        <i class="fas fa-chevron-circle-right"></i>
                    </div>
                </div>
                <div class="box">
                    <div class="resources">
                        <img src="digibook.png" alt="digibook" height="160px" width="210px" class="illus2">
                        <h3>DigiBook</h3>
                        <p>Learn IT using e-book</p>
                        <i class="fas fa-chevron-circle-right"></i>
                    </div>
                </div>
                <div class="box">
                    <div class="resources">
                        <img src="asset.png" alt="asset" height="163px" width="220px" class="illus3" margin-left=50px>
                        <h3>Pixel Assets</h3>
                        <p>Download material assets for design</p>
                        <i class="fas fa-chevron-circle-right"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- COMMUNITY -->
        <div class="community-container" id="community">
            <h2>Tech-Course Community</h2>
            <div class="community-box">
            <div class="box">
                <img src="webinar.png" alt="Webinar" width="320" height="300">
                <div class="text">
                    <h4>Commnunity</h4>
                    <h3>Tech-Webinar</h3>
                    <p>Online conference event from Tech-Course. Held for free with various IT themes and useful for the community</p>
                    <button class="start">START</button>
                </div>
            </div>

            <div class="box">
                <img src="mentoring.png" alt="Mentoring" width="320" height="250" style="margin-top: 65px;">
                <div class="text">
                    <h4>Commnunity</h4>
                    <h3>Tech-Mentoring</h3>
                    <p>Online mentoring led by reliable and experienced tutors. Teach-Mentoring has several mentoring classes such as coding, design, and video editing class</p>
                    <button class="start">START</button>
                </div>
            </div>

            <div class="box">
                <img src="tips.png" alt="Tips" width="400" height="300" style="margin-top: 50px;">
                <div class="text">
                    <h4 style="margin-left: 110px;">Commnunity</h4>
                    <h3 style="margin-left: 110px;">Tech-Tips</h3>
                    <p style="margin-left: 110px;">Online mentoring led by reliable and experienced tutors. Teach-Mentoring has several mentoring classes such as coding, design, and video editing class</p>
                    <button class="start" style="margin-left: 110px;">START</button>
                </div>
            </div>
            </div>
        </div>


        <!--Review Section-->
        <div class="review-container" id="rate">
            <h2>What Our Clients Say ?</h2>
            <div class="review-box">
                <div class="box">
                    <div class="review">
                        <img src="cv1.png" alt="People1" height="80px" width="80px" class="illus">
                        <h3>Axel Matthew</h3>
                        <h4>Android Developer</h4>
                        <p>The mentor is cool, the way he conveys each material is also detailed and easy to understand.</p>
                        <img src="star.png" alt="Star" class="star" width="150" height="25">
                    </div>
                </div>
                <div class="box">
                    <div class="review">
                        <img src="cv2.png" alt="People2" height="80px" width="80px" class="illus">
                        <h3>Zeanne Queen</h3>
                        <h4>UI/UX Designer</h4>
                        <p>The most recommended class is for investing in knowledge in the era of the industrial 4.0.</p>
                        <img src="star.png" alt="Star" class="star" width="150" height="25">

                    </div>
                </div>
                <div class="box">
                    <div class="review">
                        <img src="cv3.png" alt="People3" height="80x" width="80px" class="illus">
                        <h3>Marcel Frann</h3>
                        <h4>Video Editor</h4>
                        <p>The classes are very useful and up-to-date and most importantly affordable.</p>
                        <img src="star.png" alt="Star" class="star" width="150" height="25">
                    </div>
                </div>
            </div>
        </div>

        <!-- START-->
        <div class="start-container">
                <h2>Do you want to upgrade your IT hardskill ?</h2>
                <h3>Let's join Tech-Course !</h3>
                <a href="signup.html"><button class="join" onclick="alert('Do you want to join Tech-Course?')">JOIN</button></a>
        </div>

        <!-- FOOTER -->
        <footer>
            <div class="footer-container">
                <div class="row">
                    <div class="footer-col">
                        <h4>Our Services</h4>
                        <ul>
                        <li><a href="#home ">Home</a></li>
                        <li><a href="#class">Class</a></li>
                        <li><a href="#resources">Resources</a></li>
                        <li><a href="#community">Community</a></li>
                        <li><a href="#rate">Rate</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Helpful Links</h4>
                        <ul>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Mentor</a></li>
                        <li><a href="#">Supports</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Term & Condition</a></li>
                        <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Our Information</h4>
                        <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">More Search</a></li>
                    </div>
                    <div class="footer-col">
                        <h4>Follow Us</h4>
                        <div class="social-links">
                            <a href="https://www.instagram.com/fadillaratnaa_/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://youtube.com/channel/UCrbNeoCPoOh4pZeeUU11zDw" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="https://id.linkedin.com/" target="_blank" ><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <script>

        </script>

        
    </body>
</html>