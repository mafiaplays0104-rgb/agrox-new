<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: TERMS & CONDITIONS
// ----------------------------------------------------------------
$pageTitle = "Terms & Conditions | AgroX B2B Export Trade Agreements";
$metaDescription = "Read the AgroX terms and conditions of trade. Specifications, payment policies, Letters of Credit, shipping liability, and crop quality metrics.";
$canonicalURL = "https://www.theagroxgroup.com/terms-and-conditions.php"; 

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
    <img src="assets/images/bannerproduct.avif" alt="Terms and Conditions Banner" class="banner-img-responsive">
    <div class="banner-scroll-text" id="bgText">AGREEMENTS</div>
    <h1 class="banner-title" id="fgText">TERMS OF TRADE</h1> 
    <div class="vignette-overlay"></div>
</div>

<section id="main-content">
    <div class="container">
        
        <div class="legal-content">
            <span class="last-updated">Last Updated: June 23, 2026</span>

            <h2 class="legal-title">1. Legal Agreement Scope</h2>
            <p>These terms govern all international commercial B2B contracts, sales, sample distributions, and shipping configurations executed between the buyer and <strong>AGROX</strong> (registered trade name of our export group). By executing an invoice or purchase contract, you confirm acceptance of these terms.</p>

            <h2 class="legal-title">2. Product Specifications & Customizations</h2>
            <p>We supply agricultural goods that conform to the specific limits documented on the sales contract. Agricultural products are subject to natural variations. We guarantee purity parameters based on physical laboratory tests (e.g. SGS analysis). Any crop specification disputes must be filed within 10 days of container unloading at the destination port, accompanied by NABL-recognized laboratory analysis results.</p>

            <h2 class="legal-title">3. Delivery & Incoterms</h2>
            <p>All shipping conditions follow the current ICC Incoterms (Incoterms 2020). Default trade structures are FOB (major Indian sea ports) or CIF (destination ports). Risk of product damage or loss transfers to the buyer upon container loading onto the vessel at the port of origin under FOB terms, or upon vessel arrival at the destination port under CIF terms. Logistics delays caused by weather, shipping line re-routings, or port strikes do not constitute contract defaults.</p>

            <h2 class="legal-title">4. Payment Frameworks</h2>
            <p>Commercial orders are processed upon receipt of deposit or payment clearance. Our standard payment requirements are:</p>
            <ul>
                <li>30% deposit via Telegraphic Transfer (TT) with the remaining 70% paid against copy shipping documents.</li>
                <li>Irrevocable, Confirmed Letter of Credit (LC at Sight) issued by a prime international bank.</li>
            </ul>

            <h2 class="legal-title">5. Sample Distribution Policies</h2>
            <p>Samples are dispatched for buyer assessment. Sample specifications represent harvest parameters, but bulk shipments may vary slightly due to seasonal variations. Freight charges for sample delivery are paid by the buyer unless agreed otherwise in writing by our trade office.</p>

            <h2 class="legal-title">6. Force Majeure</h2>
            <p>Neither party is liable for trade default caused by events beyond reasonable control. This includes crop failures, government export bans, blockades, lockouts, epidemics, or global logistics disruptions.</p>
        </div>

        <!-- CONVERSION -->
        <div class="conversion-card">
            <h3>HAVE QUESTIONS ABOUT EXPORT CONTRACTS?</h3>
            <p>Connect with our legal division to request specific contract templates, trade compliance guidelines, or payment details.</p>
            <a href="contact-us.php" class="btn-gold">CONTACT LEGAL ADVISORS</a>
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
