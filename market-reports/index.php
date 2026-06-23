<?php
// ================================================================
//  MARKET REPORTS HUB
// ================================================================
$pageTitle = "Market Reports | Commodity Analysis & Crop Intelligence | AgroX";
$metaDescription = "AgroX Market Reports — seasonal crop pricing indices, harvest forecasts, export trend analysis, and commodity demand reports for organic agricultural products from India.";
$path = '../';
$prodPath = '';
include '../header.php';
include '../assets/includes/hub-styles.php';
?>

<!-- BANNER -->
<div class="hub-banner">
    <img src="../assets/images/bannerproduct.avif" alt="AgroX Market Reports" class="hub-banner-img">
    <div class="hub-banner-bg-text" id="hubBgText">MARKETS</div>
    <h1 class="hub-banner-title" id="hubFgText">MARKET REPORTS</h1>
    <div class="hub-banner-subtitle">Crop Intelligence · Export Trends · Demand Forecasts · Commodity Analysis</div>
    <div class="hub-banner-vignette"></div>
</div>

<!-- BREADCRUMB -->
<div class="hub-breadcrumb">
    <div class="hub-breadcrumb-inner">
        <a href="../index.php">Home</a>
        <span class="sep">›</span>
        <a href="../knowledge/index.php">Knowledge Center</a>
        <span class="sep">›</span>
        <span class="current">Market Reports</span>
    </div>
</div>

