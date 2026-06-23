# AGROX NAVIGATION ARCHITECTURE
**The Permanent Navigation Blueprint for AgroX**
Last Updated: June 2026

---

## 1. Core Navigation Philosophy

AgroX is evolving from an export company website into a **global agricultural trade authority platform**. The navigation architecture must signal this identity at first glance.

Key principles:
- **Maximum 7 top-level nav items** — no exceptions, no additions
- **KNOWLEDGE replaces RESOURCES** — signals thought leadership, not just utility
- **Mega menus absorb all future content expansion** — new pages slot into existing hubs
- **No navigation redesigns for 5+ years** — the architecture is complete at this point

---

## 2. Final Navigation Structure

```
HOME | ABOUT | PRODUCTS | EXPORT MARKETS | KNOWLEDGE | CONTACT | GET QUOTE
```

| Item | Type | Target | Purpose |
|---|---|---|---|
| HOME | Direct link | `index.php` | Brand anchor |
| ABOUT | Direct link | `about-us.php` | Company credibility |
| PRODUCTS | Mega menu | `all-products.php` | Product discovery |
| EXPORT MARKETS | Mega menu | `countries/index.php` | Market-specific entry |
| KNOWLEDGE | Mega menu | `knowledge/index.php` | Authority & education |
| CONTACT | Direct link | `contact-us.php` | Conversion |
| GET QUOTE | CTA Button | `contact-us.php?type=quote` | Primary conversion |

**Rule:** No new top-level items will ever be added. All future pages are assigned to an existing hub.

---

## 3. KNOWLEDGE Mega Menu Architecture

### Visual Structure
```
┌─────────────────────────────────────────────────────────┐
│  KNOWLEDGE CENTER                                       │
├──────────────────┬──────────────────┬───────────────────┤
│ BUYER EDUCATION  │ TRUST & VERIFY   │ INTELLIGENCE      │
│                  │                  │                    │
│ 📖 Buyer Guides  │ ❓ FAQs          │ 📊 Market Reports │
│ 🛤 Export Process│ ⭐ Why AgroX     │ 📈 Export Intel.  │
│ ✅ Quality Ctrl  │ 🏆 Certifications│ 🎓 Trade Academy  │
├──────────────────┴──────────────────┴───────────────────┤
│                      Explore Knowledge Center →          │
└─────────────────────────────────────────────────────────┘
```

### URL Mapping
| Menu Label | URL | Status |
|---|---|---|
| Buyer Guides | `buyer-guides/index.php` | ✅ Live |
| Export Process | `export-process.php` | ✅ Live |
| Quality Control | `quality-control.php` | ✅ Live |
| FAQs | `faq.php` | ✅ Live |
| Why AgroX | `why-agrox.php` | ✅ Live |
| Certifications | `certifications.php` | ✅ Live |
| Market Reports | `market-reports/index.php` | ✅ Live |
| Export Intelligence | `export-intelligence/index.php` | ✅ Live |
| Trade Academy | `trade-academy/index.php` | ✅ Live |
| Footer CTA | `knowledge/index.php` | ✅ Live |

### Column Logic
- **Column 1 — Buyer Education:** Pages that help an importer understand the sourcing process
- **Column 2 — Trust & Verify:** Pages that validate AgroX credibility and answer common questions
- **Column 3 — Intelligence & Research:** Forward-looking data and educational resources

---

## 4. PRODUCTS Mega Menu Architecture

### Current Structure (3 columns)
| Column 1 | Column 2 | Column 3 |
|---|---|---|
| Organic Spices | Seeds | Maize Products |
| Conventional Spices | Pulses | Freeze Dried |
| Spice Powders | Superfoods | Dehydrated |

### Future Expansion Rule
When new product categories are added:
1. Add to the most relevant existing column
2. Maximum 4 items per column (currently 3)
3. If a 4th column is needed — reconfigure to 2 rows within existing 3 columns
4. Never add a 4th top-level column — use "View All →" CTA instead

### Scalability Note
The Products mega menu links to **category hub pages** (`whole-spices.php`, `dry-fruits.php`), not individual products. This keeps the nav stable even as the product catalog scales to 500+ items.

---

## 5. EXPORT MARKETS Mega Menu Architecture

### Current Structure (3 columns × 3 markets = 8 markets)
UAE 🇦🇪 | Saudi Arabia 🇸🇦 | Bangladesh 🇧🇩
USA 🇺🇸 | Germany 🇩🇪 | Singapore 🇸🇬
Japan 🇯🇵 | Malaysia 🇲🇾

### Expansion Rule
Maximum **9 markets** in the mega menu (3 columns × 3 rows). Priority is given to:
1. Highest active trade volume markets
2. Markets with dedicated landing pages in `countries/`
3. New markets are rotated in by replacing the lowest-traffic entry

When country landing pages in `countries/` are built, the Export Markets menu items should point directly to those pages instead of `contact-us.php?market=`.

