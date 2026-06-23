<?php
// ================================================================
//  SHARED HUB STYLES — included by all authority hub pages
//  Usage: include once immediately after header.php
//  Do NOT include header.php or footer.php from here.
// ================================================================
?>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
/* ================================================
   AGROX AUTHORITY HUB — SHARED DESIGN SYSTEM
   Reuses existing brand tokens. No new system.
   ================================================ */

/* --- RESET & BASE -------------------------------- */
*, *::before, *::after { box-sizing: border-box; }
body { font-family: 'Poppins', sans-serif; background-color: #050505; color: #e0e0e0; margin: 0; overflow-x: hidden; line-height: 1.6; }

h1, h2, h3, h4, h5,
.hub-title, .banner-title, .banner-scroll-text,
.hub-section-heading, .hub-card-label, .category-label {
    font-family: 'Bebas Neue', sans-serif;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

/* --- COLOR TOKENS -------------------------------- */
.text-gold { color: #d4a017; }
.text-muted { color: #777; }
.text-light { color: #e0e0e0; }

/* --- PARALLAX BANNER ----------------------------- */
.hub-banner {
    position: relative;
    width: 100%;
    height: 52vh;
    min-height: 240px;
    overflow: hidden;
    background-color: #0a0a0a;
}
.hub-banner-img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    opacity: 0.4;
}
.hub-banner-bg-text {
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 22vw;
    line-height: 1;
    color: transparent;
    -webkit-text-stroke: 1.5px rgba(255, 255, 255, 0.75);
    pointer-events: none;
    white-space: nowrap;
}
.hub-banner-title {
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 5;
    margin: 0;
    font-size: 7.5rem;
    color: #ffffff;
    text-align: center;
    width: 100%;
    text-shadow: 0 10px 40px rgba(0, 0, 0, 0.95);
    line-height: 1;
}
.hub-banner-subtitle {
    position: absolute;
    top: 76%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 5;
    font-family: 'Poppins', sans-serif;
    font-size: 0.78rem;
    font-weight: 300;
    color: rgba(255, 255, 255, 0.45);
    letter-spacing: 4px;
    text-transform: uppercase;
    text-align: center;
    white-space: nowrap;
}
.hub-banner-vignette {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: radial-gradient(ellipse at center, rgba(0,0,0,0.25) 0%, #050505 100%);
    pointer-events: none;
    z-index: 2;
}

/* --- BREADCRUMB ---------------------------------- */
.hub-breadcrumb {
    background: rgba(8,8,8,0.9);
    border-bottom: 1px solid rgba(255,255,255,0.04);
    padding: 12px 0;
    position: relative;
    z-index: 10;
}
.hub-breadcrumb-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 30px;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.78rem;
    color: #555;
    font-family: 'Poppins', sans-serif;
}
.hub-breadcrumb a {
    color: #555;
    text-decoration: none;
    transition: color 0.2s;
}
.hub-breadcrumb a:hover { color: #d4a017; }
.hub-breadcrumb .sep { color: #333; }
.hub-breadcrumb .current { color: #999; }

/* --- MAIN CONTENT WRAPPER ----------------------- */
.hub-main {
    position: relative;
    z-index: 10;
    background: #050505;
    padding: 80px 0 120px;
}
.hub-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 30px;
}

/* --- SECTION HEADER ----------------------------- */
.hub-section-header {
    margin-bottom: 52px;
}
.hub-eyebrow {
    display: inline-block;
    font-family: 'Poppins', sans-serif;
    font-size: 0.72rem;
    font-weight: 600;
    color: #d4a017;
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 14px;
}
.hub-section-heading {
    font-size: 3.8rem;
    color: #fff;
    margin: 0 0 18px;
    line-height: 1;
}
.hub-section-desc {
    color: #777;
    font-size: 0.98rem;
    font-weight: 300;
    line-height: 1.75;
    max-width: 540px;
}

/* --- PURPOSE STRIP ------------------------------- */
.hub-purpose-strip {
    background: rgba(212,160,23,0.04);
    border: 1px solid rgba(212,160,23,0.12);
    border-radius: 12px;
    padding: 32px 40px;
    margin-bottom: 72px;
    display: flex;
    align-items: center;
    gap: 28px;
}
.hub-purpose-icon {
    font-size: 2rem;
    color: rgba(212,160,23,0.7);
    flex-shrink: 0;
}
.hub-purpose-text {
    font-size: 1.05rem;
    color: #bbb;
    font-weight: 300;
    line-height: 1.7;
    margin: 0;
}
.hub-purpose-text strong {
    color: #e0e0e0;
    font-weight: 500;
}

/* --- HUB CARD GRID ------------------------------ */
.hub-card-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-bottom: 64px;
}
.hub-card-grid.two-col { grid-template-columns: repeat(2, 1fr); }
.hub-card-grid.four-col { grid-template-columns: repeat(4, 1fr); }

/* Hub Card Base */
.hub-card {
    background: rgba(14, 14, 14, 0.8);
    border: 1px solid rgba(255,255,255,0.055);
    border-radius: 14px;
    padding: 32px 28px;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
    transition: border-color 0.3s cubic-bezier(0.25,1,0.5,1),
                transform 0.3s cubic-bezier(0.25,1,0.5,1),
                box-shadow 0.3s cubic-bezier(0.25,1,0.5,1);
}
.hub-card::after {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(212,160,23,0), transparent);
    transition: background 0.4s ease;
}
.hub-card:hover {
    border-color: rgba(212,160,23,0.18);
    transform: translateY(-4px);
    box-shadow: 0 24px 48px rgba(0,0,0,0.45);
}
.hub-card:hover::after {
    background: linear-gradient(90deg, transparent, rgba(212,160,23,0.45), transparent);
}
.hub-card:active { transform: scale(0.98); }

/* Card Featured variant */
.hub-card.featured {
    padding: 40px 36px;
    background: rgba(18,18,18,0.9);
    border-color: rgba(212,160,23,0.08);
    grid-column: span 2;
}

/* Card elements */
.hub-card-icon {
    font-size: 1.5rem;
    color: rgba(212,160,23,0.55);
    margin-bottom: 20px;
    transition: color 0.3s;
    flex-shrink: 0;
}
.hub-card:hover .hub-card-icon { color: #d4a017; }

.hub-card-label {
    font-size: 1.3rem;
    color: #fff;
    margin: 0 0 10px;
    display: block;
    line-height: 1.1;
}
.hub-card.featured .hub-card-label { font-size: 2rem; }

.hub-card-desc {
    font-size: 0.86rem;
    color: #666;
    font-weight: 300;
    line-height: 1.7;
    flex-grow: 1;
    margin-bottom: 22px;
}

.hub-card-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    margin-bottom: 18px;
}
.hub-card-tag {
    font-family: 'Poppins', sans-serif;
    font-size: 0.68rem;
    font-weight: 500;
    color: rgba(212,160,23,0.7);
    background: rgba(212,160,23,0.08);
    border: 1px solid rgba(212,160,23,0.15);
    padding: 3px 10px;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.hub-card-link {
    font-family: 'Poppins', sans-serif;
    font-size: 0.75rem;
    font-weight: 600;
    color: #d4a017;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: gap 0.25s cubic-bezier(0.25,1,0.5,1), color 0.2s;
    margin-top: auto;
}
.hub-card:hover .hub-card-link { gap: 10px; }

/* --- CATEGORY SECTIONS -------------------------- */
.hub-categories {
    margin-bottom: 80px;
}
.hub-category-row {
    display: grid;
    grid-template-columns: 240px 1fr;
    gap: 40px;
    padding: 40px 0;
    border-bottom: 1px solid rgba(255,255,255,0.04);
    align-items: start;
}
.hub-category-row:last-child { border-bottom: none; }
.category-label {
    font-size: 0.7rem;
    color: rgba(212,160,23,0.6);
    letter-spacing: 2.5px;
    position: sticky;
    top: 120px;
    padding-top: 4px;
}
.category-items {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}
.category-item {
    background: rgba(12,12,12,0.7);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 10px;
    padding: 22px 24px;
    display: flex;
    align-items: flex-start;
    gap: 14px;
    text-decoration: none;
    transition: border-color 0.25s, background 0.25s;
}
.category-item:hover {
    border-color: rgba(212,160,23,0.15);
    background: rgba(20,20,20,0.9);
}
.category-item:active { transform: scale(0.98); }
.category-item-icon {
    font-size: 1rem;
    color: rgba(212,160,23,0.5);
    margin-top: 2px;
    flex-shrink: 0;
    transition: color 0.25s;
}
.category-item:hover .category-item-icon { color: #d4a017; }
.category-item-body {}
.category-item-name {
    font-family: 'Poppins', sans-serif;
    font-size: 0.88rem;
    font-weight: 600;
    color: #e0e0e0;
    display: block;
    margin-bottom: 4px;
}
.category-item-desc {
    font-size: 0.8rem;
    color: #555;
    font-weight: 300;
    line-height: 1.55;
}

/* --- RELATED HUBS BAR --------------------------- */
.hub-related {
    margin-top: 80px;
    padding-top: 48px;
    border-top: 1px solid rgba(255,255,255,0.05);
}
.hub-related-title {
    font-family: 'Poppins', sans-serif;
    font-size: 0.72rem;
    font-weight: 600;
    color: #444;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    margin-bottom: 24px;
}
.hub-related-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
}
.hub-related-card {
    background: rgba(10,10,10,0.8);
    border: 1px solid rgba(255,255,255,0.04);
    border-radius: 10px;
    padding: 20px 22px;
    text-decoration: none;
    transition: border-color 0.25s, transform 0.25s;
    display: flex;
    align-items: center;
    gap: 12px;
}
.hub-related-card:hover {
    border-color: rgba(212,160,23,0.12);
    transform: translateY(-2px);
}
.hub-related-icon {
    font-size: 1rem;
    color: rgba(212,160,23,0.45);
    flex-shrink: 0;
}
.hub-related-name {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 1rem;
    color: #ccc;
    letter-spacing: 1px;
    line-height: 1.1;
}

/* --- RFQ CTA SECTION ---------------------------- */
.hub-rfq-section {
    margin-top: 80px;
    background: rgba(10,10,10,0.9);
    border: 1px solid rgba(212,160,23,0.1);
    border-radius: 20px;
    padding: 64px 60px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    position: relative;
    overflow: hidden;
}
.hub-rfq-section::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(212,160,23,0.3), transparent);
}
.hub-rfq-body {}
.hub-rfq-label {
    font-family: 'Poppins', sans-serif;
    font-size: 0.72rem;
    font-weight: 600;
    color: #d4a017;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    margin-bottom: 12px;
    display: block;
}
.hub-rfq-heading {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 3rem;
    color: #fff;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    line-height: 1;
    margin-bottom: 12px;
}
.hub-rfq-desc {
    color: #666;
    font-size: 0.9rem;
    font-weight: 300;
    line-height: 1.7;
    max-width: 480px;
    margin: 0;
}
.hub-rfq-cta {
    flex-shrink: 0;
    display: inline-block;
    background: #d4a017;
    color: #000;
    padding: 18px 48px;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 1.15rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    text-decoration: none;
    border-radius: 4px;
    transition: background 0.25s, box-shadow 0.25s, transform 0.16s ease-out;
    white-space: nowrap;
}
.hub-rfq-cta:hover {
    background: #fff;
    box-shadow: 0 0 24px rgba(212,160,23,0.35);
}
.hub-rfq-cta:active { transform: scale(0.97); }

/* --- SCROLL ENTRANCE ANIMATION ------------------ */
.hub-animate {
    opacity: 0;
    transform: translateY(18px);
    transition: opacity 0.55s cubic-bezier(0.23,1,0.32,1),
                transform 0.55s cubic-bezier(0.23,1,0.32,1);
}
.hub-animate.in-view {
    opacity: 1;
    transform: translateY(0);
}

/* --- RESPONSIVE --------------------------------- */
@media (max-width: 1024px) {
    .hub-card-grid { grid-template-columns: repeat(2, 1fr); }
    .hub-card.featured { grid-column: span 1; }
    .hub-rfq-section { flex-direction: column; text-align: center; }
    .hub-rfq-desc { max-width: 100%; }
    .hub-related-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .hub-banner-title { font-size: 3.5rem; }
    .hub-banner-bg-text { font-size: 30vw; }
    .hub-section-heading { font-size: 2.8rem; }
    .hub-card-grid { grid-template-columns: 1fr; }
    .hub-category-row { grid-template-columns: 1fr; gap: 20px; }
    .category-label { position: static; }
    .category-items { grid-template-columns: 1fr; }
    .hub-rfq-section { padding: 40px 28px; }
    .hub-rfq-heading { font-size: 2.2rem; }
    .hub-related-grid { grid-template-columns: repeat(2, 1fr); }
    .hub-purpose-strip { flex-direction: column; gap: 16px; padding: 24px; }
}
@media (max-width: 480px) {
    .hub-banner-title { font-size: 2.6rem; }
    .hub-related-grid { grid-template-columns: 1fr; }
}
</style>

<script>
// Hub scroll entrance observer — motivaed animation, fires once
(function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                // Stagger siblings within the same parent grid
                const siblings = entry.target.parentElement.querySelectorAll('.hub-animate');
                let delay = 0;
                siblings.forEach((el, idx) => {
                    if (!el.classList.contains('in-view')) {
                        setTimeout(() => el.classList.add('in-view'), delay);
                        delay += 55;
                    }
                });
                if (!entry.target.parentElement.querySelector('.hub-animate:not(.in-view)')) {
                    entry.target.classList.add('in-view');
                }
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08 });

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.hub-animate').forEach(el => observer.observe(el));
    });
})();

// Parallax banner
function initBannerParallax() {
    const bgText = document.getElementById('hubBgText');
    const fgText = document.getElementById('hubFgText');
    if (!bgText && !fgText) return;
    let ticking = false;
    window.addEventListener('scroll', () => {
        if (ticking) return;
        requestAnimationFrame(() => {
            const sy = window.scrollY;
            if (bgText) bgText.style.transform = `translate(calc(-50% + ${sy * 0.38}px), -50%)`;
            if (fgText) fgText.style.transform = `translate(calc(-50% - ${sy * 0.28}px), -50%)`;
            ticking = false;
        });
        ticking = true;
    }, { passive: true });
}
document.addEventListener('DOMContentLoaded', initBannerParallax);
</script>