<!-- MAIN CONTENT -->
<main class="hub-main">
    <div class="hub-container">

        <!-- Section Header -->
        <div class="hub-section-header hub-animate">
            <span class="hub-eyebrow">Agricultural Commodity Intelligence</span>
            <h2 class="hub-section-heading">CROP INTELLIGENCE<br><span class="text-gold">FOR GLOBAL BUYERS</span></h2>
            <p class="hub-section-desc">Seasonal production reports, export price indices, and demand forecasts for every product category AgroX supplies — helping international buyers time orders and plan procurement budgets.</p>
        </div>

        <!-- Purpose Strip -->
        <div class="hub-purpose-strip hub-animate">
            <div class="hub-purpose-icon"><i class="fa-solid fa-chart-bar"></i></div>
            <p class="hub-purpose-text">
                <strong>How to use these reports:</strong> Each market report combines APEDA export data, mandi (wholesale market) price data, and on-ground sourcing intelligence from AgroX's partner farms. Use them to benchmark current prices, understand supply dynamics, and plan forward purchasing contracts.
            </p>
        </div>

        <!-- Report Categories -->
        <div class="hub-categories">

            <!-- Spice Market Reports -->
            <div class="hub-category-row">
                <div class="category-label">Spice<br>Crop Reports</div>
                <div class="category-items">
                    <a href="../contact-us.php?type=quote&product=cumin" class="category-item hub-animate">
                        <i class="fa-solid fa-seedling category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Cumin (Jeera) Market Report</span>
                            <span class="category-item-desc">Rabi season sowing data, Unjha mandi arrivals, and FOB price outlook for Indian cumin exports.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote&product=cardamom" class="category-item hub-animate">
                        <i class="fa-solid fa-seedling category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Cardamom Market Report</span>
                            <span class="category-item-desc">Kerala and Sikkim production data, Spices Board auction prices, and Guatemala supply competition analysis.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote&product=turmeric" class="category-item hub-animate">
                        <i class="fa-solid fa-seedling category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Turmeric Market Report</span>
                            <span class="category-item-desc">Erode and Sangli production cycles, curcumin content benchmarks, and demand from nutraceutical markets.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote&product=chilli" class="category-item hub-animate">
                        <i class="fa-solid fa-seedling category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Red Chilli Market Report</span>
                            <span class="category-item-desc">Guntur and Khammam arrival data, SHU Scoville benchmarks by variety, and global demand outlook.</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Grain & Pulse Reports -->
            <div class="hub-category-row">
                <div class="category-label">Grain &<br>Pulse Reports</div>
                <div class="category-items">
                    <a href="../contact-us.php?type=quote&product=basmati" class="category-item hub-animate">
                        <i class="fa-solid fa-wheat-awn category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Basmati Rice Market Report</span>
                            <span class="category-item-desc">Punjab and Haryana harvest data, GI certification status, and APEDA premium export price benchmarks.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote&product=pulses" class="category-item hub-animate">
                        <i class="fa-solid fa-circle-dot category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Pulse Market Report (Toor, Masoor)</span>
                            <span class="category-item-desc">Indore and Akola mandi prices, government buffer stock levels, and import/export parity analysis.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote&product=sesame" class="category-item hub-animate">
                        <i class="fa-solid fa-circle category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Sesame Seeds Market Report</span>
                            <span class="category-item-desc">Kharif sowing progress, Unjha market prices, and demand from tahini manufacturers in EU and MENA.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote&product=groundnut" class="category-item hub-animate">
                        <i class="fa-solid fa-leaf category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Groundnut Market Report</span>
                            <span class="category-item-desc">Gujarat and Rajasthan production data, aflatoxin test compliance rates, and CIF FOB export price trends.</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Export Trend Reports -->
            <div class="hub-category-row">
                <div class="category-label">Export<br>Trend Analysis</div>
                <div class="category-items">
                    <a href="../export-intelligence/index.php" class="category-item hub-animate">
                        <i class="fa-solid fa-arrow-trend-up category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">India Spice Export Trends</span>
                            <span class="category-item-desc">5-year CAGR analysis, fastest-growing destination markets, and volume vs. value shifts in Indian spice exports.</span>
                        </div>
                    </a>
                    <a href="../export-intelligence/index.php" class="category-item hub-animate">
                        <i class="fa-solid fa-earth-americas category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Organic Premium Markets</span>
                            <span class="category-item-desc">Which markets are paying organic premiums, what premium levels are sustainable, and certification acceptance rates.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote" class="category-item hub-animate">
                        <i class="fa-solid fa-handshake category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Private Label Demand Report</span>
                            <span class="category-item-desc">Growth in retailer and food manufacturer demand for private-label organic ingredients from Indian sources.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote" class="category-item hub-animate">
                        <i class="fa-solid fa-warehouse category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Inventory & Supply Outlook</span>
                            <span class="category-item-desc">Current stock levels, anticipated tightness windows, and forward booking recommendations for Q2 2026.</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Demand Forecasts -->
            <div class="hub-category-row">
                <div class="category-label">Demand<br>Forecasts</div>
                <div class="category-items">
                    <a href="../contact-us.php?type=quote" class="category-item hub-animate">
                        <i class="fa-solid fa-magnifying-glass-chart category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Global Organic Spice Demand 2026</span>
                            <span class="category-item-desc">Market size projections, growth drivers, and per-region organic ingredient adoption forecasts.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote" class="category-item hub-animate">
                        <i class="fa-solid fa-industry category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Food Manufacturing Demand</span>
                            <span class="category-item-desc">Ingredient specifications and sourcing patterns from spice blenders, sauce manufacturers, and ready-meal processors.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote" class="category-item hub-animate">
                        <i class="fa-solid fa-pills category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Nutraceutical & Pharma Demand</span>
                            <span class="category-item-desc">Curcumin, piperine, and capsaicin extract demand from supplement manufacturers in EU and North America.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote" class="category-item hub-animate">
                        <i class="fa-solid fa-shop category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Retail & Food Service Channels</span>
                            <span class="category-item-desc">Premium retail and HORECA procurement patterns, packaging preferences, and quality tier demand by channel.</span>
                        </div>
                    </a>
                </div>
            </div>

        </div><!-- /.hub-categories -->

        <!-- Related Hubs -->
        <div class="hub-related hub-animate">
            <div class="hub-related-title">Continue Exploring the Knowledge Ecosystem</div>
            <div class="hub-related-grid">
                <a href="../export-intelligence/index.php" class="hub-related-card">
                    <i class="fa-solid fa-chart-line hub-related-icon"></i>
                    <span class="hub-related-name">Export Intelligence</span>
                </a>
                <a href="../buyer-guides/index.php" class="hub-related-card">
                    <i class="fa-solid fa-book-open hub-related-icon"></i>
                    <span class="hub-related-name">Buyer Guides</span>
                </a>
                <a href="../trade-academy/index.php" class="hub-related-card">
                    <i class="fa-solid fa-graduation-cap hub-related-icon"></i>
                    <span class="hub-related-name">Trade Academy</span>
                </a>
                <a href="../all-products.php" class="hub-related-card">
                    <i class="fa-solid fa-leaf hub-related-icon"></i>
                    <span class="hub-related-name">All Products</span>
                </a>
            </div>
        </div>

        <!-- RFQ CTA -->
        <div class="hub-rfq-section hub-animate">
            <div class="hub-rfq-body">
                <span class="hub-rfq-label">Make Your Move</span>
                <div class="hub-rfq-heading">GET A <span class="text-gold">CURRENT PRICE</span><br>FOR ANY PRODUCT</div>
                <p class="hub-rfq-desc">Markets move fast. Request a live export quotation with current pricing, available grade specifications, and estimated lead times for any product in the AgroX catalogue.</p>
            </div>
            <a href="../contact-us.php?type=quote" class="hub-rfq-cta">REQUEST LIVE QUOTE</a>
        </div>

    </div>
</main>

<?php include '../footer.php'; ?>
