<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: FAQ & KNOWLEDGE PORTAL
// ----------------------------------------------------------------
$pageTitle = "FAQ | AgroX Agricultural Export & Quality Compliance Answers";
$metaDescription = "Clear answers about AgroX organic agricultural exports, packaging standards, custom blending, shipping terms, and B2B procurement terms.";
$canonicalURL = "https://www.theagroxgroup.com/faq.php"; 

include 'header.php'; 

// Array containing categorised FAQs for rendering and schema generation
$faqData = [
    "General Questions" => [
        [
            "q" => "What is AGROX and what does the company specialize in?",
            "a" => "AGROX is a premier agricultural export company based in India. We specialize in sourcing, quality auditing, processing, packaging, and shipping certified organic spices, conventional spices, dry fruits, grains, pulses, and premium essential/extract oils to B2B food businesses worldwide."
        ],
        [
            "q" => "Where are your headquarters and processing centers located?",
            "a" => "Our corporate headquarters are located in Rajendra Nagar, Khagaria, Bihar, India. Our processing hubs, cold-storage warehouses, and agricultural supply chains are strategically dispersed across key production belts of India including Rajasthan, Gujarat, Kerala, and Bihar to ensure freshness and immediate shipment access."
        ]
    ],
    "Product Questions" => [
        [
            "q" => "Do you supply both organic and conventional agricultural products?",
            "a" => "Yes. We offer dual supply lines. We supply certified organic spices (certified NPOP/USDA Organic) and high-grade conventional spices. Both categories are processed in separate facilities to completely eliminate any risk of cross-contamination."
        ],
        [
            "q" => "Can you customize spice blends, mesh sizes, and grading parameters?",
            "a" => "Absolutely. We customize processing parameters based on buyer specifications. This includes grinding spices into specific mesh sizes, supplying whole finger or powder forms, and sorting dry fruits into distinct grades (e.g., W240 or W320 Cashews)."
        ]
    ],
    "Quality Questions" => [
        [
            "q" => "How do you guarantee pesticide residue and aflatoxin compliance?",
            "a" => "We enforce a multi-tiered inspection protocol. Every batch of spices is tested in NABL-accredited laboratories for pesticide residue, chemical limits, heavy metals, and aflatoxins. We guarantee compliance with EU, US FDA, and GCC agricultural import criteria."
        ],
        [
            "q" => "Do you use optical sorting or metal detection systems?",
            "a" => "Yes. Our processing lines utilize high-definition color optical sorters to filter impurities, along with high-sensitivity inline metal detectors and magnetic separators to ensure absolute purity."
        ]
    ],
    "Packaging Questions" => [
        [
            "q" => "What packaging formats do you offer for bulk shipments?",
            "a" => "We offer bulk packaging in Multi-layer Kraft Paper Bags (10kg/25kg), PP bags with food-grade inner liners, and corrugated cartons. For high-moisture dry fruits, we offer vacuum sealed packages with nitrogen flushing."
        ],
        [
            "q" => "Do you support private labeling or custom retail packaging?",
            "a" => "Yes. We partner with large retail networks and supply private label solutions. We can process, pack, and seal products directly into customized pouches, jars, or cartons featuring your brand designs."
        ]
    ],
    "Shipping Questions" => [
        [
            "q" => "Which Indian ports do you ship bulk containers from?",
            "a" => "We export primarily through major sea ports in India including Mundra Port (Gujarat), Nhava Sheva (JNPT, Mumbai), and Chennai Port, depending on the crop's processing location and delivery destination."
        ],
        [
            "q" => "What are your standard Incoterms and delivery terms?",
            "a" => "Our standard terms of trade are FOB (Free on Board) at major Indian ports, CIF (Cost, Insurance & Freight), and CFR (Cost and Freight). We work with global freight forwarders to ensure transparent logistics handling."
        ]
    ],
    "Export Questions" => [
        [
            "q" => "What certificates of origin and customs documentation do you supply?",
            "a" => "Every shipment is accompanied by a Bill of Lading, Commercial Invoice, Packing List, Certificate of Origin (issued by the Chamber of Commerce), Phytosanitary Certificate, Laboratory Analysis Reports, and Organic Transaction Certificates where applicable."
        ],
        [
            "q" => "What payment terms do you support for international B2B trades?",
            "a" => "We accept secure payment channels including Irrevocable Letter of Credit (LC at Sight) confirmed by prime international banks, or Telegraphic Transfer (TT) with an upfront deposit and balance against documents."
        ]
    ],
    "Country Questions" => [
        [
            "q" => "Are you registered with the US FDA and other international regulators?",
            "a" => "Yes. AGROX is registered with the US Food and Drug Administration (FDA) and complies with all global sanitary and phytosanitary requirements. We also have registration with European import systems and APEDA (India)."
        ],
        [
            "q" => "Do you supply products that comply with Halal and Kosher specifications?",
            "a" => "Yes. Upon request, we provide batches that are certified Halal and Kosher, sourced and processed in accordance with strict dietary laws."
        ]
    ],
    "RFQ Questions" => [
        [
            "q" => "How can I request product samples before placing a commercial order?",
            "a" => "You can request samples by filling out our RFQ form or emailing our trade division. We supply small sample sets (100g - 500g) for laboratory testing. Shipping costs are usually borne by the buyer for initial inquiries."
        ],
        [
            "q" => "What is the typical lead time to receive an official commercial quote?",
            "a" => "Upon receiving a complete inquiry with target product specifications, volumes, packaging, and port of delivery, our trade desk will issue a formal quotation (FOB/CIF) within 24 to 48 hours."
        ]
    ]
];
?>

