# AGROX SEO ENGINE: Framework, Schema & Indexing Standards

This document establishes the standardized SEO rules, meta data formulas, Open Graph protocols, internal link validation criteria, and schema microdata formats for the AGROX platform. It is engineered to support directory structures scaling to thousands of URLs.

---

## 1. Title & Meta Description Formulas

To maintain strict brand alignment and search engine CTR, all pages must programmatically assemble metadata using the formulas below.

### 1.A Title Formulas (Max 60 Characters)
*   **Homepage:** `AGROX | Organic Exports India - Premium Spices & Dry Fruits`
*   **Product Detail Pages:** `{Product Common Name} Exporter India | Premium Bulk {Product Botanical Name}`
    *   *Example:* `Cumin Seeds Exporter India | Premium Bulk Cuminum Cyminum`
*   **Hub Pages (Countries, Industries):** `{Hub Name} Sourcing & Compliance | AgroX B2B Exports`
    *   *Example:* `UAE Sourcing & Compliance | AgroX B2B Exports`
*   **Utility Pages (Why AgroX, QC, FAQ):** `{Page Topic} | AgroX B2B Export Trust Center`
    *   *Example:* `Quality Control Standards | AgroX B2B Export Trust Center`

### 1.B Meta Description Formulas (Max 155 Characters)
*   **Product Pages:** `Exporting premium grade {Product Common Name} ({Local Name}) from India. 99.9% purity, custom vacuum packing, NABL chemical analysis clearances. Request RFQ.`
*   **Hub Pages:** `B2B agricultural procurement and customs compliance guidelines for importing ingredients into {Country Name}. View pricing trends and logistic terms.`
*   **Trust Pages:** `Learn about AgroX {Page Topic}. Access certified certificates of origin, laboratory pesticide logs, and shipping timelines. Request quote.`

---

## 2. Open Graph & Social Compliance
Every page must declare Open Graph metadata inside the HTML head:
*   `og:type`: Set to `website` or `article`.
*   `og:title`: Inherited from the page title.
*   `og:description`: Inherited from the meta description.
*   `og:image`: Default to a high-contrast AVIF image (`https://www.theagroxgroup.com/assets/images/bannerproduct.avif`).

---

## 3. Crawlability & Indexing Strategies

### 3.A Dynamic XML Sitemaps
As pages scale past 150, replace static `sitemap.xml` with a script-driven dynamic sitemap (`sitemap.php` mapped via `.htaccess` to `sitemap.xml`).
*   The script queries the MySQL database tables (`products`, `countries`, `market-reports`) and lists active URLs with their respective `<lastmod>` headers.

### 3.B Breadcrumb Navigation
To guide web crawlers, hub directory pages must output structured breadcrumbs:
*   `Home` → `Products` → `Organic Spices` → `Cumin Seeds`
*   Breadcrumb markup must contain both visible links and schema code.

---

## 4. Structured Schema Strategies

We use JSON-LD scripts on all core layouts.

### 4.A Homepage Schema (Organization & WebSite)
```json
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://www.theagroxgroup.com/#organization",
      "name": "AGROX Organic Exports",
      "url": "https://www.theagroxgroup.com/",
      "logo": "https://www.theagroxgroup.com/assets/images/logo.png"
    },
    {
      "@type": "WebSite",
      "@id": "https://www.theagroxgroup.com/#website",
      "url": "https://www.theagroxgroup.com/",
      "name": "AGROX Organic Exports",
      "publisher": { "@id": "https://www.theagroxgroup.com/#organization" }
    }
  ]
}
```

### 4.B Product Page Schema (Product)
```json
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Cumin Seeds",
  "image": "https://www.theagroxgroup.com/assets/images/cumin.avif",
  "description": "Premium sorted whole organic cumin seeds exported from India.",
  "sku": "AGX-CUM-001",
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "USD",
    "lowPrice": "2.50",
    "highPrice": "4.20",
    "offerCount": "100",
    "priceValuedOnly": "Bulk pricing depends on season and volume"
  }
}
```

### 4.C FAQ Page Schema (FAQPage)
Implemented dynamically on `faq.php` as detailed in the code templates.

### 4.D Trust & Contact Page Schema (ExportService & PostalAddress)
Implemented dynamically on `contact-us.php` to define the business coordinates and opening hours.
