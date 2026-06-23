<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: WHY AGROX (STRATEGIC DIFFERENTIATION)
// ----------------------------------------------------------------
$pageTitle = "Why AGROX | Premium B2B Agricultural Exports India";
$metaDescription = "Discover why global food companies trust AGROX for organic spice, dry fruit, and oil procurement. Scale, transparency, tracebility, and contract security.";
$canonicalURL = "https://www.theagroxgroup.com/why-agrox.php"; 

include 'header.php'; 
?>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* --- CORE THEME & TYPOGRAPHY --- */
    body { font-family: 'Poppins', sans-serif; background-color: #050505; color: #e0e0e0; margin: 0; overflow-x: hidden; line-height: 1.6; }
    
    h1, h2, h3, h4, h5, .banner-title, .banner-scroll-text, .section-label, .why-num, .stat-number, .btn-gold, .form-heading { 
        font-family: 'Bebas Neue', sans-serif; 
        letter-spacing: 1.5px; 
        text-transform: uppercase;
    }
    
    .text-accent { color: #d4a017; }
    .bg-dark-black { background-color: #050505; }
    .bg-pure-black { background-color: #000; }

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

    /* --- STRATEGIC PILLARS (BENTO) --- */
    .pillars-section { margin-bottom: 120px; }
    .why-bento-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 60px;
    }
    .why-card {
        background: rgba(18, 28, 21, 0.35);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-top: 1px solid rgba(212, 160, 23, 0.18);
        border-radius: 16px;
        padding: 50px 40px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 380px;
        transition: transform 0.4s cubic-bezier(0.23, 1, 0.32, 1), border-color 0.4s ease, box-shadow 0.4s ease;
        position: relative;
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
    }
    .why-card:hover {
        transform: translateY(-8px);
        border-color: rgba(212, 160, 23, 0.4);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6), 0 0 25px rgba(212, 160, 23, 0.05);
    }
    .why-num { font-size: 4rem; color: rgba(212, 160, 23, 0.2); line-height: 1; transition: color 0.3s; }
    .why-card:hover .why-num { color: #d4a017; }
    .why-card-content { margin-top: 30px; }
    .why-card-title { font-size: 2.2rem; color: #fff; margin: 0 0 15px 0; }
    .why-card-desc { color: #b0b0b0; font-size: 0.95rem; line-height: 1.6; font-weight: 300; }
    
    /* Bento spans */
    .span-2 { grid-column: span 2; }
    .span-1 { grid-column: span 1; }

    /* --- STATS DISPLAY --- */
    .stats-section {
        background: radial-gradient(circle at center, #111 0%, #050505 80%);
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        padding: 80px 0;
        margin-bottom: 120px;
    }
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
        text-align: center;
    }
    .stat-number { font-size: 5rem; color: #d4a017; line-height: 1; margin: 0 0 10px 0; }
    .stat-label { font-size: 0.9rem; text-transform: uppercase; color: #777; letter-spacing: 2px; display: block; font-weight: 600; }
    .stat-desc { font-size: 0.82rem; color: #bbb; margin-top: 5px; font-weight: 300; }

    /* --- VALUE IN ACTION (EDITORIAL GRID) --- */
    .feature-row {
        display: grid;
        grid-template-columns: 1fr 1.1fr;
        gap: 80px;
        align-items: center;
        margin-bottom: 100px;
    }
    .feature-row:nth-child(even) {
        grid-template-columns: 1.1fr 1fr;
    }
    .feature-img-wrapper {
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.05);
        position: relative;
        aspect-ratio: 1.5/1;
    }
    .feature-img-wrapper img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease; }
    .feature-row:hover .feature-img-wrapper img { transform: scale(1.05); }
    .feature-text-col h3 { font-size: 3rem; color: #fff; margin: 0 0 20px 0; }
    .feature-text-col p { color: #b0b0b0; margin-bottom: 20px; font-weight: 300; }

    /* --- CONVERSION RFQ SECTION --- */
    .conversion-section {
        position: relative;
        padding-top: 60px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }
    .rfq-grid {
        display: grid;
        grid-template-columns: 0.90fr 1.10fr;
        gap: 60px;
        align-items: stretch;
    }
    .rfq-info {
        background: rgba(18, 28, 21, 0.25);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 12px;
        padding: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        box-sizing: border-box;
    }
    .rfq-title { font-size: 3.5rem; color: #fff; line-height: 0.9; margin: 0 0 20px 0; }
    .rfq-desc { color: #ccc; font-size: 1rem; margin-bottom: 40px; font-weight: 300; }
    .rfq-contact-item { display: flex; gap: 20px; align-items: start; margin-bottom: 25px; }
    .rfq-icon { font-size: 1.5rem; color: #d4a017; margin-top: 3px; }
    .rfq-contact-label { font-size: 0.75rem; text-transform: uppercase; color: #777; letter-spacing: 1.5px; font-weight: 600; display: block; }
    .rfq-contact-value { color: #fff; font-size: 1.05rem; text-decoration: none; font-weight: 500; }

    .rfq-form-container {
        background: rgba(20, 20, 20, 0.7);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        padding: 50px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        box-sizing: border-box;
    }
    .form-heading { font-size: 3rem; color: #fff; line-height: 1; margin: 0 0 10px 0; }
    .form-tagline { font-family: 'Poppins', sans-serif; font-weight: 700; color: #d4a017; font-size: 1.1rem; text-transform: uppercase; margin-bottom: 30px; letter-spacing: 1px; }
    
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .form-group { margin-bottom: 20px; }
    .form-label { color: #d4a017; margin-bottom: 8px; font-size: 0.9rem; font-weight: 500; display: block; text-transform: uppercase; }
    .form-input, .form-select, .form-textarea {
        width: 100%; padding: 14px; background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1); color: #fff; border-radius: 4px; font-family: 'Poppins', sans-serif;
        box-sizing: border-box; font-size: 0.95rem;
    }
    .form-input:focus, .form-select:focus, .form-textarea:focus { outline: none; border-color: #d4a017; background: rgba(0,0,0,0.6); }
    .form-select option { background: #111; color: #fff; }

    .btn-gold {
        display: inline-block; width: 100%; background: #d4a017; color: #000; border: none; padding: 15px; font-size: 1.1rem;
        cursor: pointer; text-transform: uppercase; font-weight: bold; border-radius: 4px; text-decoration: none; text-align: center;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    .btn-gold:hover { background: #fff; box-shadow: 0 0 20px rgba(212, 160, 23, 0.4); }
    .btn-gold:active { transform: scale(0.97) !important; }

    /* --- RESPONSIVE --- */
    @media (max-width: 1024px) {
        .why-bento-grid { grid-template-columns: 1fr 1fr; }
        .span-2 { grid-column: span 2; }
        .stats-grid { grid-template-columns: 1fr 1fr; }
        .rfq-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 768px) {
        .intro-grid { grid-template-columns: 1fr; gap: 40px; }
        .why-bento-grid { grid-template-columns: 1fr; }
        .span-2 { grid-column: span 1; }
        .feature-row { grid-template-columns: 1fr; gap: 40px; }
        .feature-row:nth-child(even) { grid-template-columns: 1fr; }
        .stats-grid { grid-template-columns: 1fr; }
        .banner-title { font-size: 4rem; }
        .banner-scroll-text { font-size: 25vw; }
        .rfq-info { padding: 30px; }
        .rfq-form-container { padding: 30px; }
        .form-row { grid-template-columns: 1fr; gap: 0; }
        .form-heading { font-size: 2.2rem; }
    }
</style>

<div class="banner-wrapper" id="bannerContainer">
    <img src="assets/images/bannerproduct.avif" alt="Why AGROX Banner" class="banner-img-responsive">
    <div class="banner-scroll-text" id="bgText">PARTNERSHIP</div>
    <h1 class="banner-title" id="fgText">WHY AGROX</h1> 
    <div class="vignette-overlay"></div>
</div>

<section id="main-content">
    <div class="container">
        
        <!-- INTRO -->
        <div class="intro-grid">
            <div>
                <span class="section-label">STRATEGIC ALIGNMENT</span>
                <h2 class="section-title">THE TRUSTED SOURCE IN THE <span class="text-accent">GLOBAL SPICE TRADE</span></h2>
            </div>
            <div class="intro-right">
                <p>For international buyers, consistency is not just a preference; it is a critical business metric. Agricultural procurement involves managing massive risks—crop failures, logistics blockages, quality fluctuations, and chemical residue compliance.</p>
                <p><strong>AGROX</strong> was founded to serve as a high-fidelity bridge between India's finest agricultural regions and strict international markets. We combine origin control, optical selection technology, and locked-in contract structures to eliminate risk for procurement panels in Europe, the Americas, the Middle East, and East Asia.</p>
            </div>
        </div>

        <!-- STRATEGIC PILLARS BENTO -->
        <div class="pillars-section">
            <span class="section-label" style="text-align: center; display: block; margin-bottom: 10px;">PROVEN ADVANTAGES</span>
            <h2 class="section-title" style="text-align: center; font-size: 3.5rem; margin-bottom: 50px;">ELIMINATING PROCUREMENT RISK</h2>
            
            <div class="why-bento-grid">
                <!-- Card 1 -->
                <div class="why-card span-2">
                    <div class="why-num">01</div>
                    <div class="why-card-content">
                        <h3 class="why-card-title">Origin Control & Complete Traceability</h3>
                        <p class="why-card-desc">We work directly with certified farming groups across India, mapping batch origins from seed to dispatch. We ensure agricultural practices are monitored closely, providing complete origin documentation for organic certifications.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="why-card span-1">
                    <div class="why-num">02</div>
                    <div class="why-card-content">
                        <h3 class="why-card-title">Optical Sorting Standards</h3>
                        <p class="why-card-desc">Using advanced sorting technology, we inspect and filter our products to guarantee a 99.9% purity rate on spices, pulses, and seeds.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="why-card span-1">
                    <div class="why-num">03</div>
                    <div class="why-card-content">
                        <h3 class="why-card-title">Custom Packaging Options</h3>
                        <p class="why-card-desc">We offer vacuum sealing, paper pouches, and custom-branded consumer packs to match your retail standards.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="why-card span-2">
                    <div class="why-num">04</div>
                    <div class="why-card-content">
                        <h3 class="why-card-title">Year-Round Contract Security</h3>
                        <p class="why-card-desc">Mitigate the risk of price volatility. AGROX offers locked-in annual pricing and volume guarantees, supported by our robust warehousing infrastructure and agricultural credit lines.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- STATS -->
    <div class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div>
                    <h4 class="stat-number">15+</h4>
                    <span class="stat-label">Export Destinations</span>
                    <p class="stat-desc">Supplying markets in North America, Europe, UAE, and East Asia.</p>
                </div>
                <div>
                    <h4 class="stat-number">99.9%</h4>
                    <span class="stat-label">Purity Level</span>
                    <p class="stat-desc">Achieved via state-of-the-art optical and metal-detecting sorters.</p>
                </div>
                <div>
                    <h4 class="stat-number">100%</h4>
                    <span class="stat-label">Organic Traceability</span>
                    <p class="stat-desc">Full documentation from sowing, harvesting, to final shipping.</p>
                </div>
                <div>
                    <h4 class="stat-number">12k+</h4>
                    <span class="stat-label">Tons Exported</span>
                    <p class="stat-desc">Efficient, bulk global logistics pipelines from major Indian ports.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        
        <!-- DIFFERENCE IN ACTION -->
        <div class="feature-row">
            <div class="feature-img-wrapper">
                <img src="assets/images/Page2.png" alt="Direct Sourcing Network">
            </div>
            <div class="feature-text-col">
                <span class="section-label">DIRECT ORIGIN PROCUREMENT</span>
                <h3>Direct Farm Integration</h3>
                <p>By bypassing agricultural brokers, we achieve direct pricing advantages and complete operational transparency. We source our whole spices, rice varieties, and dry fruits straight from agricultural collectives, ensuring farmers receive fair value while enforcing quality parameters right from the soil.</p>
                <p>This localized presence gives AGROX the power to monitor crops throughout the growing cycles and secure allocations long before the seasonal harvest hits the open market.</p>
            </div>
        </div>

        <div class="feature-row">
            <div class="feature-text-col">
                <span class="section-label">ADVANCED LOGISTICS LINES</span>
                <h3>Bulletproof Export Execution</h3>
                <p>Getting agricultural products out of rural farms and into international shipping lanes requires expert compliance handling. We manage every step: phytosanitary certifications, custom customs clearance, pesticide test analysis, and multi-layered packaging protection.</p>
                <p>Our strategic relationships with major shipping lines ensure our bulk containers receive priority loading slots, preventing logistics delays and moisture degradation during transport.</p>
            </div>
            <div class="feature-img-wrapper">
                <img src="assets/images/Page3.png" alt="Logistics Compliance">
            </div>
        </div>

        <!-- CONVERSION / RFQ -->
        <div class="conversion-section" id="rfq">
            <div class="rfq-grid">
                
                <div class="rfq-info">
                    <h2 class="rfq-title">PARTNER WITH <span class="text-accent">AGROX</span></h2>
                    <p class="rfq-desc">Initiate a secure, long-term procurement partnership. Let us know your product requirements, container volumes, and port of delivery, and our trade officers will compile a comprehensive commercial proposal.</p>
                    
                    <div class="rfq-contact-item">
                        <i class="fa-solid fa-envelope rfq-icon"></i>
                        <div>
                            <span class="rfq-contact-label">Exports Division</span>
                            <a href="mailto:priyanshu@theagroxgroup.com" class="rfq-contact-value">priyanshu@theagroxgroup.com</a>
                        </div>
                    </div>
                    <div class="rfq-contact-item">
                        <i class="fa-solid fa-phone rfq-icon"></i>
                        <div>
                            <span class="rfq-contact-label">Direct Trade Line</span>
                            <a href="tel:+917320040684" class="rfq-contact-value">+91 73200 40684</a>
                        </div>
                    </div>
                </div>

                <div class="rfq-form-container">
                    <h3 class="form-heading">REQUEST RFQ</h3>
                    <div class="form-tagline">BULK TRADE INQUIRY FORM</div>
                    
                    <form action="contact-us.php" method="GET">
                        <input type="hidden" name="type" value="quote">
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-input" placeholder="e.g. John Doe" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Company Email</label>
                                <input type="email" name="email" class="form-input" placeholder="e.g. procurement@company.com" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Product Group</label>
                                <select name="product" class="form-select" required>
                                    <option value="">Select Category...</option>
                                    <option value="Organic Spices">Organic Spices</option>
                                    <option value="Conventional Spices">Conventional Spices</option>
                                    <option value="Spice Powders">Spice Powders</option>
                                    <option value="Seeds & Grains">Seeds &amp; Grains</option>
                                    <option value="Dry Fruits & Nuts">Dry Fruits &amp; Nuts</option>
                                    <option value="Essential Oils">Essential &amp; Extract Oils</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Target Volume</label>
                                <input type="text" name="volume" class="form-input" placeholder="e.g. 20 FCL Containers" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Port of Delivery</label>
                            <input type="text" name="port" class="form-input" placeholder="e.g. Port of Rotterdam (Netherlands)" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Detailed Specifications / Message</label>
                            <textarea name="message" class="form-textarea" rows="4" placeholder="Detail standard purity levels, moisture caps, packaging requirements (e.g. 25kg PP bags), or target shipping schedules..." required></textarea>
                        </div>

                        <button type="submit" class="btn-gold">SUBMIT FORM & GET QUOTE</button>
                    </form>
                </div>

            </div>
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
