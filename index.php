<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: HOME
// ----------------------------------------------------------------
$pageTitle = "AGROX | Organic Exports India - Premium Spices & Dry Fruits";

// SEO DATA
$metaDescription = "AGROX Organic Exports connects India's pristine organic farms to the world. We export certified organic spices, dry fruits, and essential oils globally.";
$canonicalURL = "https://www.theagroxgroup.com/"; 
$metaKeywords = "organic exports india, agrox group, certified organic spices, dry fruits exporter, indian spices, bulk organic supplier";

// SOCIAL SHARE DATA
$ogTitle = "AGROX - Cultivating Trust, Exporting Purity";
$ogDescription = "From farm to world. Discover our range of certified organic spices, fruits, and oils.";
$ogImage = "https://www.theagroxgroup.com/assets/images/bannerproduct.avif"; 

include 'header.php'; 
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://www.theagroxgroup.com/#organization",
      "name": "AGROX Organic Exports",
      "url": "<?php echo $canonicalURL; ?>",
      "logo": {
        "@type": "ImageObject",
        "url": "https://www.theagroxgroup.com/assets/images/logo.png",
        "width": 600,
        "height": 60
      },
      "description": "Leading exporter of certified organic spices, dry fruits, and agricultural products from India.",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-73200-40684",
        "contactType": "sales",
        "areaServed": "Global"
      },
      "sameAs": [
        "https://www.facebook.com/agroxgroup",
        "https://www.instagram.com/agroxgroup",
        "https://www.linkedin.com/company/agroxgroup"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://www.theagroxgroup.com/#website",
      "url": "<?php echo $canonicalURL; ?>",
      "name": "AGROX Organic Exports",
      "publisher": { "@id": "https://www.theagroxgroup.com/#organization" }
    }
  ]
}
</script>

<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>

