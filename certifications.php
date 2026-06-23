<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: CERTIFICATIONS (TRUST CENTER)
// ----------------------------------------------------------------
$pageTitle = "Certifications & Compliance Trust Center | AgroX Organic Exports";
$metaDescription = "AgroX organic credentials and trade registrations. APEDA, USDA Organic, EU Organic, ISO 22000, HACCP, Spice Board of India, Halal & Kosher.";
$canonicalURL = "https://www.theagroxgroup.com/certifications.php"; 

include 'header.php'; 
?>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* --- CORE THEME & TYPOGRAPHY --- */
    body { font-family: 'Poppins', sans-serif; background-color: #050505; color: #e0e0e0; margin: 0; overflow-x: hidden; line-height: 1.6; }
    
    h1, h2, h3, h4, h5, .banner-title, .banner-scroll-text, .section-label, .cert-badge, .btn-gold, .cert-grid-title { 
        font-family: 'Bebas Neue', sans-serif; 
        letter-spacing: 1.5px; 
        text-transform: uppercase;
    }
    
    .text-accent { color: #d4a017; }

    /* --- PARALLAX BANNER --- */
    .banner-wrapper { position: relative; width: 100%; height: 45vh; min-height: 200px; overflow: hidden; background-color: #111; }
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
        padding: 100px 0;
    }
    .container { max-width: 1300px; margin: 0 auto; padding: 0 30px; position: relative; }

    /* --- INTRO SECTION --- */
    .intro-grid {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 80px;
        align-items: start;
        margin-bottom: 120px;
    }
    .section-label { color: #d4a017; font-size: 1.1rem; letter-spacing: 3px; display: block; margin-bottom: 20px; }
    .section-title { font-size: 5rem; line-height: 0.9; margin: 0 0 30px 0; color: #fff; }
    .intro-right { color: #ccc; font-size: 1.1rem; line-height: 1.8; }
    .intro-right p { margin-bottom: 25px; }

    /* --- CATEGORY GRIDS --- */
    .cert-category-block {
        margin-bottom: 100px;
    }
    .cert-grid-title {
        font-size: 2.8rem;
        color: #fff;
        margin: 0 0 40px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        padding-bottom: 15px;
    }
    
    .cert-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }
    .cert-card {
        background: rgba(20, 20, 20, 0.6);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 12px;
        padding: 40px;
        transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 320px;
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
    }
    .cert-card:hover {
        border-color: rgba(212, 160, 23, 0.4);
        background: rgba(20, 20, 20, 0.85);
        transform: translateY(-5px);
    }
    
    .cert-card-header {
        display: flex;
        justify-content: space-between;
        align-items: start;
        margin-bottom: 25px;
    }
    .cert-logo-box {
        width: 80px;
        height: 80px;
        border-radius: 8px;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 5px;
    }
    .cert-logo-box img {
        max-width: 90%;
        max-height: 90%;
        object-fit: contain;
    }
    .cert-badge {
        background: rgba(212, 160, 23, 0.06);
        border: 1px solid rgba(212, 160, 23, 0.3);
        color: #d4a017;
        padding: 4px 12px;
        font-size: 0.8rem;
        border-radius: 4px;
    }
    
    .cert-card-body h4 {
        font-size: 1.6rem;
        color: #fff;
        margin: 0 0 10px 0;
        letter-spacing: 0.5px;
    }
    .cert-card-body p {
        color: #aaa;
        font-size: 0.92rem;
        line-height: 1.5;
        font-weight: 300;
        margin: 0;
    }
    
    .cert-card-footer {
        margin-top: 25px;
        font-size: 0.78rem;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        padding-top: 15px;
        font-weight: 600;
    }

    /* --- CONVERSION CTA --- */
    .conversion-card {
        background: rgba(18, 28, 21, 0.35);
        border: 1px solid rgba(255,255,255,0.06);
        border-top: 1px solid rgba(212, 160, 23, 0.4);
        border-radius: 16px;
        padding: 80px 50px;
        text-align: center;
        max-width: 900px;
        margin: 0 auto;
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
    }
    .conversion-card h3 { font-size: 4rem; color: #fff; line-height: 0.9; margin: 0 0 20px 0; }
    .conversion-card p { color: #ccc; font-size: 1.1rem; max-width: 700px; margin: 0 auto 40px auto; font-weight: 300; }
    
    .btn-gold {
        display: inline-block; background: #d4a017; color: #000; padding: 18px 45px; font-size: 1.1rem;
        cursor: pointer; text-transform: uppercase; font-weight: bold; border-radius: 4px; text-decoration: none;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    .btn-gold:hover { background: #fff; box-shadow: 0 0 20px rgba(212, 160, 23, 0.4); }
    .btn-gold:active { transform: scale(0.97) !important; }

    /* --- RESPONSIVE --- */
    @media (max-width: 1024px) {
        .cert-grid { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 768px) {
        .intro-grid { grid-template-columns: 1fr; gap: 40px; }
        .cert-grid { grid-template-columns: 1fr; }
        .banner-title { font-size: 4rem; }
        .banner-scroll-text { font-size: 25vw; }
        .section-title { font-size: 3.5rem; }
        .cert-grid-title { font-size: 2.2rem; }
        .conversion-card { padding: 40px 20px; }
        .conversion-card h3 { font-size: 2.5rem; }
    }
</style>

<div class="banner-wrapper" id="bannerContainer">
    <img src="assets/images/bannerproduct.avif" alt="Certifications Banner" class="banner-img-responsive">
    <div class="banner-scroll-text" id="bgText">COMPLIANCE</div>
    <h1 class="banner-title" id="fgText">TRUST CENTER</h1> 
    <div class="vignette-overlay"></div>
</div>

<section id="main-content">
    <div class="container">
        
        <!-- INTRO -->
        <div class="intro-grid">
            <div>
                <span class="section-label">GLOBAL STANDARDS</span>
                <h2 class="section-title">OUR REGULATORY CREDENTIALS</h2>
            </div>
            <div class="intro-right">
                <p>When procuring food ingredients in bulk, compliance verification is the most critical checkpoint. AGROX maintains active registrations with leading national and international regulators, ensuring that every harvest satisfies strict import compliance.</p>
                <p>Explore our credentials below. We supply certified organic documentation, food safety control certifications, and export authority trade registrations for every container shipped.</p>
            </div>
        </div>

        <!-- CATEGORY: ORGANIC -->
        <div class="cert-category-block">
            <h3 class="cert-grid-title">Organic Certifications</h3>
            <div class="cert-grid">
                
                <div class="cert-card">
                    <div class="cert-card-header">
                        <div class="cert-logo-box"><img src="assets/images/GMP.avif" alt="USDA Organic Logo"></div>
                        <span class="cert-badge">USDA Organic</span>
                    </div>
                    <div class="cert-card-body">
                        <h4>USDA NOP Standard</h4>
                        <p>Validates that our crops are grown, harvested, and processed in accordance with the United States National Organic Program requirements.</p>
                    </div>
                    <div class="cert-card-footer">Audited by: OneCert International</div>
                </div>

                <div class="cert-card">
                    <div class="cert-card-header">
                        <div class="cert-logo-box"><img src="assets/images/APEDA.avif" alt="NPOP India Logo"></div>
                        <span class="cert-badge">NPOP India</span>
                    </div>
                    <div class="cert-card-body">
                        <h4>National Programme</h4>
                        <p>India's national organic standard. Verifies origin control, organic farm practices, and tracking of raw materials.</p>
                    </div>
                    <div class="cert-card-footer">Audited by: APEDA Authority</div>
                </div>

                <div class="cert-card">
                    <div class="cert-card-header">
                        <div class="cert-logo-box"><img src="assets/images/HALAL.avif" alt="EU Organic Logo"></div>
                        <span class="cert-badge">EU Organic</span>
                    </div>
                    <div class="cert-card-body">
                        <h4>European Compliance</h4>
                        <p>Direct equivalence certification mapping compliance with European Union organic farming and processing regulations.</p>
                    </div>
                    <div class="cert-card-footer">Audited by: SGS Certification</div>
                </div>

            </div>
        </div>

        <!-- CATEGORY: QUALITY & SAFETY -->
        <div class="cert-category-block">
            <h3 class="cert-grid-title">Food Safety &amp; Quality Systems</h3>
            <div class="cert-grid">
                
                <div class="cert-card">
                    <div class="cert-card-header">
                        <div class="cert-logo-box"><img src="assets/images/ISO1.avif" alt="ISO 22000 Logo"></div>
                        <span class="cert-badge">ISO 22000:2018</span>
                    </div>
                    <div class="cert-card-body">
                        <h4>Food Safety Management</h4>
                        <p>Confirms that our milling and packing facilities follow international standards for managing food safety hazards.</p>
                    </div>
                    <div class="cert-card-footer">Audited by: IAF Accredited Agency</div>
                </div>

                <div class="cert-card">
                    <div class="cert-card-header">
                        <div class="cert-logo-box"><img src="assets/images/HACCP.avif" alt="HACCP Logo"></div>
                        <span class="cert-badge">HACCP</span>
                    </div>
                    <div class="cert-card-body">
                        <h4>Hazard Analysis Control</h4>
                        <p>Proactive hazard analysis control system verifying that critical control points are continuously audited on processing lines.</p>
                    </div>
                    <div class="cert-card-footer">Audited by: Quality Registrar</div>
                </div>

                <div class="cert-card">
                    <div class="cert-card-header">
                        <div class="cert-logo-box"><img src="assets/images/GMP.avif" alt="GMP Logo"></div>
                        <span class="cert-badge">GMP Certified</span>
                    </div>
                    <div class="cert-card-body">
                        <h4>Good Manufacturing Practices</h4>
                        <p>Ensures cleanliness, ventilation, equipment sterilization, and hygiene standards comply with pharmaceutical-grade standards.</p>
                    </div>
                    <div class="cert-card-footer">Audited by: FDA India Representatives</div>
                </div>

            </div>
        </div>

        <!-- CATEGORY: EXPORT & RELIGIOUS -->
        <div class="cert-category-block">
            <h3 class="cert-grid-title">Export &amp; Dietary Compliance</h3>
            <div class="cert-grid">
                
                <div class="cert-card">
                    <div class="cert-card-header">
                        <div class="cert-logo-box"><img src="assets/images/FIEO.avif" alt="FIEO Logo"></div>
                        <span class="cert-badge">FIEO Member</span>
                    </div>
                    <div class="cert-card-body">
                        <h4>Federation of India Exports</h4>
                        <p>Active registration with the Federation of Indian Export Organisations, validating trade practices and financial security.</p>
                    </div>
                    <div class="cert-card-footer">Registered Member ID: Active</div>
                </div>

                <div class="cert-card">
                    <div class="cert-card-header">
                        <div class="cert-logo-box"><img src="assets/images/HALAL.avif" alt="Halal Logo"></div>
                        <span class="cert-badge">Halal Certified</span>
                    </div>
                    <div class="cert-card-body">
                        <h4>Dietary Law Compliance</h4>
                        <p>Certified processing lines verifying that product handling, storage, and processing conform to Halal dietary codes.</p>
                    </div>
                    <div class="cert-card-footer">Audited by: Halal Trust of India</div>
                </div>

                <div class="cert-card">
                    <div class="cert-card-header">
                        <div class="cert-logo-box"><img src="assets/images/ISO2.avif" alt="Kosher Logo"></div>
                        <span class="cert-badge">Kosher Certified</span>
                    </div>
                    <div class="cert-card-body">
                        <h4>Dietary Purity Verification</h4>
                        <p>Verifies raw materials and equipment processing align with strict Kosher dietary guidelines.</p>
                    </div>
                    <div class="cert-card-footer">Audited by: Orthodox Union Representative</div>
                </div>

            </div>
        </div>

        <!-- CONVERSION -->
        <div class="conversion-card">
            <h3>VERIFY REGULATORY DOCUMENTATION</h3>
            <p>Need copy credentials for your procurement panel? Submit an inquiry and our trade desk will compile the certificates and audit logs for your records.</p>
            <a href="contact-us.php?type=quote" class="btn-gold">REQUEST COMPLIANCE COPIES</a>
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
