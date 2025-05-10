<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link rel="stylesheet" href="about_us.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&display=swap" rel="stylesheet">
    <title>About Us</title>
</head>
<body>
    <header>
        <nav>
            <img id="img" src="khedmni.svg" alt="logo">
            <ul>
                <li class="blue"><a href="update.html">Home</a></li>
                <li class="blue"><a href="jobs.html">Find Jobs</a></li>
                <li class="blue" ><a href="employers.html">Employers</a></li>
                <!--<li><a href="contact.html">Admin</a></li>     for admin brk ykhrjlo--> 
                <li class="blue" ><a href="about_us.html">About Us</a></li>
            </ul>
            <ul class="auth-links">
                <li class="hna" style="color:#FFF2F2;"><a href="log_in.html">Log in</a></li>
                <li class="hna"><a href="signup.html">Sign up</a></li>
            </ul>
        </nav>
    </header>
            <section class="who-we-are">
                <h1>Who We Are</h1>
                <p>Khedmni is a platform that was created to help people find their dream job in the easiest way by creating an account and choosing which job they want to get hired for, from the location to the salary that they want.</p>
                <img src="khedmni.svg" alt="logo khedmni" class="logo">
            </section>
            <section class="our-mission">
                <img src="Untitled design.png" alt="photo2">
                <h1>Our Mission</h1>
                <p>Our goal in general is to make it easier to find your dream job from your home with only one click and also make it easier for the companies to announce their posts about needing workers or employers.</p>
            </section>
            <section class="offer">
                <h1>What We Offer</h1>
                <p id="one">We offer a platform that connects job seekers with employers, providing a user-friendly experience for all. Our platform is designed to empower both job seekers and employers, making the hiring process seamless and efficient.</p>
                <p id="two">We are dedicated to helping you find the perfect job that matches your skills and aspirations. Our platform is designed to empower both job seekers and employers, providing a user-friendly experience for all.</p>
            </section>
            <section class="contact-us">
                <h1>contact Us</h1>
                <p>Need to get in touch with us you can by fill out the form below:</p>
                <form class="form" action="">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" required><br><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br><br>
                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
                    <input type="submit" value="Submit">
                </form>
            </section>

            <footer class="footer">
                <div class="footer-content">
                    <div class="footer-column">
                        <h3>About</h3>
                        <p>Our Story</p>
                        <p>Careers</p>
                        <p>Our Team</p>
                        <p>Resources</p>
                    </div>

                    <div class="footer-column">
                        <h3>Support</h3>
                        <p>FAQ</p>
                        <p>Contact Us</p>
                        <p>Help Center</p>
                        <p>Terms of Service</p>
                    </div>

                    <div class="footer-column">
                        <h3>Find Us</h3>
                        <p>Events</p>
                        <p>Locations</p>
                        <p>Newsletter</p>
                    </div>

                    <div class="footer-column">
                        <h3>Our Social</h3>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                            <a href="#"><i class="fab fa-facebook"></i> Facebook</>
                            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                        </div>
                    </div>
                </div>
            <p>Bringing you closer to career opportunities. Start today.</p>
            </footer>    
    </body>    


<!--
<div class="about-us">
                <h1>About Us</h1>
                <p>Welcome to Khedmni, your trusted partner in finding the perfect job. We are dedicated to connecting job seekers with employers, making the hiring process seamless and efficient.</p>
                <p>At Khedmni, we believe that everyone deserves a chance to find their dream job. Our platform is designed to empower both job seekers and employers, providing a user-friendly experience for all.</p>
                <p>Join us today and take the first step towards your career success!
                    it all started when we start thinking about our way into job field since we are coming close to graduation and about to start a new chapter in our lives, which is working so we remembered that there is no platform in Algeria that help us find the job that matches our needs and capacity, so we thought, why don't we try make a one which is Khedmni.
                </p>

            </div>
-->
