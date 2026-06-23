<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: SITEMAP
// ----------------------------------------------------------------
$pageTitle = "Sitemap | All Pages | AgroX Organic Exports from India";
$metaDescription = "AgroX Sitemap — complete directory of all pages including products, buyer resources, certifications, export markets, and company information.";

$path = '';
$prodPath = 'products/';

include 'header.php'; 
?>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    body { font-family: 'Poppins', sans-serif; background-color: #050505; color: #e0e0e0; margin: 0; overflow-x: hidden; line-height: 1.6; }
    
    h1, h2, h3, h4, .banner-title, .banner-scroll-text, .sitemap-section-title { 
        font-family: 'Bebas Neue', sans-serif; 
        letter-spacing: 1.5px; 
        text-transform: uppercase;
    }
    
    .text-accent { color: #d4a017; }

    /* --- PARALLAX BANNER --- */
    .banner-wrapper { position: relative; width: 100%; height: 40vh; min-height: 180px; overflow: hidden; background-color: #111; }
    .banner-img-responsive { width: 100%; height: 100%; display: block; object-fit: cover; }
    
    .banner-title {
        position: absolute; top: 65%; left: 50%; transform: translate(-50%, -50%);
        z-index: 5; margin: 0; font-size: 8rem; color: #ffffff; text-align: center; width: 100%;
        text-shadow: 0 10px 40px rgba(0, 0, 0, 0.9);
    }
    .banner-scroll-text {
        position: absolute; top: 65%; left: 50%; transform: translate(-50%, -50%);
        z-index: 1; font-size: 20vw; line-height: 1; opacity: 0.55;
        color: transparent; -webkit-text-stroke: 2px rgba(255, 255, 255, 0.9);
        pointer-events: none;
    }
    .vignette-overlay {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: radial-gradient(ellipse at center, rgba(0,0,0,0.4) 0%, #050505 100%);
        pointer-events: none; z-index: 2;
    }

    /* --- MAIN CONTENT --- */
    #main-content {
        position: relative; z-index: 10;
        background: #050505;
        padding: 80px 0 120px;
    }
    .container { max-width: 1200px; margin: 0 auto; padding: 0 30px; }

    /* --- SITEMAP GRID --- */
    .sitemap-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px;
        margin-top: 60px;
    }

    .sitemap-section {
        border-left: 2px solid rgba(212, 160, 23, 0.25);
        padding-left: 24px;
    }

    .sitemap-section-title {
        font-size: 1.1rem;
        color: #d4a017;
        margin: 0 0 18px 0;
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(255,255,255,0.06);
    }

    .sitemap-links {
        list-style: none;
        padding: 0; margin: 0;
    }

    .sitemap-links li { margin-bottom: 10px; }

    .sitemap-links a {
        color: #ccc;
        text-decoration: none;
        font-size: 0.92rem;
        font-weight: 300;
        transition: color 0.2s ease, padding-left 0.2s ease;
        display: flex; align-items: center; gap: 8px;
    }
    .sitemap-links a:hover { color: #d4a017; padding-left: 4px; }
    .sitemap-links a i { font-size: 0.75rem; color: rgba(212, 160, 23, 0.5); }

    .sitemap-intro {
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
    }
    .sitemap-intro h2 {
        font-size: 2.5rem;
        color: #fff;
        margin-bottom: 14px;
    }
    .sitemap-intro p {
        color: #888;
        font-size: 1rem;
        font-weight: 300;
        line-height: 1.7;
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 900px) {
        .sitemap-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 600px) {
        .sitemap-grid { grid-template-columns: 1fr; }
        .banner-title { font-size: 4rem; }
        .banner-scroll-text { font-size: 28vw; }
    }
</style>

<div class="banner-wrapper" id="bannerContainer">
    <img src="assets/images/bannerproduct.avif" alt="Sitemap Banner" class="banner-img-responsive">
    <div class="banner-scroll-text" id="bgText">MAP</div>
    <h1 class="banner-title" id="fgText">SITEMAP</h1>
    <div class="vignette-overlay"></div>
</div>

<section id="main-content">
    <div class="container">

        <div class="sitemap-intro">
            <h2>COMPLETE <span class="text-accent">DIRECTORY</span></h2>
            <p>Browse every section of the AgroX website. From product categories and export markets to resources, certifications, and company information.</p>
        </div>

        <div class="sitemap-grid">

            <!-- COMPANY -->
            <div class="sitemap-section">
                <h3 class="sitemap-section-title"><i class="fa-solid fa-building"></i> Company</h3>
                <ul class="sitemap-links">
                    <li><a href="index.php"><i class="fa-solid fa-chevron-right"></i> Homepage</a></li>
                    <li><a href="about-us.php"><i class="fa-solid fa-chevron-right"></i> About Us</a></li>
                    <li><a href="why-agrox.php"><i class="fa-solid fa-chevron-right"></i> Why AgroX</a></li>
                    <li><a href="contact-us.php"><i class="fa-solid fa-chevron-right"></i> Contact Us</a></li>
                    <li><a href="contact-us.php?type=quote"><i class="fa-solid fa-chevron-right"></i> Get a Quote</a></li>
                </ul>
            </div>

            <!-- PRODUCTS -->
            <div class="sitemap-section">
                <h3 class="sitemap-section-title"><i class="fa-solid fa-seedling"></i> Products</h3>
                <ul class="sitemap-links">
                    <li><a href="all-products.php"><i class="fa-solid fa-chevron-right"></i> All Products</a></li>
                    <li><a href="products/whole-spices.php"><i class="fa-solid fa-chevron-right"></i> Whole Spices</a></li>
                    <li><a href="products/powdered-spices.php"><i class="fa-solid fa-chevron-right"></i> Powdered Spices</a></li>
                    <li><a href="products/dry-fruits.php"><i class="fa-solid fa-chevron-right"></i> Dry Fruits &amp; Nuts</a></li>
                    <li><a href="products/grains-and-pulses.php"><i class="fa-solid fa-chevron-right"></i> Pulses &amp; Lentils</a></li>
                    <li><a href="products/rice-varieties.php"><i class="fa-solid fa-chevron-right"></i> Rice Varieties</a></li>
                    <li><a href="products/extract-oil.php"><i class="fa-solid fa-chevron-right"></i> Extract Oils</a></li>
                </ul>
            </div>

            <!-- QUALITY & COMPLIANCE -->
            <div class="sitemap-section">
                <h3 class="sitemap-section-title"><i class="fa-solid fa-shield-halved"></i> Quality &amp; Compliance</h3>
                <ul class="sitemap-links">
                    <li><a href="certifications.php"><i class="fa-solid fa-chevron-right"></i> Certifications</a></li>
                    <li><a href="quality-control.php"><i class="fa-solid fa-chevron-right"></i> Quality Control</a></li>
                    <li><a href="export-process.php"><i class="fa-solid fa-chevron-right"></i> Export Process</a></li>
                    <li><a href="compliance-center/index.php"><i class="fa-solid fa-chevron-right"></i> Compliance Center</a></li>
                </ul>
            </div>

            <!-- RESOURCES -->
            <div class="sitemap-section">
                <h3 class="sitemap-section-title"><i class="fa-solid fa-book"></i> Resources</h3>
                <ul class="sitemap-links">
                    <li><a href="knowledge/index.php"><i class="fa-solid fa-chevron-right"></i> Knowledge Hub</a></li>
                    <li><a href="buyer-guides/index.php"><i class="fa-solid fa-chevron-right"></i> Buyer Guides</a></li>
                    <li><a href="faq.php"><i class="fa-solid fa-chevron-right"></i> FAQs</a></li>
                    <li><a href="export-intelligence/index.php"><i class="fa-solid fa-chevron-right"></i> Export Intelligence</a></li>
                    <li><a href="trade-academy/index.php"><i class="fa-solid fa-chevron-right"></i> Trade Academy</a></li>
                    <li><a href="market-reports/index.php"><i class="fa-solid fa-chevron-right"></i> Market Reports</a></li>
                </ul>
            </div>

            <!-- EXPORT MARKETS -->
            <div class="sitemap-section">
                <h3 class="sitemap-section-title"><i class="fa-solid fa-globe"></i> Export Markets</h3>
                <ul class="sitemap-links">
                    <li><a href="countries/index.php"><i class="fa-solid fa-chevron-right"></i> All Markets</a></li>
                    <li><a href="contact-us.php?market=uae"><i class="fa-solid fa-chevron-right"></i> UAE 🇦🇪</a></li>
                    <li><a href="contact-us.php?market=saudi-arabia"><i class="fa-solid fa-chevron-right"></i> Saudi Arabia 🇸🇦</a></li>
                    <li><a href="contact-us.php?market=usa"><i class="fa-solid fa-chevron-right"></i> USA 🇺🇸</a></li>
                    <li><a href="contact-us.php?market=germany"><i class="fa-solid fa-chevron-right"></i> Germany 🇩🇪</a></li>
                    <li><a href="contact-us.php?market=singapore"><i class="fa-solid fa-chevron-right"></i> Singapore 🇸🇬</a></li>
                    <li><a href="contact-us.php?market=japan"><i class="fa-solid fa-chevron-right"></i> Japan 🇯🇵</a></li>
                    <li><a href="contact-us.php?market=malaysia"><i class="fa-solid fa-chevron-right"></i> Malaysia 🇲🇾</a></li>
                </ul>
            </div>

            <!-- LEGAL -->
            <div class="sitemap-section">
                <h3 class="sitemap-section-title"><i class="fa-solid fa-scale-balanced"></i> Legal</h3>
                <ul class="sitemap-links">
                    <li><a href="privacy-policy.php"><i class="fa-solid fa-chevron-right"></i> Privacy Policy</a></li>
                    <li><a href="terms-conditions.php"><i class="fa-solid fa-chevron-right"></i> Terms &amp; Conditions</a></li>
                    <li><a href="sitemap.php"><i class="fa-solid fa-chevron-right"></i> Sitemap</a></li>
                </ul>
            </div>

        </div>

    </div>
</section>

<script>
    window.addEventListener('scroll', () => {
        const scrollPosition = window.scrollY;
        const bgText = document.getElementById('bgText');
        const fgText = document.getElementById('fgText');
        if(bgText) bgText.style.transform = `translate(calc(-50% + ${scrollPosition * 0.4}px), -50%)`;
        if(fgText) fgText.style.transform = `translate(calc(-50% - ${scrollPosition * 0.3}px), -50%)`;
    });
</script>

<?php include 'footer.php'; ?>