<style>
    /* --- UTILITY CLASSES --- */
    .visually-hidden {
        position: absolute; width: 1px; height: 1px; margin: -1px;
        padding: 0; overflow: hidden; clip: rect(0, 0, 0, 0); border: 0;
    }
    .text-serif { font-family: 'Times New Roman', serif; }
    .text-serif-lg { font-family: 'Times New Roman', serif; font-size: 3.5rem; }
    .text-accent { color: var(--accent, #d4a017); }
    .text-emoji { font-size: 1.1rem; }
    .sub-desc-centered { color: #ccc; max-width: 600px; margin: 0 auto; }

    /* Parallax Stage */
    #stage {
        position: fixed; top: 50%; left: 50%;
        transform: translate(-50%, -50%);
        width: 1920px; height: 1080px;
        pointer-events: none; z-index: -1;
    }

    /* Glide Scroll Fixes */
    html.lenis { height: auto; }
    .lenis.lenis-smooth { scroll-behavior: auto; }
    .lenis.lenis-smooth [data-lenis-prevent] { overscroll-behavior: contain; }
    .lenis.lenis-stopped { overflow: hidden; }

    /* --- MANDATORY FIXES FOR FOOTER VISIBILITY --- */
    #main-content {
        position: relative;
        z-index: 10;
        background: #0b0b0b;
        overflow: visible;
    }

    footer {
        position: relative;
        z-index: 20;
        display: block !important;
        visibility: visible !important;
        background: #050505;
        clear: both;
    }

    /* --- HERO REDESIGN STYLES --- */
    .hero-eyebrow {
        font-family: 'Poppins', sans-serif;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 5px;
        color: #d4a017;
        margin-bottom: 24px;
        display: block;
        line-height: 1;
    }
    .hero-editorial-cta {
        transition: transform 0.2s cubic-bezier(0.25, 1, 0.5, 1), color 0.4s var(--anim-ease) !important;
    }
    .hero-editorial-cta:active {
        transform: scale(0.97) !important;
    }
    .story-cta-btn:active, .harvest-explore-btn:active, .btn-spotlight:active {
        transform: scale(0.97);
    }

    /* --- STORY PILLARS EDITORIAL LAYOUT --- */
    .story-pillars-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 60px;
        width: 100%;
        box-sizing: border-box;
    }
    
    .pillar-card {
        background: rgba(18, 28, 21, 0.35);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-top: 1px solid rgba(212, 160, 23, 0.18);
        border-radius: 16px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: transform 0.4s cubic-bezier(0.23, 1, 0.32, 1), border-color 0.4s ease, box-shadow 0.4s ease;
        position: relative;
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
    }
    
    .pillar-card:hover {
        border-color: rgba(212, 160, 23, 0.4);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5), 0 0 20px rgba(212, 160, 23, 0.08);
        transform: translateY(-8px);
    }
    
    .pillar-image-wrap {
        width: 100%;
        height: 200px;
        position: relative;
        overflow: hidden;
    }
    
    .pillar-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.65;
        transition: transform 0.8s cubic-bezier(0.23, 1, 0.32, 1), opacity 0.4s ease;
    }
    
    .pillar-card:hover .pillar-img {
        transform: scale(1.08);
        opacity: 0.9;
    }
    
    .pillar-number {
        position: absolute;
        top: 15px;
        right: 20px;
        font-family: 'Bebas Neue', sans-serif;
        font-size: 4.5rem;
        line-height: 1;
        color: transparent;
        -webkit-text-stroke: 1.5px rgba(212, 160, 23, 0.25);
        z-index: 2;
        pointer-events: none;
        user-select: none;
        transition: -webkit-text-stroke 0.4s ease;
    }
    
    .pillar-card:hover .pillar-number {
        -webkit-text-stroke: 1.5px rgba(212, 160, 23, 0.75);
    }
    
    .pillar-content {
        padding: 24px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
    
    .pillar-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 1.2rem;
        color: #ffffff;
        margin: 0 0 10px 0;
        text-shadow: none;
    }
    
    .pillar-desc {
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        font-size: 0.85rem;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.65);
        margin: 0;
    }
    
    @media (min-width: 769px) {
        .story-pillars-grid .pillar-card:nth-child(2) {
            transform: translateY(30px);
        }
        .story-pillars-grid .pillar-card:nth-child(2):hover {
            transform: translateY(22px);
        }
        .story-pillars-grid {
            padding-bottom: 35px;
        }
    }
    
    @media (max-width: 768px) {
        .story-pillars-grid {
            grid-template-columns: 1fr;
            gap: 24px;
        }
        .story-pillars-grid .pillar-card:nth-child(2) {
            transform: none;
        }
    }

    /* --- BENTO PRODUCTS GRID --- */
    .products-cards-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: auto auto;
        gap: 24px;
        width: 100%;
        margin-bottom: 40px;
    }
    
    .product-category-card {
        aspect-ratio: unset;
    }
    
    .bento-spices {
        grid-column: span 2;
        grid-row: span 2;
        min-height: 480px;
    }
    
    .bento-herbs {
        grid-column: span 2;
        min-height: 228px;
    }
    
    .bento-dry-fruits {
        grid-column: span 1;
        min-height: 228px;
    }
    
    .bento-seeds {
        grid-column: span 1;
        min-height: 228px;
    }
    
    .bento-pulses {
        grid-column: span 4;
        min-height: 200px;
    }
    
    .bento-pulses .card-content {
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        text-align: left;
        padding: 30px 40px;
    }
    
    .bento-pulses .card-icon-circle {
        margin-bottom: 0;
        margin-right: 24px;
    }
    
    .bento-pulses .card-title {
        margin-bottom: 0;
        margin-right: auto;
    }
    
    @media (max-width: 1024px) {
        .products-cards-grid {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 16px !important;
        }
        .bento-spices, .bento-herbs, .bento-dry-fruits, .bento-seeds, .bento-pulses {
            grid-column: span 1 !important;
            grid-row: span 1 !important;
            aspect-ratio: 3 / 4 !important;
            min-height: unset !important;
        }
        .bento-pulses .card-content {
            flex-direction: column !important;
            justify-content: flex-end !important;
            align-items: center !important;
            text-align: center !important;
            padding: 24px !important;
        }
        .bento-pulses .card-icon-circle {
            margin-bottom: 20px !important;
            margin-right: 0 !important;
        }
        .bento-pulses .card-title {
            margin-bottom: 12px !important;
            margin-right: 0 !important;
        }
    }
    
    @media (max-width: 580px) {
        .products-cards-grid {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 10px !important;
        }
        .bento-spices, .bento-herbs, .bento-dry-fruits, .bento-seeds, .bento-pulses {
            aspect-ratio: 4 / 5 !important;
        }
    }

    /* --- ORIGIN MAP & STATS --- */
    .origin-section {
        position: relative;
        min-height: 100vh;
        width: 100%;
        background-color: #0b0b0b !important;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 120px 0 60px 0;
        z-index: 1;
    }
    
    .origin-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        overflow: hidden;
        pointer-events: none;
    }
    
    .origin-bg-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.35;
        filter: brightness(0.3);
    }
    
    .origin-bg-overlay-top {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, #0b0b0b 5%, transparent 50%, transparent 100%);
    }
    
    .origin-bg-overlay-left {
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(11,11,11,0.7) 0%, transparent 70%);
    }
    
    .origin-watermark {
        position: absolute;
        top: 15%;
        left: 0;
        width: 100%;
        overflow: hidden;
        pointer-events: none;
        opacity: 0.03;
        z-index: 0;
        user-select: none;
    }
    
    .origin-watermark h2 {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 25vw;
        color: #ffffff;
        white-space: nowrap;
        transform: translateX(-5%);
        line-height: 1;
        margin: 0;
    }
    
    .origin-content-container {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 4%;
        display: flex;
        flex-direction: column;
        min-height: calc(100vh - 180px);
        justify-content: space-between;
    }
    
    .origin-main-flex {
        display: flex;
        gap: 60px;
        align-items: center;
        padding: 40px 0;
        flex-wrap: wrap;
    }
    
    .origin-left-col {
        flex: 1.2;
        min-width: 320px;
        max-width: 650px;
    }
    
    .origin-right-col {
        flex: 1;
        min-width: 320px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }
    
    .origin-subtitle {
        font-family: 'Poppins', sans-serif;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 5px;
        color: #d4a017;
        margin-bottom: 20px;
        display: block;
        line-height: 1;
    }
    
    .origin-title {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 3.5rem;
        line-height: 1.05;
        color: #ffffff;
        margin-bottom: 24px;
        text-shadow: none;
    }
    
    .origin-description {
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        font-size: 0.95rem;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 35px;
        max-width: 520px;
    }
    
    .origin-cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 15px;
        text-decoration: none;
        color: #d4a017;
        font-family: 'Bebas Neue', sans-serif;
        font-size: 1.2rem;
        letter-spacing: 2px;
        transition: transform 0.2s cubic-bezier(0.25, 1, 0.5, 1);
        cursor: pointer;
    }
    
    .origin-cta-btn:active {
        transform: scale(0.97) !important;
    }
    
    .origin-cta-arrow {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border: 1px solid #d4a017;
        border-radius: 50%;
        transition: background 0.3s, color 0.3s;
    }
    
    .origin-cta-btn:hover .origin-cta-arrow {
        background: #d4a017;
        color: #0b0b0b;
    }
    
    .origin-cta-btn:hover .origin-cta-arrow svg {
        transform: translateX(3px);
    }
    
    .origin-cta-arrow svg {
        width: 16px;
        height: 16px;
        stroke: currentColor;
        transition: transform 0.3s;
    }
    
    .origin-features-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
        margin-top: 48px;
    }
    
    .origin-card {
        background: rgba(30, 32, 29, 0.4);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-top: 1px solid rgba(212, 160, 23, 0.15);
        padding: 24px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: border-color 0.3s ease, background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
        cursor: pointer;
        height: 100%;
        border-radius: 12px;
    }
    
    .origin-card:hover {
        border-color: #d4a017;
        background: rgba(30, 32, 29, 0.65);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }
    
    .origin-card:active {
        transform: scale(0.97) !important;
    }
    
    .origin-card .text-tertiary {
        color: #d4a017;
        margin-bottom: 24px;
    }
    
    .origin-card h3 {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 1.15rem;
        letter-spacing: 1px;
        margin: 0 0 6px 0;
        color: #ffffff;
        text-shadow: none;
    }
    
    .origin-card p {
        font-family: 'Poppins', sans-serif;
        font-size: 0.75rem;
        font-weight: 300;
        line-height: 1.4;
        color: rgba(255, 255, 255, 0.6);
        margin: 0;
    }
    
    .origin-map-wrapper {
        position: relative;
        width: 100%;
        max-width: 500px;
        aspect-ratio: 1;
    }
    
    .origin-map-glow {
        position: relative;
        width: 100%;
        height: 100%;
    }
    
    .origin-map-img {
        width: 100%;
        height: auto;
        filter: grayscale(100%) brightness(0.65) contrast(1.15);
        transition: filter 0.5s ease;
    }
    
    .origin-map-wrapper:hover .origin-map-img {
        filter: grayscale(70%) brightness(0.75) contrast(1.15);
    }
    
    /* Interactive Map Pins */
    .map-pin-group {
        position: absolute;
        z-index: 10;
    }
    
    .map-pin-pulse {
        width: 12px;
        height: 12px;
        background-color: #d4a017;
        border-radius: 50%;
        position: relative;
        cursor: pointer;
        box-shadow: 0 0 8px #d4a017;
    }
    
    .map-pin-pulse::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #d4a017;
        border-radius: 50%;
        animation: pinPulse 2s infinite ease-out;
        box-shadow: 0 0 8px #d4a017;
    }
    
    @keyframes pinPulse {
        0% { transform: scale(1); opacity: 0.8; }
        100% { transform: scale(3.5); opacity: 0; }
    }
    
    .map-callout-box {
        position: absolute;
        background: rgba(15, 17, 14, 0.95);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border: 1px solid rgba(212, 160, 23, 0.4);
        border-radius: 6px;
        padding: 10px 16px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.85);
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
        z-index: 20;
    }
    
    .map-pin-group:hover .map-callout-box {
        opacity: 1;
        pointer-events: auto;
    }
    
    /* Pin positions */
    .map-pin-group.rajasthan { top: 28%; left: 22%; }
    .map-pin-group.gujarat { top: 48%; left: 12%; }
    .map-pin-group.bihar { top: 38%; left: 65%; }
    .map-pin-group.assam { top: 42%; left: 85%; }
    .map-pin-group.kerala { top: 82%; left: 40%; }
    .map-pin-group.tamilnadu { top: 78%; left: 55%; }
    
    /* Callout directions */
    .map-pin-group.rajasthan .map-callout-box {
        bottom: 20px;
        left: 50%;
        transform: translate(-50%, 10px);
    }
    .map-pin-group.rajasthan:hover .map-callout-box {
        transform: translate(-50%, 0);
    }
    
    .map-pin-group.gujarat .map-callout-box,
    .map-pin-group.kerala .map-callout-box {
        right: 20px;
        top: 50%;
        transform: translate(-10px, -50%);
    }
    .map-pin-group.gujarat:hover .map-callout-box,
    .map-pin-group.kerala:hover .map-callout-box {
        transform: translate(0, -50%);
    }
    
    .map-pin-group.bihar .map-callout-box,
    .map-pin-group.assam .map-callout-box,
    .map-pin-group.tamilnadu .map-callout-box {
        left: 20px;
        top: 50%;
        transform: translate(10px, -50%);
    }
    .map-pin-group.bihar:hover .map-callout-box,
    .map-pin-group.assam:hover .map-callout-box,
    .map-pin-group.tamilnadu:hover .map-callout-box {
        transform: translate(0, -50%);
    }
    
    /* Callout content styles */
    .callout-content-vertical {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    .callout-content-horizontal {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .callout-title {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 1.05rem;
        letter-spacing: 1.5px;
        color: #d4a017;
        display: flex;
        align-items: center;
        gap: 4px;
        white-space: nowrap;
    }
    
    .callout-desc {
        font-family: 'Poppins', sans-serif;
        font-size: 0.75rem;
        font-weight: 300;
        color: rgba(255, 255, 255, 0.7);
        text-transform: uppercase;
        display: block;
        white-space: nowrap;
    }
    
    .callout-line-vertical {
        width: 1px;
        height: 12px;
        background: rgba(212, 160, 23, 0.4);
        margin-top: 6px;
    }
    
    .callout-line-horizontal {
        width: 16px;
        height: 1px;
        background: rgba(212, 160, 23, 0.4);
    }
    
    .callout-text-right { text-align: right; }
    .callout-text-left { text-align: left; }
    
    /* Stats Layout */
    .origin-bottom-row {
        width: 100%;
        display: flex;
        justify-content: flex-end;
        margin-top: 40px;
    }
    
    .origin-stats-row {
        display: flex;
        justify-content: space-between;
        width: 100%;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        padding-top: 40px;
        flex-wrap: wrap;
        gap: 30px;
    }
    
    .origin-stat-col {
        flex: 1;
        min-width: 180px;
        display: flex;
        align-items: center;
        gap: 20px;
    }
    
    .origin-stat-num {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 3.5rem;
        line-height: 1;
        color: #d4a017;
        text-shadow: 0 4px 15px rgba(212, 160, 23, 0.15);
    }
    
    .origin-stat-label-wrap {
        display: flex;
        flex-direction: column;
    }
    
    .origin-stat-label {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 1rem;
        letter-spacing: 1.5px;
        color: #ffffff;
        line-height: 1.2;
    }
    
    .origin-stat-desc {
        font-family: 'Poppins', sans-serif;
        font-size: 0.75rem;
        font-weight: 300;
        color: rgba(255, 255, 255, 0.5);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-top: 2px;
    }
    
    @media (min-width: 769px) {
        .origin-stat-col:not(:first-child) {
            border-left: 1px solid rgba(255, 255, 255, 0.08);
            padding-left: 30px;
        }
    }
    
    /* --- PROCESS SECTION --- */
    .process-refined-section {
        position: relative;
        min-height: 100vh;
        width: 100%;
        background-color: #050505;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 100px 0 50px 0;
        z-index: 1;
    }
    
    .process-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        overflow: hidden;
        pointer-events: none;
    }
    
    .process-bg-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.25;
        filter: grayscale(20%);
    }
    
    .process-bg-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at center, transparent 20%, #050505 90%);
    }
    
    .process-watermark {
        position: absolute;
        top: 8%;
        left: 5%;
        opacity: 0.02;
        pointer-events: none;
        user-select: none;
        z-index: 0;
    }
    
    .process-watermark .watermark-text {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 20vw;
        color: #ffffff;
        letter-spacing: 5px;
        line-height: 1;
    }
    
    .process-header {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 4%;
        margin-bottom: 50px;
    }
    
    .process-header-content {
        max-width: 600px;
    }
    
    .process-subtitle {
        font-family: 'Poppins', sans-serif;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 5px;
        color: #d4a017;
        margin-bottom: 15px;
        display: block;
        line-height: 1;
    }
    
    .process-title {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 3.5rem;
        line-height: 1.1;
        color: #ffffff;
        margin-bottom: 20px;
        text-shadow: none;
    }
    
    .process-description {
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        font-size: 0.95rem;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.6);
        margin: 0;
    }
    
    .process-grid-container {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 4%;
        flex-grow: 1;
        display: flex;
        align-items: center;
    }
    
    .process-grid {
        display: flex;
        width: 100%;
        height: 550px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        overflow: hidden;
        background: rgba(11, 11, 11, 0.5);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        position: relative;
    }
    
    .process-step-col {
        flex: 1;
        position: relative;
        height: 100%;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 40px 30px;
        border-right: 1px solid rgba(255, 255, 255, 0.05);
        transition: flex 0.6s cubic-bezier(0.25, 1, 0.5, 1), background-color 0.3s;
        text-decoration: none;
    }
    
    .process-step-col:last-child {
        border-right: none;
    }
    
    .process-step-col:hover {
        flex: 1.6;
        background: rgba(18, 28, 21, 0.2);
    }
    
    .step-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        overflow: hidden;
        opacity: 0.25;
        transition: opacity 0.5s ease, transform 0.8s cubic-bezier(0.25, 1, 0.5, 1);
    }
    
    .process-step-col:hover .step-bg {
        opacity: 0.55;
        transform: scale(1.05);
    }
    
    .step-bg-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .step-bg-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, #050505 15%, rgba(5,5,5,0.4) 60%, transparent 100%);
    }
    
    .step-content {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        gap: 15px;
        transition: transform 0.4s ease;
    }
    
    .step-header {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    
    .step-number {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 3.5rem;
        color: transparent;
        -webkit-text-stroke: 1px rgba(212, 160, 23, 0.4);
        line-height: 1;
        transition: -webkit-text-stroke 0.3s, color 0.3s;
    }
    
    .process-step-col:hover .step-number {
        -webkit-text-stroke: 1px rgba(212, 160, 23, 1);
        color: rgba(212, 160, 23, 0.08);
    }
    
    .step-title {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 1.6rem;
        letter-spacing: 1px;
        color: #ffffff;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .step-icon-wrapper {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #d4a017;
        opacity: 0.6;
        transition: all 0.3s ease;
    }
    
    .process-step-col:hover .step-icon-wrapper {
        border-color: #d4a017;
        opacity: 1;
        background: rgba(212, 160, 23, 0.1);
        transform: rotate(45deg);
    }
    
    .step-icon {
        width: 18px;
        height: 18px;
    }
    
    .step-description {
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        font-size: 0.85rem;
        line-height: 1.5;
        color: rgba(255, 255, 255, 0.6);
        margin: 0;
        max-width: 260px;
        transition: color 0.3s;
    }
    
    .process-step-col:hover .step-description {
        color: rgba(255, 255, 255, 0.95);
    }
    
    /* Self-aligning Timeline Nodes */
    .step-timeline-node {
        position: absolute;
        top: 40%;
        left: 0;
        width: 100%;
        transform: translateY(-50%);
        z-index: 2;
        pointer-events: none;
        opacity: 0.35;
        transition: opacity 0.4s ease;
    }
    
    .process-step-col:hover .step-timeline-node {
        opacity: 0.9;
    }
    
    .node-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #d4a017;
        border: 2px solid #050505;
        box-shadow: 0 0 8px rgba(212, 160, 23, 0.6);
        margin: 0 auto;
        transition: transform 0.3s, background-color 0.3s, box-shadow 0.3s;
    }
    
    .process-step-col:hover .node-dot {
        transform: scale(1.3);
        background-color: #ffffff;
        box-shadow: 0 0 12px rgba(255, 255, 255, 0.9);
    }
    
    .node-line-left {
        position: absolute;
        top: 50%;
        left: 0;
        right: calc(50% + 5px);
        height: 1px;
        background: linear-gradient(90deg, rgba(212, 160, 23, 0) 0%, rgba(212, 160, 23, 0.5) 100%);
        transform: translateY(-50%);
        z-index: -1;
    }
    
    .node-line-right {
        position: absolute;
        top: 50%;
        left: calc(50% + 5px);
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, rgba(212, 160, 23, 0.5) 0%, rgba(212, 160, 23, 0) 100%);
        transform: translateY(-50%);
        z-index: -1;
    }
    
    .process-footer {
        position: relative;
        z-index: 1;
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }
    
    .scroll-explore-mouse {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        opacity: 0.6;
        transition: opacity 0.3s;
    }
    
    .scroll-explore-mouse:hover {
        opacity: 1;
    }
    
    .scroll-explore-mouse .mouse-icon {
        width: 20px;
        height: 32px;
        border: 2px solid #ffffff;
        border-radius: 12px;
        position: relative;
    }
    
    .scroll-explore-mouse .mouse-wheel {
        width: 4px;
        height: 8px;
        background-color: #d4a017;
        border-radius: 2px;
        position: absolute;
        top: 6px;
        left: 50%;
        transform: translateX(-50%);
        animation: scrollWheel 1.5s infinite;
    }
    
    @keyframes scrollWheel {
        0% { top: 6px; opacity: 1; }
        100% { top: 18px; opacity: 0; }
    }
    
    .scroll-explore-mouse .scroll-text {
        font-family: 'Poppins', sans-serif;
        font-size: 0.7rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #ffffff;
    }
    
    .logo-bar-container {
        background-color: rgba(18, 28, 21, 0.15) !important;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-top: 1px solid rgba(255, 255, 255, 0.08) !important;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.02), inset 0 -1px 0 rgba(0, 0, 0, 0.5);
    }
    
    .cert-logo {
        filter: grayscale(100%) brightness(0.65) !important;
        transition: filter 0.4s cubic-bezier(0.25, 1, 0.5, 1), transform 0.4s cubic-bezier(0.25, 1, 0.5, 1) !important;
    }
    
    .cert-logo:hover {
        filter: grayscale(0%) brightness(1.1) drop-shadow(0 0 15px rgba(255, 213, 79, 0.35)) !important;
        transform: scale(1.05);
    }

    /* Responsive Grid Layouts */
    @media (max-width: 1024px) {
        .origin-main-flex {
            flex-direction: column;
            gap: 40px;
        }
        .origin-left-col, .origin-right-col {
            max-width: 100%;
            width: 100%;
        }
        .origin-right-col {
            justify-content: center;
            min-height: unset;
        }
        .origin-title {
            font-size: 3rem;
        }
    }
    
    @media (max-width: 768px) {
        .origin-features-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
        .origin-section {
            padding: 80px 0 40px 0;
        }
        .origin-stats-row {
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            padding-top: 30px;
        }
        .origin-stat-col {
            border-left: none !important;
            padding-left: 0 !important;
        }
        
        .process-refined-section {
            padding: 80px 0 40px 0;
        }
        .process-title {
            font-size: 2.8rem;
        }
        .process-grid {
            display: flex;
            flex-direction: column;
            height: auto;
            gap: 20px;
            background: transparent;
            border: none;
            backdrop-filter: none;
            -webkit-backdrop-filter: none;
        }
        
        .process-step-col {
            flex: none;
            width: 100%;
            height: 180px;
            border-right: none !important;
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            background: rgba(11, 11, 11, 0.6);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            padding: 24px;
        }
        
        .step-timeline-node {
            display: none;
        }
    }
