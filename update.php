<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="update.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

    <header>
        <nav>
            <img id="img" src="khedmni.svg" alt="logo">
            <ul>
                <li class="blue"><a href="update.html">Home</a></li>
                <li class="blue"><a href="jobs.html">Find Jobs</a></li>
                <li class="blue"><a href="employers.html">Employers</a></li>
                <!--<li><a href="contact.html">Admin</a></li>     for admin brk ykhrjlo--> 
                <li class="blue"><a href="about_us.html">About Us</a></li>
            </ul>
            <ul class="auth-links">
                <li class="hna"><a href="log_in.html">Log in</a></li>
                <li class="hna"><a href="signup.html">Sign up</a></li>
            </ul>
        </nav>
    </header>
    <!--<div class="image-container">
        <img src="d7411991-55ff-481d-ae28-3897690229fb.png" alt="dream job" />
    </div>-->

    <section class="hero">
        <h1>Find Your Dream Job</h1>
        <p>Find Your Next Job To Build Your Dream</p>
        <img src="header.png" alt="header photo" class="header-photo">
        <div>
            <ul class="buttons">
                <li><a href="services.html">Explore Services</a></li>
                <li><a href="choose.html">Get Started</a></li>    
            </ul>
        </div>
    </section>


    <section class="search-bar">
        <input type="text" placeholder="Job title or Keyword">
        <select>
            <option selected disabled>Choose The Wilaya</option>
            <option>Adrar</option>
            <option>Chlef</option>
            <option>Laghouat</option>
            <option>Oum El Bouaghi</option>
            <option>Batna</option>
            <option>Béjaïa</option>
            <option>Biskra</option>
            <option>Béchar</option>
            <option>Blida</option>
            <option>Bouira</option>
            <option>Tamanrasset</option>
            <option>Tébessa</option>
            <option>Tlemcen</option>
            <option>Tiaret</option>
            <option>Tizi Ouzou</option>
            <option>Algiers</option>
            <option>Djelfa</option>
            <option>Jijel</option>
            <option>Sétif</option>
            <option>Saïda</option>
            <option>Skikda</option>
            <option>Sidi Bel Abbès</option>
            <option>Annaba</option>
            <option>Guelma</option>
            <option>Constantine</option>
            <option>Médéa</option>
            <option>Mostaganem</option>
            <option>MSila</option>
            <option>Mascara</option>
            <option>Ouargla</option>
            <option>Oran</option>
            <option>El Bayadh</option>
            <option>Illizi</option>
            <option>Bordj Bou Arréridj</option>
            <option>Boumerdès</option>
            <option>El Tarf</option>
            <option>Tindouf</option>
            <option>Tissemsilt</option>
            <option>El Oued</option>
            <option>Khenchela</option>
            <option>Souk Ahras</option>
            <option>Tipaza</option>
            <option>Mila</option>
            <option>Aïn Defla</option>
            <option>Naâma</option>
            <option>Aïn Témouchent</option>
            <option>Ghardaïa</option>
            <option>Relizane</option>
            <option>Timimoun</option>
            <option>Bordj Badji Mokhtar</option>
            <option>Ouled Djellal</option>
            <option>Béni Abbès</option>
            <option>In Salah</option>
            <option>In Guezzam</option>
            <option>Touggourt</option>
            <option>Djanet</option>
            <option>El M'Ghair</option>
            <option>El Menia</option>
        </select>        
        <a id="yy" href="sign_up.html">Sign up</a>
    </section>

    <section class="help-section">
        <img src="d7411991-55ff-481d-ae28-3897690229fb.png" alt="photo n2">
        <h1>We Help You To Find Your Dream Job</h1>
        <p>83,879 jobs live - 3,456 added today.</p>
        <div class="stats">
            <div class="stat">
                <h3>10K+</h3>
                <p>Job Positions</p>
            </div>
            <div class="stat">
                <h3>2K+</h3>
                <p>People Hired</p>
            </div>
            <div class="stat">
                <h3>1K+</h3>
                <p>Trusted Companies</p>
            </div>
        </div>
    </section>

    <section class="why-us">
        <h2>Why Choose Us?</h2>
        <div class="features">
            <div class="feature">
                <h3>Ease of use</h3>
                <p>With Khedmni you will not have any difficulties working with the platform; everything is easy even for those ones who are new on it.</p>
            </div>
            <div class="feature">
                <h3>More secure</h3>
                <p>Every personal details about you will be highly secure in Khedmni so don't be afraid to try our services.</p>
            </div>
            <div class="feature">
                <h3>Speed ​​of services</h3>
                <p>With only one click everything you need will be just next to you as you want it.</p>
            </div>
        </div>
    </section>

    <section class="companies">
        <h2>Most Popular Companies In Khedmni</h2>
        <div class="company-list">
            <div class="company">
                <img src="ooredoo-og-image.png" alt="Ooredoo">
                <p>Ooredoo</p>
            </div>
            <div class="company">
                <img src="algerie-telecom-logo-png_seeklogo-460479.png" alt="Algerie Telecom">
                <p>Algerie Telecom</p>
            </div>
            <div class="company">
                <img src="nf.png" alt="naftal">
                <p>Naftal</p>
            </div>
            <div class="company">
                <img src="ANPT.jpg" alt="ANPT">
                <p>ANPT</p>
            </div>
        </div>
    </section>

    <section class="testimonials">
    <h2>What People Say About Khedmni</h2>
    <div class="testimonial-container">
        <div class="testimonial">
            <img src="avatar.jpg" alt="Salima Rach">
            <div class="testimonial-content">
                <h4>Salima Rachrache<span class="location">Setif</span> <span class="rating">⭐ 5.0</span></h4>
                <p>I tried Khedmni to find a job since I couldn't find one near my hometown, and I didn't have any idea how to search on the internet until I found this website that helped me find one in a short time.</p>
            </div>
        </div>
        <div class="testimonial">
            <img src="avatar.jpg" alt="Anes Rah">
            <div class="testimonial-content">
                <h4>Anes Rahmouni <span class="location">Tépaza</span> <span class="rating">⭐ 4.5</span></h4>
                <p>Khedmni was too easy to use to find many jobs and get the answers in a short time.</p>
            </div>
        </div>
        <div class="testimonial">
            <img src="avatar.jpg" alt="Imene mokh">
            <div class="testimonial-content">
                <h4>Imene mokhtari <span class="location">Algiers</span> <span class="rating">⭐ 5.0</span></h4>
                <p>Dwello made my dream of owning a home a reality! Their team provided exceptional support and guided me through every step of the process. I couldn’t be happier with my new home!</p>
            </div>
        </div>
    </div>
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
            <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
        </div>
    </div>
</div>
        <p>Bringing you closer to career opportunities. Start today.</p>
    </footer>
    <script src="Home.js"></script>
</body>
</html>
