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

    <link rel="stylesheet" href="/assets/css/global.css">

    <style>
        /* --- Page Specific Styles (Gallery) --- */

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

        @media (max-width: 992px) {
            .gallery-grid { grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); }
            .inner-banner h1 { font-size: 2.5rem; }
            .close-lightbox { top: 10px; right: 20px; font-size: 35px; }
            .lightbox { padding-top: 80px; }
        }
    </style>
</head>
<body>

    <div id="header-root"></div>


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

    <div id="footer-root"></div>


    <script src="/assets/js/global.js"></script>
    <script src="/assets/js/components.js"></script>
    <script>
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
                if (lightbox) {
                    lightbox.style.display = "none";
                    document.body.style.overflow = "auto";
                }
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
                if (e.key === "Escape" && lightbox && lightbox.style.display === "block") {
                    closeLightbox();
                }
            });
        });
    </script>

</body>
</html>