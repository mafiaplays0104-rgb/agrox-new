// layout.js

// 1. Navbar HTML
const navContent = `
    <nav class="glass-nav" id="navbar">
        <div class="nav-logo" onclick="window.location.href='index.html'">
            <span class="nav-flip">
                <img src="images/agroxtopbhairav.png" alt="AGROX Logo">
            </span>
        </div>
        <ul class="nav-links">
            <li><a href="index.html"><span class="nav-flip">Home</span></a></li>
            <li><a href="index.html#our-story"><span class="nav-flip">Our Story</span></a></li>
            <li><a href="products.html"><span class="nav-flip" style="color:var(--primary);">Products</span></a></li>
            <li><a href="index.html#journey-process"><span class="nav-flip">Journey</span></a></li>
        </ul>
    </nav>
`;

// 2. Footer HTML
const footerContent = `
    <footer class="portport-footer">
        <div class="footer-vignette"></div>
        <div class="footer-content-wrapper">
            <div class="footer-top">
                <div class="footer-col">
                    <div class="footer-logo">
                        <img src="images/agroxtopbhairav.png" alt="AGROX Logo">
                    </div>
                    <p class="footer-description">Delivering the finest organic spices and fruits from nature's heart to your home. Sustainably sourced, premium quality.</p>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <div class="contact-info">
                        <p>123 Export Avenue, Green City<br>State, Country 560001</p>
                        <p>Email: <a href="mailto:support@theagroxgroup.com">support@theagroxgroup.com</a></p>
                        <p>Phone: <a href="tel:+917320040684">+91 73200 40684</a></p>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy; 2025 AGROX Organic Exports. All Rights Reserved.
            </div>
        </div>
    </footer>
`;

// 3. SVG Filter (Required for Glow Effect)
const svgFilter = `
    <svg style="display: none;">
      <defs>
        <filter id="noiseGlow">
          <feTurbulence type="fractalNoise" baseFrequency="2.5" numOctaves="4" stitchTiles="stitch" result="noise"/>
          <feColorMatrix type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 0.5 0" in="noise" result="coloredNoise"/>
          <feComposite operator="in" in="coloredNoise" in2="SourceGraphic" result="composite"/>
          <feBlend mode="overlay" in="composite" in2="SourceGraphic"/>
        </filter>
      </defs>
    </svg>
`;