### Future Pattern
```
countries/uae-organic-agricultural-imports-from-india.php
countries/saudi-arabia-organic-agricultural-imports-from-india.php
```

---

## 6. Knowledge Hub Internal Linking Rules

Every page inside the KNOWLEDGE architecture must:

1. **Link back to `knowledge/index.php`** via a breadcrumb or back-link
2. **Cross-link to at least 2 related hub pages** from the same mega menu
3. **End with a CTA** pointing to `contact-us.php?type=quote` with a relevant product parameter
4. **Link to at least 1 product page** that is contextually relevant to the content

### Example: `export-process.php`
- ← Link back to: `knowledge/index.php`
- → Cross-link to: `quality-control.php`, `certifications.php`
- → CTA: `contact-us.php?type=quote`
- → Product link: `products/cumin-seeds-exporter-from-india.php`

---

## 7. PHP Active State Detection Rules

The `$isKnowledge` PHP variable in `header.php` activates the KNOWLEDGE gold dot indicator. The detection covers all paths in the KNOWLEDGE ecosystem:

```php
$isKnowledge = (
    $currentPage == 'why-agrox.php' ||
    $currentPage == 'certifications.php' ||
    $currentPage == 'quality-control.php' ||
    $currentPage == 'export-process.php' ||
    $currentPage == 'faq.php' ||
    strpos($_SERVER['PHP_SELF'], '/knowledge/') !== false ||
    strpos($_SERVER['PHP_SELF'], '/buyer-guides/') !== false ||
    strpos($_SERVER['PHP_SELF'], '/market-reports/') !== false ||
    strpos($_SERVER['PHP_SELF'], '/export-intelligence/') !== false ||
    strpos($_SERVER['PHP_SELF'], '/compliance-center/') !== false ||
    strpos($_SERVER['PHP_SELF'], '/trade-academy/') !== false ||
    strpos($_SERVER['PHP_SELF'], '/industries/') !== false ||
    strpos($_SERVER['PHP_SELF'], '/applications/') !== false
);
```

**Rule:** When a new page is added to the KNOWLEDGE hub in a new subdirectory, add the path check to `$isKnowledge`. Do NOT create a new `$is*` variable for knowledge sub-hubs.

---

## 8. Mobile Navigation Accordion Rules

The mobile menu is a full-screen blur drawer with accordion sections.

### Current Mobile Structure
```
HOME
ABOUT
  PRODUCTS ▼
    All Products / Whole Spices / Powdered Spices /
    Dry Fruits & Nuts / Pulses & Lentils / Rice Varieties / Extract Oils
  EXPORT MARKETS ▼
    UAE / Saudi Arabia / Bangladesh / USA / Germany /
    Singapore / Japan / Malaysia
  KNOWLEDGE ▼
    Buyer Guides / Export Process / Quality Control /
    FAQs / Why AgroX / Certifications /
    Market Reports / Export Intelligence / Trade Academy
CONTACT
[GET A QUOTE] button
```

### Mobile Accordion Rules
1. **KNOWLEDGE accordion max-height** is set to `600px` — enough for 9 items + future additions
2. **All KNOWLEDGE mega menu items must appear in the mobile accordion** — the two are always synchronized
3. When adding new items, update BOTH the desktop mega menu AND the mobile accordion in the same edit
4. Mobile accordion links use `class="mobile-link"` which triggers the drawer close event

---

## 9. Mega Menu Panel Specifications

| Property | Value |
|---|---|
| Panel width | `780px` |
| Panel max-height | `340px` |
| Panel background | `rgba(6, 12, 8, 0.96)` |
| Backdrop blur | `blur(25px)` |
| Border | `1px solid rgba(255,255,255,0.08)` |
| Border radius | `16px` |
| Diamond connector | `8px gold (#d4a017) rotated 45deg` |
| Grid columns | `repeat(3, 1fr)` |
| Grid gap | `20px` |
| Panel padding | `22px 28px` |
| Footer CTA color | `#d4a017` |
| Item hover transform | `translateX(4px)` |
| Transition | `0.3s cubic-bezier(0.25, 1, 0.5, 1)` |

---

## 10. What Never Changes

These navigation rules are permanent and must not be violated:

1. ❌ Do NOT add more than 7 top-level nav items
2. ❌ Do NOT rename KNOWLEDGE back to RESOURCES
3. ❌ Do NOT link individual product pages from the nav — only category hubs
4. ❌ Do NOT duplicate CTAs — "GET QUOTE" is the only conversion CTA in the nav
5. ❌ Do NOT create sub-submenus — the mega menu is the final depth level
6. ✅ DO update both desktop and mobile nav simultaneously when making changes
7. ✅ DO add new pages to `$isKnowledge` detection when adding KNOWLEDGE sub-hub pages
8. ✅ DO use the `→` "Explore [Hub]" footer CTA in every mega menu to drive hub discovery

---

*This document is the permanent navigation authority for AgroX. All future developers, agents, and designers must consult this document before making any navigation changes.*
