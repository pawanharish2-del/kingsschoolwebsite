/* 
    Kings Court World School - Components Loader
    Centralizes Header and Footer for easy maintenance.
*/

const HEADER_HTML = `
    <div id="side-quick-links">
        <ul>
            <li class="call">
                <a href="tel:+917665083556">
                    <i class="fa fa-phone"></i>
                    <div class="content">+91-76650 83556</div>
                </a>
            </li>
            <li class="marker">
                <a href="enquiry.html">
                    <i class="fa fa-file-lines"></i>
                    <div class="content">Apply Now</div>
                </a>
            </li>
            <li class="whatapp">
                <a href="https://wa.me/917665083556" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    <div class="content">WhatsApp</div>
                </a>
            </li>
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
`;

const FOOTER_HTML = `
    <footer>
        <div class="footer-wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>

        <div class="footer-content">
            <div class="footer-col">
                <div class="logo" style="margin-bottom: 1rem;">
                <a href="/">
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
`;

function injectComponents() {
    const headerRoot = document.getElementById('header-root') || document.querySelector('nav')?.parentElement;
    const footerRoot = document.getElementById('footer-root') || document.querySelector('footer')?.parentElement;

    // This is safer: find the placeholders if they exist, otherwise replace the existing tags
    const headerPlaceholder = document.getElementById('header-root');
    if (headerPlaceholder) {
        headerPlaceholder.innerHTML = HEADER_HTML;
    }

    const footerPlaceholder = document.getElementById('footer-root');
    if (footerPlaceholder) {
        footerPlaceholder.innerHTML = FOOTER_HTML;
    }
}

// Execute early
injectComponents();
// Also hook to DOMContentLoaded just in case
document.addEventListener('DOMContentLoaded', injectComponents);
