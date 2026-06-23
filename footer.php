<?php
// === SMART PATH FIX ===
if (!isset($path)) {
    $path = file_exists('style.css') ? '' : '../';
}
?>

<footer class="portport-footer">

    <!-- Backdrop Layer 1: Giant Outlined Text -->
    <div class="footer-backdrop-text footer-bg-text-agrox" id="footer-backdrop-text-agrox">AGROX</div>
    <div class="footer-backdrop-text footer-bg-text-group" id="footer-backdrop-text-group">GROUP</div>

    <!-- Backdrop Layer 2: Center Plant Visual -->
    <div class="footer-plant-container" id="footer-plant-container">
        <img src="<?php echo $path; ?>assets/images/footer-plant.png" alt="AGROX Plant" class="footer-plant-image">
    </div>

    <!-- Main Content Container -->
    <div class="footer-container">
        
        <!-- Row 1: Header Row -->
        <div class="footer-header-row">
            <!-- Left Logo -->
            <div class="footer-brand-logo">
                <img src="<?php echo $path; ?>assets/images/agroxtopbhairav.png" alt="AGROX Logo">
            </div>

            <!-- Center Headline -->
            <div class="footer-center-headline">
                FROM <span class="text-gold">INDIA</span><br>
                TO THE <span class="text-gold">WORLD</span>
            </div>

            <!-- Right Micro CTA -->
            <a href="<?php echo $path; ?>contact-us.php" class="footer-micro-cta">
                <div class="cta-circle-text">
                    <svg viewBox="0 0 100 100" width="100" height="100">
                        <path id="circlePath" d="M 50,50 m -37,0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="transparent" />
                        <text>
                            <textPath href="#circlePath" class="cta-text-path">
                                GET IN TOUCH • GET IN TOUCH •
                            </textPath>
                        </text>
                    </svg>
                </div>
                <div class="cta-arrow">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>
            </a>
        </div>

        <!-- Row 2: Main Columns Grid -->
        <div class="footer-grid-row">
            <!-- Left Column: Explore -->
            <div class="footer-col-left">
                <div class="col-title-gold">EXPLORE</div>
                <ul class="explore-links">
                    <li><a href="<?php echo $path; ?>all-products.php">PRODUCTS <span>+</span></a></li>
                    <li><a href="<?php echo $path; ?>contact-us.php">EXPORT MARKETS <span>+</span></a></li>
                    <li><a href="<?php echo $path; ?>knowledge/index.php">RESOURCES <span>+</span></a></li>
                    <li><a href="<?php echo $path; ?>about-us.php">ABOUT US <span>+</span></a></li>
                    <li><a href="<?php echo $path; ?>contact-us.php">CONTACT US <span>+</span></a></li>
                </ul>
            </div>

            <!-- Center Column: Newsletter -->
            <div class="footer-col-center anim-fade-in">
                <div class="col-title-gold">STAY UPDATED</div>
                <h3 class="newsletter-headline">QUALITY. STRAIGHT<br>TO YOUR INBOX.</h3>
                <form class="newsletter-form" action="#" method="POST" onsubmit="event.preventDefault();">
                    <div class="newsletter-input-wrap">
                        <input type="email" placeholder="Enter your email" required class="newsletter-input">
                        <button type="submit" class="newsletter-btn" aria-label="Subscribe">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right Column: Contact & Socials -->
            <div class="footer-col-right anim-reveal-up">
                <div class="col-title-gold">GET IN TOUCH</div>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fa-solid fa-location-dot contact-icon"></i>
                        <p>Mohit Palace, Rajendra Nagar,<br>Khagaria Bihar, India 851205</p>
                    </div>
                    <div class="contact-item">
                        <i class="fa-solid fa-envelope contact-icon"></i>
                        <p>Email: <a href="mailto:support@theagroxgroup.com">support@theagroxgroup.com</a></p>
                    </div>
                    <div class="contact-item">
                        <i class="fa-solid fa-phone contact-icon"></i>
                        <p>Phone: <a href="tel:+917320040684">+91 73200 40684</a></p>
                    </div>
                </div>
                <div class="social-links">
                    <a href="https://linkedin.com" target="_blank" class="social-icon" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://facebook.com" target="_blank" class="social-icon" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://instagram.com" target="_blank" class="social-icon" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/917320040684" target="_blank" class="social-icon" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

        <!-- Row 3: Bottom Bar -->
        <div class="footer-bottom-row">
            <div class="copyright-text">
                &copy; 2026 AGROX Organic Exports. All Rights Reserved.
            </div>
            <div class="policy-links">
                <a href="<?php echo $path; ?>privacy-policy.php">Privacy Policy</a>
                <span class="dot-separator">•</span>
                <a href="<?php echo $path; ?>terms-conditions.php">Terms &amp; Conditions</a>
                <span class="dot-separator">•</span>
                <a href="<?php echo $path; ?>sitemap.php">Sitemap</a>
            </div>
        </div>

    </div>

    <!-- Lenis Smooth Scroll Script -->
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>

    <style>
        /* Lenis Required Styles */
        html.lenis { height: auto; }
        .lenis.lenis-smooth { scroll-behavior: auto !important; }
        .lenis.lenis-smooth [data-lenis-prevent] { overscroll-behavior: contain; }
        .lenis.lenis-stopped { overflow: hidden; }
        .lenis.lenis-scrolling iframe { pointer-events: none; }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // 1. Initialize Lenis Scroll if not already initialized
            if (!window.lenis) {
                window.lenis = new Lenis({
                    duration: 1.2,
                    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                    direction: 'vertical',
                    gestureDirection: 'vertical',
                    smooth: true,
                    mouseMultiplier: 1,
                    smoothTouch: false,
                    touchMultiplier: 2,
                });
                
                function raf(time) {
                    window.lenis.raf(time);
                    requestAnimationFrame(raf);
                }
                requestAnimationFrame(raf);
            }

            // 2. High-Performance Scroll Motion Engine (Backdrop Parallax)
            const plantContainer = document.getElementById('footer-plant-container');
            const footerEl = document.querySelector('.portport-footer');

            let ticking = false;

            function updateFooterMotion() {
                if (!footerEl) return;
                
                const rect = footerEl.getBoundingClientRect();
                const viewHeight = window.innerHeight;

                // Check if footer is visible in viewport
                if (rect.top < viewHeight && rect.bottom > 0) {
                    const visiblePixels = viewHeight - rect.top;
                    const scrollProgress = Math.max(0, Math.min(1, visiblePixels / (viewHeight + rect.height)));
                    
                    // Parallax vertical movement for plant (runs slightly slower/opposite to scroll)
                    const plantY = (scrollProgress - 0.5) * -80;
                    document.documentElement.style.setProperty('--footer-plant-parallax-y', `${plantY}px`);
                }
                ticking = false;
            }

            window.addEventListener('scroll', function() {
                if (!ticking) {
                    window.requestAnimationFrame(updateFooterMotion);
                    ticking = true;
                }
            }, { passive: true });

            // Initial call
            updateFooterMotion();

            // 3. Cinematic Entrance Observer
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-active');
                        // Stagger links animation if target is the links container
                        if (entry.target.classList.contains('footer-col-left')) {
                            const links = entry.target.querySelectorAll('.explore-links li');
                            links.forEach((link, idx) => {
                                setTimeout(() => {
                                    link.classList.add('link-visible');
                                }, idx * 80);
                            });
                        }
                    }
                });
            }, { threshold: 0.15 });

            const animTargets = document.querySelectorAll('.anim-reveal-up, .anim-fade-in, .footer-col-left, .footer-col-right');
            animTargets.forEach(target => revealObserver.observe(target));
        });
    </script>

</footer>