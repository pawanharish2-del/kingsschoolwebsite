/* 
    Kings Court World School - Global Scripts
    STRICT MAINTENANCE MODE - Preserve functionality, fix mobile menu.
*/

function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    const hamburger = document.querySelector('.hamburger i');
    
    if (navLinks) {
        navLinks.classList.toggle('active');
        // Toggle hamburger icon if it's font-awesome
        if (hamburger) {
            if (hamburger.classList.contains('fa-bars')) {
                hamburger.classList.remove('fa-bars');
                hamburger.classList.add('fa-xmark');
            } else if (hamburger.classList.contains('fa-xmark')) {
                hamburger.classList.remove('fa-xmark');
                hamburger.classList.add('fa-bars');
            }
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    // 1. Better Mobile Dropdown Behavior
    const navItems = document.querySelectorAll('.nav-item');
    
    navItems.forEach(item => {
        const toggle = item.querySelector('a');
        if (!toggle) return;
        
        toggle.addEventListener('click', function(e) {
            // Only apply mobile logic if we are on mobile/tablet view
            if (window.innerWidth <= 992) {
                const dropdown = this.nextElementSibling;
                
                if (dropdown && dropdown.classList.contains('dropdown-menu')) {
                    // Prevent navigation on first click/tap for items with submenus
                    e.preventDefault();
                    
                    const isOpen = dropdown.classList.contains('open');
                    
                    // TASK 1: Only one submenu open at a time
                    document.querySelectorAll('.dropdown-menu.open').forEach(opened => {
                        if (opened !== dropdown) {
                            opened.classList.remove('open');
                            opened.style.display = 'none';
                        }
                    });
                    
                    // Toggle current dropdown
                    if (isOpen) {
                        dropdown.classList.remove('open');
                        dropdown.style.display = 'none';
                    } else {
                        dropdown.classList.add('open');
                        dropdown.style.display = 'block';
                        // Smoothly scroll to it if it's near the bottom
                        dropdown.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    }
                }
            }
        });
    });

    // 2. Scroll Reveal Logic (Common to many sections)
    function reveal() {
        const reveals = document.querySelectorAll(".reveal");
        const windowHeight = window.innerHeight;
        const elementVisible = 50; 

        reveals.forEach(el => {
            const elementTop = el.getBoundingClientRect().top;
            if (elementTop < windowHeight - elementVisible) {
                el.classList.add("active");
            }
        });
    }

    window.addEventListener("scroll", reveal);
    reveal(); // Initial call

    // 3. Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        const nav = document.querySelector('nav');
        const navLinks = document.querySelector('.nav-links');
        const hamburger = document.querySelector('.hamburger');
        
        if (navLinks && navLinks.classList.contains('active')) {
            if (!nav.contains(e.target)) {
                toggleMenu();
            }
        }
    });
});
