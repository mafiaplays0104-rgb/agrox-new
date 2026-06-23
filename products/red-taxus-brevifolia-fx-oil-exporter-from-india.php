<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: DYNAMIC TURMERIC PAGE (GLASS EDITION)
// ----------------------------------------------------------------
$productName  = "Turmeric Powder (Haldi)";
$categoryName = "TURMERIC POWDER";
$bannerText   = "CURCUMIN";
$imagePath    = "../assets/images/turmericpw.jpg"; 
$bgImage      = "../assets/images/Web.avif"; 

$shortDesc    = "Premium high-curcumin Turmeric Powder sourced from the finest Salem and Nizamabad fingers.";

// CONTENT
$fullDesc     = "
    <p>AGROX is a premier exporter of Indian Turmeric Powder, known globally as the 'Golden Spice'. Our turmeric is ground from carefully sorted, polished, and sun-dried fingers to ensure a vibrant yellow color and potent aroma. We adhere to strict quality standards to ensure our powder is free from Sudan dyes, aflatoxins, and metallic contaminants.</p>
    
    <h3 style='color:white; margin-top:30px; font-size:1.2rem; text-transform:uppercase; border-bottom: 1px solid rgba(212, 160, 23, 0.3); padding-bottom:10px; display:inline-block;'>Popular Varieties</h3>
    <ul style='color:#e0e0e0; line-height:1.6; margin-bottom:20px; margin-top:15px;'>
        <li style='margin-bottom:10px;'><strong>Salem Quality:</strong> Premium grade, bright orange-yellow, used for retail packs.</li>
        <li style='margin-bottom:10px;'><strong>Nizamabad Quality:</strong> Rich yellow color, perfect for culinary blends.</li>
        <li><strong>Rajapore Quality:</strong> High curcumin content, ideal for medicinal extraction.</li>
    </ul>

    <h3 style='color:white; margin-top:30px; font-size:1.2rem; text-transform:uppercase; border-bottom: 1px solid rgba(212, 160, 23, 0.3); padding-bottom:10px; display:inline-block;'>Logistics</h3>
    <table style='width:100%; color:#e0e0e0; border:1px solid rgba(255,255,255,0.1); margin-top:15px; border-collapse:collapse;'>
        <tr>
            <td style='padding:12px; border-bottom:1px solid rgba(255,255,255,0.1); color:#d4a017;'>20 FT Container</td>
            <td style='padding:12px; border-bottom:1px solid rgba(255,255,255,0.1);'>18 - 19 Metric Tons</td>
        </tr>
        <tr>
            <td style='padding:12px; color:#d4a017;'>40 FT Container</td>
            <td style='padding:12px;'>27 - 28 Metric Tons</td>
        </tr>
    </table>
";

$specs = [
    "Curcumin" => "2% - 5%",
    "Origin" => "India",
    "Moisture" => "10% Max",
    "Ash" => "7% Max",
    "Mesh" => "80-100",
    "Packaging" => "25kg / 50kg"
];
include '../header.php'; 
?>

