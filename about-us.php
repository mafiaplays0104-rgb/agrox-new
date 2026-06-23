<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: ABOUT US
// ----------------------------------------------------------------
$pageTitle = "About AGROX | Roots in Manufacturing, Global in Vision";
include 'header.php'; 
?>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* --- GLOBAL RESET & TYPOGRAPHY --- */
    body { font-family: 'Poppins', sans-serif; background-color: #050505; color: #e0e0e0; margin: 0; overflow-x: hidden; line-height: 1.6; }
    
    h1, h2, h3, h4, h5, .stat-num, .banner-title, .banner-scroll-text, .section-label, .timeline-year, .prod-name, .retail-label, .btn-gold { 
        font-family: 'Bebas Neue', sans-serif; 
        letter-spacing: 1.5px; 
        text-transform: uppercase;
    }
    
    .text-accent { color: #d4a017; }

    /* --- 1. BANNER --- */
    .banner-wrapper { position: relative; width: 100%; height: auto; overflow: hidden; }
    .banner-img-responsive { width: 100%; height: auto; display: block; object-fit: cover; }
    
    .banner-title {
        position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%);
        z-index: 5; font-size: 8rem; color: #ffffff; width: 100%; text-align: center;
        text-shadow: 0 10px 40px rgba(0, 0, 0, 0.9);
        margin: 0;
        animation: textFocusIn 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
    }
    .banner-scroll-text {
        position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%);
        z-index: 1; font-size: 20vw; line-height: 1; opacity: 0.6;
        color: transparent; -webkit-text-stroke: 2px rgba(255, 255, 255, 0.9);
        pointer-events: none;
    }
    .vignette-overlay {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: radial-gradient(ellipse at center, rgba(0,0,0,0.4) 0%, #050505 100%);
        pointer-events: none; z-index: 1;
    }

    /* --- 2. HERITAGE --- */
    .legacy-section { padding: 100px 0; background: #050505; }
    .container { max-width: 1300px; margin: 0 auto; padding: 0 30px; position: relative; }

    .heritage-grid {
        display: grid; grid-template-columns: 0.9fr 1.1fr; gap: 80px; align-items: start;
        margin-bottom: 60px; /* Space before the full width text */
    }
    .heritage-left { display: flex; flex-direction: column; }
    .heritage-label { color: #d4a017; font-size: 1.1rem; letter-spacing: 3px; margin-bottom: 20px; display: block; }
    .heritage-title { font-size: 5.5rem; line-height: 0.9; margin: 0 0 40px 0; color: #fff; }
    .heritage-title .gold-text { color: #d4a017; display: block; } 
    .heritage-line { width: 100%; height: 1px; background: #333; margin-bottom: 40px; }
    .stats-row { display: flex; gap: 50px; }
    .stat-item h4 { font-size: 3rem; margin: 0; color: #d4a017; line-height: 1; }
    .stat-item span { font-size: 0.75rem; text-transform: uppercase; color: #777; letter-spacing: 2px; display: block; margin-top: 8px; font-weight: 600; }
    
    .heritage-right { color: #ccc; font-size: 1.1rem; line-height: 1.8; padding-top: 10px; }
    .heritage-right p { margin-bottom: 25px; }
    .heritage-right strong { color: #fff; font-weight: 600; }

    /* New Full Width Text Block Style */
    .heritage-full-text {
        width: 100%;
        color: #ccc;
        font-size: 1.1rem;
        line-height: 1.8;
        border-top: 1px solid #222; /* Subtle separation line */
        padding-top: 50px;
    }
    .heritage-full-text p { margin-bottom: 25px; max-width: 100%; }


    /* --- 3. NEW SECTION: GLOBAL REACH --- */
    .global-section {
        padding: 120px 0;
        background: #080808;
        position: relative;
        overflow: hidden;
    }
    .global-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }
    .global-content h3 {
        font-size: 3.5rem; color: #fff; margin-bottom: 30px; line-height: 1;
    }
    .global-content p {
        color: #bbb; margin-bottom: 30px; font-size: 1rem;
    }
    .feature-list {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-top: 40px;
    }
    .feature-box {
        background: #111;
        padding: 30px;
        border: 1px solid #222;
        transition: 0.3s;
    }
    .feature-box:hover {
        border-color: #d4a017;
        transform: translateY(-5px);
    }
    .feature-icon {
        font-size: 2rem;
        color: #d4a017;
        margin-bottom: 20px;
    }
    .feature-title {
        color: #fff;
        font-family: 'Bebas Neue', sans-serif;
        font-size: 1.5rem;
        margin-bottom: 10px;
        letter-spacing: 1px;
    }
    .feature-desc {
        color: #888;
        font-size: 0.85rem;
        line-height: 1.5;
    }
    .global-map-visual {
        width: 100%;
        height: 500px;
        background: radial-gradient(circle at center, #1a1a1a 0%, #080808 70%);
        border: 1px solid #222;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    /* Simple abstract map representation */
    .map-dot {
        width: 8px; height: 8px; background: #d4a017; border-radius: 50%;
        position: absolute;
        box-shadow: 0 0 15px rgba(212, 160, 23, 0.8);
        animation: pulseDot 2s infinite;
    }
    @keyframes pulseDot { 0% { box-shadow: 0 0 0 0 rgba(212, 160, 23, 0.4); } 70% { box-shadow: 0 0 0 10px rgba(212, 160, 23, 0); } 100% { box-shadow: 0 0 0 0 rgba(212, 160, 23, 0); } }


    /* --- 4. TIMELINE --- */
    .timeline-section { padding: 100px 0; position: relative; overflow: hidden; background: #050505; }
    .timeline-center-line-bg { position: absolute; left: 50%; top: 150px; bottom: 100px; width: 2px; background: #222; transform: translateX(-50%); z-index: 1; }
    .timeline-draw-line { position: absolute; left: 50%; top: 150px; width: 2px; background: #d4a017; transform: translateX(-50%); z-index: 2; height: 0%; box-shadow: 0 0 15px #d4a017; transition: height 0.1s linear; }
    .timeline-node { display: flex; justify-content: space-between; align-items: center; margin-bottom: 120px; position: relative; z-index: 3; opacity: 0.2; transform: translateY(20px); transition: 0.5s ease; }
    .timeline-node.active { opacity: 1; transform: translateY(0); }
    .timeline-node:nth-child(even) { flex-direction: row-reverse; }
    .t-content { width: 42%; text-align: right; }
    .timeline-node:nth-child(even) .t-content { text-align: left; }
    .timeline-year { font-size: 4rem; color: rgba(255,255,255,0.05); line-height: 0.8; margin-bottom: 10px; }
    .t-dot { width: 16px; height: 16px; background: #111; border: 2px solid #555; border-radius: 50%; position: absolute; left: 50%; transform: translateX(-50%); transition: 0.3s; }
    .timeline-node.active .t-dot { background: #d4a017; border-color: #fff; box-shadow: 0 0 20px #d4a017; transform: translateX(-50%) scale(1.5); }

    /* --- 5. BENTO GRID --- */
    .bento-section { padding: 60px 24px; display: flex; justify-content: center; background: #080808; }
    .bento-scale { width: 100%; display: flex; justify-content: center; }
    .bento-grid { display: grid; grid-template-columns: repeat(8, 1fr); grid-template-rows: repeat(6, 1fr); gap: 12px; max-width: 880px; width: 100%; aspect-ratio: 8 / 6; }
    .card { background: #111; border-radius: 20px; padding: 18px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; border: 1px solid #1f1f1f; position: relative; overflow: hidden; transition: all 0.3s ease-out; }
    .card:hover { border-color: #7a6020; background: #141414; transform: translateY(-2px); }
    .b-icon { font-size: 1.5rem; color: #555; margin-bottom: 12px; transition: 0.3s; }
    .card:hover .b-icon { color: #d4a017; transform: scale(1.1); filter: drop-shadow(0 0 8px rgba(212, 160, 23, 0.4)); }
    .b-title { font-size: 1.15rem; margin: 0 0 6px 0; line-height: 1.1; color: #fff; z-index: 2; font-family: 'Bebas Neue', sans-serif; letter-spacing: 1px; transition: 0.3s; }
    .b-sub { color: #888; font-size: 0.72rem; line-height: 1.4; max-width: 95%; z-index: 2; font-family: 'Poppins', sans-serif; font-weight: 300; }
    .b-sub span { display: block; margin-top: 4px; color: #aaa; }
    /* Grid Positions */
    .c1 { grid-area: 1 / 1 / 5 / 4; } .c2 { grid-area: 1 / 4 / 3 / 7; } .c3 { grid-area: 1 / 7 / 3 / 9; }
    .c4 { grid-area: 3 / 4 / 5 / 6; background: #000; border: 1px solid #333; z-index: 10; box-shadow: 0 0 25px rgba(0,0,0,0.5); }
    .center-logo-img { max-width: 80%; height: auto; opacity: 0.9; filter: grayscale(0.2); transition: 0.5s; }
    .c4:hover .center-logo-img { opacity: 1; filter: grayscale(0) drop-shadow(0 0 15px rgba(212,160,23,0.2)); transform: scale(1.05); }
    .c5 { grid-area: 3 / 6 / 5 / 9; } .c6 { grid-area: 5 / 1 / 7 / 4; } .c7 { grid-area: 5 / 4 / 7 / 9; }

    /* --- 6. RETAIL SHOWCASE (FIXED) --- */
    .spotlight-section { position: relative; padding: 120px 0; background: radial-gradient(circle at center, #1a1a1a 0%, #000 80%); overflow: hidden; z-index: 1; }
    .spotlight-source { position: absolute; top: -20%; left: 50%; transform: translateX(-50%); width: 80%; height: 500px; background: radial-gradient(circle, rgba(212, 160, 23, 0.15) 0%, transparent 70%); filter: blur(80px); pointer-events: none; z-index: 0; }
    .spotlight-stage { display: flex; justify-content: center; align-items: center; max-width: 1200px; margin: 0 auto; position: relative; z-index: 2; padding: 20px; }
    
    .spotlight-card { background: rgba(15, 15, 15, 0.85); backdrop-filter: blur(25px); -webkit-backdrop-filter: blur(25px); border: 1px solid rgba(255, 255, 255, 0.08); border-top: 1px solid rgba(212, 160, 23, 0.5); width: 400px; padding: 50px 30px; border-radius: 4px; text-align: center; position: relative; z-index: 10; box-shadow: 0 40px 80px rgba(0,0,0,0.8); transition: transform 0.4s ease-out; }
    .spotlight-section:hover .spotlight-card { transform: scale(1.02); border-color: rgba(212, 160, 23, 0.4); }

    .product-anchor { position: relative; width: 300px; height: 420px; display: flex; align-items: center; justify-content: center; transition: 0.5s ease-out; }
    .prod-img { width: 100%; height: 100%; object-fit: contain; filter: drop-shadow(0 25px 40px rgba(0,0,0,0.8)); transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94); }

    .p-left { z-index: 5; margin-right: -60px; animation: floatBreathing 6s ease-in-out infinite; }
    .p-right { z-index: 5; margin-left: -60px; animation: floatBreathing 6s ease-in-out infinite reverse; }
    .spotlight-section:hover .p-left { transform: translateX(-30px) rotateY(10deg); }
    .spotlight-section:hover .p-right { transform: translateX(30px) rotateY(-10deg); }
    .spotlight-section:hover .prod-img { filter: drop-shadow(0 35px 60px rgba(212, 160, 23, 0.2)); }
    @keyframes floatBreathing { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-15px); } }

    .sp-label { color: #d4a017; font-size: 0.75rem; letter-spacing: 4px; font-weight: 600; display: block; margin-bottom: 20px; }
    .sp-title { font-size: 3.2rem; line-height: 0.95; color: #fff; margin: 0 0 20px 0; }
    .sp-title span { color: #d4a017; }
    .sp-desc { color: #bbb; font-size: 0.95rem; line-height: 1.6; margin-bottom: 30px; font-weight: 300; }
    .sp-specs { display: flex; justify-content: center; gap: 30px; margin-bottom: 30px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; }
    .sp-spec { display: flex; flex-direction: column; gap: 5px; font-size: 0.65rem; color: #777; letter-spacing: 1px; text-transform: uppercase; }
    .sp-spec i { color: #d4a017; font-size: 1.2rem; }
    .btn-spotlight { background: transparent; color: #d4a017; border: 1px solid #d4a017; padding: 14px 35px; font-size: 1.1rem; letter-spacing: 2px; text-decoration: none; display: inline-block; transition: all 0.3s; }
    .btn-spotlight:hover { background: #d4a017; color: #000; box-shadow: 0 0 40px rgba(212, 160, 23, 0.4); }

    /* RESPONSIVE */
    @media (max-width: 1000px) {
        .heritage-grid { grid-template-columns: 1fr; gap: 40px; }
        .global-grid { grid-template-columns: 1fr; gap: 40px; }
        .global-map-visual { height: 300px; margin-top: 30px; }
        .spotlight-stage { flex-direction: column; gap: 20px; }
        .spotlight-card { width: 100%; max-width: 100%; order: 0; margin-bottom: 40px; }
        .product-anchor { width: 80%; height: auto; margin: 0 auto; order: 1; }
        .p-left, .p-right { margin: 0; animation: none; margin-bottom: -50px; }
        .p-right { margin-top: -50px; }
    }
</style>

<div class="banner-wrapper">
    <img src="assets/images/bannerproduct.avif" alt="AGROX Landscape" class="banner-img-responsive">
    <div class="banner-scroll-text" id="bgText">AGROXGROUP</div>
    <h1 class="banner-title" id="fgText">ABOUT US</h1> 
    <div class="vignette-overlay"></div>
</div>

<section class="legacy-section">
    <div class="container">
        <div class="heritage-grid">
            <div class="heritage-left anim-up">
                <span class="heritage-label">OUR HERITAGE</span>
                <h2 class="heritage-title">
                    20 YEARS OF <br>
                    <span class="gold-text">UNCOMPROMISED</span>
                    PURITY.
                </h2>
                <div class="heritage-line"></div>
                <div class="stats-row">
                    <div class="stat-item"><h4 class="stat-num">20+</h4><span>YEARS ACTIVE</span></div>
                    <div class="stat-item"><h4 class="stat-num">500+</h4><span>PARTNER FARMS</span></div>
                    <div class="stat-item"><h4 class="stat-num">30+</h4><span>COUNTRIES</span></div>
                </div>
            </div>
            
            <div class="heritage-right anim-up">
                <p><strong>AGROX Organic Exports</strong> represents two decades of agricultural mastery. Founded in the fertile heartlands of India, our journey began with a profound mission: to bridge the gap between traditional Indian farming and the modern global need for chemical-free sustenance.</p>
                <p>For the first <strong>20 years</strong>, we dedicated ourselves to the domestic market, building an unbreakable network with over 500 farmer families. We provided resources to transition from conventional to <strong>100% Certified Organic</strong> cultivation. This foundation ensures that produce from AGROX is nurtured with care and harvested at peak potency.</p>
                <p>Today, we stand as a premier exporter, delivering the authentic taste of India—from Lakadong Turmeric to Basmati Rice—to kitchens across the globe.</p>
            </div>
        </div>

        <div class="heritage-full-text anim-up">
            <p>But our influence reaches far deeper than the marketplace. We have pioneered a 'Soil to Soul' philosophy that integrates ancient Vedic farming techniques with modern agronomy. This ensures that every harvest is not only free from chemicals but is also nutrient-dense, retaining the distinct bio-active markers that Indian superfoods are prized for.</p>
            <p>As we look to the future, our commitment remains unshakable. We are actively digitizing our supply chain to offer complete transparency—allowing our buyers to trace their turmeric or basmati right back to the specific plot of land where it was grown. This is the new standard of trust we are building for the next 20 years.</p>
        </div>

    </div>
</section>

<section class="global-section">
    <div class="container">
        <div class="global-grid">
            <div class="global-content anim-up">
                <span class="heritage-label">WHY CHOOSE US</span>
                <h3>SEAMLESS GLOBAL <br><span class="gold-text">LOGISTICS</span></h3>
                <p>We don't just grow produce; we engineer its journey. From the sun-drenched farms of India to your warehouse dock, AGROX ensures a supply chain that is transparent, efficient, and reliable.</p>
                
                <div class="feature-list">
                    <div class="feature-box">
                        <i class="fas fa-ship feature-icon"></i>
                        <div class="feature-title">FAST SHIPPING</div>
                        <div class="feature-desc">Optimized freight partnerships ensuring reduced transit times to Europe & Americas.</div>
                    </div>
                    <div class="feature-box">
                        <i class="fas fa-shield-alt feature-icon"></i>
                        <div class="feature-title">QUALITY CONTROL</div>
                        <div class="feature-desc">3-stage quality checks: At harvest, at processing, and pre-shipment.</div>
                    </div>
                    <div class="feature-box">
                        <i class="fas fa-handshake feature-icon"></i>
                        <div class="feature-title">DIRECT TRADE</div>
                        <div class="feature-desc">No middlemen. You deal directly with the source for best pricing.</div>
                    </div>
                    <div class="feature-box">
                        <i class="fas fa-certificate feature-icon"></i>
                        <div class="feature-title">CERTIFIED</div>
                        <div class="feature-desc">USDA Organic, EU Organic, ISO 22000, and HACCP compliant.</div>
                    </div>
                </div>
            </div>
            
            <div class="global-map-visual anim-up" style="transition-delay: 0.2s;">
                <div class="map-dot" style="top: 30%; left: 20%;"></div> <div class="map-dot" style="top: 35%; left: 48%;"></div> <div class="map-dot" style="top: 45%; left: 55%;"></div> <div class="map-dot" style="top: 50%; left: 65%;"></div> <div class="map-dot" style="top: 60%; left: 80%;"></div> <h4 style="position: absolute; bottom: 20px; left: 30px; font-size: 2rem; color: #333; margin: 0;">CONNECTING<br>CONTINENTS</h4>
            </div>
        </div>
    </div>
</section>

<section class="timeline-section" id="timelineSection">
    <div class="container">
        <h2 class="section-label text-center anim-up" style="text-align:center; font-size:4rem; margin-bottom:100px;">THE JOURNEY</h2>
        <div class="timeline-center-line-bg"></div>
        <div class="timeline-draw-line" id="drawLines"></div>
        <div class="timeline-node"><div class="t-content"><div class="timeline-year">THE ROOTS</div><h3 class="t-title">Makhana Origins</h3><p class="t-desc">Our journey began in manufacturing. We established state-of-the-art processing units for Makhana (Fox Nuts), mastering the supply chain from the ground up.</p></div><div class="t-dot"></div></div>
        <div class="timeline-node"><div class="t-content"><div class="timeline-year">TRANSITION</div><h3 class="t-title">Aggregating Quality</h3><p class="t-desc">Leveraging our farmer networks, we began aggregating high-quality Wheat, Pulses, and Spices for local Indian markets, ensuring fair trade practices.</p></div><div class="t-dot"></div></div>
        <div class="timeline-node"><div class="t-content"><div class="timeline-year">2025</div><h3 class="t-title">The Launch</h3><p class="t-desc"><strong>AGROX Organic Exports</strong> is officially launched as a dedicated global trading entity. We bridge the gap between Indian organic farms and international buyers.</p></div><div class="t-dot"></div></div>
        <div class="timeline-node"><div class="t-content"><div class="timeline-year">FUTURE</div><h3 class="t-title">Global Expansion</h3><p class="t-desc">We aim to become India's most trusted aggregation partner for Organic Superfoods, expanding into Nutraceuticals and Eco-friendly solutions.</p></div><div class="t-dot"></div></div>
    </div>
</section>

<section class="bento-section">
    <div class="bento-scale">
        <div class="bento-grid">
            <div class="card c1 anim-up"><i class="fas fa-mortar-pestle b-icon"></i><h3 class="b-title">SPICES</h3><p class="b-sub">Organic & conventional spices in whole and powdered forms.<span>High aroma, strong actives, export-grade quality.</span></p></div>
            <div class="card c2 anim-up" style="transition-delay: 0.1s;"><div style="display:flex; justify-content: center; gap: 20px; align-items:center;"><i class="fas fa-seedling b-icon" style="margin:0;"></i><div style="text-align:left;"><h3 class="b-title">RICE & GRAINS</h3><p class="b-sub" style="margin:0;">Premium 1121 Basmati and select grains.<span>Clean, uniform, and globally compliant.</span></p></div></div></div>
            <div class="card c3 anim-up" style="transition-delay: 0.2s;"><i class="fas fa-carrot b-icon"></i><h3 class="b-title">FRUITS</h3><p class="b-sub">Organic and conventional fruits.<span>Freeze-dried and air-dried formats.</span></p></div>
            <div class="card c4 anim-up" style="transition-delay: 0.3s;"><img src="assets/images/logo.png" alt="AGROX LOGO" class="center-logo-img"></div>
            <div class="card c5 anim-up" style="transition-delay: 0.4s;"><div style="display:flex; justify-content: center; gap: 20px; align-items:center;"><div style="text-align:right;"><h3 class="b-title">NUTRACEUTICALS</h3><p class="b-sub" style="margin:0;">Moringa powder, curcumin extract, essential oils.<span>High potency, carefully processed.</span></p></div><i class="fas fa-capsules b-icon" style="margin:0;"></i></div></div>
            <div class="card c6 anim-up" style="transition-delay: 0.5s;"><i class="fas fa-leaf b-icon"></i><h3 class="b-title">ECO PLATES</h3><p class="b-sub">Areca leaf and sugarcane bagasse plates.<span>Biodegradable, food-safe, plastic-free.</span></p></div>
            <div class="card c7 anim-up" style="transition-delay: 0.6s;"><div style="display:flex; justify-content: center; gap: 30px; align-items:center;"><i class="fas fa-cookie b-icon" style="margin:0;"></i><div><h3 class="b-title">DRY FRUITS</h3><p class="b-sub" style="margin:0;">Premium cashews, almonds, and select nuts.<span>Graded for freshness and export quality.</span></p></div></div></div>
        </div>
    </div>
</section>

<section class="spotlight-section">
    <div class="spotlight-source"></div>

    <div class="spotlight-stage">
        
        <div class="product-anchor p-left anim-up">
            <img src="assets/images/retail-2.avif" alt="Turmeric Pouch" class="prod-img">
        </div>

        <div class="spotlight-card anim-up" style="transition-delay: 0.2s;">
            <span class="sp-label">RETAIL READY</span>
            <h2 class="sp-title">PACKAGED FOR <br><span>IMPACT.</span></h2>
            
            <p class="sp-desc">
                Elevate your brand presence. We combine high-barrier aesthetics with nitrogen flushing technology, guaranteeing 12 months of pristine freshness in every pouch.
            </p>
            
            <div class="sp-specs">
                <div class="sp-spec"><i class="fas fa-fingerprint"></i>Custom Brand</div>
                <div class="sp-spec"><i class="fas fa-box-open"></i>MOQ 500</div>
                <div class="sp-spec"><i class="fas fa-check-circle"></i>Certified</div>
            </div>
            
            <a href="contact-us.php" class="btn-spotlight">GET A QUOTE</a>
        </div>

        <div class="product-anchor p-right anim-up" style="transition-delay: 0.4s;">
            <img src="assets/images/retail-1.avif" alt="Jamun Pouch" class="prod-img">
        </div>

    </div>
</section>

<script>
    /**
     * 1. PARALLAX ENGINE (Banner & Footer)
     * Optimized for high-refresh rate monitors using requestAnimationFrame
     */
    let isScrolling = false;

    const handleScroll = () => {
        const s = window.scrollY;
        const wh = window.innerHeight;
        
        // Select Banner Elements
        const bgText = document.getElementById('bgText');
        const fgText = document.getElementById('fgText');
        const footer = document.querySelector('.portport-footer');

        // PRODUCT-STYLE MOTION: Moving Background Text RIGHT and Title LEFT
        // translate3d(x, y, z) triggers GPU rendering for maximum smoothness
        if(bgText) {
            bgText.style.transform = `translate3d(calc(-50% + ${s * 0.4}px), -50%, 0)`;
        }
        if(fgText) {
            fgText.style.transform = `translate3d(calc(-50% - ${s * 0.3}px), -50%, 0)`;
        }

        // FOOTER REVEAL: Integrated to prevent conflict
        if (footer) {
            const scrollHeight = document.documentElement.scrollHeight;
            const scrollDistanceToBottom = scrollHeight - wh - s;

            if (scrollDistanceToBottom < 700) {
                let revealValue = 1 - (scrollDistanceToBottom / 500);
                revealValue = Math.min(1, Math.max(0, revealValue));
                footer.style.setProperty('--text-reveal', revealValue);
            }
        }

        // TIMELINE LINE DRAWING
        const timelineSection = document.getElementById('timelineSection');
        if (timelineSection) {
            const rect = timelineSection.getBoundingClientRect();
            const height = timelineSection.offsetHeight;
            const drawLine = document.getElementById('drawLines');
            
            let percent = (wh / 2 - rect.top) / height * 100;
            percent = Math.max(0, Math.min(100, percent));
            if(drawLine) drawLine.style.height = `${percent}%`;
        }

        isScrolling = false;
    };

    window.addEventListener('scroll', () => {
        if (!isScrolling) {
            window.requestAnimationFrame(handleScroll);
            isScrolling = true;
        }
    }, { passive: true });


    /**
     * 2. SMOOTH ENTRANCE ANIMATIONS (.anim-up)
     * Uses IntersectionObserver for the "Fast Render" effect
     */
    const entranceOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px" // Triggers slightly before element enters view
    };

    const entranceObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                // Unobserve after animation to save memory
                entranceObserver.unobserve(entry.target); 
            }
        });
    }, entranceOptions);

    // Inject the CSS required for the anim-up classes to behave like the Products page
    const animStyles = document.createElement('style');
    animStyles.innerHTML = `
        .anim-up { 
            opacity: 0; 
            transform: translate3d(0, 40px, 0); 
            transition: opacity 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94), 
                        transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            will-change: transform, opacity;
        }
        .anim-up.in-view { 
            opacity: 1; 
            transform: translate3d(0, 0, 0); 
        }
        .timeline-node { transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94); }
    `;
    document.head.appendChild(animStyles);

    document.querySelectorAll('.anim-up').forEach(el => entranceObserver.observe(el));


    /**
     * 3. TIMELINE NODE ACTIVATION
     */
    const nodeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            } else {
                entry.target.classList.remove('active');
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.timeline-node').forEach(node => nodeObserver.observe(node));

</script>

<?php include 'footer.php'; ?>