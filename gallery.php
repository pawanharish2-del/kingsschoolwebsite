<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Photo Gallery & Events | Kings Court World School Jaipur</title>
    <meta name="description" content="Explore the vibrant campus life, events, and activities at Kings Court World School, Badpitawas, Jaipur. View our photo gallery showcasing student life.">
    <meta name="keywords" content="Kings Court World School Gallery, Jaipur School Events, Best School Campus Badpitawas, Student Activities KCWS, School Photo Gallery">
    <meta name="robots" content="index, follow">

    <link rel="icon" type="image/png" href="/favKCWS.png">
    <link rel="apple-touch-icon" href="/favKCWS.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Fredoka:wght@300;400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            /* Exact Google Logo Theme Colors - NO VARIATIONS */
            --google-blue: #4285F4;
            --google-red: #EA4335;
            --google-yellow: #FBBC05;
            --google-green: #34A853;
            
            /* Core Mapping */
            --primary: var(--google-blue);
            --secondary: var(--google-red);
            --accent: var(--google-yellow);
            
            --dark: #202124;         
            --light: #F8F9FA;        
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Fredoka', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            overflow-x: hidden;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Bubblegum Sans', cursive;
            letter-spacing: 1px;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: all 0.3s;
        }

        /* --- Scroll Reveal Animation --- */
        .reveal { opacity: 0; transform: translateY(40px); transition: all 0.6s ease-out; }
        .reveal.active { opacity: 1; transform: translateY(0); }

        /* --- Top Bar --- */
        .top-bar {
            background-color: var(--primary);
            color: white;
            padding: 8px 5%;
            font-size: 0.85rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            position: relative;
            z-index: 1001;
        }

        .top-bar a:hover {
            color: var(--accent);
        }

        .top-bar-right.social-top {
            display: flex;
            gap: 15px;
        }

        .top-bar-right.social-top a {
            font-size: 1.1rem;
        }

        /* --- Navigation --- */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 5%;
            background: rgba(255, 255, 255, 0.95);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
            list-style: none;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .nav-item { position: relative; }
        .nav-item > a {
            color: var(--dark);
            font-weight: 600;
            font-size: 1rem;
            padding: 10px 0;
            display: block;
        }
        .nav-item > a:hover { color: var(--google-red); }

        /* DROP DOWN DOTS & SPACING FIX */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%; left: 0;
            background: white;
            min-width: 220px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 15px;
            padding: 10px 0;
            z-index: 9999;
            border-top: 4px solid var(--google-green);
            list-style: none !important;
            margin: 0;
            padding-left: 0;
        }

        .dropdown-menu li {
            list-style: none !important;
            margin: 0;
            padding: 0;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .nav-item:hover .dropdown-menu { display: block; animation: fadeInUp 0.3s ease; }
        .dropdown-menu li a { padding: 8px 20px; display: block; font-size: 0.9rem; color: #555; }
        .dropdown-menu li a:hover { background: var(--light); color: var(--google-blue); padding-left: 25px; }

        .cta-btn {
            background-color: var(--primary);
            color: white !important;
            padding: 0.5rem 1.2rem;
            border-radius: 50px;
            font-weight: bold;
            box-shadow: 0 4px 0 rgba(0,0,0,0.2);
            display: inline-block;
        }
        .cta-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 0 rgba(0,0,0,0.2); }

        /* --- Sticky Sidebar --- */
        #side-quick-links { position: fixed; right: 0; top: 50%; transform: translateY(-50%); z-index: 999; }
        #side-quick-links ul { display: flex; flex-direction: column; align-items: flex-end; gap: 10px; list-style: none; }
        #side-quick-links ul li {
            background: var(--white); width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;
            box-shadow: -2px 5px 15px rgba(0,0,0,0.15); transition: all 0.3s;
            border-top-left-radius: 25px; border-bottom-left-radius: 25px; overflow: hidden; cursor: pointer;
        }
        
        #side-quick-links ul li.call:hover { width: 200px; background: var(--google-blue); }
        #side-quick-links ul li.marker:hover { width: 200px; background: var(--google-red); }
        #side-quick-links ul li.whatapp:hover { width: 200px; background: var(--google-green); }
        
        #side-quick-links ul li a { display: flex; align-items: center; width: 100%; height: 100%; text-decoration: none; }
        #side-quick-links ul li.call i { color: var(--google-blue); }
        #side-quick-links ul li.marker i { color: var(--google-red); }
        #side-quick-links ul li.whatapp i { color: var(--google-green); }
        
        #side-quick-links i { font-size: 1.2rem; min-width: 50px; text-align: center; transition: 0.3s; }
        #side-quick-links ul li:hover i { color: white; }
        #side-quick-links .content { white-space: nowrap; color: white; opacity: 0; transition: 0.3s; }
        #side-quick-links ul li:hover .content { opacity: 1; }

        /* --- Inner Banner (Solid Color, Overlap Fix) --- */
        .inner-banner {
            position: relative;
            height: 35vh;              
            min-height: 280px;         
            background-color: var(--google-blue); /* Solid Blue */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            overflow: hidden;
            padding-top: 40px;
        }

        .inner-banner-content {
            z-index: 10;
            position: relative;
            animation: popIn 1s ease-out;
            padding: 0 20px;
            margin-bottom: 60px;       /* Absolute forcefield above the wave */
        }

        .inner-banner h1 {
            font-size: 3.5rem;
            text-shadow: 3px 3px 0px rgba(0,0,0,0.2);
            margin-bottom: 5px;
            color: var(--google-yellow);
        }
        
        .inner-banner p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.95;
            font-family: 'Fredoka', sans-serif;
            text-shadow: 1px 1px 0px rgba(0,0,0,0.2);
        }

        /* Banner Clouds */
        .cloud {
            position: absolute; background: white; border-radius: 50px; opacity: 0.6;
            animation: moveCloud linear infinite;
        }
        .cloud::after, .cloud::before { content: ''; position: absolute; background: white; border-radius: 50%; }
        .cloud.one { width: 150px; height: 60px; top: 15%; left: -150px; animation-duration: 25s; }
        .cloud.one::after { width: 70px; height: 70px; top: -35px; left: 25px; }
        .cloud.one::before { width: 30px; height: 30px; top: -45px; right: 25px; }
        .cloud.two { width: 120px; height: 50px; top: 30%; right: -120px; animation-duration: 30s; animation-direction: reverse; }
        .cloud.two::after { width: 60px; height: 60px; top: -30px; left: 20px; }

        @keyframes moveCloud { 0% { left: -200px; } 100% { left: 110%; } }
        @keyframes popIn { 0% { transform: scale(0.8); opacity: 0; } 100% { transform: scale(1); opacity: 1; } }

        /* Floating Elements for Hero */
        .floating-icon { position: absolute; z-index: 5; opacity: 0.9; }
        .balloon { font-size: 3rem; color: var(--google-yellow); top: 25%; left: -5%; animation: floatBalloon 6s ease-in-out infinite; filter: drop-shadow(2px 4px 6px rgba(0,0,0,0.2)); }
        @keyframes floatBalloon { 0%, 100% { transform: translateY(0); } 100% { transform: translateY(-20px); } }

        /* Wave Divider */
        .wave-container {
            position: absolute; bottom: -1px; left: 0; width: 100%; overflow: hidden; line-height: 0; z-index: 15;
        }
        .wave-container svg { display: block; width: calc(100% + 1.3px); height: 60px; }
        .wave-container .shape-fill { fill: var(--light); }

        /* --- Gallery Section --- */
        .gallery-section { padding: 4rem 10%; }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }

        .gallery-item {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            border: 5px solid white;
            background: white;
            cursor: pointer;
            transition: all 0.4s ease;
        }
        
        /* Cycle Google colors on hover borders */
        .gallery-item:nth-child(4n+1):hover { border-color: var(--google-blue); transform: translateY(-10px) rotate(-2deg); }
        .gallery-item:nth-child(4n+2):hover { border-color: var(--google-red); transform: translateY(-10px) rotate(2deg); }
        .gallery-item:nth-child(4n+3):hover { border-color: var(--google-yellow); transform: translateY(-10px) rotate(-1deg); }
        .gallery-item:nth-child(4n+4):hover { border-color: var(--google-green); transform: translateY(-10px) rotate(1deg); }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        /* Zoom Overlay Effect on Hover */
        .zoom-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .zoom-overlay i {
            color: white;
            font-size: 3rem;
            transform: scale(0.5);
            transition: transform 0.3s ease;
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }

        .gallery-item:hover .zoom-overlay { opacity: 1; }
        .gallery-item:hover .zoom-overlay i { transform: scale(1); }

        /* --- Lightbox / Modal --- */
        .lightbox {
            display: none; 
            position: fixed; 
            z-index: 99999; 
            padding-top: 50px; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            background-color: rgba(0,0,0,0.85); 
            backdrop-filter: blur(5px);
        }

        .lightbox-content {
            margin: auto;
            display: block;
            max-width: 90%;
            max-height: 85vh;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            animation: zoomIn 0.3s ease;
            object-fit: contain;
        }

        @keyframes zoomIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .close-lightbox {
            position: absolute;
            top: 20px;
            right: 40px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
            z-index: 100000;
        }

        .close-lightbox:hover,
        .close-lightbox:focus {
            color: var(--google-red);
            text-decoration: none;
            cursor: pointer;
        }

        /* --- Footer --- */
        footer {
            background-color: var(--google-blue);
            color: white;
            padding: 4rem 5% 2rem 5%;
            margin-top: 2rem;
            position: relative;
        }
        .footer-wave { position: absolute; top: -1px; left: 0; width: 100%; overflow: hidden; line-height: 0; }
        .footer-wave svg { display: block; width: calc(100% + 1.3px); height: 80px; }
        .footer-wave path { fill: var(--light); }

        .footer-content { display: flex; flex-wrap: wrap; justify-content: space-between; gap: 2rem; }
        .footer-col { flex: 1; min-width: 250px; }
        .footer-col h3 { color: var(--google-yellow); margin-bottom: 1.5rem; }
        .footer-col ul { list-style: none; padding: 0; margin: 0; }
        .footer-col li { margin-bottom: 0.8rem; }
        .footer-col a { color: #ccc; }
        .footer-col a:hover { color: var(--google-yellow); }

        .social-links a {
            display: inline-flex; width: 35px; height: 35px; background: rgba(255,255,255,0.2);
            align-items: center; justify-content: center; border-radius: 50%; margin-right: 10px; color: white; transition: 0.3s;
        }
        .social-links a:hover { background: white; color: var(--google-blue); transform: translateY(-3px); }

        .copyright {
            text-align: center; margin-top: 3rem; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.2); font-size: 0.9rem; color: #ffffff; opacity: 0.9;
        }

        /* Mobile Menu */
        .hamburger { display: none; font-size: 1.8rem; cursor: pointer; color: var(--google-blue); margin-left: auto; padding-right: 10px; }
                
        /* --- RESPONSIVE MEDIA QUERIES --- */
        @media (max-width: 992px) {
            /* Mobile Nav Fixes */
            .logo { max-width: 75%; }
            .logo img { max-width: 100%; height: auto !important; }
            .hamburger { display: block; margin-left: auto; padding-left: 15px; padding-right: 0; }
            
            .nav-links {
                display: none; flex-direction: column; position: absolute;
                top: 100%; left: 0; width: 100%; background: white; padding: 1rem 0;
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            }
            .nav-links.active { display: flex; }
            .dropdown-menu { position: static; box-shadow: none; padding-left: 20px; border-top: none; background: #f9f9f9; }
            
            .top-bar { justify-content: space-between; padding: 10px 5%; }
            .top-bar-right { display: none; }
            
            .gallery-grid { grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); }
            .inner-banner h1 { font-size: 2.5rem; }
            .close-lightbox { top: 10px; right: 20px; font-size: 35px; }
            .lightbox { padding-top: 80px; }
        }

        /* Small mobile screens */
        @media (max-width: 768px) {
            #side-quick-links { display: none; }
        }
    </style>
