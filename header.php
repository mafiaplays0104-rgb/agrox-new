<?php
// === SMART PATH SYSTEM ===
// Checks if assets/css/style.css is in the current folder. 
// If NOT, we assume we are in the 'products' folder and go up one level ('../')
$path = file_exists('assets/css/style.css') ? '' : '../';
$prodPath = file_exists('assets/css/style.css') ? 'products/' : '';

// Active page state detection
$currentPage = basename($_SERVER['PHP_SELF']);
$isHome = ($currentPage == 'index.php');
$isAbout = ($currentPage == 'about-us.php');
$isProducts = ($currentPage == 'all-products.php' || strpos($_SERVER['PHP_SELF'], '/products/') !== false);
$isContact = ($currentPage == 'contact-us.php');
$isKnowledge = ($currentPage == 'why-agrox.php' || $currentPage == 'certifications.php' || $currentPage == 'quality-control.php' || $currentPage == 'export-process.php' || $currentPage == 'faq.php' || strpos($_SERVER['PHP_SELF'], '/knowledge/') !== false || strpos($_SERVER['PHP_SELF'], '/buyer-guides/') !== false || strpos($_SERVER['PHP_SELF'], '/market-reports/') !== false || strpos($_SERVER['PHP_SELF'], '/export-intelligence/') !== false || strpos($_SERVER['PHP_SELF'], '/compliance-center/') !== false || strpos($_SERVER['PHP_SELF'], '/trade-academy/') !== false || strpos($_SERVER['PHP_SELF'], '/industries/') !== false || strpos($_SERVER['PHP_SELF'], '/applications/') !== false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="<?php echo $path; ?>assets/images/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo $path; ?>assets/images/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "AGROX - Premium Organic Exports from India"; ?></title>
    <?php if (isset($pageDesc)): ?>
    <meta name="description" content="<?php echo $pageDesc; ?>">
    <?php elseif (isset($metaDescription)): ?>
    <meta name="description" content="<?php echo $metaDescription; ?>">
    <?php endif; ?>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Premium Brand Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <style>
        /* ========================================== */
        /* --- PREMIUM NAVIGATION REDESIGN STYLES --- */
        /* ========================================== */
        
        /* Floating Capsule Glass Navbar */
        .glass-nav {
            position: fixed;
            top: 24px;
            left: 50%;
            transform: translateX(-50%) translateY(-100px);
            width: 92%;
            max-width: 1200px;
            height: 70px;
            background: linear-gradient(135deg, rgba(6, 12, 8, 0.82) 0%, rgba(12, 12, 12, 0.85) 100%);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-top: 1px solid rgba(212, 160, 23, 0.3); /* Delicate gold accent top border */
            border-radius: 35px;
            padding: 0 35px;
            z-index: 1100;
            box-shadow: 0 15px 35px rgba(0,0,0,0.6), inset 0 1px 1px rgba(255, 255, 255, 0.08), 0 0 15px rgba(212, 160, 23, 0.04);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.6s, background 0.3s;
            opacity: 0;
            pointer-events: none;
        }

        .glass-nav.active {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
            pointer-events: auto;
        }

        /* Flex Layout Alignment Container */
        .nav-container {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Integrated Logo Area */
        .nav-logo {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding-right: 20px;
            margin-left: -5px;
        }

        .nav-logo img {
            height: 36px;
            width: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        .nav-logo:hover img {
            transform: scale(1.02);
        }

        /* Desktop Navigation Links */
        .nav-links {
            display: flex;
            align-items: center;
            gap: 4px;
            list-style: none;
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .nav-links > li {
            position: relative;
            display: flex;
            align-items: center;
            height: 100%;
        }

        .nav-links a.nav-link-item {
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.8rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            padding: 10px 16px 18px; /* Extra bottom padding for indicator spacing */
            border-radius: 20px;
            transition: all 0.3s ease;
            display: inline-block;
            position: relative;
        }

        .nav-links a.nav-link-item:hover,
        .nav-links li.megamenu-trigger:hover > a.nav-link-item {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.05);
            text-shadow: 0 0 10px rgba(212, 160, 23, 0.35);
        }

        /* Option A: Centered Gold Dot Active/Hover Indicator */
        .nav-links a.nav-link-item::after {
            content: '';
            position: absolute;
            bottom: 4px; /* Placed completely below the typography */
            left: 50%;
            transform: translateX(-50%) scale(0);
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: #d4a017;
            box-shadow: 0 0 8px #ffd700;
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform-origin: center;
        }

        /* Hover and Active State Toggles */
        .nav-links a.nav-link-item:hover::after,
        .nav-links li.megamenu-trigger:hover > a.nav-link-item::after,
        .nav-links a.nav-link-item.active-nav::after {
            transform: translateX(-50%) scale(1);
        }

        .nav-links a.nav-link-item.active-nav {
            color: #ffffff;
            text-shadow: 0 0 8px rgba(212, 160, 23, 0.2);
        }

        /* Hover bridge to keep dropdown open */
        .nav-links > li::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 0;
            width: 100%;
            height: 25px;
            background: transparent;
            z-index: 999;
            display: none;
        }
        .nav-links > li:hover::after {
            display: block;
        }

        /* --- DECORATIVE MEGA MENU SYSTEM --- */
        .megamenu-panel {
            position: absolute;
            top: calc(100% + 8px);
            left: 50%;
            transform: translateX(-50%) translateY(10px);
            width: 780px;
            max-height: 340px;
            background: rgba(6, 12, 8, 0.96);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.08); /* Clean uniform border */
            border-radius: 16px;
            padding: 22px 28px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.65), inset 0 1px 1px rgba(255, 255, 255, 0.08);
            opacity: 0;
            visibility: hidden;
            transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1), opacity 0.3s ease, visibility 0.3s ease;
            z-index: 1000;
            pointer-events: none;
        }

        /* Knowledge mega menu column divider */
        .megamenu-col-divider {
            width: 1px;
            background: linear-gradient(to bottom, transparent, rgba(212,160,23,0.15), transparent);
            align-self: stretch;
            margin: 0 4px;
        }

        /* Glowing Gold Diamond Dropdown Connector */
        .megamenu-panel::before {
            content: '';
            position: absolute;
            top: -4px; /* Centered on the top edge */
            left: 50%;
            transform: translateX(-50%) rotate(45deg);
            width: 8px;
            height: 8px;
            background: #d4a017;
            box-shadow: 0 0 8px #ffd700;
            z-index: 10;
        }

        .megamenu-trigger:hover .megamenu-panel {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
            pointer-events: auto;
        }

        /* Grid layouts inside panels */
        .megamenu-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            position: relative;
            z-index: 2;
        }

        .megamenu-col {
            display: flex;
            flex-direction: column;
        }

        .megamenu-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.65rem;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.4);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 14px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            padding-bottom: 6px;
            display: block;
        }

        .megamenu-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .megamenu-list li a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.82rem;
            font-weight: 400;
            transition: all 0.25s cubic-bezier(0.25, 1, 0.5, 1);
            display: flex;
            align-items: center;
        }

        .megamenu-list li a:hover {
            color: #ffffff;
            transform: translateX(4px);
            text-shadow: 0 0 6px rgba(255,255,255,0.15);
        }

        /* Dotted luxury item indicator on hover */
        .megamenu-list li a::before {
            content: '';
            display: inline-block;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: #d4a017;
            opacity: 0;
            margin-right: 0;
            transition: all 0.25s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .megamenu-list li a:hover::before {
            opacity: 1;
            margin-right: 8px;
        }

        /* Item Premium Icon */
        .menu-item-icon {
            font-size: 0.72rem;
            color: rgba(212, 160, 23, 0.55);
            margin-right: 8px;
            width: 14px;
            text-align: center;
            transition: color 0.25s;
        }

        .megamenu-list li a:hover .menu-item-icon {
            color: #ffd700;
        }

        /* Market Flag Indicators */
        .flag-icon {
            font-size: 0.9rem;
            margin-left: 8px;
            opacity: 0.85;
            display: inline-block;
        }

        /* Subtle wireframe map background pattern for Export Markets dropdown */
        .map-grid-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0.12;
            pointer-events: none;
            overflow: hidden;
        }
        .map-grid-pattern svg {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Bottom Action / Footer inside mega menu */
        .megamenu-footer {
            margin-top: 18px;
            padding-top: 12px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            display: flex;
            justify-content: flex-end;
            position: relative;
            z-index: 2;
        }

        .megamenu-action-btn {
            color: #d4a017;
            text-decoration: none;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.74rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: gap 0.25s, color 0.25s;
        }

        .megamenu-action-btn:hover {
            color: #ffffff;
            gap: 10px;
        }

        /* Right CTA area */
        .nav-cta-wrapper {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .btn-quote-cta {
            background: rgba(212, 160, 23, 0.06);
            border: 1px solid rgba(212, 160, 23, 0.4);
            color: #ffd700;
            padding: 9px 22px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.74rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            border-radius: 20px;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 0 0 10px rgba(212, 160, 23, 0.04);
        }

        .btn-quote-cta:hover {
            background: #d4a017;
            color: #0b0b0b;
            border-color: #d4a017;
            box-shadow: 0 0 20px rgba(212, 160, 23, 0.35);
            transform: translateY(-1px);
        }

        /* Hamburger (for Mobile) */
        .hamburger {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 24px;
            height: 16px;
            cursor: pointer;
            z-index: 1200;
            position: relative;
        }

        .hamburger span {
            display: block;
            width: 100%;
            height: 2px;
            background-color: #ffffff;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            border-radius: 2px;
        }

        .hamburger.active span:nth-child(1) {
            transform: translateY(7px) rotate(45deg);
            background-color: #d4a017;
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg);
            background-color: #d4a017;
        }

        /* --- MOBILE BLUR DRAWER SYSTEM --- */
        .nav-menu-mobile {
            position: fixed;
            top: 0;
            left: 0;
            right: auto;
            width: 100vw;
            height: 100vh;
            background: rgba(8, 14, 10, 0.94);
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            z-index: 1050;
            padding: 120px 40px 40px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            transform: translateY(-100%);
            opacity: 0;
            visibility: hidden;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.6s, visibility 0.6s;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.8);
            overflow-y: auto;
        }

        .nav-menu-mobile.active {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .nav-menu-mobile ul.mobile-menu-links {
            list-style: none;
            padding: 0;
            margin: 0 0 30px 0;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .nav-menu-mobile ul.mobile-menu-links > li {
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding-bottom: 15px;
        }

        .nav-menu-mobile ul.mobile-menu-links > li:last-child {
            border-bottom: none;
        }

        .nav-menu-mobile .mobile-link,
        .nav-menu-mobile .mobile-accordion-toggle {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1.25rem;
            font-weight: 600;
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            transition: color 0.3s;
        }

        .nav-menu-mobile .mobile-link:hover,
        .nav-menu-mobile .mobile-accordion-toggle:hover {
            color: #d4a017;
        }

        .mobile-accordion-toggle i {
            transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            font-size: 0.9rem;
            color: rgba(255,255,255,0.4);
        }

        .mobile-accordion-parent.active .mobile-accordion-toggle i {
            transform: rotate(180deg);
            color: #d4a017;
        }

        /* Mobile Accordion Sub-lists */
        .mobile-accordion-menu {
            max-height: 0;
            overflow: hidden;
            list-style: none;
            padding-left: 20px;
            margin-top: 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
            transition: max-height 0.4s cubic-bezier(0.16, 1, 0.3, 1), margin-top 0.3s;
        }

        .mobile-accordion-parent.active .mobile-accordion-menu {
            max-height: 600px;
            margin-top: 15px;
        }

        .mobile-accordion-menu li a {
            color: rgba(255, 255, 255, 0.65);
            text-decoration: none;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.92rem;
            font-weight: 500;
            display: block;
            transition: color 0.3s;
        }

        .mobile-accordion-menu li a:hover {
            color: #d4a017;
        }

        /* Mobile Action Quote CTA inside drawer */
        .mobile-cta-wrapper {
            margin-top: auto;
            padding-top: 20px;
        }

        .btn-mobile-quote {
            display: block;
            width: 100%;
            text-align: center;
            background: #d4a017;
            color: #0b0b0b;
            padding: 15px;
            border-radius: 25px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 2px;
            font-size: 0.85rem;
            text-decoration: none;
            box-shadow: 0 10px 20px rgba(212, 160, 23, 0.2);
            transition: all 0.3s;
        }

        .btn-mobile-quote:hover {
            box-shadow: 0 15px 30px rgba(212, 160, 23, 0.35);
            transform: translateY(-1px);
        }

        /* Responsive Scaling Overrides */
        @media (max-width: 991px) {
            .nav-links {
                display: none;
            }
            .hamburger {
                display: flex;
            }
            .btn-quote-cta {
                display: none; /* Replaced by full-width drawer button on mobile */
            }
            .glass-nav {
                height: 60px;
                padding: 0 20px;
                top: 16px;
            }
            .nav-logo img {
                height: 32px;
            }
        }
    </style>
</head>
<body>

    <nav class="glass-nav" id="navbar">
        <div class="nav-container">
            <!-- Integrated Logo -->
            <div class="nav-logo" onclick="window.location.href='<?php echo $path; ?>index.php'">
                <img src="<?php echo $path; ?>assets/images/agroxtopbhairav.png" alt="AGROX Logo">
            </div>
            
            <!-- Desktop Link Rail -->
            <ul class="nav-links">
                <li><a href="<?php echo $path; ?>index.php" class="nav-link-item <?php echo $isHome ? 'active-nav' : ''; ?>">HOME</a></li>
                <li><a href="<?php echo $path; ?>about-us.php" class="nav-link-item <?php echo $isAbout ? 'active-nav' : ''; ?>">ABOUT</a></li>
                
                <!-- PRODUCTS MEGA MENU -->
                <li class="nav-item-dropdown megamenu-trigger">
                    <a href="<?php echo $path; ?>all-products.php" class="nav-link-item <?php echo $isProducts ? 'active-nav' : ''; ?>">PRODUCTS</a>
                    <div class="megamenu-panel">
                        <span class="megamenu-title">PRODUCT COLLECTIONS</span>
                        <div class="megamenu-grid">
                            <div class="megamenu-col">
                                <ul class="megamenu-list">
                                    <li><a href="<?php echo $prodPath; ?>whole-spices.php?type=organic"><i class="fa-solid fa-leaf menu-item-icon"></i> Organic Spices</a></li>
                                    <li><a href="<?php echo $prodPath; ?>whole-spices.php"><i class="fa-solid fa-pepper-hot menu-item-icon"></i> Conventional Spices</a></li>
                                    <li><a href="<?php echo $prodPath; ?>powdered-spices.php"><i class="fa-solid fa-mortar-pestle menu-item-icon"></i> Spice Powders</a></li>
                                </ul>
                            </div>
                            <div class="megamenu-col">
                                <ul class="megamenu-list">
                                    <li><a href="<?php echo $prodPath; ?>grains-and-pulses.php?category=seeds"><i class="fa-solid fa-seedling menu-item-icon"></i> Seeds</a></li>
                                    <li><a href="<?php echo $prodPath; ?>grains-and-pulses.php"><i class="fa-solid fa-wheat-awn menu-item-icon"></i> Pulses</a></li>
                                    <li><a href="<?php echo $prodPath; ?>dry-fruits.php"><i class="fa-solid fa-bowl-food menu-item-icon"></i> Superfoods</a></li>
                                </ul>
                            </div>
                            <div class="megamenu-col">
                                <ul class="megamenu-list">
                                    <li><a href="<?php echo $prodPath; ?>grains-and-pulses.php?category=maize"><i class="fa-solid fa-cubes menu-item-icon"></i> Maize Products</a></li>
                                    <li><a href="<?php echo $prodPath; ?>dry-fruits.php?category=freeze-dried"><i class="fa-solid fa-snowflake menu-item-icon"></i> Freeze Dried Products</a></li>
                                    <li><a href="<?php echo $prodPath; ?>dry-fruits.php?category=dehydrated"><i class="fa-solid fa-sun menu-item-icon"></i> Dehydrated Products</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="megamenu-footer">
                            <a href="<?php echo $path; ?>all-products.php" class="megamenu-action-btn">
                                <span>View Complete Catalogue</span>
                                <span class="action-arrow">→</span>
                            </a>
                        </div>
                    </div>
                </li>
                
                <!-- EXPORT MARKETS MEGA MENU -->
                <li class="nav-item-dropdown megamenu-trigger">
                    <a href="<?php echo $path; ?>contact-us.php" class="nav-link-item">EXPORT MARKETS</a>
                    <div class="megamenu-panel">
                        <div class="map-grid-pattern">
                            <svg viewBox="0 0 400 200" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0" y1="50" x2="400" y2="50" stroke="rgba(212,160,23,0.06)" stroke-width="0.5" />
                                <line x1="0" y1="100" x2="400" y2="100" stroke="rgba(212,160,23,0.06)" stroke-width="0.5" />
                                <line x1="0" y1="150" x2="400" y2="150" stroke="rgba(212,160,23,0.06)" stroke-width="0.5" />
                                <line x1="100" y1="0" x2="100" y2="200" stroke="rgba(212,160,23,0.06)" stroke-width="0.5" />
                                <line x1="200" y1="0" x2="200" y2="200" stroke="rgba(212,160,23,0.06)" stroke-width="0.5" />
                                <line x1="300" y1="0" x2="300" y2="200" stroke="rgba(212,160,23,0.06)" stroke-width="0.5" />
                                <circle cx="200" cy="100" r="1.5" fill="#d4a017" opacity="0.2" />
                                <circle cx="100" cy="50" r="1.5" fill="#d4a017" opacity="0.2" />
                                <circle cx="300" cy="150" r="1.5" fill="#d4a017" opacity="0.2" />
                            </svg>
                        </div>
                        <span class="megamenu-title">EXPORT DESTINATIONS</span>
                        <div class="megamenu-grid">
                            <div class="megamenu-col">
                                <ul class="megamenu-list">
                                    <li><a href="<?php echo $path; ?>contact-us.php?market=uae">UAE <span class="flag-icon">🇦🇪</span></a></li>
                                    <li><a href="<?php echo $path; ?>contact-us.php?market=saudi-arabia">Saudi Arabia <span class="flag-icon">🇸🇦</span></a></li>
                                    <li><a href="<?php echo $path; ?>contact-us.php?market=bangladesh">Bangladesh <span class="flag-icon">🇧🇩</span></a></li>
                                </ul>
                            </div>
                            <div class="megamenu-col">
                                <ul class="megamenu-list">
                                    <li><a href="<?php echo $path; ?>contact-us.php?market=usa">USA <span class="flag-icon">🇺🇸</span></a></li>
                                    <li><a href="<?php echo $path; ?>contact-us.php?market=germany">Germany <span class="flag-icon">🇩🇪</span></a></li>
                                    <li><a href="<?php echo $path; ?>contact-us.php?market=singapore">Singapore <span class="flag-icon">🇸🇬</span></a></li>
                                </ul>
                            </div>
                            <div class="megamenu-col">
                                <ul class="megamenu-list">
                                    <li><a href="<?php echo $path; ?>contact-us.php?market=japan">Japan <span class="flag-icon">🇯🇵</span></a></li>
                                    <li><a href="<?php echo $path; ?>contact-us.php?market=malaysia">Malaysia <span class="flag-icon">🇲🇾</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="megamenu-footer">
                            <a href="<?php echo $path; ?>contact-us.php?section=global" class="megamenu-action-btn">
                                <span>View Global Presence</span>
                                <span class="action-arrow">→</span>
                            </a>
                        </div>
                    </div>
                </li>
                
                <!-- KNOWLEDGE MEGA MENU -->
                <li class="nav-item-dropdown megamenu-trigger">
                    <a href="<?php echo $path; ?>knowledge/index.php" class="nav-link-item <?php echo $isKnowledge ? 'active-nav' : ''; ?>">KNOWLEDGE</a>
                    <div class="megamenu-panel">
                        <span class="megamenu-title">KNOWLEDGE CENTER</span>
                        <div class="megamenu-grid">
                            <!-- Column 1: Buyer Education -->
                            <div class="megamenu-col">
                                <ul class="megamenu-list">
                                    <li><a href="<?php echo $path; ?>buyer-guides/index.php"><i class="fa-solid fa-book-open menu-item-icon"></i> Buyer Guides</a></li>
                                    <li><a href="<?php echo $path; ?>export-process.php"><i class="fa-solid fa-route menu-item-icon"></i> Export Process</a></li>
                                    <li><a href="<?php echo $path; ?>quality-control.php"><i class="fa-solid fa-circle-check menu-item-icon"></i> Quality Control</a></li>
                                </ul>
                            </div>
                            <!-- Column 2: Trust & Compliance -->
                            <div class="megamenu-col">
                                <ul class="megamenu-list">
                                    <li><a href="<?php echo $path; ?>faq.php"><i class="fa-solid fa-circle-question menu-item-icon"></i> FAQs</a></li>
                                    <li><a href="<?php echo $path; ?>why-agrox.php"><i class="fa-solid fa-star menu-item-icon"></i> Why AgroX</a></li>
                                    <li><a href="<?php echo $path; ?>certifications.php"><i class="fa-solid fa-award menu-item-icon"></i> Certifications</a></li>
                                </ul>
                            </div>
                            <!-- Column 3: Intelligence & Research -->
                            <div class="megamenu-col">
                                <ul class="megamenu-list">
                                    <li><a href="<?php echo $path; ?>market-reports/index.php"><i class="fa-solid fa-chart-bar menu-item-icon"></i> Market Reports</a></li>
                                    <li><a href="<?php echo $path; ?>export-intelligence/index.php"><i class="fa-solid fa-chart-line menu-item-icon"></i> Export Intelligence</a></li>
                                    <li><a href="<?php echo $path; ?>trade-academy/index.php"><i class="fa-solid fa-graduation-cap menu-item-icon"></i> Trade Academy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="megamenu-footer">
                            <a href="<?php echo $path; ?>knowledge/index.php" class="megamenu-action-btn">
                                <span>Explore Knowledge Center</span>
                                <span class="action-arrow">→</span>
                            </a>
                        </div>
                    </div>
                </li>
                
                <li><a href="<?php echo $path; ?>contact-us.php" class="nav-link-item <?php echo $isContact ? 'active-nav' : ''; ?>">CONTACT</a></li>
            </ul>
            
            <!-- CTA and Hamburger Section -->
            <div class="nav-cta-wrapper">
                <a href="<?php echo $path; ?>contact-us.php?type=quote" class="btn-quote-cta">GET QUOTE</a>
                <div class="hamburger" id="hamburger-menu" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Full-Screen Glass Drawer -->
    <div class="nav-menu-mobile" id="nav-menu-mobile">
        <ul class="mobile-menu-links">
            <li><a href="<?php echo $path; ?>index.php" class="mobile-link">HOME</a></li>
            <li><a href="<?php echo $path; ?>about-us.php" class="mobile-link">ABOUT</a></li>
            
            <!-- Products Mobile Accordion -->
            <li class="mobile-accordion-parent">
                <div class="mobile-accordion-toggle">PRODUCTS <i class="fa-solid fa-chevron-down"></i></div>
                <ul class="mobile-accordion-menu">
                    <li><a href="<?php echo $path; ?>all-products.php" class="mobile-link">All Products</a></li>
                    <li><a href="<?php echo $prodPath; ?>whole-spices.php" class="mobile-link">Whole Spices</a></li>
                    <li><a href="<?php echo $prodPath; ?>powdered-spices.php" class="mobile-link">Powdered Spices</a></li>
                    <li><a href="<?php echo $prodPath; ?>dry-fruits.php" class="mobile-link">Dry Fruits &amp; Nuts</a></li>
                    <li><a href="<?php echo $prodPath; ?>grains-and-pulses.php" class="mobile-link">Pulses &amp; Lentils</a></li>
                    <li><a href="<?php echo $prodPath; ?>rice-varieties.php" class="mobile-link">Rice Varieties</a></li>
                    <li><a href="<?php echo $prodPath; ?>extract-oil.php" class="mobile-link">Extract Oils</a></li>
                </ul>
            </li>

            <!-- Export Markets Mobile Accordion -->
            <li class="mobile-accordion-parent">
                <div class="mobile-accordion-toggle">EXPORT MARKETS <i class="fa-solid fa-chevron-down"></i></div>
                <ul class="mobile-accordion-menu">
                    <li><a href="<?php echo $path; ?>contact-us.php?market=uae" class="mobile-link">UAE 🇦🇪</a></li>
                    <li><a href="<?php echo $path; ?>contact-us.php?market=saudi-arabia" class="mobile-link">Saudi Arabia 🇸🇦</a></li>
                    <li><a href="<?php echo $path; ?>contact-us.php?market=bangladesh" class="mobile-link">Bangladesh 🇧🇩</a></li>
                    <li><a href="<?php echo $path; ?>contact-us.php?market=usa" class="mobile-link">USA 🇺🇸</a></li>
                    <li><a href="<?php echo $path; ?>contact-us.php?market=germany" class="mobile-link">Germany 🇩🇪</a></li>
                    <li><a href="<?php echo $path; ?>contact-us.php?market=singapore" class="mobile-link">Singapore 🇸🇬</a></li>
                    <li><a href="<?php echo $path; ?>contact-us.php?market=japan" class="mobile-link">Japan 🇯🇵</a></li>
                    <li><a href="<?php echo $path; ?>contact-us.php?market=malaysia" class="mobile-link">Malaysia 🇲🇾</a></li>
                </ul>
            </li>

            <!-- Knowledge Mobile Accordion -->
            <li class="mobile-accordion-parent">
                <div class="mobile-accordion-toggle">KNOWLEDGE <i class="fa-solid fa-chevron-down"></i></div>
                <ul class="mobile-accordion-menu">
                    <li><a href="<?php echo $path; ?>buyer-guides/index.php" class="mobile-link">Buyer Guides</a></li>
                    <li><a href="<?php echo $path; ?>export-process.php" class="mobile-link">Export Process</a></li>
                    <li><a href="<?php echo $path; ?>quality-control.php" class="mobile-link">Quality Control</a></li>
                    <li><a href="<?php echo $path; ?>faq.php" class="mobile-link">FAQs</a></li>
                    <li><a href="<?php echo $path; ?>why-agrox.php" class="mobile-link">Why AgroX</a></li>
                    <li><a href="<?php echo $path; ?>certifications.php" class="mobile-link">Certifications</a></li>
                    <li><a href="<?php echo $path; ?>market-reports/index.php" class="mobile-link">Market Reports</a></li>
                    <li><a href="<?php echo $path; ?>export-intelligence/index.php" class="mobile-link">Export Intelligence</a></li>
                    <li><a href="<?php echo $path; ?>trade-academy/index.php" class="mobile-link">Trade Academy</a></li>
                </ul>
            </li>
            
            <li><a href="<?php echo $path; ?>contact-us.php" class="mobile-link">CONTACT</a></li>
        </ul>

        <!-- Mobile Action Quote Button -->
        <div class="mobile-cta-wrapper">
            <a href="<?php echo $path; ?>contact-us.php?type=quote" class="btn-mobile-quote mobile-link">GET A QUOTE</a>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const path = window.location.pathname;
            // Activate nav if not on homepage
            if (!path.includes("index.php") && path !== "/" && !path.endsWith("/")) {
                const nav = document.getElementById('navbar');
                if(nav) {
                    nav.classList.add('active');
                }
            }

            // Mobile Menu Toggle
            const hamburger = document.getElementById('hamburger-menu');
            const mobileMenu = document.getElementById('nav-menu-mobile');
            if (hamburger && mobileMenu) {
                hamburger.addEventListener('click', function() {
                    hamburger.classList.toggle('active');
                    mobileMenu.classList.toggle('active');
                    document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
                });

                document.querySelectorAll('.mobile-link').forEach(link => {
                    link.addEventListener('click', function() {
                        hamburger.classList.remove('active');
                        mobileMenu.classList.remove('active');
                        document.body.style.overflow = '';
                    });
                });
            }

            // Mobile Accordion Toggle
            document.querySelectorAll('.mobile-accordion-toggle').forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const parent = this.closest('.mobile-accordion-parent');
                    parent.classList.toggle('active');
                });
            });
        });
    </script>