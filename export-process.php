<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: EXPORT PROCESS
// ----------------------------------------------------------------
$pageTitle = "Export Process | AgroX Shipping Timeline & Documentation Workflow";
$metaDescription = "Step-by-step timeline of the AgroX export workflow. Inquiries, sampling, quotation, letters of credit, packaging, customs, and port delivery.";
$canonicalURL = "https://www.theagroxgroup.com/export-process.php"; 

include 'header.php'; 
?>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* --- CORE THEME & TYPOGRAPHY --- */
    body { font-family: 'Poppins', sans-serif; background-color: #050505; color: #e0e0e0; margin: 0; overflow-x: hidden; line-height: 1.6; }
    
    h1, h2, h3, h4, h5, .banner-title, .banner-scroll-text, .section-label, .timeline-num, .btn-gold, .timeline-heading { 
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
    .container { max-width: 1200px; margin: 0 auto; padding: 0 30px; position: relative; }

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

    /* --- TIMELINE TRACK --- */
    .timeline-container {
        position: relative;
        margin-top: 80px;
        margin-bottom: 120px;
        padding-left: 80px; /* Offset for line */
    }
    
    /* Central Progress Line */
    .timeline-progress-line {
        position: absolute;
        left: 30px;
        top: 15px;
        bottom: 15px;
        width: 2px;
        background: rgba(255, 255, 255, 0.06);
        z-index: 1;
    }
    .timeline-progress-indicator {
        position: absolute;
        left: 30px;
        top: 15px;
        width: 2px;
        background: #d4a017;
        z-index: 2;
        height: 0%; /* Fills dynamically with JS or acts as static offset */
        transition: height 0.1s linear;
        box-shadow: 0 0 10px #d4a017;
    }

    /* Timeline Step */
    .timeline-step {
        position: relative;
        margin-bottom: 80px;
        display: grid;
        grid-template-columns: 250px 1fr;
        gap: 50px;
        align-items: start;
        z-index: 3;
    }
    .timeline-step:last-child {
        margin-bottom: 0;
    }

    /* Pulse Dot on Line */
    .timeline-dot {
        position: absolute;
        left: -50px; /* Aligns with central line (80px padding - 30px offset = 50px) */
        top: 8px;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: #111;
        border: 2px solid rgba(255,255,255,0.2);
        transform: translateX(-50%);
        transition: all 0.3s ease;
    }
    .timeline-step.step-active .timeline-dot {
        background: #d4a017;
        border-color: #fff;
        box-shadow: 0 0 15px #d4a017;
        transform: translateX(-50%) scale(1.3);
    }

    .timeline-meta {
        display: flex;
        flex-direction: column;
    }
    .timeline-num {
        font-size: 3.5rem;
        color: rgba(212, 160, 23, 0.3);
        line-height: 0.8;
        margin-bottom: 10px;
        transition: color 0.3s;
    }
    .timeline-step:hover .timeline-num {
        color: #d4a017;
    }
    .timeline-duration {
        font-size: 0.78rem;
        text-transform: uppercase;
        color: #777;
        letter-spacing: 1px;
        font-weight: 600;
    }

    .timeline-card {
        background: rgba(20, 20, 20, 0.6);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 12px;
        padding: 40px;
        transition: all 0.3s ease;
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
    }
    .timeline-step:hover .timeline-card {
        border-color: rgba(212, 160, 23, 0.3);
        background: rgba(20, 20, 20, 0.8);
    }
    .timeline-heading {
        font-size: 2.2rem;
        color: #fff;
        margin: 0 0 15px 0;
        line-height: 1.1;
    }
    .timeline-desc {
        color: #bbb;
        font-size: 1rem;
        line-height: 1.6;
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
    @media (max-width: 900px) {
        .timeline-container { padding-left: 45px; }
        .timeline-progress-line { left: 15px; }
        .timeline-progress-indicator { left: 15px; }
        .timeline-step { grid-template-columns: 1fr; gap: 15px; }
        .timeline-dot { left: -30px; }
        .timeline-num { font-size: 2.8rem; margin-bottom: 2px; }
    }
    @media (max-width: 768px) {
        .intro-grid { grid-template-columns: 1fr; gap: 40px; }
        .banner-title { font-size: 4rem; }
        .banner-scroll-text { font-size: 25vw; }
        .section-title { font-size: 3.5rem; }
        .timeline-card { padding: 30px 20px; }
        .conversion-card { padding: 40px 20px; }
        .conversion-card h3 { font-size: 2.5rem; }
    }
</style>

<div class="banner-wrapper" id="bannerContainer">
    <img src="assets/images/bannerproduct.avif" alt="Export Process Banner" class="banner-img-responsive">
    <div class="banner-scroll-text" id="bgText">WORKFLOW</div>
    <h1 class="banner-title" id="fgText">EXPORT PROCESS</h1> 
    <div class="vignette-overlay"></div>
</div>

<section id="main-content">
    <div class="container">
        
        <!-- INTRO -->
        <div class="intro-grid">
            <div>
                <span class="section-label">CHRONOLOGICAL EXECUTION</span>
                <h2 class="section-title">THE EXPORT TIMELINE STORY</h2>
            </div>
            <div class="intro-right">
                <p>Bulk agricultural trade requires rigorous operational structure. From initial contact to final delivery, AGROX aligns trade protocols with global logistics standards. We manage our export pipeline through 11 distinct stages, ensuring absolute security, verification, and timely shipping.</p>
                <p>Follow our comprehensive timeline to see how we transform farm harvests in India into verified cargo delivered straight to your port of choice.</p>
            </div>
        </div>

        <!-- TIMELINE CONTAINER -->
        <div class="timeline-container">
            <!-- Line Background -->
            <div class="timeline-progress-line"></div>
            <!-- Interactive Line Fill -->
            <div class="timeline-progress-indicator" id="timelineIndicator"></div>

            <!-- Step 1 -->
            <div class="timeline-step">
                <div class="timeline-dot"></div>
                <div class="timeline-meta">
                    <span class="timeline-num">01</span>
                    <span class="timeline-duration">Day 1</span>
                </div>
                <div class="timeline-card">
                    <h3 class="timeline-heading">Inquiry & Product Specifications</h3>
                    <p class="timeline-desc">The buyer submits detailed chemical and physical requirements, including desired purity thresholds, moisture caps, packaging sizes, and target ocean ports.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="timeline-step">
                <div class="timeline-dot"></div>
                <div class="timeline-meta">
                    <span class="timeline-num">02</span>
                    <span class="timeline-duration">Days 2-3</span>
                </div>
                <div class="timeline-card">
                    <h3 class="timeline-heading">Product Sourcing & Allocation</h3>
                    <p class="timeline-desc">Our sourcing desk reviews batch availability across our warehouses and schedules crop allocations from certified agricultural collectives.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="timeline-step">
                <div class="timeline-dot"></div>
                <div class="timeline-meta">
                    <span class="timeline-num">03</span>
                    <span class="timeline-duration">Days 4-7</span>
                </div>
                <div class="timeline-card">
                    <h3 class="timeline-heading">Batch Sampling & Validation</h3>
                    <p class="timeline-desc">We dispatch product samples from our allocated harvest to the buyer's quality control department or third-party laboratory for screening and testing approval.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="timeline-step">
                <div class="timeline-dot"></div>
                <div class="timeline-meta">
                    <span class="timeline-num">04</span>
                    <span class="timeline-duration">Days 8-9</span>
                </div>
                <div class="timeline-card">
                    <h3 class="timeline-heading">Commercial Quotation</h3>
                    <p class="timeline-desc">We issue a formal commercial quotation detailing sea-freight rates, current crop indices, locked-in pricing structures, and standard payment scopes (FOB/CIF).</p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="timeline-step">
                <div class="timeline-dot"></div>
                <div class="timeline-meta">
                    <span class="timeline-num">05</span>
                    <span class="timeline-duration">Days 10-12</span>
                </div>
                <div class="timeline-card">
                    <h3 class="timeline-heading">Contract Confirmation & Deposit</h3>
                    <p class="timeline-desc">Both parties sign the sales contract. Payment security is set up through Telegraphic Transfer deposits or an Irrevocable Letter of Credit from a prime bank.</p>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="timeline-step">
                <div class="timeline-dot"></div>
                <div class="timeline-meta">
                    <span class="timeline-num">06</span>
                    <span class="timeline-duration">Days 13-20</span>
                </div>
                <div class="timeline-card">
                    <h3 class="timeline-heading">Processing & Milling</h3>
                    <p class="timeline-desc">Products are sorted, cleaned, and milled to specific mesh sizes under ambient temperature controls inside ISO 22000-compliant facilities.</p>
                </div>
            </div>

            <!-- Step 7 -->
            <div class="timeline-step">
                <div class="timeline-dot"></div>
                <div class="timeline-meta">
                    <span class="timeline-num">07</span>
                    <span class="timeline-duration">Days 21-22</span>
                </div>
                <div class="timeline-card">
                    <h3 class="timeline-heading">Quality Inspection & Lab Clearance</h3>
                    <p class="timeline-desc">We draw final product samples and submit them to NABL labs (like SGS or Eurofins) to secure chemical, pesticide, and micro-organism clearances.</p>
                </div>
            </div>

            <!-- Step 8 -->
            <div class="timeline-step">
                <div class="timeline-dot"></div>
                <div class="timeline-meta">
                    <span class="timeline-num">08</span>
                    <span class="timeline-duration">Days 23-24</span>
                </div>
                <div class="timeline-card">
                    <h3 class="timeline-heading">Advanced Packaging & Labeling</h3>
                    <p class="timeline-desc">Purity-cleared batches are packaged into multi-layer Kraft paper bags, food-grade PP containers, or vacuum packs, stamped with tracking tags.</p>
                </div>
            </div>

            <!-- Step 9 -->
            <div class="timeline-step">
                <div class="timeline-dot"></div>
                <div class="timeline-meta">
                    <span class="timeline-num">09</span>
                    <span class="timeline-duration">Days 25-26</span>
                </div>
                <div class="timeline-card">
                    <h3 class="timeline-heading">Export Documentation & Clearance</h3>
                    <p class="timeline-desc">We compile phytosanitary certificates, Certificates of Origin, customs documents, and shipping declarations to clear cargo at the Indian port.</p>
                </div>
            </div>

            <!-- Step 10 -->
            <div class="timeline-step">
                <div class="timeline-dot"></div>
                <div class="timeline-meta">
                    <span class="timeline-num">10</span>
                    <span class="timeline-duration">Days 27-28</span>
                </div>
                <div class="timeline-card">
                    <h3 class="timeline-heading">Vessel Loading & Sea Transit</h3>
                    <p class="timeline-desc">Ocean containers are loaded, sealed with bullet locks, loaded onto the designated container vessel, and cargo departs the Indian port.</p>
                </div>
            </div>

            <!-- Step 11 -->
            <div class="timeline-step">
                <div class="timeline-dot"></div>
                <div class="timeline-meta">
                    <span class="timeline-num">11</span>
                    <span class="timeline-duration">Varies</span>
                </div>
                <div class="timeline-card">
                    <h3 class="timeline-heading">Delivery & Custom Clearance</h3>
                    <p class="timeline-desc">Cargo arrives at the destination port. Documents are surrendered to the importing customs authority, cargo is cleared and delivered to your warehouse.</p>
                </div>
            </div>

        </div>

        <!-- CONVERSION -->
        <div class="conversion-card">
            <h3>PLAN YOUR NEXT SHIPMENT</h3>
            <p>Ready to start the sourcing workflow? Send us your specification requirements and we will coordinate samples and lock in transit timelines.</p>
            <a href="contact-us.php?type=quote" class="btn-gold">INITIATE INQUIRY NOW</a>
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

    // --- Dynamic Timeline Scroll Indicator ---
    function updateTimelineIndicator() {
        const steps = document.querySelectorAll('.timeline-step');
        const container = document.querySelector('.timeline-container');
        const line = document.getElementById('timelineIndicator');
        if (!container || steps.length === 0) return;

        const containerRect = container.getBoundingClientRect();
        const viewportHeight = window.innerHeight;

        // Calculate progress percentage through the timeline container
        const totalHeight = containerRect.height;
        const visibleTop = viewportHeight / 2; // Midpoint trigger
        
        let progressHeight = visibleTop - containerRect.top;
        progressHeight = Math.max(0, Math.min(totalHeight, progressHeight));
        
        const percentage = (progressHeight / totalHeight) * 100;
        line.style.height = percentage + '%';

        // Check which steps are active based on trigger position
        steps.forEach(step => {
            const stepRect = step.getBoundingClientRect();
            if (stepRect.top < visibleTop) {
                step.classList.add('step-active');
            } else {
                step.classList.remove('step-active');
            }
        });
    }

    window.addEventListener('scroll', updateTimelineIndicator);
    window.addEventListener('resize', updateTimelineIndicator);
    document.addEventListener('DOMContentLoaded', updateTimelineIndicator);
</script>

<?php include 'footer.php'; ?>
