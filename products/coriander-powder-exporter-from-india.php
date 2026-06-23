<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: CORIANDER POWDER
// ----------------------------------------------------------------
$productName  = "Coriander Powder (Dhania)";
$categoryName = "POWDERED SPICES";
$bannerText   = "PURE";
$imagePath    = "../assets/images/corianderpw.avif"; 
$bgImage      = "../assets/images/Web.avif"; 

// SEO META DATA
$pageTitle    = "Coriander Powder (Dhania) Manufacturer & Exporter India | AGROX";
$pageDesc     = "Exporting premium Coriander Powder from India. Cold-ground from Eagle and Scooter grade seeds. Rich citrusy aroma and greenish-gold color.";

include '../header.php'; 
?>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    /* --- TYPOGRAPHY SETUP --- */
    body { font-family: 'Poppins', sans-serif; }
    
    .banner-title, .banner-scroll-text,
    h1, h2, h3, h4,
    .section-title, .btn-enquire,
    .spec-table th,
    .info-card h4, .variety-card h4,
    .benefit-item h4, .pkg-item strong {
        font-family: 'Bebas Neue', sans-serif;
        letter-spacing: 1.5px;
    }

    /* --- CORE BACKGROUND STYLES --- */
    .product-bg-section {
        position: relative;
        background-image: url('<?php echo $bgImage; ?>');
        background-size: cover;
        background-position: center center;
        background-attachment: scroll; 
        padding-top: 50px; padding-bottom: 100px; min-height: 100vh; 
    }
    .vignette-overlay {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: radial-gradient(ellipse at center, rgba(0,0,0,0) 20%, rgba(11,11,11,0.95) 100%);
        pointer-events: none; z-index: 1;
    }

    /* --- MASTER GLASS CARD --- */
    .glass-wrapper {
        background: rgba(255, 255, 255, 0.03); 
        backdrop-filter: blur(20px);            
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.08); 
        border-radius: 30px;
        padding: 60px;
        box-shadow: 0 30px 60px rgba(0,0,0,0.5); 
        position: relative; z-index: 10; margin-top: 20px;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.9); 
    }

    /* BANNER TYPOGRAPHY */
    .banner-wrapper { position: relative; width: 100%; overflow: hidden; }
    .banner-title {
        position: absolute; top: 63%; left: 50%; transform: translate(-50%, -50%);
        z-index: 5; margin: 0; 
        font-size: 7.5rem; 
        color: #ffffff; text-transform: uppercase; 
        text-shadow: 0 10px 40px rgba(0, 0, 0, 0.9); width: 100%; text-align: center;
        animation: textFocusIn 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
    }
    .banner-scroll-text {
        position: absolute; top: 65%; left: 50%; transform: translate(-50%, -50%);
        z-index: 1; 
        font-size: 20vw; opacity: 0.4; color: transparent; 
        -webkit-text-stroke: 2px rgba(255, 255, 255, 0.9); pointer-events: none;
    }

    /* LAYOUT GRID */
    .single-product-grid {
        display: grid; grid-template-columns: 1fr 1.6fr; gap: 80px;
        align-items: start; margin-top: 40px; position: relative; z-index: 5;
        margin-bottom: 60px; 
    }

    /* LEFT COLUMN STICKY */
    .left-col {
        position: sticky; top: 120px; align-self: start;
    }

    /* IMAGE STYLING */
    .sp-image-box {
        position: relative; border-radius: 20px; overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transform: translateZ(0); margin-bottom: 50px;
    }
    .sp-image-box img { width: 100%; height: auto; display: block; transition: transform 0.7s cubic-bezier(0.25, 0.8, 0.25, 1); }
    .sp-image-box:hover img { transform: scale(1.03); }

    /* --- ANIMATION CONTAINER --- */
    .benefits-wrapper { position: relative; padding-left: 60px; }
    .dynamic-svg-layer { position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; overflow: visible; z-index: 0; }
    
    .path-bg { fill: none; stroke: rgba(255,255,255,0.05); stroke-width: 4; stroke-linecap: round; }
    .path-active { fill: none; stroke: url(#goldGradient); stroke-width: 4; stroke-linecap: round; filter: drop-shadow(0 0 8px rgba(212, 160, 23, 0.6)); }
    
    .glowing-tip {
        width: 12px; height: 12px; background: #fff; border-radius: 50%;
        position: absolute; top: 0; left: 0; transform: translate(-50%, -50%);
        box-shadow: 0 0 15px 5px rgba(212, 160, 23, 0.8); opacity: 0; pointer-events: none; z-index: 2;
    }

    /* ANIMATED BENEFIT ITEMS */
    .benefit-item { position: relative; margin-bottom: 80px; opacity: 0.3; filter: blur(2px); transform: translateX(20px); transition: all 0.5s ease; z-index: 2; }
    .benefit-item.active { opacity: 1; filter: blur(0); transform: translateX(0); }
    
    /* INNER BLACK GLASS CARDS (Left Side) */
    .benefit-box {
        background: rgba(0, 0, 0, 0.4); 
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 20px; border-radius: 12px; 
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-left: 3px solid transparent; transition: 0.3s;
    }
    .benefit-item.active .benefit-box {
        border-left: 3px solid #d4a017;
        background: linear-gradient(90deg, rgba(212,160,23,0.15) 0%, rgba(0,0,0,0.4) 100%);
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
    }

    .benefit-item h4 { color: #d4a017; margin: 0 0 5px 0; text-transform: uppercase; font-size: 1.3rem; font-weight: 400; text-shadow: 0 2px 4px rgba(0,0,0,0.9); }
    .benefit-item p { color: #f0f0f0; margin: 0; font-size: 0.9rem; line-height: 1.4; text-shadow: 0 1px 3px rgba(0,0,0,0.9); font-weight: 300; }

    .anchor-dot {
        position: absolute; left: -60px; top: 50%; transform: translateY(-50%); width: 14px; height: 14px;
        background: #111; border: 2px solid #444; border-radius: 50%; transition: 0.4s; z-index: 1;
    }
    .benefit-item.active .anchor-dot { background: #d4a017; border-color: #fff; transform: translateY(-50%) scale(1.3); box-shadow: 0 0 20px rgba(212, 160, 23, 1); }

    /* CONTENT STYLES */
    .sp-content h1 { color: #ffffff; font-size: 4rem; margin-top: 0; margin-bottom: 10px; text-transform: uppercase; text-shadow: 0 5px 15px rgba(0,0,0,0.8); line-height: 1; }
    .intro-text { font-size: 1.05rem; color: #f0f0f0; line-height: 1.8; margin-bottom: 40px; text-align: justify; text-shadow: 0 1px 3px rgba(0,0,0,0.9); font-weight: 300; }
    
    .section-title {
        color: #fff; font-size: 2.2rem; text-transform: uppercase; 
        margin-top: 60px; margin-bottom: 30px; padding-bottom: 10px; 
        border-bottom: 1px solid rgba(212, 160, 23, 0.5); display: inline-block;
        text-shadow: 0 2px 5px rgba(0,0,0,0.8);
    }

    /* FULL WIDTH SECTIONS */
    .full-width-content {
        border-top: 1px solid rgba(255,255,255,0.1);
        padding-top: 40px;
        margin-top: 40px;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 50px;
    }
    
    /* BLACK GLASS INFO CARDS */
    .info-card {
        background: rgba(0, 0, 0, 0.25); 
        padding: 30px;
        border-radius: 15px;
        border: 1px solid rgba(255,255,255,0.1);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        transition: transform 0.3s ease;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }
    .info-card:hover { transform: translateY(-5px); border-color: #d4a017; background: rgba(0,0,0,0.4); }
    .info-card h4 { color: #d4a017; font-size: 1.5rem; margin-top: 0; margin-bottom: 15px; text-transform: uppercase; }
    .info-card p { color: #ddd; font-size: 0.95rem; line-height: 1.6; margin: 0; font-weight: 300; }

    /* TABLES */
    .spec-table { width: 100%; margin-bottom: 40px; border-collapse: separate; border-spacing: 0 2px; }
    .spec-table th, .spec-table td { padding: 15px 20px; background: rgba(0,0,0,0.3); font-size: 1rem; }
    .spec-table th { color: #d4a017; text-transform: uppercase; text-align: left; width: 40%; font-size: 1.1rem; border-radius: 5px 0 0 5px; text-shadow: 0 1px 2px rgba(0,0,0,0.8); }
    .spec-table td { color: #fff; border-radius: 0 5px 5px 0; text-shadow: 0 1px 2px rgba(0,0,0,0.8); font-weight: 300; }

    /* VARIETY & PACKAGING GRIDS */
    .grid-2-col { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 40px; }
    
    /* BLACK GLASS VARIETY CARDS */
    .variety-card { 
        background: rgba(0, 0, 0, 0.25); 
        padding: 25px; 
        border-radius: 12px; 
        border: 1px solid rgba(255,255,255,0.1); 
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        transition: transform 0.3s ease;
    }
    .variety-card:hover { transform: translateY(-5px); border-color: #d4a017; }
    .variety-card h4 { color: #d4a017; margin: 0 0 10px 0; font-size: 1.4rem; text-transform: uppercase; text-shadow: 0 2px 4px rgba(0,0,0,0.9); }
    .variety-card ul { padding-left: 20px; color: #eee; font-weight: 300; }
    
    /* PACKAGING ITEMS */
    .pkg-list { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-bottom: 40px; }
    .pkg-item { 
        background: rgba(0, 0, 0, 0.25); 
        padding: 15px; border-radius: 8px; text-align: center; 
        border: 1px solid rgba(255,255,255,0.1); 
        backdrop-filter: blur(10px);
        font-size: 0.9rem; font-weight: 300;
        color: #ddd;
    }
    .pkg-item strong { display: block; color: #d4a017; margin-bottom: 5px; font-size: 1.2rem; }

    /* FAQ */
    .faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; }
    .faq-item { 
        background: rgba(0,0,0,0.25); 
        padding: 20px; border-radius: 10px; border-left: 3px solid #d4a017; 
        backdrop-filter: blur(10px);
    }
    .faq-q { color: #fff; font-weight: 500; font-size: 1.1rem; margin-bottom: 10px; display: block; font-family: 'Poppins', sans-serif; }
    .faq-a { color: #ccc; font-size: 0.95rem; line-height: 1.6; font-weight: 300; }

    .btn-enquire {
        display: block; width: 100%; max-width: 400px; margin: 60px auto 0; text-align: center;
        background: #d4a017; color: #000;
        padding: 20px; font-size: 1.5rem; text-transform: uppercase; letter-spacing: 2px;
        text-decoration: none; border: 2px solid #d4a017; position: relative; overflow: hidden;
        transition: all 0.4s ease; 
        text-shadow: 0 1px 2px rgba(255,255,255,0.4);
    }
    .btn-enquire:hover { background: transparent; color: #d4a017; box-shadow: 0 0 30px rgba(212, 160, 23, 0.4); text-shadow: none; }

    @media (max-width: 1000px) {
        .glass-wrapper { padding: 25px; border-radius: 15px; }
        .single-product-grid { grid-template-columns: 1fr; gap: 50px; margin-bottom: 40px; }
        .banner-title { font-size: 3.5rem; }
        .sp-content h1 { font-size: 3rem; }
        .benefits-wrapper { padding-left: 30px; border-left: 2px solid rgba(255,255,255,0.1); }
        .dynamic-svg-layer, .anchor-dot { display: none; }
        .benefit-item { opacity: 1; filter: blur(0); transform: none; margin-bottom: 30px; }
        .banner-scroll-text { font-size: 25vw; }
        .left-col { position: static; }
        .info-grid, .grid-2-col, .faq-grid { grid-template-columns: 1fr; }
    }
    @keyframes textFocusIn { 0% { filter: blur(12px); opacity: 0; } 100% { filter: blur(0px); opacity: 1; } }
</style>

<div class="banner-wrapper">
    <img src="../assets/images/bannerproduct.avif" alt="AGROX Banner" style="width: 100%; height: auto; display: block;">
    <div class="banner-scroll-text" id="bgText"><?php echo $bannerText; ?></div>
    <h1 class="banner-title"  id="fgText"><?php echo $categoryName; ?></h1> 
    <div class="vignette-overlay"></div>
</div>

<section class="product-bg-section">
    <div class="container">
        
        <div class="glass-wrapper">
            
            <div style="margin-bottom: 30px; text-transform: uppercase; letter-spacing: 2px; font-size: 0.9rem; font-weight: 500; text-shadow: 0 2px 4px rgba(0,0,0,0.8); font-family: 'Poppins', sans-serif;">
                <a href="../index.php" style="color: rgba(255,255,255,0.8); text-decoration: none;">Home</a> 
                <span style="color: #666; margin: 0 10px;">/</span>
                <a href="../all-products.php" style="color: rgba(255,255,255,0.8); text-decoration: none;">Products</a> 
                <span style="color: #666; margin: 0 10px;">/</span>
                <span style="color: #d4a017;"><?php echo $productName; ?></span>
            </div>

            <div class="single-product-grid">
                
                <div class="left-col">
                    <div class="sp-image-box">
                        <img src="<?php echo $imagePath; ?>" alt="Pure Coriander Powder Export" loading="lazy">
                    </div>

                    <div class="benefits-wrapper" id="benefitsWrapper">
                        <svg class="dynamic-svg-layer">
                            <defs>
                                <linearGradient id="goldGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" style="stop-color:#d4a017;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#f8e71c;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <path id="ghostPath" class="path-bg" />
                            <path id="goldPath" class="path-active" />
                        </svg>
                        <div id="glowTip" class="glowing-tip"></div>

                        <div class="benefit-item">
                            <div class="anchor-dot"></div>
                            <div class="benefit-box">
                                <h4>Citrusy Aroma</h4>
                                <p>Cold grinding ensures the delicate floral and lemon-like notes are retained.</p>
                            </div>
                        </div>

                        <div class="benefit-item">
                            <div class="anchor-dot"></div>
                            <div class="benefit-box">
                                <h4>Greenish Gold</h4>
                                <p>Processed from Scooter and Parrot Green seeds for superior color.</p>
                            </div>
                        </div>

                        <div class="benefit-item">
                            <div class="anchor-dot"></div>
                            <div class="benefit-box">
                                <h4>100% Pure</h4>
                                <p>Free from adulterants like starch, sawdust, or artificial colors.</p>
                            </div>
                        </div>

                        <div class="benefit-item">
                            <div class="anchor-dot"></div>
                            <div class="benefit-box">
                                <h4>Cold Ground</h4>
                                <p>Low-temperature milling preserves the volatile oils and flavor profile.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sp-content">
                    <h1><?php echo $productName; ?></h1>
                    <div class="intro-text">
                        AGROX exports high-quality Coriander Powder (Dhania Powder), a staple in Indian and global cuisines. Sourced from the best Eagle and Scooter grade seeds of Rajasthan and Gujarat, our coriander is meticulously cleaned and cold-ground. This ensures the retention of its natural essential oils, delivering a fresh, citrusy aroma and mild, sweet flavor to your dishes.
                    </div>

                    <div class="section-title" style="margin-top: 0;">Product Grades</div>
                    <div class="grid-2-col">
                        <div class="variety-card">
                            <h4>Standard Grade</h4>
                            <ul>
                                <li><strong>Color:</strong> Light Brownish-Green</li>
                                <li><strong>Aroma:</strong> Mild & Earthy</li>
                                <li><strong>Use:</strong> Bulk Curry Masalas</li>
                            </ul>
                        </div>
                        <div class="variety-card">
                            <h4>Premium Green</h4>
                            <ul>
                                <li><strong>Color:</strong> Greenish Gold</li>
                                <li><strong>Aroma:</strong> Intense & Citrusy</li>
                                <li><strong>Use:</strong> Retail Packs, Exports</li>
                            </ul>
                        </div>
                        <div class="variety-card">
                            <h4>Roasted Dhania</h4>
                            <ul>
                                <li><strong>Color:</strong> Dark Brown</li>
                                <li><strong>Flavor:</strong> Nutty & Smoky</li>
                                <li><strong>Use:</strong> Spice Blends, Marinades</li>
                            </ul>
                        </div>
                        <div class="variety-card">
                            <h4>Organic Grade</h4>
                            <ul>
                                <li><strong>Certification:</strong> USDA/EU Organic</li>
                                <li><strong>Purity:</strong> Chemical Free</li>
                                <li><strong>Use:</strong> Health Foods</li>
                            </ul>
                        </div>
                    </div>

                    <div class="section-title">Technical Specifications</div>
                    <table class="spec-table">
                        <tr><th>Volatile Oil</th><td>0.5% Min</td></tr>
                        <tr><th>Moisture</th><td>9% - 10% Max</td></tr>
                        <tr><th>Total Ash</th><td>7% Max</td></tr>
                        <tr><th>Acid Insoluble Ash</th><td>1.5% Max</td></tr>
                        <tr><th>Mesh Size</th><td>60 - 80 Mesh (Fine)</td></tr>
                        <tr><th>Salmonella / E.Coli</th><td>Absent</td></tr>
                        <tr><th>Flavor Profile</th><td>Warm, Nutty, Citrusy</td></tr>
                    </table>
                </div>
            </div> 

            <div class="full-width-content">
                
                <h2 class="section-title" style="width:100%;">Global Logistics & Packaging</h2>
                <div class="info-grid">
                    <div class="info-card">
                        <h4>Bulk Packaging</h4>
                        <p><strong>25kg / 50kg</strong><br>Paper Bags or HDPE Bags with inner liner to prevent moisture and aroma loss.</p>
                    </div>
                    <div class="info-card">
                        <h4>Retail Packaging</h4>
                        <p><strong>Pouches / Jars</strong><br>100g, 200g, 500g options. Private labeling (White Label) available for brands.</p>
                    </div>
                    <div class="info-card">
                        <h4>Container Capacity</h4>
                        <p><strong>20 FT:</strong> 16 - 17 Metric Tons<br><strong>40 FT:</strong> 26 - 27 Metric Tons<br><strong>Lead Time:</strong> 10-15 Days</p>
                    </div>
                </div>

                <h2 class="section-title" style="width:100%;">Industries We Serve</h2>
                <div class="grid-2-col">
                    <div class="variety-card">
                        <h4>Curry Powder Manufacturers</h4>
                        <p>Coriander forms the bulk base (30-50%) of most Curry Powder and Garam Masala blends.</p>
                    </div>
                    <div class="variety-card">
                        <h4>Meat Processing</h4>
                        <p>Used as a thickening agent and flavor enhancer in sausages, spice rubs, and marinades.</p>
                    </div>
                </div>

                <h2 class="section-title" style="width:100%;">Frequently Asked Questions</h2>
                <div class="faq-grid">
                    <div class="faq-item">
                        <span class="faq-q">Q: How do you check for adulteration?</span>
                        <span class="faq-a">We test for starch, sawdust, and artificial colors in our lab to ensure 100% purity.</span>
                    </div>
                    <div class="faq-item">
                        <span class="faq-q">Q: Why is your powder greenish?</span>
                        <span class="faq-a">We use superior quality seeds that still retain chlorophyll, indicating freshness and better aroma than brown powder.</span>
                    </div>
                    <div class="faq-item">
                        <span class="faq-q">Q: Is it steam sterilized?</span>
                        <span class="faq-a">Yes, we offer Steam Sterilized Coriander Powder to meet strict microbial limits for EU/USA markets.</span>
                    </div>
                    <div class="faq-item">
                        <span class="faq-q">Q: Can you customize the mesh size?</span>
                        <span class="faq-a">Yes, we can grind to your specific requirement, from coarse (40 mesh) to fine (80-100 mesh).</span>
                    </div>
                </div>

                <a href="../contact-us.php?product=<?php echo urlencode($productName); ?>" class="btn-enquire">Get A Custom Quote</a>

            </div> 

        </div> 
    </div>
</section>

<script>
// --- OPPOSITE SCROLL SCRIPT ADDED HERE ---
window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;
    
    // Select Elements
    const bgText = document.getElementById('bgText');
    const fgText = document.getElementById('fgText');

    // Move Background Text RIGHT
    if(bgText) {
        bgText.style.transform = `translate(calc(-50% + ${scrollPosition * 0.4}px), -50%)`;
    }

    // Move Foreground Title LEFT (Opposite Direction)
    if(fgText) {
        fgText.style.transform = `translate(calc(-50% - ${scrollPosition * 0.3}px), -50%)`;
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const wrapper   = document.getElementById("benefitsWrapper");
    const dots      = document.querySelectorAll(".anchor-dot");
    const ghostPath = document.getElementById("ghostPath");
    const goldPath  = document.getElementById("goldPath");
    const glowTip   = document.getElementById("glowTip");
    const items     = document.querySelectorAll(".benefit-item");

    if (!wrapper || window.innerWidth < 1000) return;

    let pathLength = 0;
    let lastScroll = window.scrollY;

    function buildPath() {
        if (!dots.length) return;
        const wrapRect = wrapper.getBoundingClientRect();
        let d = `M 20 -20 `;
        dots.forEach((dot, index) => {
            const rect = dot.getBoundingClientRect();
            const x = rect.left - wrapRect.left + rect.width / 2;
            const y = rect.top  - wrapRect.top  + rect.height / 2;
            if (index === 0) d += `L ${x} ${y} `;
            else d += `C 20 ${y - 40}, ${x} ${y - 40}, ${x} ${y} `;
        });
        const lastDot = dots[dots.length - 1].getBoundingClientRect();
        const lastY = (lastDot.top - wrapRect.top) + 100;
        d += `L 20 ${lastY}`;
        ghostPath.setAttribute("d", d);
        goldPath.setAttribute("d", d);
        pathLength = goldPath.getTotalLength();
        goldPath.style.strokeDasharray = pathLength;
        goldPath.style.strokeDashoffset = pathLength;
    }

    buildPath();
    window.addEventListener("resize", () => setTimeout(buildPath, 150));

    function onScroll() {
        const rect = wrapper.getBoundingClientRect();
        const winH = window.innerHeight;
        const start = winH * 0.85;
        const end   = winH * 0.25;
        let progress = (start - rect.top) / (start - end + rect.height * 0.4);
        progress = Math.max(0, Math.min(1, progress));
        const eased = progress * progress * (3 - 2 * progress);
        goldPath.style.strokeDashoffset = pathLength * (1 - eased);

        if (eased > 0.02 && eased < 0.98) {
            const point = goldPath.getPointAtLength(pathLength * eased);
            const scrollSpeed = Math.abs(window.scrollY - lastScroll);
            lastScroll = window.scrollY;
            glowTip.style.opacity = 1;
            glowTip.style.left = `${point.x}px`;
            glowTip.style.top  = `${point.y}px`;
            glowTip.style.boxShadow = `0 0 ${14 + scrollSpeed}px rgba(212,160,23,0.9)`;
        } else {
            glowTip.style.opacity = 0;
        }

        items.forEach((item, i) => {
            const threshold = (i + 1) / items.length;
            if (eased >= threshold - 0.18) item.classList.add("active");
            else item.classList.remove("active");
        });
    }

    let ticking = false;
    window.addEventListener("scroll", () => {
        if (!ticking) {
            requestAnimationFrame(() => { onScroll(); ticking = false; });
            ticking = true;
        }
    });
    onScroll();
});
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Coriander Powder (Dhania)",
  "image": "https://theagroxgroup.org/assets/images/corianderpw.avif",
  "description": "Export-grade Indian Coriander Powder. Cold ground from Eagle/Scooter seeds. High aroma, pure quality.",
  "brand": { "@type": "Organization", "name": "AGROX Organic Exports" },
  "sku": "COR-PW-EXP",
  "offers": {
    "@type": "Offer",
    "url": "https://theagroxgroup.org/coriander-powder-exporter-from-india.php",
    "priceCurrency": "USD",
    "availability": "https://schema.org/InStock",
    "itemCondition": "https://schema.org/NewCondition"
  }
}
</script>

<?php include '../footer.php'; ?>