</style>

    <div id="stage">
        <img id="layerTop" class="layer" src="assets/images/top.png" alt="Background Layer">
        <img id="layerMid2" class="layer" src="assets/images/mid2.png" alt="Midground Layer 2">
        <img id="layerMid1" class="layer" src="assets/images/mid1.png" alt="Midground Layer 1">
        <img id="layerBottom" class="layer" src="assets/images/bottom.png" alt="Foreground Layer">
    </div>

    <div id="page1-spacer">
        <div class="hero-editorial-container">
            <div class="hero-editorial-column">
                <h1 class="hero-editorial-headline">
                    <span class="hero-eyebrow">ROOTED IN INDIA</span>
                    <span>EXPORTING</span>
                    <span>NATURE'S</span>
                    <span class="accent-gold">FINEST</span>
                </h1>
                <p class="hero-editorial-description">Directly connecting India's pristine organic farms to global markets through transparent, certified, and ethical supply chains.</p>
                <a href="#our-story" class="hero-editorial-cta">
                    <span class="cta-text">EXPLORE OUR WORLD</span>
                    <span class="cta-arrow-circle">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </a>
            </div>
            
            <div class="hero-certified-badge">
                <svg class="organic-seal" viewBox="0 0 200 200" width="160" height="160">
                    <path id="sealTextPath" d="M 100, 100 m -68, 0 a 68,68 0 1,1 136,0 a 68,68 0 1,1 -136,0" fill="none"/>
                    <circle cx="100" cy="100" r="82" fill="none" stroke="rgba(255, 255, 255, 0.15)" stroke-width="1"/>
                    <circle cx="100" cy="100" r="54" fill="none" stroke="rgba(255, 255, 255, 0.15)" stroke-width="1"/>
                    <text fill="rgba(255, 255, 255, 0.6)" font-family="var(--brand-font)" font-size="8.5" font-weight="600" letter-spacing="1.8">
                        <textPath href="#sealTextPath" startOffset="0%">ORGANIC • CERTIFIED • PREMIUM EXPORTS •</textPath>
                    </text>
                    <text x="100" y="113" font-family="'Times New Roman', Georgia, serif" font-size="40" font-weight="normal" fill="#ffffff" text-anchor="middle">G</text>
                </svg>
            </div>
        </div>

        <div class="hero-scroll-indicator">
            <div class="scroll-mouse-icon">
                <div class="scroll-dot"></div>
            </div>
            <span class="scroll-text">SCROLL TO EXPLORE</span>
        </div>
    </div>

    <div id="main-content">
        
        <section id="our-story" class="story-section">
            <!-- Background Outline Text -->
            <div class="story-outline-text anim-trigger anim-scale-up">NATURE</div>
            
            <div class="container">
                <!-- Main Content -->
                <div class="story-text-block">
                    <h2 class="story-main-title anim-trigger anim-slide-up delay-100">
                        Nature doesn't<br>
                        produce products.<br>It produces <span class="text-accent">Stories</span>
                    </h2>
                    <p class="story-main-desc anim-trigger anim-slide-up delay-200">
                        We work with nature, not against it. Every product we export carries the purity of our soil and the honesty of our people.
                    </p>
                    <a class="story-cta-btn anim-trigger anim-slide-up delay-300" href="about-us.php">
                        KNOW OUR STORY
                        <span class="arrow-circle">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </span>
                    </a>
                </div>
                
                <!-- Bottom Pillars Grid -->
                <div class="story-pillars-grid">
                    <!-- Pillar 1: Sustainable -->
                    <div class="pillar-card anim-trigger anim-slide-up delay-0">
                        <div class="pillar-image-wrap">
                            <img src="assets/images/WebPillars1.png" alt="Sustainable Sourcing" class="pillar-img">
                            <div class="pillar-number">01</div>
                        </div>
                        <div class="pillar-content">
                            <h3 class="pillar-title">Sustainable Sourcing</h3>
                            <p class="pillar-desc">Sourced responsibly with deep respect for the earth and a commitement to a better tomorrow.</p>
                        </div>
                    </div>
                    
                    <!-- Pillar 2: Pure & Natural -->
                    <div class="pillar-card anim-trigger anim-slide-up delay-100">
                        <div class="pillar-image-wrap">
                            <img src="assets/images/WebPillars2.png" alt="Pure & Natural" class="pillar-img">
                            <div class="pillar-number">02</div>
                        </div>
                        <div class="pillar-content">
                            <h3 class="pillar-title">Pure &amp; Natural</h3>
                            <p class="pillar-desc">Uncompromised organic purity and nutritional integrity, just as nature intended.</p>
                        </div>
                    </div>
                    
                    <!-- Pillar 3: People First -->
                    <div class="pillar-card anim-trigger anim-slide-up delay-200">
                        <div class="pillar-image-wrap">
                            <img src="assets/images/WebPillars3.png" alt="People First" class="pillar-img">
                            <div class="pillar-number">03</div>
                        </div>
                        <div class="pillar-content">
                            <h3 class="pillar-title">People First</h3>
                            <p class="pillar-desc">Empowering local farming communities that grow and harvest with us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="harvest">
            <!-- Background Outline Text -->
            <div class="harvest-outline-text anim-trigger anim-scale-up">PRODUCTS</div>
            
            <div class="container">
                <!-- Header Grid -->
                <div class="harvest-header-grid">
                    <!-- Left Column -->
                    <div class="harvest-header-left">
                        <h2 class="harvest-main-title anim-trigger anim-slide-up delay-100">
                            NATURE’S FINEST,<br>
                            <span class="text-accent">CAREFULLY SELECTED.</span>
                        </h2>
                        <p class="harvest-desc anim-trigger anim-slide-up delay-200">
                            From the richest soils of India to the world, explore our wide range of premium organic products.
                        </p>
                        <a class="harvest-explore-btn anim-trigger anim-slide-up delay-300" href="all-products.php">
                            EXPLORE PRODUCTS
                            <span class="btn-arrow-circle">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                    
                    <!-- Right Column Accents -->
                    <div class="harvest-accents anim-trigger anim-slide-up delay-200">
                        <div class="accent-row">
                            <span>100% ORGANIC</span>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                                <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                            </svg>
                        </div>
                        <div class="accent-row">
                            <span>CAREFULLY HANDPICKED</span>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 22V12M12 12c-2-2-5-1-5-4s3-4 5-4 5 1 5 4-3 2-5 4z"></path>
                            </svg>
                        </div>
                        <div class="accent-row">
                            <span>GLOBALLY TRUSTED</span>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Bento Category Cards Grid -->
                <div class="products-cards-grid">
                    <!-- SPICES (Bento Large) -->
                    <div class="product-category-card bento-spices anim-trigger anim-slide-up delay-0" onclick="window.location.href='products/whole-spices.php'">
                        <img class="card-bg-img" src="assets/images/p_spices.png" alt="Spices">
                        <div class="card-dark-overlay"></div>
                        <div class="card-content">
                            <div class="card-icon-circle">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 3a6 6 0 0 0-9 9h18a6 6 0 0 0-9-9zM2 12h20M5 16h14M8 20h8"></path>
                                </svg>
                            </div>
                            <h3 class="card-title">SPICES</h3>
                            <div class="card-cta-row">
                                <span class="card-cta-text">VIEW PRODUCTS</span>
                                <div class="card-cta-circle">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- HERBS (Bento Medium Wide) -->
                    <div class="product-category-card bento-herbs anim-trigger anim-slide-up delay-100" onclick="window.location.href='products/powdered-spices.php'">
                        <img class="card-bg-img" src="assets/images/p_herbs.png" alt="Herbs">
                        <div class="card-dark-overlay"></div>
                        <div class="card-content">
                            <div class="card-icon-circle">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                                    <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                                </svg>
                            </div>
                            <h3 class="card-title">HERBS</h3>
                            <div class="card-cta-row">
                                <span class="card-cta-text">VIEW PRODUCTS</span>
                                <div class="card-cta-circle">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- DRY FRUITS (Bento Medium 1) -->
                    <div class="product-category-card bento-dry-fruits anim-trigger anim-slide-up delay-200" onclick="window.location.href='products/dry-fruits.php'">
                        <img class="card-bg-img" src="assets/images/p_dry_fruits.png" alt="Dry Fruits">
                        <div class="card-dark-overlay"></div>
                        <div class="card-content">
                            <div class="card-icon-circle">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <path d="M12 8a4 4 0 0 0-4 4"></path>
                                </svg>
                            </div>
                            <h3 class="card-title">DRY FRUITS</h3>
                            <div class="card-cta-row">
                                <span class="card-cta-text">VIEW PRODUCTS</span>
                                <div class="card-cta-circle">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- SEEDS (Bento Medium 2) -->
                    <div class="product-category-card bento-seeds anim-trigger anim-slide-up delay-300" onclick="window.location.href='products/rice-varieties.php'">
                        <img class="card-bg-img" src="assets/images/p_seeds.png" alt="Seeds">
                        <div class="card-dark-overlay"></div>
                        <div class="card-content">
                            <div class="card-icon-circle">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 10V2M12 2L9 5M12 2l3 3M4 22h16M6 17h12M8 12h8"></path>
                                </svg>
                            </div>
                            <h3 class="card-title">SEEDS</h3>
                            <div class="card-cta-row">
                                <span class="card-cta-text">VIEW PRODUCTS</span>
                                <div class="card-cta-circle">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- PULSES (Bento Wide Banner) -->
                    <div class="product-category-card bento-pulses anim-trigger anim-slide-up delay-300" onclick="window.location.href='products/grains-and-pulses.php'">
                        <img class="card-bg-img" src="assets/images/p_pulses.png" alt="Pulses">
                        <div class="card-dark-overlay"></div>
                        <div class="card-content">
                            <div class="card-icon-circle">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4zM3 6h18M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                            </div>
                            <h3 class="card-title">PULSES</h3>
                            <div class="card-cta-row">
                                <span class="card-cta-text">VIEW PRODUCTS</span>
                                <div class="card-cta-circle">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Section Footer Navigation -->
                <div class="harvest-footer">
                    <div class="harvest-footer-nav">
                        <button class="harvest-footer-btn anim-trigger anim-scale-up" onclick="document.getElementById('our-story').scrollIntoView({ behavior: 'smooth' });">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 12H5M12 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <div class="harvest-footer-text anim-trigger anim-slide-up">
                            <span class="harvest-footer-num">04</span>
                            <span class="harvest-footer-label">NEXT SECTION</span>
                        </div>
                        <button class="harvest-footer-btn anim-trigger anim-scale-up" onclick="document.getElementById('journey-process').scrollIntoView({ behavior: 'smooth' });">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="journey-process" class="origin-section">
            <!-- Cinematic Background Image -->
            <div class="origin-bg">
                <img alt="Lush green landscape of Indian mountains" class="origin-bg-img" src="assets/images/page4.png">
                <div class="origin-bg-overlay-top"></div>
                <div class="origin-bg-overlay-left"></div>
            </div>
            
            <!-- Background Typography -->
            <div class="origin-watermark">
                <h2>INDIA</h2>
            </div>
            
            <!-- Content Shell -->
            <div class="origin-content-container">
                <div class="origin-main-flex">
                    <!-- Left Column: Copy & Feature Cards -->
                    <div class="origin-left-col">
                        <span class="origin-subtitle">OUR ORIGIN</span>
                        <h2 class="origin-title">
                            ROOTED IN INDIA.<br>
                            SOURCED WITH PRIDE.<br>
                            <span class="text-gold">SHARED WITH THE WORLD.</span>
                        </h2>
                        <p class="origin-description">
                            We source our products from the most fertile regions of India, where nature is pure, 
                            traditions are strong, and quality is a way of life. Every harvest is a testament to 
                            our commitment to organic excellence.
                        </p>
                        <a class="origin-cta-btn" href="contact-us.php?section=global">
                            VIEW GLOBAL PRESENCE
                            <span class="origin-cta-arrow">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </span>
                        </a>
                        
                        <!-- Feature Cards -->
                        <div class="origin-features-grid">
                            <div class="origin-card">
                                <div class="text-tertiary">
                                    <span class="material-symbols-outlined !text-[40px]" data-icon="agriculture">agriculture</span>
                                </div>
                                <div>
                                    <h3>ETHICAL SOURCING</h3>
                                    <p>Sourced responsibly from local farmers.</p>
                                </div>
                            </div>
                            <div class="origin-card">
                                <div class="text-tertiary">
                                    <span class="material-symbols-outlined !text-[40px]" data-icon="compost">compost</span>
                                </div>
                                <div>
                                    <h3>RICH SOIL</h3>
                                    <p>From India's most fertile lands.</p>
                                </div>
                            </div>
                            <div class="origin-card">
                                <div class="text-tertiary">
                                    <span class="material-symbols-outlined !text-[40px]" data-icon="eco">eco</span>
                                </div>
                                <div>
                                    <h3>PURE & NATURAL</h3>
                                    <p>Grown naturally, without compromise.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column: Interactive Map -->
                    <div class="origin-right-col">
                        <div class="origin-map-wrapper">
                            <div class="origin-map-glow">
                                <img class="origin-map-img" src="assets/images/india_map.png" alt="Interactive Map of India">
                            </div>
                            
                            <!-- Rajasthan Pin -->
                            <div class="map-pin-group rajasthan">
                                <div class="map-pin-pulse"></div>
                                <div class="map-callout-box">
                                    <div class="callout-content-vertical">
                                        <span class="callout-title">RAJASTHAN <span class="material-symbols-outlined text-[14px]" data-icon="spa">spa</span></span>
                                        <span class="callout-desc">Spices, Seeds</span>
                                        <div class="callout-line-vertical"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Gujarat Pin -->
                            <div class="map-pin-group gujarat">
                                <div class="map-pin-pulse"></div>
                                <div class="map-callout-box">
                                    <div class="callout-content-horizontal">
                                        <div class="callout-text-right">
                                            <span class="callout-title">GUJARAT <span class="material-symbols-outlined text-[14px]" data-icon="spa">spa</span></span>
                                            <span class="callout-desc">Pulses, Herbs</span>
                                        </div>
                                        <div class="callout-line-horizontal"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Bihar Pin -->
                            <div class="map-pin-group bihar">
                                <div class="map-pin-pulse"></div>
                                <div class="map-callout-box">
                                    <div class="callout-content-horizontal">
                                        <div class="callout-line-horizontal"></div>
                                        <div class="callout-text-left">
                                            <span class="callout-title">BIHAR <span class="material-symbols-outlined text-[14px]" data-icon="spa">spa</span></span>
                                            <span class="callout-desc">Makhana, Litchi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Assam Pin -->
                            <div class="map-pin-group assam">
                                <div class="map-pin-pulse"></div>
                                <div class="map-callout-box">
                                    <div class="callout-content-horizontal">
                                        <div class="callout-line-horizontal"></div>
                                        <div class="callout-text-left">
                                            <span class="callout-title">ASSAM <span class="material-symbols-outlined text-[14px]" data-icon="spa">spa</span></span>
                                            <span class="callout-desc">Tea, Herbs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kerala Pin -->
                            <div class="map-pin-group kerala">
                                <div class="map-pin-pulse"></div>
                                <div class="map-callout-box">
                                    <div class="callout-content-horizontal">
                                        <div class="callout-text-right">
                                            <span class="callout-title">KERALA <span class="material-symbols-outlined text-[14px]" data-icon="spa">spa</span></span>
                                            <span class="callout-desc">Spices, Coconut</span>
                                        </div>
                                        <div class="callout-line-horizontal"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Tamil Nadu Pin -->
                            <div class="map-pin-group tamilnadu">
                                <div class="map-pin-pulse"></div>
                                <div class="map-callout-box">
                                    <div class="callout-content-horizontal">
                                        <div class="callout-line-horizontal"></div>
                                        <div class="callout-text-left">
                                            <span class="callout-title">TAMIL NADU <span class="material-symbols-outlined text-[14px]" data-icon="spa">spa</span></span>
                                            <span class="callout-desc">Spices, Seeds</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom Row Statistics -->
                <div class="origin-bottom-row">
                    <div class="origin-stats-row">
                        <div class="origin-stat-col">
                            <span class="origin-stat-num">1500+</span>
                            <div class="origin-stat-label-wrap">
                                <span class="origin-stat-label">FARMERS</span>
                                <span class="origin-stat-desc">Empowered</span>
                            </div>
                        </div>
                        <div class="origin-stat-col">
                            <span class="origin-stat-num">5+</span>
                            <div class="origin-stat-label-wrap">
                                <span class="origin-stat-label">KEY REGIONS</span>
                                <span class="origin-stat-desc">Across India</span>
                            </div>
                        </div>
                        <div class="origin-stat-col">
                            <span class="origin-stat-num">100%</span>
                            <div class="origin-stat-label-wrap">
                                <span class="origin-stat-label">NATURAL</span>
                                <span class="origin-stat-desc">No additives</span>
                            </div>
                        </div>
                        <div class="origin-stat-col">
                            <span class="origin-stat-num">45+</span>
                            <div class="origin-stat-label-wrap">
                                <span class="origin-stat-label">COUNTRIES</span>
                                <span class="origin-stat-desc">We export to</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="process-refined" class="process-refined-section">
            <!-- Background Layer -->
            <div class="process-bg">
                <img alt="Sunset landscape background" class="process-bg-img" src="assets/images/page5.png">
                <div class="process-bg-overlay"></div>
            </div>
            
            <!-- Background Watermark Text -->
            <div class="process-watermark">
                <span class="watermark-text">PURITY</span>
            </div>
            
            <!-- Top Heading Section -->
            <div class="process-header">
                <div class="process-header-content">
                    <span class="process-subtitle">Our Process</span>
                    <h2 class="process-title">
                        The Journey <br> of <span class="text-gold">Purity</span>
                    </h2>
                    <p class="process-description">
                        From careful sourcing to global delivery, every step is guided by purity, precision, and purpose.
                    </p>
                </div>
            </div>
            
            <!-- Process Grid Section -->
            <div class="process-grid-container">
                <div class="process-grid">
                    <!-- Column 01: Sourcing -->
                    <article class="process-step-col group">
                        <div class="step-bg">
                            <img alt="Sourcing" class="step-bg-img" src="assets/images/proc_1.png">
                            <div class="step-bg-overlay"></div>
                        </div>
                        <div class="step-content">
                            <div class="step-header">
                                <span class="step-number">01</span>
                                <h3 class="step-title">Sourcing</h3>
                                <div class="step-icon-wrapper">
                                    <svg class="step-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                </div>
                            </div>
                            <p class="step-description">
                                We source from trusted farmers and fertile regions to bring you the finest raw ingredients.
                            </p>
                        </div>
                        <div class="step-timeline-node">
                            <div class="node-dot"></div>
                            <div class="node-line-right"></div>
                        </div>
                    </article>
                    
                    <!-- Column 02: Quality Check -->
                    <article class="process-step-col group">
                        <div class="step-bg">
                            <img alt="Quality Check" class="step-bg-img" src="assets/images/proc_2.png">
                            <div class="step-bg-overlay"></div>
                        </div>
                        <div class="step-content">
                            <div class="step-header">
                                <span class="step-number">02</span>
                                <h3 class="step-title">Quality Check</h3>
                                <div class="step-icon-wrapper">
                                    <svg class="step-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                </div>
                            </div>
                            <p class="step-description">
                                Every batch undergoes strict quality inspection to ensure purity and authenticity.
                            </p>
                        </div>
                        <div class="step-timeline-node">
                            <div class="node-line-left"></div>
                            <div class="node-dot"></div>
                            <div class="node-line-right"></div>
                        </div>
                    </article>
                    
                    <!-- Column 03: Processing -->
                    <article class="process-step-col group">
                        <div class="step-bg">
                            <img alt="Processing" class="step-bg-img" src="assets/images/proc_3.png">
                            <div class="step-bg-overlay"></div>
                        </div>
                        <div class="step-content">
                            <div class="step-header">
                                <span class="step-number">03</span>
                                <h3 class="step-title">Processing</h3>
                                <div class="step-icon-wrapper">
                                    <svg class="step-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                </div>
                            </div>
                            <p class="step-description">
                                Advanced technology and hygienic processing preserve natural goodness and aroma.
                            </p>
                        </div>
                        <div class="step-timeline-node">
                            <div class="node-line-left"></div>
                            <div class="node-dot"></div>
                            <div class="node-line-right"></div>
                        </div>
                    </article>
                    
                    <!-- Column 04: Packaging -->
                    <article class="process-step-col group">
                        <div class="step-bg">
                            <img alt="Packaging" class="step-bg-img" src="assets/images/proc_4.png">
                            <div class="step-bg-overlay"></div>
                        </div>
                        <div class="step-content">
                            <div class="step-header">
                                <span class="step-number">04</span>
                                <h3 class="step-title">Packaging</h3>
                                <div class="step-icon-wrapper">
                                    <svg class="step-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                </div>
                            </div>
                            <p class="step-description">
                                Carefully packed using eco-friendly materials to retain freshness and ensure safety.
                            </p>
                        </div>
                        <div class="step-timeline-node">
                            <div class="node-line-left"></div>
                            <div class="node-dot"></div>
                            <div class="node-line-right"></div>
                        </div>
                    </article>
                    
                    <!-- Column 05: Export & Delivery -->
                    <article class="process-step-col group">
                        <div class="step-bg">
                            <img alt="Export & Delivery" class="step-bg-img" src="assets/images/proc_5.png">
                            <div class="step-bg-overlay"></div>
                        </div>
                        <div class="step-content">
                            <div class="step-header">
                                <span class="step-number">05</span>
                                <h3 class="step-title">Export & Delivery</h3>
                                <div class="step-icon-wrapper">
                                    <svg class="step-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M3.6 9h16.8M3.6 15h16.8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                </div>
                            </div>
                            <p class="step-description">
                                Delivered across the world with reliability, transparency, and on-time commitment.
                            </p>
                        </div>
                        <div class="step-timeline-node">
                            <div class="node-line-left"></div>
                            <div class="node-dot"></div>
                        </div>
                    </article>
                </div>
            </div>
            
            <!-- Scroll Indicator -->
            <div class="process-footer">
                <div class="scroll-explore-mouse">
                    <div class="mouse-icon">
                        <div class="mouse-wheel"></div>
                    </div>
                    <span class="scroll-text">Scroll to Explore</span>
                </div>
            </div>
        </section>

        <div class="logo-bar-container">
            <div class="logo-slider">
                <div class="logo-track">
                    <img src="assets/images/APEDA.avif" alt="APEDA Certification" class="cert-logo">
                    <img src="assets/images/AYUSH.avif" alt="AYUSH Certification" class="cert-logo">
                    <img src="assets/images/FIEO.avif" alt="FIEO Certification" class="cert-logo">
                    <img src="assets/images/GMP.avif" alt="GMP Certification" class="cert-logo">
                    <img src="assets/images/HACCP.avif" alt="HACCP Certification" class="cert-logo">
                    <img src="assets/images/HALAL.avif" alt="HALAL Certification" class="cert-logo">
                    <img src="assets/images/IAF.avif" alt="IAF Certification" class="cert-logo">
                    <img src="assets/images/ISO1.avif" alt="ISO Certification" class="cert-logo">
                    <img src="assets/images/ISO2.avif" alt="ISO Certification" class="cert-logo">
                    <img src="assets/images/SPICE.avif" alt="Spice Board Certification" class="cert-logo">
                    <img src="assets/images/APEDA.avif" alt="APEDA" class="cert-logo">
                    <img src="assets/images/AYUSH.avif" alt="AYUSH" class="cert-logo">
                    <img src="assets/images/FIEO.avif" alt="FIEO" class="cert-logo">
                    <img src="assets/images/GMP.avif" alt="GMP" class="cert-logo">
                    <img src="assets/images/HACCP.avif" alt="HACCP" class="cert-logo">
                    <img src="assets/images/HALAL.avif" alt="HALAL" class="cert-logo">
                    <img src="assets/images/IAF.avif" alt="IAF" class="cert-logo">
                    <img src="assets/images/ISO1.avif" alt="ISO1" class="cert-logo">
                    <img src="assets/images/ISO2.avif" alt="ISO2" class="cert-logo">
                    <img src="assets/images/SPICE.avif" alt="SPICE" class="cert-logo">
                </div>
            </div>
        </div>

    </div> 

    <script>
        // --- SMOOTH SCROLL INIT (Lenis) ---
        if (!window.lenis) {
            window.lenis = new Lenis({
                duration: 1.2,
                easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), 
                direction: 'vertical',
                gestureDirection: 'vertical',
                smooth: true,
                mouseMultiplier: 1,
                smoothTouch: false,
                touchMultiplier: 2,
            });
        }
        var lenis = window.lenis;

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // --- PARALLAX LOGIC ---
        const defaultLayers = {
          "layerTop": { "name": "Background (Top.png)", "x": -843, "y": 15, "scale": 1.2, "z": 100, "move": 2 },
          "layerMid2": { "name": "Midground 2 (Mid2.png)", "x": -843, "y": 94, "scale": 1.2, "z": 200, "move": 1.5 },
          "layerMid1": { "name": "Midground 1 (Mid1.png)", "x": -836, "y": 68, "scale": 1.2, "z": 300, "move": 1 },
          "layerBottom": { "name": "Foreground (Bottom.png)", "x": -836, "y": -28, "scale": 1.2, "z": 400, "move": 0.5 }
        };

        const layersConfig = JSON.parse(localStorage.getItem('agrox_parallax_config_v2')) || {};
        const layers = {};
        for (const [id, val] of Object.entries(defaultLayers)) {
            layers[id] = { ...val, ...(layersConfig[id] || {}) };
        }

        const stage = document.getElementById('stage');
        const navbar = document.getElementById('navbar');
        let mouseX = 0, mouseY = 0;
        
        window.addEventListener('mousemove', e => {
            mouseX = (e.clientX / window.innerWidth) - 0.5;
            mouseY = (e.clientY / window.innerHeight) - 0.5;
        }, { passive: true });
        
        const isMobile = window.innerWidth < 768;

        function renderScene() {
            const w = window.innerWidth;
            const h = window.innerHeight;
            let scale = Math.max(w / 1920, h / 1080);
            if(stage) stage.style.transform = `translate(-50%, -50%) scale(${scale})`;
            
            const px = (isMobile ? 0 : mouseX) * 1920; 
            const py = (isMobile ? 0 : mouseY) * 1080;
            
            for (const [id, l] of Object.entries(layers)) {
                const el = document.getElementById(id);
                if (el) {
                    const moveX = px * ((isMobile ? 0 : l.move) / 100);
                    const moveY = py * ((isMobile ? 0 : l.move) / 100);
                    el.style.cssText = `z-index: ${l.z}; transform: translate(${l.x + moveX}px, ${l.y + moveY}px) scale(${l.scale});`;
                }
            }
            requestAnimationFrame(renderScene);
        }

        if(stage) {
            renderScene();
            window.addEventListener('resize', renderScene, { passive: true });
            
            window.addEventListener('scroll', () => {
                const scrollY = window.scrollY;
                const h = window.innerHeight;
                const totalProgress = scrollY / h;
                const footer = document.querySelector('.portport-footer');
                const overlay = document.querySelector('.hero-nav-overlay');
                
                // 1. Stage & Overlay Fade Out
                if (totalProgress < 1.1) {
                    const opacity = Math.max(0, 1 - totalProgress);
                    stage.style.opacity = opacity;
                    stage.style.visibility = "visible";
                    if (overlay) {
                        overlay.style.opacity = opacity;
                        overlay.style.visibility = "visible";
                    }
                } else {
                    stage.style.visibility = "hidden"; 
                    if (overlay) {
                        overlay.style.opacity = 0;
                        overlay.style.visibility = "hidden";
                    }
                }

                // 2. Navbar Reveal
                if (navbar) {
                    if (totalProgress >= 0.95) navbar.classList.add('active'); 
                    else navbar.classList.remove('active');
                }

                // 3. FIXED: Footer Text Reveal Logic
                if (footer) {
                    const scrollHeight = document.documentElement.scrollHeight;
                    const clientHeight = document.documentElement.clientHeight;
                    const scrollDistanceToBottom = scrollHeight - clientHeight - scrollY;

                    // Reveal text when within 600px of bottom
                    if (scrollDistanceToBottom < 600) {
                        let revealValue = 1 - (scrollDistanceToBottom / 500);
                        revealValue = Math.min(1, Math.max(0, revealValue));
                        
                        footer.style.setProperty('--text-reveal', revealValue);
                        footer.style.setProperty('--scroll-glow', (revealValue * 0.15));
                    } else {
                        footer.style.setProperty('--text-reveal', 0);
                    }
                }
            }, { passive: true });
            
            window.dispatchEvent(new Event('scroll'));
        }

        // --- FOOTER VISIBILITY JS FIX ---
        window.addEventListener('load', () => {
            lenis.resize(); 
        });
        const footerObserver = new ResizeObserver(() => lenis.resize());
        footerObserver.observe(document.querySelector('#main-content'));

        // --- ENTRANCE ANIMATIONS (IntersectionObserver for anim-trigger) ---
        const entranceOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        };
        const entranceObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    entranceObserver.unobserve(entry.target); 
                }
            });
        }, entranceOptions);
        document.querySelectorAll('.anim-trigger').forEach(el => entranceObserver.observe(el));

        // Micro-interactions for map callouts
        document.querySelectorAll('.map-pin-group').forEach(item => {
            item.addEventListener('mouseenter', () => {
                const icon = item.querySelector('.material-symbols-outlined');
                if(icon) {
                    icon.style.fontVariationSettings = "'FILL' 1";
                    icon.style.transform = "scale(1.2)";
                    icon.style.transition = "all 0.3s ease";
                }
            });
            item.addEventListener('mouseleave', () => {
                const icon = item.querySelector('.material-symbols-outlined');
                if(icon) {
                    icon.style.fontVariationSettings = "'FILL' 0";
                    icon.style.transform = "scale(1)";
                }
            });
        });
    </script>

<?php include 'footer.php'; ?>