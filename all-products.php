<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: MAIN PRODUCT CATALOG
// ----------------------------------------------------------------
$pageTitle = "Wholesale Organic Spices & Dry Fruits Supplier India | AGROX Products";
$pageDesc  = "Explore AGROX's complete range of premium Indian Spices, Pulses, Dry Fruits, and Essential Oils. ISO Certified Exporter delivering bulk organic products worldwide.";

include 'header.php'; 
?>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    /* --- TYPOGRAPHY --- */
    body { font-family: 'Poppins', sans-serif; }
    
    /* Apply Bebas Neue to all heavy titles */
    h1, h2, h3, .banner-title, .banner-scroll-text, 
    .harvest-badge, .harvest-cat, .subtitle {
        font-family: 'Bebas Neue', sans-serif;
        letter-spacing: 1.5px;
    }

    /* 1. FIXED BACKGROUND SETUP */
    .product-bg-section {
        position: relative;
        background-image: url('assets/images/Web.avif');
        background-size: cover;
        background-position: center center;
        background-attachment: scroll; 
        background-repeat: no-repeat;
        padding-top: 60px;
        padding-bottom: 80px;
        min-height: 100vh;
    }

    .vignette-overlay, .product-bg-section::before {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        pointer-events: none;
        background: radial-gradient(ellipse at center, rgba(0,0,0,0) 40%, rgba(11,11,11,0.8) 100%);
    }
    .product-bg-section::before { content: ''; z-index: 1; position: absolute; }

    /* 2. CUSTOM WIDE CONTAINER (To increase glass size) */
    .wide-display-area {
        position: relative;
        z-index: 3;
        width: 94%; /* Much wider than standard container */
        max-width: 1700px; 
        margin: 0 auto;
    }

    /* 3. THE GLASS FROST CARD */
    .glass-panel {
        background: rgba(255, 255, 255, 0.03); 
        backdrop-filter: blur(20px);            
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.08); 
        border-radius: 30px;
        padding: 50px 40px; /* Vertical padding, Horizontal padding */
        box-shadow: 0 30px 60px rgba(0,0,0,0.5); 
    }

    /* 4. GRID LAYOUT (Original 4 Columns) */
    .grid-4 {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px; /* Comfortable gap between cards */
    }

    /* Responsive Grid */
    @media (max-width: 1300px) { .grid-4 { grid-template-columns: repeat(3, 1fr); } }
    @media (max-width: 900px) { .grid-4 { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 600px) { .grid-4 { grid-template-columns: 1fr; } }

    /* 5. ORIGINAL CARD DESIGN */
    .harvest-card {
        text-decoration: none;
        color: inherit;
        display: block;
        cursor: pointer;
        position: relative;
        background: #0d0d0d;
        border: 1px solid #222;
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }
    .harvest-card:hover {
        transform: translateY(-8px);
        border-color: #d4a017;
        box-shadow: 0 20px 50px rgba(212, 160, 23, 0.15);
    }

    .harvest-img-box {
        position: relative; 
        overflow: hidden;
        aspect-ratio: 1/1;
        background: #000;
        border-bottom: 1px solid #222;
    }
    .harvest-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.7s ease;
        opacity: 0.9;
    }
    .harvest-img-box::after {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: radial-gradient(circle, transparent 40%, rgba(0,0,0,0.8) 100%);
        pointer-events: none;
        transition: opacity 0.4s;
    }
    .harvest-card:hover .harvest-img-box img {
        transform: scale(1.1);
        opacity: 1;
    }
    .harvest-card:hover .harvest-img-box::after {
        opacity: 0.6;
    }

    /* Badge & Content Styling */
    .harvest-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        z-index: 5;
        background: #d4a017;
        color: #000;
        padding: 4px 10px;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 1px;
        border-radius: 4px;
        font-family: 'Poppins', sans-serif !important;
        text-transform: uppercase;
    }
    .harvest-content {
        padding: 20px 15px;
        text-align: center;
    }
    .harvest-cat {
        color: #d4a017;
        font-size: 0.75rem;
        letter-spacing: 2px;
        display: block;
        margin-bottom: 6px;
        font-family: 'Poppins', sans-serif !important;
        font-weight: 700;
        text-transform: uppercase;
    }
    .harvest-content h3 {
        color: #fff;
        margin: 0;
        font-size: 1.8rem;
        line-height: 1.2;
        font-family: 'Times New Roman', Georgia, serif !important;
        text-transform: none !important;
        font-weight: normal;
        letter-spacing: 0.5px;
        transition: color 0.3s;
    }

    /* 6. SPACING & HEADERS */
    .category-section { margin-bottom: 80px; }
    .category-section:last-child { margin-bottom: 0; }

    .section-header { text-align: left; margin-bottom: 30px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 15px; }
    .section-header .subtitle {
        color: #d4a017; font-size: 1.2rem; display: block; margin-bottom: 5px;
        text-shadow: 0 2px 4px rgba(0,0,0,0.8);
    }
    .section-header h2 {
        font-size: 3rem; color: #fff; margin: 0;
        text-shadow: 0 5px 15px rgba(0,0,0,0.8);
    }
    .view-link {
        float: right; margin-top: -35px; /* Align with H2 */
        color: #ddd; text-decoration: none; font-size: 0.9rem;
        border-bottom: 1px solid #d4a017; padding-bottom: 2px;
        transition: color 0.3s; font-family: 'Poppins', sans-serif;
    }
    .view-link:hover { color: #d4a017; }

    /* BANNER */
    .banner-wrapper { position: relative; width: 100%; overflow: hidden; margin-bottom: 0px; }
    .banner-wrapper .vignette-overlay { z-index: 2; }
    
    .banner-title {
        position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%);
        z-index: 5; margin: 0;
        font-size: 8rem; color: #ffffff; text-transform: uppercase;
        text-shadow: 0 10px 40px rgba(0, 0, 0, 0.9); width: 100%; text-align: center;
        animation: textFocusIn 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
        will-change: transform; /* Optimized */
    }
    
    .banner-scroll-text {
        position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%);
        z-index: 1;
        font-size: 20vw; line-height: 1; white-space: nowrap; opacity: 0.5;
        color: transparent; -webkit-text-stroke: 2px rgba(255, 255, 255, 0.9);
        pointer-events: none;
        will-change: transform; /* Optimized */
    }

    @media (max-width: 768px) {
        .wide-display-area { width: 95%; } 
        .glass-panel { padding: 30px 20px; }
        .banner-title { font-size: 3.5rem; }
        .banner-scroll-text { font-size: 25vw; }
        .section-header h2 { font-size: 2.5rem; }
        .view-link { float: none; display: block; margin-top: 10px; }
    }

    @keyframes textFocusIn { 0% { filter: blur(12px); opacity: 0; } 100% { filter: blur(0px); opacity: 1; } }
