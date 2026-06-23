<?php
// ================================================================
//  BUYER GUIDES HUB
// ================================================================
$pageTitle = "Buyer Guides | International Procurement Intelligence | AgroX";
$metaDescription = "AgroX Buyer Guides — complete procurement resources for international B2B buyers. Product specifications, packaging standards, incoterms guides, supplier evaluation, and country sourcing guides.";
$path = '../';
$prodPath = '';
include '../header.php';
include '../assets/includes/hub-styles.php';
?>

<!-- BANNER -->
<div class="hub-banner">
    <img src="../assets/images/bannerproduct.avif" alt="AgroX Buyer Guides" class="hub-banner-img">
    <div class="hub-banner-bg-text" id="hubBgText">GUIDES</div>
    <h1 class="hub-banner-title" id="hubFgText">BUYER GUIDES</h1>
    <div class="hub-banner-subtitle">Procurement Intelligence · Sourcing Standards · Trade Documentation</div>
    <div class="hub-banner-vignette"></div>
</div>

<!-- BREADCRUMB -->
<div class="hub-breadcrumb">
    <div class="hub-breadcrumb-inner">
        <a href="../index.php">Home</a>
        <span class="sep">›</span>
        <a href="../knowledge/index.php">Knowledge Center</a>
        <span class="sep">›</span>
        <span class="current">Buyer Guides</span>
    </div>
</div>