// 4. Shared CSS (Injects styles if missing)
const sharedStyles = `
<style>
    /* Ensure Footer Variables exist even if not in root */
    .portport-footer {
        --text-size: 16vw; 
        --text-1-top: 21%; 
        --text-1-left: 37%; 
        --text-2-top: 90%; 
        --text-2-left: 63%;   
        --footer-pad-top: 100px; 
        --footer-pad-bottom: 29px;
        --footer-bg: #06180e;
        --brand-font: "Bahnschrift", "Bahnschrift SemiCondensed", "Inter Tight", "Roboto Condensed", "Archivo Narrow", "Segoe UI", sans-serif;
        
        position: relative; width: 100%; height: auto; background-color: var(--footer-bg); 
        color: #E0E0E0; display: flex; flex-direction: column; justify-content: center;
        overflow: hidden; z-index: 100; padding: var(--footer-pad-top) 0 var(--footer-pad-bottom);
        box-shadow: 0 -10px 30px rgba(0,0,0,0.5);
    }
    .footer-vignette { position: absolute; top: 0; left: 0; width: 100%; height: 150px; background: linear-gradient(to bottom, #0b0b0b, transparent); z-index: 5; pointer-events: none; }
    
    .portport-footer::before, .portport-footer::after {
        content: 'AGROXGROUP'; position: absolute; font-family: var(--brand-font); font-size: var(--text-size);
        font-weight: 800; font-stretch: condensed; letter-spacing: -5px; color: rgba(255, 255, 255, 0.08); 
        text-shadow: var(--glow-x, 0px) var(--glow-y, 0px) 35px rgba(76,175,80,var(--scroll-glow, 0.15)), 0 0 120px rgba(76,175,80,0.25);
        filter: url(#noiseGlow); white-space: nowrap; pointer-events: none; z-index: 0; line-height: 1;
        transition: opacity 0.1s linear; opacity: var(--text-reveal, 0); 
    }
    .portport-footer::before { top: var(--text-1-top); left: var(--text-1-left); transform: translate(calc(-50% - (80vw * (1 - var(--text-reveal, 0)))), -50%); }
    .portport-footer::after { top: var(--text-2-top); left: var(--text-2-left); transform: translate(calc(-50% + (80vw * (1 - var(--text-reveal, 0)))), -50%); }

    .footer-content-wrapper { position: relative; z-index: 10; width: 100%; max-width: 1300px; margin: 0 auto; display: flex; flex-direction: column; justify-content: space-between; padding: 0 30px; }
    .footer-top { display: flex; justify-content: space-between; align-items: flex-start; width: 100%; flex-wrap: wrap; gap: 20px; }
    .footer-col { flex: 1; min-width: 250px; padding: 0 20px; }
    .footer-logo img { max-width: 180px; height: auto; margin-bottom: 20px; display: block; }
    .footer-description { color: #ddd; line-height: 1.6; font-size: 0.9rem; max-width: 350px; }
    .footer-col h3 { color: #fff; margin: 0 0 25px 0; font-size: 1.1rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; border-left: 4px solid #FFD54F; padding-left: 15px; line-height: 1.2; }
    .footer-links { list-style: none; padding: 0; margin: 0; }
    .footer-links li { margin-bottom: 15px; }
    .footer-links a { color: #FFD54F; text-decoration: none; font-size: 1rem; transition: color 0.3s; }
    .footer-links a:hover { color: #fff; }
    .contact-info p { margin-bottom: 15px; color: #ddd; line-height: 1.6; font-size: 0.95rem; }
    .contact-info a { color: #fff; text-decoration: none; }
    .copyright { text-align: center; border-top: 1px solid rgba(255,255,255,0.05); padding-top: 30px; color: #888; font-size: 0.8rem; margin-top: 80px; position: relative; z-index: 1; }
    @media (max-width: 768px) { .footer-top { flex-direction: column; text-align: left; } .footer-col { padding: 0; margin-bottom: 40px; } .portport-footer { --text-size: 35vw; } }
</style>
`;

// 5. Main Initialization
document.addEventListener("DOMContentLoaded", function() {
    // Inject HTML & CSS
    document.head.insertAdjacentHTML("beforeend", sharedStyles);
    document.body.insertAdjacentHTML("afterbegin", navContent);
    document.body.insertAdjacentHTML("beforeend", footerContent);
    document.body.insertAdjacentHTML("beforeend", svgFilter);

    // Navbar Scroll Logic
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) navbar.classList.add('active'); 
        else navbar.classList.remove('active');
    });

    // --- FOOTER ANIMATION LOGIC (Unified) ---
    const footer = document.querySelector('.portport-footer');
    
    if(footer) {
        // A. Mouse Move Glow (Opposite Direction)
        document.addEventListener('mousemove', e => {
            const x = (e.clientX / window.innerWidth - 0.5) * -60; 
            const y = (e.clientY / window.innerHeight - 0.5) * -60;
            footer.style.setProperty('--glow-x', `${x}px`);
            footer.style.setProperty('--glow-y', `${y}px`);
        });

        // B. Scroll Text Reveal Logic
        window.addEventListener('scroll', () => {
            const rect = footer.getBoundingClientRect();
            const winHeight = window.innerHeight;
            
            // Calculate visibility
            const dist = winHeight - rect.top; 
            const height = rect.height; 
            
            let progress = dist / height; 
            
            // Clamp value
            if (progress > 1) progress = 1;
            if (progress < 0) progress = 0;
            
            // Update CSS Variables
            footer.style.setProperty('--text-reveal', progress.toFixed(3));
            
            const intensity = Math.min(window.scrollY / 700, 1);
            document.documentElement.style.setProperty('--scroll-glow', (0.15 + intensity * 0.35).toFixed(2));
        });
        
        // Trigger once on load to set initial state
        window.dispatchEvent(new Event('scroll'));
    }
});