</style>

<div style="height: 0px; width: 100%;"></div>
</div>
<div class="banner-wrapper">
    <img src="assets/images/bannerproduct.avif" alt="AGROX Products Banner" style="width: 100%; height: auto; display: block;">
    <div class="banner-scroll-text" id="bgText">PRODUCTS</div>
    <h1 class="banner-title" id="fgText">PRODUCTS</h1> <div class="vignette-overlay"></div>
</div>

<section class="product-bg-section">
    <div class="wide-display-area">
        
        <div class="glass-panel">

            <h1 class="title" style="text-align: center; margin-bottom: 60px; margin-top: 0; font-family: 'Bebas Neue', sans-serif; font-size: 4rem; color: #fff; text-shadow: 0 5px 15px rgba(0,0,0,0.8);">Our Complete Range</h1>

            <div class="category-section">
                <div class="section-header">
                    <span class="subtitle">AROMATIC & PURE</span>
                    <h2>Whole Spices</h2>
                    <a href="products/whole-spices.php" class="view-link">View Category Page &rarr;</a>
                </div>
                
                <div class="grid-4">
                    <a href="products/cumin-seeds-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">PREMIUM</div><div class="harvest-img-box"><img src="assets/images/cuminwh.avif" alt="Cumin Seeds Export India" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">JEERA</span><h3>Cumin Seeds</h3></div></a>
                    <a href="products/coriander-seeds-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">AROMATIC</div><div class="harvest-img-box"><img src="assets/images/corianderwh.avif" alt="Coriander Seeds Supplier" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">DHANIYA</span><h3>Coriander Seeds</h3></div></a>
                    <a href="products/dried-chilli-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">SPICY</div><div class="harvest-img-box"><img src="assets/images/redchilliwh.avif" alt="Dried Red Chilli Guntur" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">GUNTUR</span><h3>Dried Chilli</h3></div></a>
                    <a href="products/fenugreek-seeds-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">BITTER-SWEET</div><div class="harvest-img-box"><img src="assets/images/fenugreek.avif" alt="Fenugreek Seeds Methi" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">METHI</span><h3>Fenugreek Seeds</h3></div></a>
                    <a href="products/turmeric-finger-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">RAW</div><div class="harvest-img-box"><img src="assets/images/turmericwh.avif" alt="Turmeric Finger Erode" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">HALDI</span><h3>Turmeric Finger</h3></div></a>
                    <a href="products/green-cardamom-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">GREEN GOLD</div><div class="harvest-img-box"><img src="assets/images/cardamomwh.avif" alt="Green Cardamom Alleppey" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">ELAICHI</span><h3>Green Cardamom</h3></div></a>
                    <a href="products/cinnamon-sticks-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">BARK</div><div class="harvest-img-box"><img src="assets/images/cinnamonwh.avif" alt="Cinnamon Sticks" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">DALCHINI</span><h3>Cinnamon Sticks</h3></div></a>
                    <a href="products/cloves-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">BOLD</div><div class="harvest-img-box"><img src="assets/images/clove.avif" alt="Cloves Laung" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">LAUNG</span><h3>Cloves</h3></div></a>
                    <a href="products/bay-leaf-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">FRAGRANT</div><div class="harvest-img-box"><img src="assets/images/bayleaf.avif" alt="Bay Leaf Tej Patta" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">TEJ PATTA</span><h3>Bay Leaf</h3></div></a>
                    <a href="products/saffron-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">KASHMIRI</div><div class="harvest-img-box"><img src="assets/images/saffron.avif" alt="Kesar Saffron" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">KESAR</span><h3>Saffron</h3></div></a>
                    <a href="products/anise-seeds-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">EXOTIC</div><div class="harvest-img-box"><img src="assets/images/starsnise.avif" alt="Star Anise" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">CHAKRA PHOOL</span><h3>Star Anise</h3></div></a>
                </div>
            </div>

            <div class="category-section">
                <div class="section-header">
                    <span class="subtitle">GROUND PERFECTION</span>
                    <h2>Powdered Spices</h2>
                    <a href="products/powdered-spices.php" class="view-link">View Category Page &rarr;</a>
                </div>
                
                <div class="grid-4">
                    <a href="products/turmeric-powder-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">CURCUMIN</div><div class="harvest-img-box"><img src="assets/images/turmericpw.avif" alt="Turmeric Powder Haldi" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">HALDI</span><h3>Turmeric Powder</h3></div></a>
                    <a href="products/coriander-powder-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">PURE</div><div class="harvest-img-box"><img src="assets/images/corianderpw.avif" alt="Coriander Powder" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">DHANIYA</span><h3>Coriander Powder</h3></div></a>
                    <a href="products/cumin-powder-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">ROASTED</div><div class="harvest-img-box"><img src="assets/images/cuminpw.avif" alt="Cumin Powder Jeera" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">JEERA</span><h3>Cumin Powder</h3></div></a>
                    <a href="products/garlic-powder-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">PUNGENT</div><div class="harvest-img-box"><img src="assets/images/garlicpw.avif" alt="Garlic Powder" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">LAHSOON</span><h3>Garlic Powder</h3></div></a>
                    <a href="products/ginger-powder-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">ZESTY</div><div class="harvest-img-box"><img src="assets/images/gingerpw.avif" alt="Ginger Powder" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">SOONTH</span><h3>Ginger Powder</h3></div></a>
                    <a href="products/cinnamon-powder-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">SWEET</div><div class="harvest-img-box"><img src="assets/images/cinnamonpw.avif" alt="Cinnamon Powder" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">DALCHINI</span><h3>Cinnamon Powder</h3></div></a>
                    <a href="products/chilli-powder-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">FIERY</div><div class="harvest-img-box"><img src="assets/images/redchillipw.avif" alt="Red Chilli Powder" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">LAL MIRCH</span><h3>Chilli Powder</h3></div></a>
                    <a href="products/curry-powder-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">BLEND</div><div class="harvest-img-box"><img src="assets/images/currypw.avif" alt="Curry Powder" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">MASALA</span><h3>Curry Powder</h3></div></a>
                    <a href="products/cardamom-powder-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">AROMATIC</div><div class="harvest-img-box"><img src="assets/images/cardamompw.avif" alt="Cardamom Powder" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">ELAICHI</span><h3>Cardamom Powder</h3></div></a>
                    <a href="products/moringa-powder-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">SUPERFOOD</div><div class="harvest-img-box"><img src="assets/images/moringapw.avif" alt="Moringa Powder" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">DRUMSTICK</span><h3>Moringa Powder</h3></div></a>
                    <a href="products/jamun-seed-powder-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">HERBAL</div><div class="harvest-img-box"><img src="assets/images/jamunpw.avif" alt="Jamun Seed Powder" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">DIABETIC</span><h3>Jamun Seed Powder</h3></div></a>
                </div>
            </div>

            <div class="category-section">
                <div class="section-header">
                    <span class="subtitle">NATURE'S CANDY</span>
                    <h2>Dry Fruits & Nuts</h2>
                    <a href="products/dry-fruits.php" class="view-link">View Category Page &rarr;</a>
                </div>
                
                <div class="grid-4">
                    <a href="products/cashew-nuts-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">W240</div><div class="harvest-img-box"><img src="assets/images/cashew.avif" alt="Cashew Nuts Kaju" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">KAJU</span><h3>Cashew Nuts</h3></div></a>
                    <a href="products/makhana-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">FOX NUTS</div><div class="harvest-img-box"><img src="assets/images/makhana.avif" alt="Makhana Fox Nuts" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">PHOOL</span><h3>Makhana</h3></div></a>
                    <a href="products/dates-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">MEDJOOL</div><div class="harvest-img-box"><img src="assets/images/dates.avif" alt="Dates Khajoor" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">KHAJOOR</span><h3>Dates</h3></div></a>
                    <a href="products/almonds-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">CALIFORNIA</div><div class="harvest-img-box"><img src="assets/images/almonds.avif" alt="Almonds Badam" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">BADAM</span><h3>Almonds</h3></div></a>
                    <a href="products/pistachio-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">IRANIAN</div><div class="harvest-img-box"><img src="assets/images/pistachio.avif" alt="Pistachio Pista" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">PISTA</span><h3>Pistachio</h3></div></a>
                    <a href="products/walnuts-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">KASHMIRI</div><div class="harvest-img-box"><img src="assets/images/walnut.avif" alt="Walnuts Akhrot" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">AKHROT</span><h3>Walnut</h3></div></a>
                    <a href="products/figs-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">DRIED</div><div class="harvest-img-box"><img src="assets/images/figs.avif" alt="Dried Figs Anjeer" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">ANJEER</span><h3>Figs</h3></div></a>
                    <a href="products/raisins-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">GOLDEN</div><div class="harvest-img-box"><img src="assets/images/raisin.avif" alt="Raisins Kishmish" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">KISHMISH</span><h3>Raisins</h3></div></a>
                </div>
            </div>

            <div class="category-section">
                <div class="section-header">
                    <span class="subtitle">PROTEIN RICH</span>
                    <h2>Pulses & Lentils</h2>
                    <a href="products/grains-and-pulses.php" class="view-link">View Category Page &rarr;</a>
                </div>
                
                <div class="grid-4">
                    <a href="products/green-gram-moong-dal-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">WHOLE</div><div class="harvest-img-box"><img src="assets/images/greengram.avif" alt="Green Gram Moong" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">GREEN GRAM</span><h3>Moong Dal</h3></div></a>
                    <a href="products/black-gram-urad-dal-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">SPLIT</div><div class="harvest-img-box"><img src="assets/images/urad.avif" alt="Black Gram Urad" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">BLACK GRAM</span><h3>Urad Dal</h3></div></a>
                    <a href="products/chickpeas-kabuli-chana-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">KABULI</div><div class="harvest-img-box"><img src="assets/images/chickpeas.avif" alt="Kabuli Chickpeas" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">CHOLE</span><h3>Chickpeas</h3></div></a>
                    <a href="products/red-lentils-masoor-dal-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">RED</div><div class="harvest-img-box"><img src="assets/images/redlentis.avif" alt="Red Lentils Masoor" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">LENTILS</span><h3>Red Lentils</h3></div></a>
                    <a href="products/toor-dal-pigeon-peas-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">YELLOW</div><div class="harvest-img-box"><img src="assets/images/toordal.avif" alt="Toor Dal Pigeon Peas" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">PIGEON PEAS</span><h3>Toor Dal</h3></div></a>
                    <a href="products/kidney-beans-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">RAJMA</div><div class="harvest-img-box"><img src="assets/images/redkidney.avif" alt="Kidney Beans Rajma" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">BEANS</span><h3>Kidney Beans</h3></div></a>
                    <a href="products/brown-chickpeas-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">DESI</div><div class="harvest-img-box"><img src="assets/images/brownchickpea.avif" alt="Brown Chickpeas Kala Chana" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">KALA CHANA</span><h3>Brown Chickpeas</h3></div></a>
                    <a href="products/soyabean-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">PROTEIN</div><div class="harvest-img-box"><img src="assets/images/soybean.avif" alt="Soyabean Soya" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">SOYA</span><h3>Soyabean</h3></div></a>
                </div>
            </div>

            <div class="category-section">
                <div class="section-header">
                    <span class="subtitle">PREMIUM GRAINS</span>
                    <h2>Rice Varieties</h2>
                    <a href="products/rice-varieties.php" class="view-link">View Category Page &rarr;</a>
                </div>
                
                <div class="grid-4">
                    <a href="products/ponni-rice-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">SOUTH</div><div class="harvest-img-box"><img src="assets/images/ponni.avif" alt="Ponni Rice" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">STEAMED</span><h3>Ponni Rice</h3></div></a>
                    <a href="products/ir64-parboiled-rice-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">PARBOILED</div><div class="harvest-img-box"><img src="assets/images/ir64.avif" alt="IR64 Parboiled Rice" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">LONG GRAIN</span><h3>IR64 Parboiled</h3></div></a>
                    <a href="products/pusa-basmati-rice-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">AROMATIC</div><div class="harvest-img-box"><img src="assets/images/pusa.avif" alt="Pusa Basmati Rice" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">BASMATI</span><h3>Pusa Basmati</h3></div></a>
                    <a href="products/basmati-rice-1401-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">CREAMY</div><div class="harvest-img-box"><img src="assets/images/1401.avif" alt="1401 Basmati Rice" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">STEAMED</span><h3>1401 Basmati</h3></div></a>
                    <a href="products/basmati-rice-1121-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">XXL</div><div class="harvest-img-box"><img src="assets/images/1121.avif" alt="1121 Basmati Rice" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">EXTRA LONG</span><h3>1121 Basmati</h3></div></a>
                    <a href="products/basmati-rice-1509-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">EARLY</div><div class="harvest-img-box"><img src="assets/images/1509.avif" alt="1509 Basmati Rice" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">BASMATI</span><h3>1509 Basmati</h3></div></a>
                </div>
            </div>

            <div class="category-section" style="margin-bottom: 0;">
                <div class="section-header">
                    <span class="subtitle">PURE EXTRACTS</span>
                    <h2>Extract Oils</h2>
                    <a href="products/extract-oil.php" class="view-link">View Category Page &rarr;</a>
                </div>
                
                <div class="grid-4">
                    <a href="products/qalion-extract-oil-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">EXTRACT</div><div class="harvest-img-box"><img src="assets/images/qalion.avif" alt="Qalion Extract Oil" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">PURE</span><h3>Qalion Extract Oil</h3></div></a>
                    <a href="products/taxus-brevifolia-fx-oil-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">MEDICINAL</div><div class="harvest-img-box"><img src="assets/images/taxusbrevfolia.avif" alt="Taxus Brevifolia Oil" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">FX OIL</span><h3>Taxus Brevifolia</h3></div></a>
                    <a href="products/red-taxus-brevifolia-fx-oil-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">RED</div><div class="harvest-img-box"><img src="assets/images/redtaxus.avif" alt="Red Taxus Oil" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">FX OIL</span><h3>Red Taxus Oil</h3></div></a>
                    <a href="products/yellow-taxus-brevifolia-fx-oil-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">YELLOW</div><div class="harvest-img-box"><img src="assets/images/yellowtaxus.avif" alt="Yellow Taxus Oil" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">FX OIL</span><h3>Yellow Taxus Oil</h3></div></a>
                    <a href="products/orange-taxus-brevifolia-fx-oil-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">ORANGE</div><div class="harvest-img-box"><img src="assets/images/orangetaxus.avif" alt="Orange Taxus Oil" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">FX OIL</span><h3>Orange Taxus Oil</h3></div></a>
                    <a href="products/taxus-brevifolia-active-liquid-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">LIQUID</div><div class="harvest-img-box"><img src="assets/images/taxusactive.avif" alt="Taxus Active Liquid" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">CONCENTRATE</span><h3>Taxus Active Liquid</h3></div></a>
                    <a href="products/precatoria-extract-oil-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">RARE</div><div class="harvest-img-box"><img src="assets/images/precatoria.avif" alt="Precatoria Extract Oil" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">EXTRACT</span><h3>Precatoria Oil</h3></div></a>
                    <a href="products/bandicoot-berry-nutrosonide-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">BERRY</div><div class="harvest-img-box"><img src="assets/images/bandicoot.avif" alt="Bandicoot Berry Nutrosonide" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">NUTROSONIDE</span><h3>Bandicoot Nutrosonide</h3></div></a>
                    <a href="products/colloidal-silver-solution-exporter-from-india.php" class="harvest-card"><div class="harvest-badge">SOLUTION</div><div class="harvest-img-box"><img src="assets/images/colloidal.avif" alt="Colloidal Silver Solution" loading="lazy"></div><div class="harvest-content"><span class="harvest-cat">COLLOIDAL</span><h3>Colloidal Silver</h3></div></a>
                </div>
            </div>

        </div> 
        </div>
</section>

<script>
    // Simple Parallax Effect for Banner Text
    window.addEventListener('scroll', function() {
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
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "AGROX Product Catalog",
  "description": "Complete list of wholesale organic spices, dry fruits, pulses, and extracts exported by AGROX.",
  "url": "https://theagroxgroup.org/products.php",
  "mainEntity": {
    "@type": "ItemList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Whole Spices" },
      { "@type": "ListItem", "position": 2, "name": "Powdered Spices" },
      { "@type": "ListItem", "position": 3, "name": "Dry Fruits & Nuts" },
      { "@type": "ListItem", "position": 4, "name": "Pulses & Lentils" },
      { "@type": "ListItem", "position": 5, "name": "Rice Varieties" },
      { "@type": "ListItem", "position": 6, "name": "Extract Oils" }
    ]
  }
}
</script>

<?php include 'footer.php'; ?>