</head>
<body>

    <div id="side-quick-links">
        <ul>
            <li class="call"><a href="tel:+917665083556"><i class="fa fa-phone"></i><div class="content">+91-76650 83556</div></a></li>
            <li class="marker"><a href="enquiry.html"><i class="fa fa-file-lines"></i><div class="content">Apply Now</div></a></li>
            <li class="whatapp"><a href="https://wa.me/917665083556" target="_blank"><i class="fab fa-whatsapp"></i><div class="content">WhatsApp</div></a></li>
        </ul>
    </div>

    <div class="top-bar">
        <div class="top-bar-left">
            <a href="tel:+917665083556"><i class="fa fa-phone"></i> +91-76650 83556</a>
        </div>
        <div class="top-bar-right social-top">
            <a href="https://www.facebook.com/kingscourtworldschool/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/kingscourtworldschool/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/@KINGSCOURTWORLDSCHOOL" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

    <nav>
        <div class="logo">
            <a href="/">
                <img src="/logoKCWS.png" alt="Kings Court World School Logo" style="height: 50px; width: auto; object-fit: contain;">
            </a>
        </div>
        <div class="hamburger" onclick="toggleMenu()">
            <i class="fa-solid fa-bars"></i>
        </div>
        <ul class="nav-links">
            <li class="nav-item"><a href="/">Home</a></li>
            <li class="nav-item"><a href="about.html">About us</a></li>
            
            <li class="nav-item">
                <a href="javascript:void(0)">Programs <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="playgroup_jal.html">Playgroup – Jal</a></li>
                    <li><a href="nursery_agni.html">Nursery – Agni</a></li>
                    <li><a href="junior_kg_vayu.html">Junior KG – Vayu</a></li>
                    <li><a href="senior_kg_akash.html">Senior KG – Akash</a></li>
                </ul>
            </li>

            <li class="nav-item"><a href="enquiry.html">Admissions</a></li>
            
            <li class="nav-item"><a href="gallery.php">Gallery</a></li>
            <li class="nav-item"><a href="blog.html">Blogs</a></li>
                
            <li class="nav-item"><a href="contact.html">Contact</a></li>
            <li><a href="enquiry.html" class="cta-btn">Apply Online</a></li>
        </ul>
    </nav>

    <section class="inner-banner">
        <div class="cloud one"></div>
        <div class="cloud two"></div>
        
        <div class="inner-banner-content">
            <div class="floating-icon balloon"><i class="fas fa-camera-retro"></i></div>
            <h1>Photo <span>Gallery</span></h1>
            <p>Glimpses of Joy, Learning, and Play at Kings Court</p>
        </div>
        
        <div class="wave-container">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <section class="gallery-section">
        <div class="gallery-grid">
            <?php
            // Define the path to your gallery folder
            $directory = "gallery/";

            // Check if the directory exists
            if (is_dir($directory)) {
                // Get all image files
                $images = glob($directory . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);

                if (!empty($images)) {
                    foreach ($images as $image) {
                        // Output the HTML for each image block with a zoom overlay
                        echo '
                        <div class="gallery-item reveal active">
                            <img src="' . $image . '" alt="Kings Court Gallery Image">
                            <div class="zoom-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>';
                    }
                } else {
                    echo '<p style="grid-column: 1 / -1; text-align: center; font-size: 1.2rem;">No images found in the gallery.</p>';
                }
            } else {
                echo '<p style="grid-column: 1 / -1; text-align: center; font-size: 1.2rem; color: var(--google-red);">The "gallery" folder was not found on the server. Please create it in your public_html folder.</p>';
            }
            ?>
        </div>
    </section>

    <div id="imageLightbox" class="lightbox">
        <span class="close-lightbox">&times;</span>
        <img class="lightbox-content" id="expandedImg">
    </div>

    <footer>
        <div class="footer-wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>

        <div class="footer-content">
            <div class="footer-col">
                <div class="logo" style="margin-bottom: 1rem;">
                    <a href="index.html">
                        <img src="/Footerlogo.png" alt="Kings Court World School Logo" style="height: 50px; width: auto; object-fit: contain;">
                    </a>
                </div>
                <div class="social-links">
                    <a href="https://www.facebook.com/kingscourtworldschool/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/kingscourtworldschool/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@KINGSCOURTWORLDSCHOOL" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="tel:+917665083556"><i class="fa fa-phone"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="enquiry.html">Enroll Now</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Prospectus</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Contact Us</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Plot no.- 5, Kings lane, Suraj Vatika, Golyawas, Vandemataram Circle, Mansarovar, Jaipur -302020</li>
                    <li><i class="fas fa-phone"></i> +91-76650 83556</li>
                    <li><i class="fas fa-envelope"></i> kingscourtworldschool@gmail.com</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright © 2026 Kings Court World School</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }

        // Dropdown toggle on mobile
        const dropdownToggles = document.querySelectorAll('.nav-item > a');
        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                if(window.innerWidth <= 992) {
                    const dropdown = this.nextElementSibling;
                    if(dropdown && dropdown.classList.contains('dropdown-menu')) {
                        e.preventDefault();
                        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                    }
                }
            });
        });

        // Scroll Reveal Logic
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 50;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        reveal();

        // --- Lightbox Logic ---
        document.addEventListener('DOMContentLoaded', function() {
            const lightbox = document.getElementById("imageLightbox");
            const lightboxImg = document.getElementById("expandedImg");
            const closeBtn = document.querySelector(".close-lightbox");
            const galleryItems = document.querySelectorAll(".gallery-item");

            // Open Lightbox on Image Click
            galleryItems.forEach(item => {
                item.addEventListener('click', function() {
                    const img = this.querySelector('img');
                    if(img) {
                        lightboxImg.src = img.src;
                        lightbox.style.display = "block";
                        // Prevent body scrolling when lightbox is open
                        document.body.style.overflow = "hidden";
                    }
                });
            });

            // Close Lightbox
            const closeLightbox = () => {
                lightbox.style.display = "none";
                document.body.style.overflow = "auto";
            }

            // Close on 'X' click
            if(closeBtn) {
                closeBtn.addEventListener('click', closeLightbox);
            }

            // Close when clicking outside the image
            if(lightbox) {
                lightbox.addEventListener('click', function(e) {
                    if (e.target !== lightboxImg) {
                        closeLightbox();
                    }
                });
            }

            // Close on Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === "Escape" && lightbox.style.display === "block") {
                    closeLightbox();
                }
            });
        });
    </script>
</body>
</html>