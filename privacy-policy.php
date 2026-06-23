<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: PRIVACY POLICY
// ----------------------------------------------------------------
$pageTitle = "Privacy Policy | AgroX Group Organic B2B Trade Security";
$metaDescription = "Read the AgroX privacy policy. Learn how we handle corporate buyer information, cookies, trade data, and encrypted communication portals.";
$canonicalURL = "https://www.theagroxgroup.com/privacy-policy.php"; 

include 'header.php'; 
?>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* --- CORE THEME & TYPOGRAPHY --- */
    body { font-family: 'Poppins', sans-serif; background-color: #050505; color: #e0e0e0; margin: 0; overflow-x: hidden; line-height: 1.6; }
    
    h1, h2, h3, h4, h5, .banner-title, .banner-scroll-text, .section-label, .btn-gold, .legal-title { 
        font-family: 'Bebas Neue', sans-serif; 
        letter-spacing: 1.5px; 
        text-transform: uppercase;
    }
    
    .text-accent { color: #d4a017; }

    /* --- PARALLAX BANNER --- */
    .banner-wrapper { position: relative; width: 100%; height: 40vh; min-height: 200px; overflow: hidden; background-color: #111; }
    .banner-img-responsive { width: 100%; height: 100%; display: block; object-fit: cover; }
    
    .banner-title {
        position: absolute; top: 65%; left: 50%; transform: translate(-50%, -50%);
        z-index: 5; margin: 0; font-size: 8rem; color: #ffffff; text-align: center; width: 100%;
        text-shadow: 0 10px 40px rgba(0, 0, 0, 0.9);
    }
    .banner-scroll-text {
        position: absolute; top: 65%; left: 50%; transform: translate(-50%, -50%);
        z-index: 1; font-size: 20vw; line-height: 1; opacity: 0.6;
        color: transparent; -webkit-text-stroke: 2px rgba(255, 255, 255, 0.9);
        pointer-events: none;
    }
    .vignette-overlay {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: radial-gradient(ellipse at center, rgba(0,0,0,0.4) 0%, #050505 100%);
        pointer-events: none; z-index: 2;
    }

    /* --- MAIN CONTENT & CONTAINER --- */
    #main-content {
        position: relative;
        z-index: 10;
        background: #050505;
        padding: 80px 0;
    }
    .container { max-width: 900px; margin: 0 auto; padding: 0 30px; position: relative; }

    .legal-content {
        color: #bbb;
        font-size: 1.05rem;
        line-height: 1.8;
        font-weight: 300;
    }
    .legal-content p {
        margin-bottom: 25px;
    }
    .legal-content ul {
        margin-bottom: 25px;
        padding-left: 20px;
    }
    .legal-content li {
        margin-bottom: 10px;
    }
    .legal-title {
        font-size: 2.2rem;
        color: #fff;
        margin: 40px 0 20px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        padding-bottom: 8px;
    }
    .legal-title:first-child {
        margin-top: 0;
    }
    
    .last-updated {
        font-size: 0.85rem;
        color: #777;
        margin-bottom: 40px;
        font-style: italic;
        display: block;
    }

    /* --- CONVERSION CTA --- */
    .conversion-card {
        background: rgba(18, 28, 21, 0.25);
        border: 1px solid rgba(255,255,255,0.06);
        border-top: 1px solid rgba(212, 160, 23, 0.4);
        border-radius: 12px;
        padding: 50px;
        text-align: center;
        margin-top: 80px;
    }
    .conversion-card h3 { font-size: 3rem; color: #fff; line-height: 0.9; margin: 0 0 15px 0; }
    .conversion-card p { color: #ccc; font-size: 1rem; max-width: 600px; margin: 0 auto 30px auto; font-weight: 300; }
    
    .btn-gold {
        display: inline-block; background: #d4a017; color: #000; padding: 15px 35px; font-size: 1.1rem;
        cursor: pointer; text-transform: uppercase; font-weight: bold; border-radius: 4px; text-decoration: none;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    .btn-gold:hover { background: #fff; box-shadow: 0 0 20px rgba(212, 160, 23, 0.4); }
    .btn-gold:active { transform: scale(0.97) !important; }

    /* --- RESPONSIVE --- */
    @media (max-width: 768px) {
        .banner-title { font-size: 4rem; }
        .banner-scroll-text { font-size: 25vw; }
        .legal-title { font-size: 1.8rem; }
        .conversion-card { padding: 30px 20px; }
        .conversion-card h3 { font-size: 2.2rem; }
    }
</style>

<div class="banner-wrapper" id="bannerContainer">
    <img src="assets/images/bannerproduct.avif" alt="Privacy Policy Banner" class="banner-img-responsive">
    <div class="banner-scroll-text" id="bgText">SECURITY</div>
    <h1 class="banner-title" id="fgText">PRIVACY POLICY</h1> 
    <div class="vignette-overlay"></div>
</div>

<section id="main-content">
    <div class="container">
        
        <div class="legal-content">
            <span class="last-updated">Last Updated: June 23, 2026</span>

            <h2 class="legal-title">1. Introduction</h2>
            <p>At AGROX, we value the trust you place in us as an international B2B agricultural sourcing and logistics partner. This Privacy Policy details how we collect, process, and secure corporate buyer data, communication logs, and trade specifications when you navigate our online portal and interact with our trade officers.</p>

            <h2 class="legal-title">2. Information Collection</h2>
            <p>We collect information necessary to facilitate international B2B trade inquiries, laboratory sample deliveries, and export contract arrangements. This includes:</p>
            <ul>
                <li><strong>Corporate Identity Details:</strong> Company name, registration credentials, VAT/tax IDs, corporate email, phone lines, and physical office addresses.</li>
                <li><strong>Trade Specifications:</strong> Target products, volume requirements, desired Incoterms (e.g. FOB, CIF), custom packaging parameters, and destination port locations.</li>
                <li><strong>Digital Interaction Data:</strong> IP addresses, browsing metrics, and device logs collected through cookies to optimize our platform's loading speeds.</li>
            </ul>

            <h2 class="legal-title">3. Data Processing Scopes</h2>
            <p>All data collected is used solely to execute B2B export operations. We process your information to:</p>
            <ul>
                <li>Compile and dispatch official commercial quotations and trade proposals.</li>
                <li>Coordinate and dispatch physical agricultural samples for laboratory testing.</li>
                <li>Prepare international trade and shipping documents (phytosanitary certificates, bills of lading, etc.).</li>
                <li>Monitor and resolve customs clearance parameters.</li>
            </ul>

            <h2 class="legal-title">4. Information Safeguards</h2>
            <p>Your trade data and specifications are stored inside encrypted corporate servers. We do not sell, rent, or distribute buyer information to third-party marketing brokers. Sourcing data is shared only with registered logistics partners, customs clearance authorities, and laboratories (like SGS or Eurofins) to execute shipping compliance protocols.</p>

            <h2 class="legal-title">5. Your Trade Options</h2>
            <p>You may request the deletion or correction of your corporate records at any time. Simply email your assigned trade officer or write to our general support channel to delete previous inquiries or specifications from our active client databases.</p>

            <h2 class="legal-title">6. Updates</h2>
            <p>We may modify this policy periodically to align with changing agricultural import regulations and trade laws. Important amendments will be posted directly on this portal.</p>
        </div>

        <!-- CONVERSION -->
        <div class="conversion-card">
            <h3>QUESTIONS REGARDING DATA SECURITY?</h3>
            <p>Contact our corporate compliance division for clarifications about trade encryption, data usage, or import clearance records.</p>
            <a href="contact-us.php" class="btn-gold">CONTACT COMPLIANCE OFFICERS</a>
        </div>

    </div>
</section>

<script>
    // --- Scroll Parallax Effect ---
    window.addEventListener('scroll', () => {
        const scrollPosition = window.scrollY;
        const bgText = document.getElementById('bgText');
        const fgText = document.getElementById('fgText');
        if(bgText) bgText.style.transform = `translate(calc(-50% + ${scrollPosition * 0.4}px), -50%)`;
        if(fgText) fgText.style.transform = `translate(calc(-50% - ${scrollPosition * 0.3}px), -50%)`;
    });
</script>

<?php include 'footer.php'; ?>