<style>
    /* --- CORE LAYOUT STYLES --- */
    .product-bg-section {
        position: relative;
        background-image: url('<?php echo $bgImage; ?>');
        background-size: cover;
        background-position: center center;
        background-attachment: fixed; 
        padding-top: 60px; padding-bottom: 100px; min-height: 100vh; 
    }
    .vignette-overlay {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: radial-gradient(ellipse at center, rgba(0,0,0,0) 20%, rgba(11,11,11,0.95) 100%);
        pointer-events: none; z-index: 1;
    }

    /* --- THE MASTER GLASS CARD WRAPPER --- */
    .glass-wrapper {
        background: rgba(255, 255, 255, 0.03); /* Extremely subtle fill */
        backdrop-filter: blur(16px);             /* Heavy Blur */
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.08); /* White border opacity */
        border-radius: 30px;
        padding: 60px;
        box-shadow: 0 30px 60px rgba(0,0,0,0.5); /* Deep shadow for lift */
        position: relative;
        z-index: 10;
        margin-top: 20px;
    }

    /* BANNER TYPOGRAPHY */
    .banner-wrapper { position: relative; width: 100%; overflow: hidden; }
    .banner-title {
        position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%);
        z-index: 5; margin: 0; font-family: var(--brand-font, sans-serif); font-weight: 800;
        font-size: 6.5rem; color: #ffffff; text-transform: uppercase; 
        text-shadow: 0 10px 40px rgba(0, 0, 0, 0.9); width: 100%; text-align: center;
        letter-spacing: 2px;
        animation: textFocusIn 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
    }
    .banner-scroll-text {
        position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%);
        z-index: 1; font-family: var(--brand-font, sans-serif); font-weight: 900;
        font-size: 18vw; opacity: 0.3; color: transparent; 
        -webkit-text-stroke: 2px rgba(255, 255, 255, 0.8); pointer-events: none;
    }

    /* GRID & LAYOUT (Adjusted for Glass Card) */
    .single-product-grid {
        display: grid; grid-template-columns: 1fr 1.5fr; gap: 80px;
        align-items: start; margin-top: 40px; position: relative; z-index: 5;
    }

    /* IMAGE STYLING */
    .sp-image-box {
        position: relative; border-radius: 20px; overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transform: translateZ(0);
        margin-bottom: 50px;
    }
    .sp-image-box img { width: 100%; height: auto; display: block; transition: transform 0.7s cubic-bezier(0.25, 0.8, 0.25, 1); }
    .sp-image-box:hover img { transform: scale(1.03); }

    /* --- DYNAMIC ANIMATION CONTAINER --- */
    .benefits-wrapper {
        position: relative;
        padding-left: 60px;
    }

    .dynamic-svg-layer {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        pointer-events: none; overflow: visible; z-index: 0;
    }
    
    .path-bg { fill: none; stroke: rgba(255,255,255,0.05); stroke-width: 4; stroke-linecap: round; }
    .path-active {
        fill: none; stroke: url(#goldGradient); stroke-width: 4; stroke-linecap: round;
        filter: drop-shadow(0 0 8px rgba(212, 160, 23, 0.6));
    }
    
    .glowing-tip {
        width: 12px; height: 12px; background: #fff;
        border-radius: 50%;
        position: absolute; top: 0; left: 0;
        transform: translate(-50%, -50%);
        box-shadow: 0 0 15px 5px rgba(212, 160, 23, 0.8);
        opacity: 0; pointer-events: none; z-index: 2;
    }

    /* Benefit Item Styling */
    .benefit-item {
        position: relative; margin-bottom: 80px;
        opacity: 0.3; filter: blur(2px);
        transform: translateX(20px);
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        z-index: 2;
    }
    
    .benefit-item.active { opacity: 1; filter: blur(0); transform: translateX(0); }
    
    /* INNER GLASS CARDS (Glass on Glass Effect) */
    .benefit-box {
        background: rgba(0, 0, 0, 0.2); /* Darker inner glass */
        border: 1px solid rgba(255, 255, 255, 0.05);
        padding: 20px; border-radius: 12px;
        backdrop-filter: blur(5px);
        border-left: 3px solid transparent;
        transition: 0.3s;
    }
    .benefit-item.active .benefit-box {
        border-left: 3px solid #d4a017;
        background: linear-gradient(90deg, rgba(212,160,23,0.1) 0%, rgba(0,0,0,0.2) 100%);
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    .benefit-item h4 {
        color: #d4a017; margin: 0 0 5px 0; text-transform: uppercase; 
        font-size: 1rem; letter-spacing: 2px; font-weight: 800;
    }
    .benefit-item p { color: #ccc; margin: 0; font-size: 0.95rem; line-height: 1.5; }

    .anchor-dot {
        position: absolute; left: -60px; top: 50%; transform: translateY(-50%);
        width: 14px; height: 14px;
        background: #111; border: 2px solid #444; border-radius: 50%;
        transition: 0.4s; z-index: 1;
    }
    .benefit-item.active .anchor-dot {
        background: #d4a017; border-color: #fff; transform: translateY(-50%) scale(1.3);
        box-shadow: 0 0 20px rgba(212, 160, 23, 1);
    }

    /* RIGHT COLUMN */
    .sp-content h2 { 
        color: #ffffff; font-size: 3.5rem; margin-top: 0; margin-bottom: 10px;
        font-family: var(--brand-font, sans-serif); text-transform: uppercase; 
    }
    .sp-short-desc { font-size: 1.4rem; color: #d4a017; margin-bottom: 30px; font-weight: 300; }
    .sp-full-desc { color: #ccc; line-height: 1.8; font-size: 1.05rem; margin-bottom: 50px; }

    /* SPEC TABLE (Transparent) */
    .spec-table { width: 100%; margin-bottom: 40px; border-collapse: separate; border-spacing: 0 10px; }
    .spec-table th, .spec-table td { padding: 15px 25px; background: rgba(0,0,0,0.2); }
    .spec-table th { color: #d4a017; text-transform: uppercase; font-size: 0.85rem; border-radius: 8px 0 0 8px; width: 35%; font-weight: 700; letter-spacing: 1px;}
    .spec-table td { color: #fff; border-radius: 0 8px 8px 0; border-left: 1px solid rgba(255,255,255,0.05); }

    .btn-enquire {
        display: inline-block; background: transparent; color: #d4a017;
        padding: 20px 50px; font-weight: 800; text-transform: uppercase; letter-spacing: 3px;
        text-decoration: none; border: 2px solid #d4a017; position: relative; overflow: hidden;
        transition: all 0.4s ease;
    }
    .btn-enquire:hover { background: #d4a017; color: #000; box-shadow: 0 0 30px rgba(212, 160, 23, 0.4); }

    /* RESPONSIVE */
    @media (max-width: 1000px) {
        .glass-wrapper { padding: 30px; border-radius: 20px; }
        .single-product-grid { grid-template-columns: 1fr; gap: 50px; }
        .banner-title { font-size: 3.5rem; }
        .sp-content h2 { font-size: 2.5rem; }
        .benefits-wrapper { padding-left: 30px; border-left: 2px solid rgba(255,255,255,0.1); }
        .dynamic-svg-layer { display: none; }
        .anchor-dot { display: none; }
        .benefit-item { opacity: 1; filter: blur(0); transform: none; margin-bottom: 30px; }
        .banner-scroll-text { font-size: 25vw; }
    }
    @keyframes textFocusIn { 0% { filter: blur(12px); opacity: 0; } 100% { filter: blur(0px); opacity: 1; } }
</style>

<div class="banner-wrapper">
    <img src="../assets/images/bannerproduct.avif" alt="Banner" style="width: 100%; height: auto; display: block;">
    <div class="banner-scroll-text" id="bgText"><?php echo $bannerText; ?></div>
    <h1 class="banner-title"><?php echo $categoryName; ?></h1> 
    <div class="vignette-overlay"></div>
</div>

<section class="product-bg-section">
    <div class="container">
        
        <div class="glass-wrapper">
            
            <div style="margin-bottom: 30px; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; font-weight: 600;">
                <a href="../all-products.php" style="color: rgba(255,255,255,0.6); text-decoration: none;">Products</a> 
                <span style="color: #666; margin: 0 10px;">/</span>
                <span style="color: #d4a017;"><?php echo $productName; ?></span>
            </div>

            <div class="single-product-grid">
                
                <div class="left-col">
                    <div class="sp-image-box">
                        <img src="<?php echo $imagePath; ?>" alt="<?php echo $productName; ?>">
                    </div>

                    <div class="benefits-wrapper" id="benefitsWrapper">
                        <svg class="dynamic-svg-layer">
                            <defs>
                                <linearGradient id="goldGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" style="stop-color:#d4a017;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#f8e71c;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <path id="ghostPath" class="path-bg" />
                            <path id="goldPath" class="path-active" />
                        </svg>
                        
                        <div id="glowTip" class="glowing-tip"></div>

                        <div class="benefit-item">
                            <div class="anchor-dot"></div>
                            <div class="benefit-box">
                                <h4>High Curcumin</h4>
                                <p>Guaranteed 3% - 5% curcumin content for maximum potency.</p>
                            </div>
                        </div>

                        <div class="benefit-item">
                            <div class="anchor-dot"></div>
                            <div class="benefit-box">
                                <h4>Lab Certified</h4>
                                <p>Tested for Sudan Dye, Aflatoxin, and Salmonella compliance.</p>
                            </div>
                        </div>

                        <div class="benefit-item">
                            <div class="anchor-dot"></div>
                            <div class="benefit-box">
                                <h4>Cold Ground</h4>
                                <p>Processed at low temperatures to retain volatile essential oils.</p>
                            </div>
                        </div>

                        <div class="benefit-item">
                            <div class="anchor-dot"></div>
                            <div class="benefit-box">
                                <h4>Export Grade</h4>
                                <p>Triple-layer packaging ensures freshness for up to 18 months.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sp-content">
                    <h2><?php echo $productName; ?></h2>
                    <div class="sp-short-desc"><?php echo $shortDesc; ?></div>
                    <div class="sp-full-desc"><?php echo $fullDesc; ?></div>

                    <h4 style="color: #fff; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 20px;">Specifications</h4>
                    <table class="spec-table">
                        <?php foreach($specs as $key => $value): ?>
                        <tr><th><?php echo $key; ?></th><td><?php echo $value; ?></td></tr>
                        <?php endforeach; ?>
                    </table>

                    <a href="../contact-us.php?product=<?php echo urlencode($productName); ?>" class="btn-enquire">Request Quote</a>
                </div>

            </div>
        </div> 
        </div>
</section>

<script>
    // 1. PARALLAX TEXT
    window.addEventListener('scroll', () => {
        const bgText = document.getElementById('bgText');
        if(bgText) bgText.style.transform = `translate(calc(-50% + ${window.scrollY * 0.4}px), -50%)`;
    });

    // 2. DYNAMIC PATH GENERATOR & SCROLL ANIMATION
    document.addEventListener("DOMContentLoaded", () => {
        const wrapper = document.getElementById("benefitsWrapper");
        const dots = document.querySelectorAll(".anchor-dot");
        const ghostPath = document.getElementById("ghostPath");
        const goldPath = document.getElementById("goldPath");
        const glowTip = document.getElementById("glowTip");
        const items = document.querySelectorAll(".benefit-item");

        if(window.innerWidth < 1000) return; 

        function buildPath() {
            if(dots.length === 0) return;
            const wrapRect = wrapper.getBoundingClientRect();
            let d = `M 20 -20 `; 

            dots.forEach((dot, index) => {
                const rect = dot.getBoundingClientRect();
                const x = (rect.left - wrapRect.left) + (rect.width / 2);
                const y = (rect.top - wrapRect.top) + (rect.height / 2);

                if(index === 0) {
                     d += `L ${x} ${y} `; 
                } else {
                     d += `C 20 ${y - 40}, ${x} ${y - 40}, ${x} ${y} `;
                }
            });

            const lastDot = dots[dots.length - 1].getBoundingClientRect();
            const lastY = (lastDot.top - wrapRect.top) + 100;
            d += `L 20 ${lastY}`;

            ghostPath.setAttribute("d", d);
            goldPath.setAttribute("d", d);
        }

        buildPath();
        window.addEventListener("resize", buildPath);

        const pathLength = goldPath.getTotalLength();
        goldPath.style.strokeDasharray = pathLength;
        goldPath.style.strokeDashoffset = pathLength;

        function onScroll() {
            const rect = wrapper.getBoundingClientRect();
            const winH = window.innerHeight;
            
            const start = winH * 0.8;
            const end = winH * 0.2;
            const height = rect.height;

            let progress = (start - rect.top) / (start - end + (height/2));
            progress = Math.max(0, Math.min(1, progress));

            const drawOffset = pathLength - (pathLength * progress);
            goldPath.style.strokeDashoffset = drawOffset;

            if(progress > 0 && progress < 1) {
                const point = goldPath.getPointAtLength(pathLength * progress);
                glowTip.style.opacity = 1;
                glowTip.style.left = `${point.x}px`;
                glowTip.style.top = `${point.y}px`;
            } else {
                glowTip.style.opacity = 0;
            }

            items.forEach((item, i) => {
                const itemThreshold = (i + 0.2) / items.length;
                if(progress > itemThreshold) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });
        }

        let ticking = false;
        window.addEventListener("scroll", () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    onScroll();
                    ticking = false;
                });
                ticking = true;
            }
        });
        
        onScroll();
    });
</script>

<?php include '../footer.php'; ?>