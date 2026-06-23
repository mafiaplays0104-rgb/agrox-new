<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: KNOWLEDGE CENTER HUB
// ----------------------------------------------------------------
$pageTitle = "Knowledge Center | B2B Agricultural Trade Intelligence | AgroX";
$metaDescription = "AgroX Knowledge Center — buyer guides, export intelligence, compliance resources, market reports, and trade education for international agricultural procurement professionals.";

$path = '../'; 
$prodPath = '';

include '../header.php'; 
?>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    body { font-family: 'Poppins', sans-serif; background-color: #050505; color: #e0e0e0; margin: 0; overflow-x: hidden; line-height: 1.6; }
    
    h1, h2, h3, h4, .banner-title, .banner-scroll-text, .hub-card-label, .section-eyebrow { 
        font-family: 'Bebas Neue', sans-serif; 
        letter-spacing: 1.5px; 
        text-transform: uppercase;
    }
    .text-gold { color: #d4a017; }

    /* --- PARALLAX BANNER --- */
    .banner-wrapper { position: relative; width: 100%; height: 50vh; min-height: 220px; overflow: hidden; background-color: #0a0a0a; }
    .banner-img-responsive { width: 100%; height: 100%; display: block; object-fit: cover; opacity: 0.45; }
    .banner-title {
        position: absolute; top: 62%; left: 50%; transform: translate(-50%, -50%);
        z-index: 5; margin: 0; font-size: 8rem; color: #fff; text-align: center; width: 100%;
        text-shadow: 0 10px 40px rgba(0,0,0,0.9);
    }
    .banner-subtitle {
        position: absolute; top: 78%; left: 50%; transform: translate(-50%, -50%);
        z-index: 5; font-family: 'Poppins', sans-serif; font-size: 0.95rem; font-weight: 300;
        color: rgba(255,255,255,0.55); letter-spacing: 3px; text-transform: uppercase; text-align: center;
        white-space: nowrap;
    }
    .banner-scroll-text {
        position: absolute; top: 62%; left: 50%; transform: translate(-50%, -50%);
        z-index: 1; font-size: 22vw; line-height: 1; opacity: 0.5;
        color: transparent; -webkit-text-stroke: 1.5px rgba(255,255,255,0.8); pointer-events: none;
    }
    .vignette-overlay {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: radial-gradient(ellipse at center, rgba(0,0,0,0.3) 0%, #050505 100%);
        pointer-events: none; z-index: 2;
    }

    /* --- MAIN CONTENT --- */
    #main-content { position: relative; z-index: 10; background: #050505; padding: 90px 0 120px; }
    .container { max-width: 1200px; margin: 0 auto; padding: 0 30px; }

    /* --- SECTION HEADER --- */
    .section-eyebrow { font-size: 0.75rem; color: #d4a017; letter-spacing: 3px; margin-bottom: 12px; display: block; }
    .section-headline { font-family: 'Bebas Neue', sans-serif; font-size: 4rem; color: #fff; margin: 0 0 16px; line-height: 1; }
    .section-desc { color: #888; font-size: 1rem; font-weight: 300; line-height: 1.7; max-width: 560px; margin-bottom: 60px; }

    /* --- HUB GRID --- */
    .hub-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-bottom: 80px;
    }

    .hub-card {
        background: rgba(18, 18, 18, 0.7);
        border: 1px solid rgba(255,255,255,0.06);
        border-radius: 14px;
        padding: 36px 30px;
        text-decoration: none;
        display: block;
        position: relative;
        overflow: hidden;
        transition: border-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hub-card::before {
        content: '';
        position: absolute; top: 0; left: 0; right: 0; height: 2px;
        background: linear-gradient(90deg, transparent, rgba(212,160,23,0), transparent);
        transition: background 0.4s ease;
    }
    .hub-card:hover {
        border-color: rgba(212,160,23,0.2);
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.4);
    }
    .hub-card:hover::before { background: linear-gradient(90deg, transparent, rgba(212,160,23,0.5), transparent); }
    .hub-card:active { transform: scale(0.98); }

    .hub-card-icon {
        font-size: 1.6rem;
        color: rgba(212,160,23,0.6);
        margin-bottom: 18px;
        display: block;
        transition: color 0.3s;
    }
    .hub-card:hover .hub-card-icon { color: #d4a017; }

    .hub-card-label {
        font-size: 1.4rem;
        color: #fff;
        margin: 0 0 10px;
        display: block;
    }
    .hub-card-desc {
        font-size: 0.88rem;
        color: #777;
        font-weight: 300;
        line-height: 1.65;
        margin-bottom: 20px;
    }
    .hub-card-link {
        font-family: 'Poppins', sans-serif;
        font-size: 0.78rem;
        font-weight: 600;
        color: #d4a017;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        display: flex;
        align-items: center;
        gap: 6px;
        transition: gap 0.25s ease;
    }
    .hub-card:hover .hub-card-link { gap: 10px; }

    /* --- FEATURED ROW (wide card) --- */
    .hub-grid-featured {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .hub-card.featured {
        padding: 44px 40px;
        background: rgba(20,20,20,0.8);
        border-color: rgba(212,160,23,0.1);
    }
    .hub-card.featured .hub-card-label { font-size: 2.2rem; }
    .hub-card.featured .hub-card-desc { font-size: 0.95rem; color: #999; }

    /* --- RESPONSIVE --- */
    @media (max-width: 900px) { .hub-grid, .hub-grid-featured { grid-template-columns: 1fr 1fr; } }
    @media (max-width: 600px) {
        .hub-grid, .hub-grid-featured { grid-template-columns: 1fr; }
        .banner-title { font-size: 4.5rem; }
        .banner-scroll-text { font-size: 28vw; }
        .section-headline { font-size: 2.8rem; }
    }
</style>

<div class="banner-wrapper" id="bannerContainer">
    <img src="../assets/images/bannerproduct.avif" alt="AgroX Knowledge Center" class="banner-img-responsive">
    <div class="banner-scroll-text" id="bgText">KNOW</div>
    <h1 class="banner-title" id="fgText">KNOWLEDGE CENTER</h1>
    <div class="banner-subtitle">Trade Intelligence · Buyer Education · Industry Authority</div>
    <div class="vignette-overlay"></div>
</div>

<section id="main-content">
    <div class="container">

        <span class="section-eyebrow">The AgroX Knowledge Platform</span>
        <h2 class="section-headline">EVERYTHING A <span class="text-gold">GLOBAL BUYER</span><br>NEEDS TO KNOW</h2>
        <p class="section-desc">From procurement guides and market intelligence to compliance resources and trade education — this is your complete reference center for sourcing organic agricultural products from India.</p>

        <!-- Featured Row -->
        <div class="hub-grid-featured">
            <a href="../buyer-guides/index.php" class="hub-card featured">
                <span class="hub-card-icon"><i class="fa-solid fa-book-open"></i></span>
                <span class="hub-card-label">BUYER GUIDES</span>
                <p class="hub-card-desc">End-to-end procurement documentation for international importers. Specification sheets, incoterms breakdowns, sampling protocols, and packaging compliance by destination market.</p>
                <span class="hub-card-link">Explore Buyer Guides <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="../market-reports/index.php" class="hub-card featured">
                <span class="hub-card-icon"><i class="fa-solid fa-chart-bar"></i></span>
                <span class="hub-card-label">MARKET REPORTS</span>
                <p class="hub-card-desc">Seasonal crop pricing indices, harvest forecasts, and route advisories for Indian agricultural exports.</p>
                <span class="hub-card-link">View Reports <i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </div>

        <!-- 3-Column Grid -->
        <div class="hub-grid">
            <a href="../export-process.php" class="hub-card">
                <span class="hub-card-icon"><i class="fa-solid fa-route"></i></span>
                <span class="hub-card-label">EXPORT PROCESS</span>
                <p class="hub-card-desc">11-step chronological workflow from your initial inquiry to final delivery at your destination port.</p>
                <span class="hub-card-link">View Process <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="../quality-control.php" class="hub-card">
                <span class="hub-card-icon"><i class="fa-solid fa-circle-check"></i></span>
                <span class="hub-card-label">QUALITY CONTROL</span>
                <p class="hub-card-desc">7-stage quality assurance system from farm-level sourcing through final dispatch inspection and lab clearance.</p>
                <span class="hub-card-link">Learn Standards <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="../certifications.php" class="hub-card">
                <span class="hub-card-icon"><i class="fa-solid fa-award"></i></span>
                <span class="hub-card-label">CERTIFICATIONS</span>
                <p class="hub-card-desc">NPOP, USDA Organic, EU Organic, ISO 22000, HACCP, FSSAI, Halal, Kosher — every credential verified.</p>
                <span class="hub-card-link">View Credentials <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="../export-intelligence/index.php" class="hub-card">
                <span class="hub-card-icon"><i class="fa-solid fa-chart-line"></i></span>
                <span class="hub-card-label">EXPORT INTELLIGENCE</span>
                <p class="hub-card-desc">HS codes, tariff schedules, commodity pricing trends, and trade volume data for Indian agricultural exports.</p>
                <span class="hub-card-link">Access Intelligence <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="../trade-academy/index.php" class="hub-card">
                <span class="hub-card-icon"><i class="fa-solid fa-graduation-cap"></i></span>
                <span class="hub-card-label">TRADE ACADEMY</span>
                <p class="hub-card-desc">Educational modules on incoterms, letter of credit, customs clearance, and agricultural import compliance.</p>
                <span class="hub-card-link">Start Learning <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="../compliance-center/index.php" class="hub-card">
                <span class="hub-card-icon"><i class="fa-solid fa-shield-halved"></i></span>
                <span class="hub-card-label">COMPLIANCE CENTER</span>
                <p class="hub-card-desc">Regulatory requirements, phytosanitary standards, and import documentation library for 50+ destination markets.</p>
                <span class="hub-card-link">Review Standards <i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </div>

        <!-- Bottom quick links row -->
        <div class="hub-grid" style="grid-template-columns: repeat(3, 1fr); margin-bottom: 0;">
            <a href="../why-agrox.php" class="hub-card">
                <span class="hub-card-icon"><i class="fa-solid fa-star"></i></span>
                <span class="hub-card-label">WHY AGROX</span>
                <p class="hub-card-desc">Why 200+ international buyers choose AgroX as their preferred direct-source agricultural partner.</p>
                <span class="hub-card-link">Discover Why <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="../faq.php" class="hub-card">
                <span class="hub-card-icon"><i class="fa-solid fa-circle-question"></i></span>
                <span class="hub-card-label">FAQS</span>
                <p class="hub-card-desc">Clear answers to the most common procurement, shipping, quality, and compliance questions from B2B buyers.</p>
                <span class="hub-card-link">Read FAQs <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="../contact-us.php?type=quote" class="hub-card">
                <span class="hub-card-icon"><i class="fa-solid fa-envelope"></i></span>
                <span class="hub-card-label">REQUEST A QUOTE</span>
                <p class="hub-card-desc">Ready to source? Submit your product requirements, volume, and destination and receive a qualified export quotation.</p>
                <span class="hub-card-link">Get Quote <i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </div>

    </div>
</section>

<script>
    window.addEventListener('scroll', () => {
        const scrollPosition = window.scrollY;
        const bgText = document.getElementById('bgText');
        const fgText = document.getElementById('fgText');
        if(bgText) bgText.style.transform = `translate(calc(-50% + ${scrollPosition * 0.4}px), -50%)`;
        if(fgText) fgText.style.transform = `translate(calc(-50% - ${scrollPosition * 0.3}px), -50%)`;
    });

    // Card entrance animation
    const cards = document.querySelectorAll('.hub-card');
    const cardObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = entry.target.classList.contains('featured') ? 'translateY(0)' : 'translateY(0)';
                }, i * 60);
                cardObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    cards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.5s ease, transform 0.5s ease, border-color 0.3s ease, box-shadow 0.3s ease';
        cardObserver.observe(card);
    });
</script>

<?php include '../footer.php'; ?>
