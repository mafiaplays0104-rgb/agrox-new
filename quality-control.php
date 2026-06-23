<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: QUALITY CONTROL
// ----------------------------------------------------------------
$pageTitle = "Quality Control | AgroX Certified Sourcing & Lab Testing Standards";
$metaDescription = "Learn about AgroX's 7-step quality control system. Sourcing audits, optical sorting, pesticide tests, vacuum packing, and final loading checks.";
$canonicalURL = "https://www.theagroxgroup.com/quality-control.php"; 

include 'header.php'; 
?>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* --- CORE THEME & TYPOGRAPHY --- */
    body { font-family: 'Poppins', sans-serif; background-color: #050505; color: #e0e0e0; margin: 0; overflow-x: hidden; line-height: 1.6; }
    
    h1, h2, h3, h4, h5, .banner-title, .banner-scroll-text, .section-label, .qc-number, .btn-gold, .compliance-title { 
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

    /* --- QC PROCESS FLOW --- */
    .qc-flow-container {
        position: relative;
        margin-bottom: 120px;
    }
    .qc-step-card {
        display: grid;
        grid-template-columns: 100px 1.2fr 1.8fr;
        gap: 40px;
        align-items: start;
        padding: 60px 40px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        transition: background 0.3s;
    }
    .qc-step-card:hover {
        background: rgba(255, 255, 255, 0.01);
    }
    .qc-number {
        font-size: 4rem;
        color: #d4a017;
        line-height: 0.8;
        opacity: 0.4;
        transition: opacity 0.3s;
    }
    .qc-step-card:hover .qc-number {
        opacity: 1;
        text-shadow: 0 0 10px rgba(212, 160, 23, 0.3);
    }
    .qc-step-title {
        font-size: 2.2rem;
        color: #fff;
        margin: 0;
        line-height: 1.1;
    }
    .qc-step-desc {
        color: #b0b0b0;
        font-size: 1rem;
        line-height: 1.7;
        font-weight: 300;
    }
    .qc-step-meta {
        margin-top: 15px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .qc-meta-tag {
        background: rgba(212,160,23,0.06);
        border: 1px solid rgba(212,160,23,0.2);
        color: #d4a017;
        padding: 4px 10px;
        font-size: 0.72rem;
        border-radius: 4px;
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    /* --- LABORATORY COMPLIANCE --- */
    .lab-compliance-section {
        background: radial-gradient(circle at center, #111 0%, #050505 80%);
        border-top: 1px solid rgba(255,255,255,0.06);
        border-bottom: 1px solid rgba(255,255,255,0.06);
        padding: 100px 0;
        margin-bottom: 120px;
    }
    .lab-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
        align-items: center;
    }
    .lab-text h3 {
        font-size: 3.5rem;
        color: #fff;
        line-height: 1;
        margin: 0 0 30px 0;
    }
    .lab-text p {
        color: #ccc;
        font-size: 1.05rem;
        margin-bottom: 25px;
        font-weight: 300;
    }
    .compliance-box {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    .compliance-card {
        background: rgba(0,0,0,0.5);
        border: 1px solid rgba(255,255,255,0.06);
        padding: 30px;
        border-radius: 8px;
    }
    .compliance-icon {
        font-size: 2rem;
        color: #d4a017;
        margin-bottom: 15px;
    }
    .compliance-title {
        font-size: 1.4rem;
        color: #fff;
        margin-bottom: 10px;
        letter-spacing: 0.5px;
    }
    .compliance-desc {
        color: #888;
        font-size: 0.85rem;
        line-height: 1.5;
        font-weight: 300;
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
        .qc-step-card { grid-template-columns: 80px 1.5fr 2fr; gap: 30px; padding: 40px 20px; }
        .lab-grid { grid-template-columns: 1fr; gap: 60px; }
    }
    @media (max-width: 768px) {
        .intro-grid { grid-template-columns: 1fr; gap: 40px; }
        .qc-step-card { grid-template-columns: 1fr; gap: 15px; padding: 40px 0; }
        .banner-title { font-size: 4rem; }
        .banner-scroll-text { font-size: 25vw; }
        .section-title { font-size: 3.5rem; }
        .lab-text h3 { font-size: 2.8rem; }
        .compliance-box { grid-template-columns: 1fr; }
        .conversion-card { padding: 40px 20px; }
        .conversion-card h3 { font-size: 2.5rem; }
    }
</style>

<div class="banner-wrapper" id="bannerContainer">
    <img src="assets/images/bannerproduct.avif" alt="Quality Control Banner" class="banner-img-responsive">
    <div class="banner-scroll-text" id="bgText">COMPLIANCE</div>
    <h1 class="banner-title" id="fgText">QUALITY CONTROL</h1> 
    <div class="vignette-overlay"></div>
</div>

<section id="main-content">
    <div class="container">
        
        <!-- INTRO -->
        <div class="intro-grid">
            <div>
                <span class="section-label">UNCOMPROMISING PURITY</span>
                <h2 class="section-title">THE 7-STEP QUALITY VERIFICATION SYSTEM</h2>
            </div>
            <div class="intro-right">
                <p>For high-volume agricultural trade, trust cannot exist as a marketing catchphrase—it must exist as a series of repeatable, auditable steps. At AGROX, our quality assurance protocols run from pre-sowing soil checks up to the final seal on export shipping containers.</p>
                <p>We process spices, grains, and nuts in environments that prevent contamination, using state-of-the-art grading equipment. Our 7-stage quality framework guarantees that your delivery perfectly aligns with your purchase specifications.</p>
            </div>
        </div>

        <!-- QC PROCESS FLOW -->
        <div class="qc-flow-container">
            <span class="section-label" style="text-align: center; display: block; margin-bottom: 50px;">OPERATIONAL STAGE AUDITING</span>

            <!-- Step 1 -->
            <div class="qc-step-card">
                <div class="qc-number">01</div>
                <div>
                    <h3 class="qc-step-title">Supplier Selection & Farm Auditing</h3>
                    <div class="qc-step-meta">
                        <span class="qc-meta-tag">Soil Analysis</span>
                        <span class="qc-meta-tag">Pesticide Registry</span>
                        <span class="qc-meta-tag">USDA Organic Audit</span>
                    </div>
                </div>
                <p class="qc-step-desc">Before onboarding farm collectives, we audit their soil composition, water sources, and chemical logs. We trace crops back to certified farming tracts, ensuring they follow organic parameters long before procurement begins.</p>
            </div>

            <!-- Step 2 -->
            <div class="qc-step-card">
                <div class="qc-number">02</div>
                <div>
                    <h3 class="qc-step-title">Raw Material Inspection</h3>
                    <div class="qc-step-meta">
                        <span class="qc-meta-tag">Moisture Checks</span>
                        <span class="qc-meta-tag">Physical Grading</span>
                        <span class="qc-meta-tag">Aflatoxin Screen</span>
                    </div>
                </div>
                <p class="qc-step-desc">Upon arriving at our processing hubs, raw material batches undergo inspection. We test moisture levels, screen for foreign matter, and run rapid chemical screening. Batches that do not meet strict density and cleanliness levels are rejected.</p>
            </div>

            <!-- Step 3 -->
            <div class="qc-step-card">
                <div class="qc-number">03</div>
                <div>
                    <h3 class="qc-step-title">Processing & Decontamination</h3>
                    <div class="qc-step-meta">
                        <span class="qc-meta-tag">Optical Sorting</span>
                        <span class="qc-meta-tag">Metal Detection</span>
                        <span class="qc-meta-tag">Steam Sterilization</span>
                    </div>
                </div>
                <p class="qc-step-desc">Our processing lines use high-definition optical sorting cameras to isolate broken seeds or discolored hulls. Products then pass through magnetic separation grids and multi-frequency metal detectors to guarantee purity.</p>
            </div>

            <!-- Step 4 -->
            <div class="qc-step-card">
                <div class="qc-number">04</div>
                <div>
                    <h3 class="qc-step-title">Quality Assurance Auditing</h3>
                    <div class="qc-step-meta">
                        <span class="qc-meta-tag">Batch Tracing</span>
                        <span class="qc-meta-tag">ISO 22000 Norms</span>
                        <span class="qc-meta-tag">HACCP Controls</span>
                    </div>
                </div>
                <p class="qc-step-desc">We assign a unique barcode identifier to every batch. Processing teams work under strict HACCP rules, ensuring cleanroom protocols are maintained, temperature logs are locked, and no cross-contamination occurs.</p>
            </div>

            <!-- Step 5 -->
            <div class="qc-step-card">
                <div class="qc-number">05</div>
                <div>
                    <h3 class="qc-step-title">Laboratory Testing Procedures</h3>
                    <div class="qc-step-meta">
                        <span class="qc-meta-tag">NABL Accredited Labs</span>
                        <span class="qc-meta-tag">Pesticide Screening</span>
                        <span class="qc-meta-tag">Heavy Metal Scan</span>
                    </div>
                </div>
                <p class="qc-step-desc">We dispatch samples from each batch to NABL-accredited third-party laboratories (e.g. SGS, Eurofins). Chemists screen for over 200 pesticides, chemical residue levels, heavy metal presence, and micro-organism levels, confirming compliance with destination port rules.</p>
            </div>

            <!-- Step 6 -->
            <div class="qc-step-card">
                <div class="qc-number">06</div>
                <div>
                    <h3 class="qc-step-title">Packaging Verification</h3>
                    <div class="qc-step-meta">
                        <span class="qc-meta-tag">Vacuum Packing</span>
                        <span class="qc-meta-tag">Nitrogen Flushing</span>
                        <span class="qc-meta-tag">Inner Poly-Liners</span>
                    </div>
                </div>
                <p class="qc-step-desc">We inspect the thickness and seal strength of our multi-layer packaging bags. To prevent oxidation and mold growth during shipping transit, we apply nitrogen flushing and vacuum seal checks on sensitive dry fruits and spice oils.</p>
            </div>

            <!-- Step 7 -->
            <div class="qc-step-card">
                <div class="qc-number">07</div>
                <div>
                    <h3 class="qc-step-title">Final Dispatch & Seal Inspection</h3>
                    <div class="qc-step-meta">
                        <span class="qc-meta-tag">Container Audit</span>
                        <span class="qc-meta-tag">Fumigation Control</span>
                        <span class="qc-meta-tag">Export Seal Verification</span>
                    </div>
                </div>
                <p class="qc-step-desc">Before cargo loading, we inspect the shipping containers for structural holes, residual moisture, and odors. We oversee container loading, secure the boxes with export-registered bullet locks, and issue phytosanitary certificates.</p>
            </div>

        </div>

    </div>

    <!-- LAB STANDARDS -->
    <div class="lab-compliance-section">
        <div class="container">
            <div class="lab-grid">
                <div class="lab-text">
                    <span class="section-label">GLOBAL COMPLIANCE PORTAL</span>
                    <h3>CERTIFIED FOR STRICTEST MARKETS</h3>
                    <p>Every country enforces unique chemical and packaging limits for food imports. AGROX maintains regulatory registration and customizes lab reports to streamline customs clearance in destination ports.</p>
                    <p>Whether you require strict pesticide residue screening under EU regulations or compliance with US FDA sanitary regulations, we provide the specific credentials required by your country.</p>
                </div>
                <div class="compliance-box">
                    <div class="compliance-card">
                        <i class="fa-solid fa-microscope compliance-icon"></i>
                        <h4 class="compliance-title">Lab Verification</h4>
                        <p class="compliance-desc">Testing for chemical limits, aflatoxins, and heavy metals via SGS or Eurofins.</p>
                    </div>
                    <div class="compliance-card">
                        <i class="fa-solid fa-leaf compliance-icon"></i>
                        <h4 class="compliance-title">Organic Traceability</h4>
                        <p class="compliance-desc">Transaction certificates indicating compliance with USDA, NPOP, and EU Organic protocols.</p>
                    </div>
                    <div class="compliance-card">
                        <i class="fa-solid fa-shield-halved compliance-icon"></i>
                        <h4 class="compliance-title">Food Safety</h4>
                        <p class="compliance-desc">ISO 22000, FSSAI, and HACCP compliant processing environments.</p>
                    </div>
                    <div class="compliance-card">
                        <i class="fa-solid fa-file-invoice compliance-icon"></i>
                        <h4 class="compliance-title">Import Compliance</h4>
                        <p class="compliance-desc">Phytosanitary clearances, export certificates, and customs clearance documents.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- CONVERSION -->
        <div class="conversion-card">
            <h3>SECURE CERTIFIED INGREDIENTS</h3>
            <p>Ensure the integrity of your supply chain. Contact our trade division to receive sample laboratory analysis reports or request chemical clearance details.</p>
            <a href="contact-us.php?type=quote" class="btn-gold">REQUEST QUALITY REPORTS</a>
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
