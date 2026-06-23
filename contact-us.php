<?php 
// ----------------------------------------------------------------
//  PAGE CONFIGURATION: CONTACT US (SEO OPTIMIZED)
// ----------------------------------------------------------------
$pageTitle = "Contact AGROX | Organic Exports India & Global Shipping";
$metaDescription = "Contact AGROX Group for premium organic spices, dry fruits, and export inquiries. Headquartered in Bihar, India with a global distribution network.";
$canonicalURL = "https://www.theagroxgroup.com/contact-us.php"; 
$metaKeywords = "organic exports, bulk spices, indian spices export, agrox contact, buy organic food wholesale";

// OPEN GRAPH
$ogTitle = $pageTitle;
$ogDescription = $metaDescription;
// Keeping .avif as requested previously
$ogImage = "https://www.theagroxgroup.com/assets/images/bannerproduct.avif"; 

// Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// --- OFFICE STATUS LOGIC ---
date_default_timezone_set('Asia/Kolkata');
$hour = date('H');
$day = date('D');
$isOpen = ($hour >= 9 && $hour < 20 && $day != 'Sun'); 
$statusColor = $isOpen ? "#4CAF50" : "#F44336"; 
$statusText = $isOpen ? "Office Online (IST)" : "Office Offline";

$msg_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $product = htmlspecialchars(strip_tags(trim($_POST['product'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    $to = "priyanshu@theagroxgroup.com"; 
    $subject = "New Inquiry: $name - $product";
    $server_email = "agroxgroup@gmail.com"; 

    $email_content = "Name: $name\nEmail: $email\nProduct: $product\n\nMessage:\n$message\n";
    $headers = "From: $server_email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $email_content, $headers)) {
        $msg_status = "<div class='success-msg'>Thank you! Message sent successfully.</div>";
    } else {
        $msg_status = "<div class='error-msg'>Server Error. Please try again.</div>";
    }
}

include 'header.php'; 
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ExportService",
  "name": "AGROX Organic Exports",
  "image": "https://www.theagroxgroup.com/assets/images/logo.png",
  "url": "<?php echo $canonicalURL; ?>",
  "telephone": "+917320040684",
  "email": "support@theagroxgroup.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Mohit Palace, Rajendra Nagar",
    "addressLocality": "Khagaria",
    "addressRegion": "Bihar",
    "postalCode": "851204",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 25.5, 
    "longitude": 86.4 
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    "opens": "09:00",
    "closes": "20:00"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91-98765-43210",
    "contactType": "customer service",
    "areaServed": "Global"
  }
}
</script>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* --- FONTS & GLOBAL --- */
    body { font-family: 'Poppins', sans-serif; background-color: #050505; color: #fff; margin: 0; }
    
    h1, h2, h3, h4, label, button, .banner-title, .banner-scroll-text, .map-title, .form-heading {
        font-family: 'Bebas Neue', sans-serif;
        letter-spacing: 1.5px;
    }

    /* --- BANNER (FIXED) --- */
    .banner-wrapper { 
        position: relative; width: 100%; overflow: hidden; margin-bottom: 0px; 
        height: 45vh; min-height: 200px; background-color: #111; 
    }
    .banner-img-responsive { width: 100%; height: 100%; display: block; object-fit: cover; }
    .banner-title {
        position: absolute; top: 65%; left: 50%; transform: translate(-50%, -50%);
        z-index: 5; margin: 0; font-size: 8rem; color: #ffffff; 
        text-shadow: 0 10px 40px rgba(0, 0, 0, 0.9); width: 100%; text-align: center;
        animation: textFocusIn 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
    }
    .banner-scroll-text {
        position: absolute; top: 65%; left: 50%; transform: translate(-50%, -50%);
        z-index: 1; font-size: 20vw; line-height: 1; opacity: 0.6;
        color: transparent; -webkit-text-stroke: 2px rgba(255, 255, 255, 10);
        pointer-events: none;
    }

    /* --- MAIN CONTENT SECTION --- */
    .contact-bg-section {
        position: relative;
        background-image: url('assets/images/Page3.png');
        background-size: cover;
        background-position: center center;
        padding-top: 80px; 
        padding-bottom: 100px;
        min-height: 100vh;
    }
    .vignette-overlay {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: radial-gradient(ellipse at center, rgba(0,0,0,0.4) 0%, #050505 100%);
        pointer-events: none; z-index: 1;
    }

    /* --- CONTAINER --- */
    .contact-container {
        position: relative; z-index: 2; margin: 0 auto; 
        padding: 0; width: 98%; 
        /* FINAL VALUE FROM SCREENSHOT */
        max-width: 920px; 
        transition: max-width 0.2s ease;
    }

    /* --- GRID --- */
    .story-grid { 
        display: flex; 
        margin-bottom: 80px; 
        justify-content: center; 
        /* CHANGED: Forces both cards to be equal height */
        align-items: stretch; 
        gap: 40px; 
    }

    /* --- CARD COLUMNS (FINAL VALUES HARDCODED) --- */
    .info-col { 
        flex: 0 0 auto; 
        /* VALUES FROM SCREENSHOT */
        width: 59%; 
        transform: translateX(15px); 
        display: flex; 
        position: relative; 
    } 
    .form-col { 
        flex: 0 0 auto; 
        /* VALUES FROM SCREENSHOT */
        width: 68%; 
        transform: translateX(-5px); 
        display: flex; 
        position: relative;
    }

    .glass-box {
        position: relative; background: rgba(20, 20, 20, 0.7); backdrop-filter: blur(15px);            
        border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px;
        padding: 40px; box-shadow: 0 20px 50px rgba(0,0,0,0.5); width: 100%;
        /* CHANGED: Added height 100% to fill the equal column height */
        height: 100%; 
        box-sizing: border-box; display: flex; flex-direction: column; justify-content: center; 
    }

    /* --- FORM HEADER STYLES --- */
    .form-heading { font-size: 3rem; color: #fff; line-height: 1; margin: 0 0 10px 0; text-align: center; }
    .form-subtext { font-family: 'Poppins', sans-serif; font-size: 0.95rem; color: #ccc; margin: 0 0 5px 0; text-align: center; font-style: italic; }
    .form-tagline { font-family: 'Poppins', sans-serif; font-weight: 700; color: #d4a017; font-size: 1.1rem; text-transform: uppercase; margin-bottom: 30px; letter-spacing: 1px; text-align: center; }

    /* --- FORM ELEMENTS --- */
    .form-group { margin-bottom: 25px; }
    .form-label { color: #d4a017; margin-bottom: 8px; font-size: 0.95rem; font-weight: 500; display: block; text-transform: uppercase; }
    .form-input {
        width: 100%; padding: 15px; background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1); color: #fff; border-radius: 4px; font-family: 'Poppins', sans-serif;
        box-sizing: border-box; 
    }
    .form-input:focus { outline: none; border-color: #d4a017; background: rgba(0,0,0,0.6); }

    .submit-btn {
        background: #d4a017; color: #000; border: none; padding: 15px 40px; font-size: 1.2rem; cursor: pointer; width: 100%;
        transition: 0.3s; text-transform: uppercase; font-weight: bold; border-radius: 4px; 
    }
    .submit-btn:hover { background: #fff; box-shadow: 0 0 20px rgba(212, 160, 23, 0.4); }

    /* --- INFO TEXT --- */
    h3.info-heading { color: #fff; font-size: 2rem; margin-bottom: 2px; border-bottom: 2px solid #d4a017; display: inline-block; padding-bottom: 2px; letter-spacing: 1px; margin-top: 0; }
    .info-sub { color: #d4a017; font-size: 0.9rem; margin-bottom: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-top: 5px; }
    .info-text { color: #ccc; margin-bottom: 30px; font-weight: 300; line-height: 1.6; font-size: 0.95rem; }
    .no-margin-bottom { margin-bottom: 0; }

    /* --- TOP RIGHT WAVE ANIMATION --- */
    .status-wave-container { position: absolute; top: 30px; right: 30px; display: flex; align-items: center; gap: 8px; }
    .status-text-label { font-size: 0.75rem; color: <?php echo $statusColor; ?>; text-transform: uppercase; font-weight: 600; letter-spacing: 1px; }
    .status-wave { width: 10px; height: 10px; border-radius: 50%; background: transparent; position: relative; }
    .status-wave::before {
        content: ''; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
        width: 100%; height: 100%; border-radius: 50%; border: 2px solid <?php echo $statusColor; ?>; animation: waveInfinite 2s infinite;
    }
    @keyframes waveInfinite {
        0% { width: 5px; height: 5px; opacity: 1; border-width: 2px; }
        100% { width: 30px; height: 30px; opacity: 0; border-width: 0px; }
    }

    /* --- MAP SECTION --- */
    .map-title { text-align: center; font-size: 2.5rem; margin-bottom: 20px; color: #fff; }
    .map-container-box { position: relative; width: 100%; max-width: 100%; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; overflow: hidden; background: rgba(0,0,0,0.3); }
    .actual-map-img { width: 100%; height: auto; display: block; opacity: 0.3; filter: grayscale(100%); }

    /* PINS */
    .pin { position: absolute; width: 12px; height: 12px; border-radius: 50%; cursor: pointer; transform: translate(-50%, -50%); z-index: 10; box-shadow: 0 0 8px rgba(255,255,255,0.5); }
    .pin-hq { background-color: #00ff00; color: #00ff00; }
    .pin-branch { background-color: #d4a017; color: #d4a017; }
    .pin::after { content: ''; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%; height: 100%; border-radius: 50%; border: 1px solid currentColor; animation: pulsePin 2s infinite; }
    .pin .tooltip { position: absolute; bottom: 18px; left: 50%; transform: translateX(-50%); background: #fff; color: #000; padding: 4px 8px; border-radius: 4px; font-size: 11px; font-weight: bold; white-space: nowrap; opacity: 0; visibility: hidden; transition: 0.2s; pointer-events: none; }
    .pin:hover .tooltip { opacity: 1; visibility: visible; bottom: 22px; }

    @keyframes pulsePin {
        0% { width: 10px; height: 10px; opacity: 1; border-width: 2px;}
        100% { width: 40px; height: 40px; opacity: 0; border-width: 0px;}
    }

    /* --- MAP COORDINATES --- */
    .p-india    { top: 48.9%; left: 70.2%; }
    .p-nigeria  { top: 59.3%; left: 49.6%; }
    .p-europe   { top: 33.2%; left: 49.2%; }
    .p-safrica  { top: 77.6%; left: 53.2%; }
    .p-canada   { top: 26%; left: 19%; }
    .p-brazil   { top: 68%; left: 32%; }
    .p-russia   { top: 25%; left: 76%; }
    .p-aus      { top: 76%; left: 88%; }

    /* Responsive */
    @media (max-width: 900px) {
        .story-grid { flex-direction: column; align-items: stretch; } 
        .info-col, .form-col { width: 100%; transform: none !important; } 
        .banner-title { font-size: 3.5rem; }
        .banner-scroll-text { font-size: 25vw; }
        .actual-map-img { min-height: 250px; object-fit: cover; }
        .status-wave-container { top: 20px; right: 20px; }
        .form-heading { font-size: 2.5rem; }
    }
</style>

<div class="banner-wrapper" id="bannerContainer">
    <img src="assets/images/bannerproduct.avif" alt="AGROX Contact Banner" class="banner-img-responsive">
    <div class="banner-scroll-text" id="bgText">AGROXGROUP</div>
    <h1 class="banner-title" id="fgText">CONTACT US</h1> 
    <div class="vignette-overlay"></div>
</div>

<section class="contact-bg-section">
    <div class="vignette-overlay"></div>

    <div class="contact-container">
        
        <div class="story-grid">
            
            <div class="info-col" id="infoContainer">
                <div class="glass-box">
                    <div class="status-wave-container">
                        <span class="status-text-label"><?php echo $statusText; ?></span>
                        <div class="status-wave"></div>
                    </div>
                    <h3 class="info-heading">HEAD OFFICE</h3>
                    <div class="info-sub">AGROX ORGANIC EXPORTS</div>
                    <address class="info-text" style="font-style: normal;">
                        Mohit Palace, Rajendra Nagar, Khagaria, Bihar, India
                    </address>
                    <h3 class="info-heading">DIRECT LINES</h3>
                    <div class="info-sub">SALES & SUPPORT</div>
                    <p class="info-text">
                        Sales: +91 73200 40684<br>Support: +91 98765 43210
                    </p>
                    <h3 class="info-heading">EMAIL CHANNELS</h3>
                    <div class="info-sub">DEPARTMENT DIRECT</div>
                    <p class="info-text">
                        General Enquiries: support@theagroxgroup.com<br><br>
                        Exports Department: priyanshu@theagroxgroup.com<br><br>
                        International Business Head: raj.pratik@theagroxgroup.com
                    </p>
                    <h3 class="info-heading">HOURS</h3>
                    <p class="info-text no-margin-bottom">Mon - Sat: 09:00 AM - 08:00 PM IST</p>
                </div>
            </div>

            <div class="form-col" id="formContainer">
                <div class="glass-box">
                    <h2 class="form-heading">WHERE SHOULD WE SHIP NEXT?</h2>
                    <p class="form-subtext">Share your product and destination. We’ll handle the rest.</p>
                    <div class="form-tagline">BULK. RETAIL. DELIVERED.</div>

                    <?php if(!empty($msg_status)) echo $msg_status; ?>
                    <form action="contact-us.php" method="POST">
                        <div class="form-group"><label class="form-label">Your Name</label><input type="text" name="name" class="form-input" required></div>
                        <div class="form-group"><label class="form-label">Email Address</label><input type="email" name="email" class="form-input" required></div>
                        <div class="form-group"><label class="form-label">Product Interest</label><input type="text" name="product" class="form-input" value="<?php echo isset($_GET['product']) ? htmlspecialchars($_GET['product']) : ''; ?>"></div>
                        <div class="form-group"><label class="form-label">Message</label><textarea rows="5" name="message" class="form-input" required></textarea></div>
                        <button type="submit" class="submit-btn">SEND MESSAGE</button>
                    </form>
                </div>
            </div>

        </div>

        <h2 class="map-title">GLOBAL EXPORT NETWORK</h2>
        
        <div class="map-container-box">
            <img src="assets/images/map.png" class="actual-map-img" alt="World Map">
            <div class="pin p-india pin-hq"><div class="tooltip">AGROX HQ (India)</div></div>
            <div class="pin p-canada pin-branch"><div class="tooltip">Canada</div></div>
            <div class="pin p-brazil pin-branch"><div class="tooltip">Brazil</div></div>
            <div class="pin p-europe pin-branch"><div class="tooltip">Europe</div></div>
            <div class="pin p-russia pin-branch"><div class="tooltip">Russia</div></div>
            <div class="pin p-nigeria pin-branch"><div class="tooltip">Nigeria</div></div>
            <div class="pin p-safrica pin-branch"><div class="tooltip">South Africa</div></div>
            <div class="pin p-aus pin-branch"><div class="tooltip">Australia</div></div>
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

<?php include 'footer.php'; ?>