# AGROX SYSTEM: Brand, Design & Technical Blueprint

This document defines the core philosophy, visual design system, layout rhythms, and motion constants of the AGROX digital ecosystem. It serves as a strict standard for all current and future page expansions.

---

## 1. Brand Philosophy
AGROX is a premium, high-integrity agricultural export company from India connecting organic farms to sophisticated B2B procurement panels worldwide. The digital identity must communicate:
*   **Trust & Purity:** Direct source integration with zero middleman dilution.
*   **Scale & Security:** Bulletproof global supply chains and annual volume commitments.
*   **Luxury & Craftsmanship:** Treating agriculture not as a low-margin commodity, but as a premium, highly-crafted product (e.g. "From India to the World").

---

## 2. Design & Styling System
The website utilizes a cinematic, dark luxury theme that avoids generic SaaS boxes and templates.

### 2.A Color Palette
*   **Backdrop Base:** True Off-Black (`#050505`) and Deep Charcoal (`#0b0b0b`) to create depth and eliminate page glare.
*   **Accent Color:** Solid metallic Gold (`#d4a017`) for highlighting key structural elements, stats, and primary calls-to-action.
*   **Body Copy:** Muted Silver/Grey (`#e0e0e0`, `#ccc`, and `#888` for secondary labels) to maintain contrast and readable editorial text.

### 2.B Typography System
We enforce a strict display/body hierarchy:
*   **Display Headings (`h1, h2, h3, h4`, buttons, labels):** **Bebas Neue** (with `letter-spacing: 1.5px` and `text-transform: uppercase`). This displays massive, impactful headlines.
*   **Body Copy & Paragraphs:** **Poppins** or **Plus Jakarta Sans** (sans-serif, light weights `300` and `400` with `line-height: 1.6` to `1.8`).
*   **Highlight Serif:** Under restrained circumstances, **Times New Roman** or Georgia is used on specific product card headings for a luxury look.

### 2.C Spacing & Layout Rhythm
*   **Breathing Room:** Standard sections enforce generous vertical padding: `--section-pad-y: 86px` (or `100px` to `120px` for high-impact segments).
*   **Grid Framework:** Standard B2B SaaS layout cards are banned. Instead, we use:
    *   **Asymmetric Bento Grids:** Mixing cell column spans (e.g. `span-2` next to `span-1`) for visual variance.
    *   **Editorial Columns:** Staggered rows placing imagery on opposite columns, broken up by wide-spaced headings.
    *   **Glassmorphic Cards:** Translucent containers (`rgba(20,20,20,0.7)`) with backdrop blur (`blur(15px)`) and thin borders (`rgba(255,255,255,0.06)`).

---

## 3. Motion & Animation System
Motion must be motivated, smooth, and natural.

### 3.A Animation Curves & Durations
*   **UI Durations:** Transitions for buttons, tabs, and toggles must stay under `300ms` (ideally `150ms` to `250ms`).
*   **CSS Curves:**
    *   *UI Interactions:* `--ease-out: cubic-bezier(0.23, 1, 0.32, 1)`
    *   *Morphing & Pan Transitions:* `--ease-in-out: cubic-bezier(0.77, 0, 0.175, 1)`

### 3.B Core Motion Patterns
*   **Parallax Scroll:** Banner elements use a dual-axis scroll-driven displacement script (moving the outline background text faster than the foreground text).
*   **Staggered Entry:** Lists and grids fade up sequentially (`duration: 0.6s`, `delay: index * 0.08s`).
*   **Tactile Active Button States:** All clickables scale down on press: `transform: scale(0.97)` with a fast transition.
*   **Scroll progress lines:** Connective lines fill dynamically based on vertical scroll triggers.

---

## 4. Conversion Philosophy
AgroX is a high-ticket B2B portal. Conversion does not look like SaaS signups. It is centered around the Request for Quote (RFQ) process.
*   **Zero Duplicate CTAs:** We never display multiple button actions with differing labels for the same request (e.g. only use "Get Quote" or "Request RFQ" consistently).
*   **Contextual Sourcing Forms:** Forms require specific commercial data (Incoterms, Volume requirements, Destination Port) to ensure leads are highly qualified.

---

## 5. Internal Linking Philosophy
To maintain search engine authority and user retention, the site follows a strict internal link web:
*   Every product page links back to the main category hubs and the general RFQ contact page.
*   New compliance pages (Why AgroX, Certifications, Quality Control, FAQ) must link directly to the contact page, carrying the category query parameters (e.g. `contact-us.php?type=quote&product=Organic+Spices`).
*   The footer serves as a site-wide navigation directory, keeping crawlers connected to all compliance hubs.