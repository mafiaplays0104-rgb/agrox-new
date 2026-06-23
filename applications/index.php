<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: APPLICATIONS HUB
// ----------------------------------------------------------------
$pageTitle = "Ingredient Applications Hub | Custom Agricultural Blends";
$metaDescription = "Explore the applications of our premium agricultural products. Custom spice blending, dry fruit grading, oil extraction parameters, and formulation solutions.";

$path = '../'; 
$prodPath = '';

include '../header.php'; 
?>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* --- CORE THEME & TYPOGRAPHY --- */
    body { font-family: 'Poppins', sans-serif; background-color: #050505; color: #e0e0e0; margin: 0; overflow-x: hidden; line-height: 1.6; }
    
    h1, h2, h3, h4, h5, .banner-title, .banner-scroll-text, .section-label, .btn-gold { 
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
    .container { max-width: 1200px; margin: 0 auto; padding: 0 30px; position: relative; text-align: center; }

    .placeholder-card {
        background: rgba(20, 20, 20, 0.6);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 16px;
        padding: 80px 40px;
        max-width: 800px;
        margin: 0 auto;
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
    }
    .placeholder-card h2 { font-size: 3.5rem; color: #fff; margin: 0 0 20px 0; }
    .placeholder-card p { color: #bbb; font-size: 1.1rem; margin-bottom: 40px; font-weight: 300; line-height: 1.7; }
    
    .btn-gold {
        display: inline-block; background: #d4a017; color: #000; padding: 18px 45px; font-size: 1.1rem;
        cursor: pointer; text-transform: uppercase; font-weight: bold; border-radius: 4px; text-decoration: none;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    .btn-gold:hover { background: #fff; box-shadow: 0 0 20px rgba(212, 160, 23, 0.4); }
    .btn-gold:active { transform: scale(0.97) !important; }

    /* --- RESPONSIVE --- */
    @media (max-width: 768px) {
        .banner-title { font-size: 4rem; }
        .banner-scroll-text { font-size: 25vw; }
        .placeholder-card h2 { font-size: 2.5rem; }
    }
</style>

<div class="banner-wrapper" id="bannerContainer">
    <img src="../assets/images/bannerproduct.avif" alt="Applications Banner" class="banner-img-responsive">
    <div class="banner-scroll-text" id="bgText">APPLICATIONS</div>
    <h1 class="banner-title" id="fgText">FORMULATIONS</h1> 
    <div class="vignette-overlay"></div>
</div>

<section id="main-content">
    <div class="container">
        
        <div class="placeholder-card">
            <h2>Under Construction</h2>
            <p>We are compiling documentation regarding specific ingredient formulations, mesh blending parameters, oil viscosity guidelines, and food manufacturing applications. This portal will launch soon.</p>
            <a href="../contact-us.php?type=quote" class="btn-gold">REQUEST FORMULATION PARAMETERS</a>
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

<?php include '../footer.php'; ?>