<!-- MAIN CONTENT -->
<main class="hub-main">
    <div class="hub-container">

        <!-- Section Header -->
        <div class="hub-section-header hub-animate">
            <span class="hub-eyebrow">AgroX Knowledge Platform</span>
            <h2 class="hub-section-heading">MAKE <span class="text-gold">INFORMED</span><br>SOURCING DECISIONS</h2>
            <p class="hub-section-desc">Everything an international procurement team needs before placing an order with an Indian agricultural exporter — from specification verification to customs clearance protocols.</p>
        </div>

        <!-- Purpose Strip -->
        <div class="hub-purpose-strip hub-animate">
            <div class="hub-purpose-icon"><i class="fa-solid fa-book-open"></i></div>
            <p class="hub-purpose-text">
                <strong>Who these guides are for:</strong> Import managers, procurement directors, and trade finance professionals sourcing organic spices, pulses, rice, dry fruits, and botanical extracts from India for the first time — or looking to systematize an existing supply chain relationship.
            </p>
        </div>

        <!-- Guide Categories -->
        <div class="hub-categories">

            <!-- Category 1 -->
            <div class="hub-category-row">
                <div class="category-label">Product<br>Specification</div>
                <div class="category-items">
                    <a href="../all-products.php" class="category-item hub-animate">
                        <i class="fa-solid fa-vial category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Quality & Grade Standards</span>
                            <span class="category-item-desc">Moisture content, purity levels, admixture limits, and NABL lab parameters for each product category.</span>
                        </div>
                    </a>
                    <a href="../all-products.php" class="category-item hub-animate">
                        <i class="fa-solid fa-ruler category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Size & Sorting Specifications</span>
                            <span class="category-item-desc">Bold count, mesh size, physical sorting criteria, and visual grade references for whole spices and grains.</span>
                        </div>
                    </a>
                    <a href="../products/cumin-seeds-exporter-from-india.php" class="category-item hub-animate">
                        <i class="fa-solid fa-flask category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Pesticide Residue Limits</span>
                            <span class="category-item-desc">Maximum residue limit (MRL) compliance for EU, USDA, and Japanese agricultural import standards.</span>
                        </div>
                    </a>
                    <a href="../certifications.php" class="category-item hub-animate">
                        <i class="fa-solid fa-certificate category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Certification Requirements</span>
                            <span class="category-item-desc">Which certifications are required per product type, destination market, and end-use application.</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Category 2 -->
            <div class="hub-category-row">
                <div class="category-label">Packaging<br>& Labeling</div>
                <div class="category-items">
                    <a href="../contact-us.php?type=quote" class="category-item hub-animate">
                        <i class="fa-solid fa-box category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Primary Packaging Options</span>
                            <span class="category-item-desc">Vacuum bags, polypropylene sacks, HDPE bags, jute bags — when to use each format and minimum order quantities.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote" class="category-item hub-animate">
                        <i class="fa-solid fa-tag category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Labeling Compliance by Market</span>
                            <span class="category-item-desc">EU, FDA, and GCC-specific label requirements for organic agricultural imports including ingredient declarations and country of origin.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote" class="category-item hub-animate">
                        <i class="fa-solid fa-weight-hanging category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Container Load Planning</span>
                            <span class="category-item-desc">FCL and LCL packing configurations, palletization standards, and mixed-product container loading calculations.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote" class="category-item hub-animate">
                        <i class="fa-solid fa-temperature-half category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Storage & Transit Conditions</span>
                            <span class="category-item-desc">Temperature, humidity, and light exposure requirements during sea freight transit for sensitive products.</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Category 3 -->
            <div class="hub-category-row">
                <div class="category-label">Country<br>Buying Guides</div>
                <div class="category-items">
                    <a href="../contact-us.php?market=uae" class="category-item hub-animate">
                        <i class="fa-solid fa-globe category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">UAE & GCC Sourcing Guide</span>
                            <span class="category-item-desc">Halal certification requirements, Dubai customs protocols, and preferred incoterms for GCC buyers.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?market=usa" class="category-item hub-animate">
                        <i class="fa-solid fa-globe category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">USA Sourcing Guide</span>
                            <span class="category-item-desc">FDA Prior Notice, USDA Organic equivalency, and FSMA compliance for importing Indian agricultural products.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?market=germany" class="category-item hub-animate">
                        <i class="fa-solid fa-globe category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">EU/Germany Sourcing Guide</span>
                            <span class="category-item-desc">EU Organic equivalency documentation, EUDR due diligence, phytosanitary certificate requirements.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?market=japan" class="category-item hub-animate">
                        <i class="fa-solid fa-globe category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Japan & ASEAN Sourcing Guide</span>
                            <span class="category-item-desc">JAS Organic standards, strict MRL requirements, and documentation protocols for East Asian markets.</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Category 4 -->
            <div class="hub-category-row">
                <div class="category-label">Supplier<br>Evaluation</div>
                <div class="category-items">
                    <a href="../why-agrox.php" class="category-item hub-animate">
                        <i class="fa-solid fa-magnifying-glass category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Supplier Audit Checklist</span>
                            <span class="category-item-desc">Key verification criteria for evaluating an Indian agricultural exporter before signing a purchase agreement.</span>
                        </div>
                    </a>
                    <a href="../certifications.php" class="category-item hub-animate">
                        <i class="fa-solid fa-shield-halved category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Certification Verification Guide</span>
                            <span class="category-item-desc">How to verify NPOP, USDA, EU Organic, FSSAI, and Halal certificates — including expiry and issuing authority checks.</span>
                        </div>
                    </a>
                    <a href="../quality-control.php" class="category-item hub-animate">
                        <i class="fa-solid fa-circle-check category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Pre-Shipment Inspection Guide</span>
                            <span class="category-item-desc">When and how to commission third-party pre-shipment inspection (PSI) and what documents to require.</span>
                        </div>
                    </a>
                    <a href="../contact-us.php?type=quote" class="category-item hub-animate">
                        <i class="fa-solid fa-handshake category-item-icon"></i>
                        <div class="category-item-body">
                            <span class="category-item-name">Sample & Trial Order Guide</span>
                            <span class="category-item-desc">How to request, evaluate, and approve product samples before committing to a full commercial order.</span>
                        </div>
                    </a>
                </div>
            </div>

        </div><!-- /.hub-categories -->

        <!-- Related Hubs -->
        <div class="hub-related hub-animate">
            <div class="hub-related-title">Explore the Knowledge Ecosystem</div>
            <div class="hub-related-grid">
                <a href="../knowledge/index.php" class="hub-related-card">
                    <i class="fa-solid fa-compass hub-related-icon"></i>
                    <span class="hub-related-name">Knowledge Center</span>
                </a>
                <a href="../export-intelligence/index.php" class="hub-related-card">
                    <i class="fa-solid fa-chart-line hub-related-icon"></i>
                    <span class="hub-related-name">Export Intelligence</span>
                </a>
                <a href="../compliance-center/index.php" class="hub-related-card">
                    <i class="fa-solid fa-shield-halved hub-related-icon"></i>
                    <span class="hub-related-name">Compliance Center</span>
                </a>
                <a href="../trade-academy/index.php" class="hub-related-card">
                    <i class="fa-solid fa-graduation-cap hub-related-icon"></i>
                    <span class="hub-related-name">Trade Academy</span>
                </a>
            </div>
        </div>

        <!-- RFQ CTA -->
        <div class="hub-rfq-section hub-animate">
            <div class="hub-rfq-body">
                <span class="hub-rfq-label">Ready to Source?</span>
                <div class="hub-rfq-heading">START YOUR<br><span class="text-gold">SOURCING JOURNEY</span></div>
                <p class="hub-rfq-desc">Submit your product requirements, target volume, and destination market. Our export team responds within 24 hours with a detailed quotation and compliance overview.</p>
            </div>
            <a href="../contact-us.php?type=quote" class="hub-rfq-cta">REQUEST EXPORT QUOTE</a>
        </div>

    </div>
</main>

<?php include '../footer.php'; ?>