<!-- Structured FAQ Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
    $schemaEntries = [];
    foreach ($faqData as $cat => $items) {
        foreach ($items as $item) {
            $schemaEntries[] = json_encode([
                "@type" => "Question",
                "name" => $item["q"],
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => $item["a"]
                ]
            ]);
        }
    }
    echo implode(",\n    ", $schemaEntries);
    ?>
  ]
}
</script>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* --- CORE THEME & TYPOGRAPHY --- */
    body { font-family: 'Poppins', sans-serif; background-color: #050505; color: #e0e0e0; margin: 0; overflow-x: hidden; line-height: 1.6; }
    
    h1, h2, h3, h4, h5, .banner-title, .banner-scroll-text, .section-label, .category-tab, .btn-gold { 
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

    /* --- MAIN CONTENT --- */
    #main-content {
        position: relative;
        z-index: 10;
        background: #050505;
        padding: 100px 0;
    }
    .container { max-width: 1100px; margin: 0 auto; padding: 0 30px; position: relative; }

    .faq-layout {
        display: grid;
        grid-template-columns: 280px 1fr;
        gap: 60px;
        align-items: start;
    }

    /* --- NAVIGATION RAIL --- */
    .faq-nav-wrapper {
        position: sticky;
        top: 120px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .category-tab {
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.05);
        color: #888;
        padding: 15px 20px;
        border-radius: 8px;
        text-align: left;
        cursor: pointer;
        font-size: 1.1rem;
        transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .category-tab:hover {
        background: rgba(255,255,255,0.05);
        color: #fff;
        border-color: rgba(212, 160, 23, 0.2);
    }
    .category-tab.active-tab {
        background: rgba(212,160,23,0.08);
        border-color: #d4a017;
        color: #d4a017;
        box-shadow: 0 5px 15px rgba(212, 160, 23, 0.05);
    }
    .category-tab i {
        font-size: 0.8rem;
        opacity: 0.6;
        transition: transform 0.3s;
    }
    .category-tab.active-tab i {
        transform: translateX(4px);
        opacity: 1;
    }

    /* --- ACCORDION LIST --- */
    .faq-accordion-group {
        display: none;
    }
    .faq-accordion-group.active-group {
        display: block;
        animation: fadeInGroup 0.5s ease forwards;
    }
    @keyframes fadeInGroup {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .group-title {
        font-size: 3rem;
        color: #fff;
        margin: 0 0 40px 0;
        border-bottom: 1px solid rgba(255,255,255,0.08);
        padding-bottom: 15px;
    }

    /* Accordion Item */
    .faq-item {
        background: rgba(20, 20, 20, 0.5);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 12px;
        margin-bottom: 20px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .faq-item:hover {
        border-color: rgba(212, 160, 23, 0.2);
        background: rgba(20, 20, 20, 0.8);
    }
    .faq-item.item-expanded {
        border-color: rgba(212, 160, 23, 0.4);
        box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    }

    .faq-question-header {
        padding: 24px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        user-select: none;
    }
    .faq-question-text {
        font-size: 1.15rem;
        font-weight: 500;
        color: #fff;
        padding-right: 20px;
        line-height: 1.4;
        transition: color 0.3s;
    }
    .faq-item:hover .faq-question-text {
        color: #d4a017;
    }
    .faq-item.item-expanded .faq-question-text {
        color: #d4a017;
    }

    .faq-toggle-trigger {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.06);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #888;
        transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
        flex-shrink: 0;
    }
    .faq-item:hover .faq-toggle-trigger {
        color: #fff;
        background: rgba(212, 160, 23, 0.1);
        border-color: rgba(212, 160, 23, 0.3);
    }
    .faq-item.item-expanded .faq-toggle-trigger {
        transform: rotate(45deg);
        background: #d4a017;
        border-color: #d4a017;
        color: #000;
    }

    .faq-answer-panel {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .faq-answer-content {
        padding: 0 30px 30px 30px;
        color: #bbb;
        font-size: 1rem;
        line-height: 1.7;
        font-weight: 300;
    }

    /* --- CONVERSION CTA --- */
    .faq-cta-section {
        margin-top: 100px;
        border-top: 1px solid rgba(255,255,255,0.08);
        padding-top: 80px;
        text-align: center;
    }
    .cta-card {
        background: radial-gradient(circle at center, rgba(18, 28, 21, 0.3) 0%, rgba(5,5,5,1) 100%);
        border: 1px solid rgba(255,255,255,0.06);
        border-radius: 16px;
        padding: 60px 40px;
        max-width: 800px;
        margin: 0 auto;
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
    }
    .cta-card h3 { font-size: 3rem; color: #fff; margin: 0 0 15px 0; }
    .cta-card p { color: #b0b0b0; max-width: 600px; margin: 0 auto 35px auto; font-weight: 300; }
    
    .btn-gold {
        display: inline-block; background: #d4a017; color: #000; padding: 16px 40px; font-size: 1.1rem;
        cursor: pointer; text-transform: uppercase; font-weight: bold; border-radius: 4px; text-decoration: none;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    .btn-gold:hover { background: #fff; box-shadow: 0 0 20px rgba(212, 160, 23, 0.4); }
    .btn-gold:active { transform: scale(0.97) !important; }

    /* --- RESPONSIVE --- */
    @media (max-width: 900px) {
        .faq-layout { grid-template-columns: 1fr; gap: 40px; }
        .faq-nav-wrapper { position: relative; top: 0; flex-direction: row; flex-wrap: wrap; gap: 8px; }
        .category-tab { padding: 10px 15px; font-size: 0.95rem; }
        .category-tab i { display: none; }
        .banner-title { font-size: 4rem; }
        .banner-scroll-text { font-size: 25vw; }
        .group-title { font-size: 2.2rem; }
    }
    @media (max-width: 600px) {
        .faq-question-header { padding: 20px; }
        .faq-answer-content { padding: 0 20px 20px 20px; }
        .faq-question-text { font-size: 1rem; }
        .cta-card { padding: 40px 20px; }
        .cta-card h3 { font-size: 2.2rem; }
    }
</style>

<div class="banner-wrapper" id="bannerContainer">
    <img src="assets/images/bannerproduct.avif" alt="FAQ Banner" class="banner-img-responsive">
    <div class="banner-scroll-text" id="bgText">KNOWLEDGE</div>
    <h1 class="banner-title" id="fgText">FAQ PORTAL</h1> 
    <div class="vignette-overlay"></div>
</div>

<section id="main-content">
    <div class="container">
        
        <div class="faq-layout">
            
            <!-- Side Navigation Rail -->
            <div class="faq-nav-wrapper">
                <?php 
                $activeClass = "active-tab";
                foreach (array_keys($faqData) as $index => $categoryName) {
                    $slug = strtolower(str_replace(' ', '-', $categoryName));
                    echo "<button class='category-tab $activeClass' onclick='switchFAQCategory(\"$slug\", this)'>";
                    echo "<span>" . htmlspecialchars($categoryName) . "</span>";
                    echo "<i class='fa-solid fa-chevron-right'></i>";
                    echo "</button>";
                    $activeClass = ""; // clear after first entry
                }
                ?>
            </div>

            <!-- Accordion Group Contents -->
            <div class="faq-content-rail">
                <?php 
                $activeGroupClass = "active-group";
                foreach ($faqData as $categoryName => $faqs) {
                    $slug = strtolower(str_replace(' ', '-', $categoryName));
                    echo "<div class='faq-accordion-group $activeGroupClass' id='group-$slug'>";
                    echo "<h2 class='group-title'>" . htmlspecialchars($categoryName) . "</h2>";
                    
                    foreach ($faqs as $faqIndex => $faq) {
                        echo "<div class='faq-item' onclick='toggleAccordion(this)'>";
                        echo "  <div class='faq-question-header'>";
                        echo "      <span class='faq-question-text'>" . htmlspecialchars($faq["q"]) . "</span>";
                        echo "      <div class='faq-toggle-trigger'><i class='fa-solid fa-plus'></i></div>";
                        echo "  </div>";
                        echo "  <div class='faq-answer-panel'>";
                        echo "      <div class='faq-answer-content'>";
                        echo "          <p>" . htmlspecialchars($faq["a"]) . "</p>";
                        echo "      </div>";
                        echo "  </div>";
                        echo "</div>";
                    }
                    
                    echo "</div>";
                    $activeGroupClass = ""; // clear after first entry
                }
                ?>
            </div>

        </div>

        <!-- Call to Action -->
        <div class="faq-cta-section">
            <div class="cta-card">
                <h3>HAVE A SPECIFIC PROCUREMENT INQUIRY?</h3>
                <p>Our trade officers are online to coordinate laboratory test certificates, custom packaging specifications, and contract terms directly.</p>
                <a href="contact-us.php?type=quote" class="btn-gold">REQUEST COMMERCIAL QUOTE</a>
            </div>
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

    // Switch Category Tabs
    function switchFAQCategory(targetSlug, buttonEl) {
        // Toggle Active Class on buttons
        const tabs = document.querySelectorAll('.category-tab');
        tabs.forEach(tab => tab.classList.remove('active-tab'));
        buttonEl.classList.add('active-tab');

        // Toggle Active Class on FAQ panels
        const groups = document.querySelectorAll('.faq-accordion-group');
        groups.forEach(group => {
            group.classList.remove('active-group');
            // Collapse any open items when switching
            const openItems = group.querySelectorAll('.faq-item.item-expanded');
            openItems.forEach(item => {
                item.classList.remove('item-expanded');
                const panel = item.querySelector('.faq-answer-panel');
                panel.style.maxHeight = null;
            });
        });

        const activeGroup = document.getElementById('group-' + targetSlug);
        if(activeGroup) {
            activeGroup.classList.add('active-group');
        }

        // Smooth scroll to top of content on mobile
        if(window.innerWidth < 900) {
            activeGroup.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    // Toggle Accordion Panel
    function toggleAccordion(itemEl) {
        const isExpanded = itemEl.classList.contains('item-expanded');
        
        // Find the specific panel
        const panel = itemEl.querySelector('.faq-answer-panel');
        
        if (isExpanded) {
            itemEl.classList.remove('item-expanded');
            panel.style.maxHeight = null;
        } else {
            // Optional: collapse other open items in the same category
            const parentGroup = itemEl.closest('.faq-accordion-group');
            const openSiblings = parentGroup.querySelectorAll('.faq-item.item-expanded');
            openSiblings.forEach(sibling => {
                sibling.classList.remove('item-expanded');
                sibling.querySelector('.faq-answer-panel').style.maxHeight = null;
            });

            itemEl.classList.add('item-expanded');
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    }
</script>

<?php include 'footer.php'; ?>
