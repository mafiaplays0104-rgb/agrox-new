<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: RICE VARIETIES
// ----------------------------------------------------------------
$pageTitle = "Rice Varieties Exporter India | Premium Basmati 1121, 1509 & Non-Basmati";
$metaDescription = "Leading exporter of Indian Rice Varieties. AGROX offers aged 1121 Basmati, Pusa, IR64 Parboiled, and Ponni Rice. Sortex cleaned and silky polished for global markets.";
$canonicalURL = "https://www.theagroxgroup.com/rice-varieties.php";

include '../header.php'; 
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Rice Varieties - AGROX Exports",
  "description": "Premium collection of Indian Basmati and Non-Basmati Rice including 1121, 1509, Ponni, and IR64.",
  "url": "<?php echo $canonicalURL; ?>",
  "provider": {
    "@type": "Organization",
    "name": "AGROX Group",
    "url": "https://www.theagroxgroup.com"
  },
  "mainEntity": {
    "@type": "ItemList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "1121 Basmati Rice", "url": "https://www.theagroxgroup.com/basmati-rice-1121-exporter-from-india.php" },
      { "@type": "ListItem", "position": 2, "name": "1509 Basmati Rice", "url": "https://www.theagroxgroup.com/basmati-rice-1509-exporter-from-india.php" },
      { "@type": "ListItem", "position": 3, "name": "Ponni Rice", "url": "https://www.theagroxgroup.com/ponni-rice-exporter-from-india.php" },
      { "@type": "ListItem", "position": 4, "name": "IR64 Parboiled Rice", "url": "https://www.theagroxgroup.com/ir64-parboiled-rice-exporter-from-india.php" }
    ]
  }
}
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* --- CORE THEME & TYPOGRAPHY --- */
    body { font-family: 'Poppins', sans-serif; background-color: #050505; color: #e0e0e0; margin: 0; overflow-x: hidden; line-height: 1.6; }
    
    /* STRICT FONT PAIRING ENFORCEMENT */
    h1, h2, h3, h4, .banner-title, .banner-scroll-text, .section-header h2, .harvest-badge, .btn-gold, .seo-title, .seo-sub, .cine-big-title, .f-title, .process-step-num, .marquee-text, .stat-value, .stat-label { 
        font-family: 'Bebas Neue', sans-serif; 
        letter-spacing: 1.5px; 
        text-transform: uppercase;
    }
    
    p, .cat-desc, .sp-desc, .seo-text, .cine-text, .f-desc, .harvest-cat, .process-desc { font-family: 'Poppins', sans-serif; }
    
    .text-accent, .cine-gold { color: #d4a017; }

    /* --- PARALLAX BANNER --- */
    .banner-wrapper { position: relative; width: 100%; height: auto; overflow: hidden; margin-bottom: 0px; }
    .banner-img-responsive { width: 100%; height: auto; display: block; object-fit: cover; }
    
    .banner-title {
        position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%);
        z-index: 5; margin: 0;
        font-size: 8rem; color: #ffffff; text-align: center; width: 100%;
        text-shadow: 0 10px 40px rgba(0, 0, 0, 0.9);
    }
    .banner-scroll-text {
        position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%);
        z-index: 1;
        font-size: 20vw; line-height: 1; white-space: nowrap; opacity: 0.5;
        color: transparent; -webkit-text-stroke: 2px rgba(255, 255, 255, 0.9);
        pointer-events: none;
    }
    .vignette-overlay {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: radial-gradient(ellipse at center, rgba(0,0,0,0.4) 0%, #050505 100%);
        pointer-events: none; z-index: 2;
    }

    /* --- BACKGROUND SECTION --- */
    .product-bg-section {
        position: relative;
        background-image: url('../assets/images/Web.avif');
        background-size: cover; background-position: center; background-attachment: fixed; 
        padding-top: 80px; padding-bottom: 120px;
    }
    .product-bg-section::before {
        content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: radial-gradient(ellipse at center, rgba(0,0,0,0) 40%, #050505 100%);
        pointer-events: none; z-index: 1;
    }

    /* --- GLASS PANEL CONTAINER --- */
    .wide-display-area {
        position: relative; z-index: 3; width: 94%; max-width: 1700px; margin: 0 auto;
    }
    .glass-panel {
        background: rgba(20, 20, 20, 0.6); 
        backdrop-filter: blur(10px);
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 30px; padding: 60px 40px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.5);
    }

    /* --- CATEGORY HEADER --- */
    .category-intro { text-align: center; margin-bottom: 80px; opacity: 1; transform: none; }
    .cat-subtitle { color: #d4a017; font-size: 1rem; letter-spacing: 4px; display: block; margin-bottom: 10px; font-weight: 600; font-family: 'Poppins', sans-serif; text-transform: uppercase; }
    .cat-main-title { font-size: 4.5rem; color: #fff; margin: 0 0 20px 0; text-shadow: 0 5px 20px rgba(0,0,0,0.8); line-height: 1; }
    .cat-desc { max-width: 700px; margin: 0 auto; color: #bbb; font-weight: 300; font-size: 1.1rem; line-height: 1.7; }

    /* --- GRID SYSTEM --- */
    .grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; }

    /* --- PRODUCT CARDS (FAIL-SAFE VISIBILITY) --- */
    .harvest-card {
        text-decoration: none; display: block; position: relative;
        background: linear-gradient(145deg, #161616, #0d0d0d);
        border: 1px solid #222; border-radius: 16px; overflow: hidden;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        opacity: 1 !important; /* Safety Force Visibility */
        transform: none !important;
    }
    .harvest-card:hover { transform: translateY(-8px) !important; border-color: #d4a017; box-shadow: 0 20px 50px rgba(212, 160, 23, 0.15); }

    .harvest-img-box { position: relative; overflow: hidden; aspect-ratio: 1/1; background: #000; border-bottom: 1px solid #222; }
    .harvest-img-box img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.7s ease; opacity: 0.9; }
    .harvest-img-box::after { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle, transparent 40%, rgba(0,0,0,0.8) 100%); pointer-events: none; transition: opacity 0.4s; }
    .harvest-card:hover .harvest-img-box img { transform: scale(1.15); opacity: 1; }
    .harvest-card:hover .harvest-img-box::after { opacity: 0.6; }

    .harvest-badge { position: absolute; top: 12px; right: 12px; z-index: 5; background: rgba(0,0,0,0.7); color: #d4a017; border: 1px solid #d4a017; padding: 4px 10px; font-size: 0.9rem; letter-spacing: 1px; border-radius: 4px; backdrop-filter: blur(4px); font-family: 'Bebas Neue', sans-serif !important; }

    .harvest-content { padding: 25px 20px; position: relative; z-index: 2; }
    .harvest-cat { color: #d4a017; font-size: 0.75rem; letter-spacing: 2px; display: block; margin-bottom: 6px; opacity: 0.9; font-family: 'Poppins', sans-serif; font-weight: 600; text-transform: uppercase; }
    .harvest-content h3 { color: #fff; margin: 0; font-size: 1.8rem; line-height: 1; transition: color 0.3s; font-family: 'Bebas Neue', sans-serif !important; letter-spacing: 1px; }
    
    .card-arrow-box { position: absolute; bottom: 20px; right: 20px; width: 35px; height: 35px; background: #222; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: 0.3s ease; border: 1px solid #333; }
    .card-arrow-box i { color: #888; font-size: 0.9rem; transition: 0.3s; }
    .harvest-card:hover .card-arrow-box { background: #d4a017; border-color: #d4a017; transform: rotate(-45deg); }
    .harvest-card:hover .card-arrow-box i { color: #000; }

    /* --- MARQUEE --- */
    .marquee-section {
        background: #d4a017; color: #000; padding: 20px 0; overflow: hidden; white-space: nowrap; position: relative; z-index: 10;
        transform: rotate(-1deg) scale(1.05); 
        margin: 50px 0; border-top: 2px solid #fff; border-bottom: 2px solid #fff;
    }
    .marquee-content { display: inline-block; animation: marquee 20s linear infinite; }
    .marquee-text { display: inline-block; font-size: 3rem; margin: 0 40px; font-weight: 700; }
    @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

    /* --- CINEMATIC STICKY SECTION --- */
    .cine-section {
        position: relative;
        padding-top: 80px; padding-bottom: 80px; 
    }
    .cine-container {
        display: flex; align-items: flex-start; gap: 80px;
        position: relative;
    }
    
    /* Left Column */
    .cine-sticky-col { 
        width: 35%; position: sticky; top: 120px; height: fit-content; 
        display: flex; flex-direction: column; gap: 30px;
    }
    .cine-big-title { font-size: 5rem; line-height: 0.9; color: #fff; margin: 0; opacity: 1 !important; transform: none !important; }
    .cine-decorative-line { width: 100px; height: 2px; background: #d4a017; margin: 30px 0; }
    .cine-sub-tag { font-family: 'Poppins', sans-serif; font-size: 0.9rem; letter-spacing: 3px; color: #888; text-transform: uppercase; display: block; opacity: 1 !important; }
    
    /* STATS GRID (FILLER CONTENT) */
    .stats-container {
        display: grid; grid-template-columns: 1fr 1fr; gap: 15px;
        margin-top: 20px;
        border-top: 1px solid rgba(255,255,255,0.1);
        padding-top: 30px;
        opacity: 1 !important;
    }
    .stat-box {
        background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05);
        padding: 15px; border-radius: 8px; text-align: center;
    }
    .stat-value { font-size: 2rem; color: #d4a017; display: block; line-height: 1; margin-bottom: 5px; }
    .stat-label { font-size: 0.8rem; color: #888; letter-spacing: 1px; }

    .vertical-watermark {
        position: absolute; left: -20px; top: 100px;
        font-size: 15rem; color: rgba(255,255,255,0.02);
        font-family: 'Bebas Neue', sans-serif;
        writing-mode: vertical-rl;
        text-orientation: mixed;
        pointer-events: none;
        z-index: -1;
    }

    /* Right Column */
    .cine-scroll-col { width: 65%; padding-top: 10px; }
    .text-reveal-mask { overflow: hidden; margin-bottom: 30px; }
    .cine-text { font-size: 1.1rem; line-height: 1.8; color: #b0b0b0; margin: 0; opacity: 1 !important; transform: none !important; }
    .cine-text strong { color: #fff; font-weight: 500; }

    .features-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 60px; }
    .feature-card {
        background: rgba(0, 0, 0, 0.4); 
        border: 1px solid rgba(255, 255, 255, 0.08); padding: 30px; border-radius: 12px;
        transition: all 0.4s ease;
        opacity: 1 !important; /* Force Visibility */
        transform: none !important;
    }
    .feature-card:hover { background: rgba(212, 160, 23, 0.1); border-color: #d4a017; transform: translateY(-5px) !important; }
    .f-icon { font-size: 1.5rem; color: #d4a017; margin-bottom: 20px; }
    .f-title { font-size: 1.5rem; letter-spacing: 1px; color: #fff; margin: 0 0 10px 0; }

    /* --- PROCESS SECTION --- */
    .process-section {
        background: transparent; 
        padding: 60px 0; 
        overflow: hidden;
    }
    .process-wrapper {
        display: flex; gap: 30px; width: 100%;
    }
    .process-step {
        flex: 1; 
        background: rgba(0,0,0,0.5); 
        border: 1px solid rgba(255,255,255,0.05); padding: 40px; border-radius: 20px;
        position: relative; display: flex; flex-direction: column; justify-content: flex-start;
        transition: 0.3s;
        min-height: 250px;
        opacity: 1 !important; /* Force Visibility */
        transform: none !important;
    }
    .process-step:hover { border-color: #d4a017; background: rgba(0,0,0,0.7); }
    .process-step-num { font-size: 3rem; color: rgba(212, 160, 23, 0.2); position: absolute; top: 20px; right: 20px; }
    .process-title { font-size: 1.5rem; color: #fff; margin-bottom: 15px; font-family: 'Bebas Neue', sans-serif; }
    .process-desc { color: #999; font-size: 0.95rem; }

    /* --- FINAL CONTENT BLOCK --- */
    .final-content {
        padding: 80px 0; text-align: center; 
        background: transparent;
        border-top: 1px solid rgba(255,255,255,0.05);
    }
    .final-max-width { max-width: 800px; margin: 0 auto; }
    
    /* UTILITIES */
    html.lenis { height: auto; }
    .lenis.lenis-smooth { scroll-behavior: auto; }
    @keyframes textFocusIn { 0% { filter: blur(12px); opacity: 0; } 100% { filter: blur(0px); opacity: 1; } }

    /* RESPONSIVE */
    @media (max-width: 1300px) { .grid-4 { grid-template-columns: repeat(3, 1fr); } }
    @media (max-width: 900px) { 
        .grid-4 { grid-template-columns: repeat(2, 1fr); } 
        .cat-main-title { font-size: 3.5rem; } 
        .cine-container { flex-direction: column; }
        .cine-sticky-col { width: 100%; position: relative; top: 0; margin-bottom: 50px; }
        .cine-scroll-col { width: 100%; }
        .cine-big-title { font-size: 3.5rem; }
        .features-grid { grid-template-columns: 1fr; }
        .process-wrapper { flex-direction: column; }
        .process-step { width: 100%; margin-bottom: 20px; min-height: auto; }
        .vertical-watermark { display: none; }
    }
    @media (max-width: 600px) { 
        .grid-4 { grid-template-columns: 1fr; } 
        .banner-title { font-size: 3.5rem; } 
        .wide-display-area { width: 95%; } 
        .glass-panel { padding: 40px 20px; } 
        .card-arrow-box { bottom: 25px; } 
        .marquee-text { font-size: 1.5rem; }
    }

    /* --- Overrides to match reference image --- */
    .harvest-card {
        background: #0d0d0d !important;
        border: 1px solid #222 !important;
        border-radius: 20px !important;
        overflow: hidden !important;
        opacity: 1 !important;
        transform: none !important;
    }
    .harvest-img-box {
        aspect-ratio: 1/1 !important;
        border-bottom: 1px solid #222 !important;
    }
    .harvest-img-box img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        opacity: 0.9 !important;
    }
    .harvest-badge {
        background: #d4a017 !important;
        color: #000 !important;
        border: none !important;
        border-radius: 4px !important;
        font-family: 'Poppins', sans-serif !important;
        font-weight: 700 !important;
        font-size: 0.8rem !important;
        text-transform: uppercase !important;
    }
    .harvest-cat {
        font-family: 'Poppins', sans-serif !important;
        font-weight: 700 !important;
        color: #d4a017 !important;
        text-transform: uppercase !important;
    }
    .harvest-content h3 {
        font-family: 'Times New Roman', Georgia, serif !important;
        text-transform: none !important;
        font-weight: normal !important;
        font-size: 1.8rem !important;
        letter-spacing: 0.5px !important;
        line-height: 1.2 !important;
    }

</style>

<div class="banner-wrapper">
    <img src="../assets/images/bannerproduct.avif" alt="Rice Varieties Banner" class="banner-img-responsive">
    <div class="banner-scroll-text" id="bgText">RICE VARIETIES</div>
    <h1 class="banner-title" id="fgText">RICE VARIETIES</h1> 
    <div class="vignette-overlay"></div>
</div>

<section class="product-bg-section">
    <div class="wide-display-area">
        <div class="glass-panel">
            
            <div class="category-intro">
                <span class="cat-subtitle">PREMIUM GRAINS</span>
                <h2 class="cat-main-title">A Legacy of Purity</h2>
                <p class="cat-desc">
                    From the foothills of the Himalayas to the fertile river basins, AGROX curates the finest collection of Indian rice. Whether it is the world-renowned Extra Long Grain 1121 Basmati or the staple Non-Basmati varieties, we ensure every grain is aged to perfection and milled for superior taste.
                </p>
            </div>

            <div class="grid-4">
                
                <a href="ponni-rice-exporter-from-india.php" class="harvest-card">
                    <div class="harvest-badge">SOUTH</div>
                    <div class="harvest-img-box"><img src="../assets/images/ponni.avif" alt="Ponni Rice" loading="lazy"></div>
                    <div class="harvest-content">
                        <span class="harvest-cat">STEAMED</span>
                        <h3>Ponni Rice</h3>
                    </div>
                    <div class="card-arrow-box"><i class="fas fa-arrow-right"></i></div>
                </a>

                <a href="ir64-parboiled-rice-exporter-from-india.php" class="harvest-card">
                    <div class="harvest-badge">PARBOILED</div>
                    <div class="harvest-img-box"><img src="../assets/images/ir64.avif" alt="IR64 Parboiled Rice" loading="lazy"></div>
                    <div class="harvest-content">
                        <span class="harvest-cat">LONG GRAIN</span>
                        <h3>IR64 Parboiled</h3>
                    </div>
                    <div class="card-arrow-box"><i class="fas fa-arrow-right"></i></div>
                </a>

                <a href="pusa-basmati-rice-exporter-from-india.php" class="harvest-card">
                    <div class="harvest-badge">AROMATIC</div>
                    <div class="harvest-img-box"><img src="../assets/images/pusa.avif" alt="Pusa Basmati Rice" loading="lazy"></div>
                    <div class="harvest-content">
                        <span class="harvest-cat">BASMATI</span>
                        <h3>Pusa Basmati</h3>
                    </div>
                    <div class="card-arrow-box"><i class="fas fa-arrow-right"></i></div>
                </a>

                <a href="basmati-rice-1401-exporter-from-india.php" class="harvest-card">
                    <div class="harvest-badge">CREAMY</div>
                    <div class="harvest-img-box"><img src="../assets/images/1401.avif" alt="1401 Basmati Rice" loading="lazy"></div>
                    <div class="harvest-content">
                        <span class="harvest-cat">STEAMED</span>
                        <h3>1401 Basmati</h3>
                    </div>
                    <div class="card-arrow-box"><i class="fas fa-arrow-right"></i></div>
                </a>

                <a href="basmati-rice-1121-exporter-from-india.php" class="harvest-card">
                    <div class="harvest-badge">XXL</div>
                    <div class="harvest-img-box"><img src="../assets/images/1121.avif" alt="1121 Basmati Rice" loading="lazy"></div>
                    <div class="harvest-content">
                        <span class="harvest-cat">EXTRA LONG</span>
                        <h3>1121 Basmati</h3>
                    </div>
                    <div class="card-arrow-box"><i class="fas fa-arrow-right"></i></div>
                </a>

                <a href="basmati-rice-1509-exporter-from-india.php" class="harvest-card">
                    <div class="harvest-badge">EARLY</div>
                    <div class="harvest-img-box"><img src="../assets/images/1509.avif" alt="1509 Basmati Rice" loading="lazy"></div>
                    <div class="harvest-content">
                        <span class="harvest-cat">BASMATI</span>
                        <h3>1509 Basmati</h3>
                    </div>
                    <div class="card-arrow-box"><i class="fas fa-arrow-right"></i></div>
                </a>

            </div> 
            
            <div class="marquee-section">
                <div class="marquee-content">
                    <span class="marquee-text">PREMIUM BASMATI & NON-BASMATI • AGED TO PERFECTION • AGROX GLOBAL EXPORTS •</span>
                    <span class="marquee-text">PREMIUM BASMATI & NON-BASMATI • AGED TO PERFECTION • AGROX GLOBAL EXPORTS •</span>
                </div>
            </div>

            <div class="cine-section">
                <div class="cine-container">
                    
                    <div class="cine-sticky-col">
                        <span class="cine-sub-tag">The AGROX Promise</span>
                        <div class="cine-decorative-line"></div>
                        <h2 class="cine-big-title">THE GLOBAL<br>STANDARD FOR<br><span class="cine-gold">INDIAN RICE</span></h2>
                        
                        <div class="stats-container">
                            <div class="stat-box">
                                <span class="stat-value">2+ YRS</span>
                                <span class="stat-label">AGED</span>
                            </div>
                            <div class="stat-box">
                                <span class="stat-value">8.35mm</span>
                                <span class="stat-label">AVG LENGTH</span>
                            </div>
                            <div class="stat-box">
                                <span class="stat-value">100%</span>
                                <span class="stat-label">SORTEX</span>
                            </div>
                            <div class="stat-box">
                                <span class="stat-value">SILKY</span>
                                <span class="stat-label">POLISH</span>
                            </div>
                        </div>

                        <div class="vertical-watermark">EST.2024</div>
                    </div>

                    <div class="cine-scroll-col">
                        
                        <div class="text-reveal-mask">
                            <p class="cine-text">
                                Rice is more than a staple; it is an experience of aroma and texture. AGROX specializes in <strong>Aged Basmati Rice</strong>, where the grains elongate up to twice their length upon cooking. We source exclusively from the GI-tagged regions of Punjab and Haryana to guarantee authentic flavor.
                            </p>
                        </div>

                        <div class="text-reveal-mask">
                            <p class="cine-text">
                                For the global mass market, we supply premium <strong>Non-Basmati varieties</strong> like IR64 Parboiled and Ponni Rice. Processed in state-of-the-art mills with Japanese technology, our rice is free from impurities, stones, and broken grains (under 5%), making it the preferred choice for international buyers.
                            </p>
                        </div>

                        <h3 class="cine-sub-tag" style="margin-top: 50px; margin-bottom: 20px; opacity: 1; color: #d4a017;">WHY PARTNER WITH AGROX?</h3>

                        <div class="features-grid">
                            
                            <div class="feature-card">
                                <i class="fas fa-clock f-icon"></i>
                                <h4 class="f-title">Traditional Aging</h4>
                                <p class="f-desc">We store our Basmati paddy in controlled silos for 1-2 years to reduce moisture and enhance cooking volume.</p>
                            </div>

                            <div class="feature-card">
                                <i class="fas fa-ruler-vertical f-icon"></i>
                                <h4 class="f-title">Elongation Ratio</h4>
                                <p class="f-desc">Our 1121 Steam Basmati boasts an exceptional cooked length of over 20mm with non-sticky texture.</p>
                            </div>

                            <div class="feature-card">
                                <i class="fas fa-magic f-icon"></i>
                                <h4 class="f-title">Sortex Grading</h4>
                                <p class="f-desc">Laser optical sorting ensures every grain is uniform in color (Pearl White/Golden) and size.</p>
                            </div>

                            <div class="feature-card">
                                <i class="fas fa-certificate f-icon"></i>
                                <h4 class="f-title">Quality Certs</h4>
                                <p class="f-desc">SGS Inspection, Phytosanitary Certificate, and Certificate of Origin provided with every shipment.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="process-section" style="margin-top: 20px;"> 
                <div class="cine-container" style="flex-direction: column; gap: 30px;">
                     <div style="text-align: center; width: 100%;">
                        <span class="cine-sub-tag" style="opacity: 1; display: inline-block;">HOW WE WORK</span>
                        <h2 class="cine-big-title" style="font-size: 3.5rem; transform: none; opacity: 1;">THE PROCESS OF <span class="cine-gold">PERFECTION</span></h2>
                     </div>
                     
                     <div class="process-wrapper">
                         <div class="process-step">
                             <div class="process-step-num">01</div>
                             <h4 class="process-title">Paddy Sourcing</h4>
                             <p class="process-desc">Procurement directly from farmers in GI-tagged belts ensures authentic DNA integrity of the Basmati.</p>
                         </div>
                         <div class="process-step">
                             <div class="process-step-num">02</div>
                             <h4 class="process-title">Aging (Curing)</h4>
                             <p class="process-desc">Paddy is aged for 12-24 months to lower moisture content to 12%, ensuring grains separate freely when cooked.</p>
                         </div>
                         <div class="process-step">
                             <div class="process-step-num">03</div>
                             <h4 class="process-title">Milling & Polishing</h4>
                             <p class="process-desc">De-husking and polishing (Silky/Sortex) are done to remove bran while retaining the nutritional core.</p>
                         </div>
                         <div class="process-step">
                             <div class="process-step-num">04</div>
                             <h4 class="process-title">Final Grading</h4>
                             <p class="process-desc">Length grading separates broken grains from head rice, followed by automated weighing and packing.</p>
                         </div>
                     </div>
                </div>
            </div>

            <section class="final-content">
                <div class="final-max-width">
                    <h2 class="cine-big-title" style="font-size: 3rem; transform: none; opacity: 1; margin-bottom: 30px;">READY TO ORDER?</h2>
                    <p class="cine-text" style="transform: none; opacity: 1; margin-bottom: 40px; color: #ccc;">
                        Experience the finest Indian rice with AGROX. From 1121 Basmati to IR64, we deliver excellence in every grain.
                    </p>
                    <a href="../contact-us.php" class="btn-gold" style="display: inline-block; padding: 15px 40px; background: #d4a017; color: #000; text-decoration: none; font-size: 1.2rem; border-radius: 5px; transition: 0.3s;">GET A QUOTE</a>
                </div>
            </section>

        </div> 
    </div> 
</section>

<script>

    // 2. Parallax Banner Effect
    window.addEventListener('scroll', () => {
        const s = window.scrollY;
        const bg = document.getElementById('bgText');
        const fg = document.getElementById('fgText');
        if(bg) bg.style.transform = `translate(calc(-50% + ${s * 0.4}px), -50%)`;
        if(fg) fg.style.transform = `translate(calc(-50% - ${s * 0.3}px), -50%)`;
    });

    // 3. Register GSAP
    gsap.registerPlugin(ScrollTrigger);

    // --- ANIMATIONS (FAIL-SAFE: VISIBLE BY DEFAULT, SUBTLE MOTION) ---

    // Feature Cards: Subtle slide up
    gsap.from(".feature-card", {
        scrollTrigger: {
            trigger: ".features-grid",
            start: "top 85%"
        },
        y: 20, 
        duration: 0.6,
        stagger: 0.1,
        ease: "power1.out"
    });

    // Process Steps: Subtle slide up
    gsap.from(".process-step", {
        scrollTrigger: {
            trigger: ".process-wrapper",
            start: "top 85%"
        },
        y: 30, 
        duration: 0.6,
        stagger: 0.1,
        ease: "power1.out"
    });
    
    // Stats: Subtle slide up
    gsap.from(".stat-box", {
        scrollTrigger: {
            trigger: ".stats-container",
            start: "top 90%"
        },
        y: 20,
        duration: 0.5,
        stagger: 0.1
    });

</script>

<?php include '../footer.php'; ?>
