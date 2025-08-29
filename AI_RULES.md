# Tech Stack

- You are building a PHP application.
- PHP 8+ mit MySQL
- Use Vanilla PHP, no frameworks.
- Use MySQL for database operations.
- Organize all PHP source code in the project folder.
- Place HTML templates in the views/ folder (e.g., header.php, footer.php).
- Place reusable PHP logic (e.g., DB connection) in the includes/ folder.
- Place form/data handling code in the controllers/ folder.
- Place database query logic in the models/ folder.
- Public-facing pages (e.g., index.php, login.php) must go in the public/ folder.
- The main page (default page) is public/index.php.
- UPDATE the main page to include new components (views, data) — otherwise they will not be visible!
- ALWAYS use Tailwind CSS for styling.
- Use Tailwind utility classes for layout, spacing, colors, and responsiveness.
- Tailwind can be loaded via CDN for simplicity or built using CLI for production use.
- MVC-Architektur (Models, Views, Controllers)
- Vollständige Komponenten-Bibliothek (200+ Varianten)
- Automatically generate images for each section; when an image cannot be generated, replace it with a fallback image from my `ImageLibrary`
- Ensure that no function is created with a name that already exists.
- avoid duplicate functions.

## The template includes the function with the following name.
  `renderSection`, `renderHeroSection`, `renderAboutSection`, `renderPricingSection`, `renderCTASection`, `renderBenefitsSection`,
  `renderTeamSection`, `renderTestimonialsSection`, `renderFAQSection`, `renderFooterSection`, `renderProductsSection`, `renderGallerySection`, `debugShowAllComponents`, `searchSections`
 - Ensure that no function is created with a name that already exists.
 - avoid duplicate functions.  

 
## Template Struktur
- Vollständige `public/index.php` mit Demo-Inhalten
- Alle 200+ Komponenten sofort verfügbar
- Komplette Bild-Bibliothek mit hochwertigen Assets
- Demo-Seiten für alle Sektions-Kategorien
- Produktions-ready Setup

✅ Key Points:
- Always attempt to generate a new image first.
- Only if generation fails, fallback to `ImageLibrary`.
- If `ImageLibrary` is empty, use the demo image.
- Makes it safe for production without breaking the page.

#Folder Structure
project/
├── public/          ← Main entry pages (index.php, login.php)
├── views/           ← HTML templates (header.php, footer.php)
├── controllers/     ← Handle form submissions, logic
├── models/          ← DB access functions (users.php, posts.php)
├── includes/        ← DB config, helper functions
├── assets/
│   ├── css/         ← Tailwind CSS build output
│   └── js/          ← Optional JS scripts

# Modern & Professional Website Layout Structure (2025 Style)

## 🔷 Core Sections

1. **Hero Section**
   - Eye-catching headline
   - Supporting subtext
   - Call-to-action (CTA) buttons
   - Background image/video or animation
   - Choose the appropriate variant from `components/ui/sections/heroes` for this section.

2. **About Us**
   - Company mission and vision
   - Short brand story
   - Visual or timeline element
   - Choose the appropriate variant from `components/ui/sections/about` for this section.

3. **Features / Services**
   - Grid or cards layout
   - Icons with short descriptions
   - Highlight top features
   - Choose the appropriate variant from `components/ui/sections/products` for this section.

4. **Solutions**
   - Use cases
   - Industry-specific examples
   - Customer-focused problem-solving content

5. ** Gallery **
   - Choose the appropriate variant from `components/ui/sections/gallery` for this section.

5. **How It Works**
   - 3 to 5 step flow
   - Visual walkthrough
   - Numbered or illustrated process

6. **Benefits**
   - Value-focused bullet points
   - Icon with text
   - Minimal and direct copy
   - Choose the appropriate variant from `components/ui/sections/benefits` for this section.

7. **Testimonials**
   - Customer reviews or quotes
   - Star ratings
   - Video or image carousel
   - Choose the appropriate variant from `components/ui/sections/testimonials` for this section.

8. **Case Studies / Success Stories**
   - Detailed client success metrics
   - Before/after results
   - Quote or result highlight block

9. **Pricing Plans**
   - Clean pricing table
   - Monthly / Yearly toggle
   - Feature comparison
   - Choose the appropriate variant from `components/ui/sections/pricing` for this section.

10. **Team Section**
    - Profile pictures with hover animations
    - Role and bio
    - Optionally link to LinkedIn

11. **FAQs**
    - Accordion-style dropdowns
    - Short, helpful answers
    - Organized into categories if needed
	- Choose the appropriate variant from `components/ui/sections/faq` for this section.

12. **Call-to-Action (CTA) Block**
    - Strong, persuasive copy
    - Secondary CTA style
    - Background contrast color or image
	- Choose the appropriate variant from `components/ui/sections/cta` for this section.

13. **Blog Highlights**
    - Recent blog posts or articles
    - Card layout with image, title, snippet
    - "Read more" links
	

14. **Newsletter Signup**
    - Email input + submit button
    - Incentive or short pitch (e.g. “Get tips weekly”)

15. **Partners / Integrations**
    - Brand logos grid
    - Scrollable carousel
    - Tool or platform integrations

16. **Download App / Platform Access**
    - Mobile app links
    - Login or signup CTA
    - Screenshots or mockups

17. **Contact Section**
    - Contact form
    - Address, phone, email
    - Map or embedded location

---

## 🟩 Optional / Enhanced Sections

- **Stats & Metrics**
  - Animated counters or KPI numbers
  - “Over 1M+ users” type of badges

- **Awards & Recognition**
  - Media logos or badges
  - Press features

- **Interactive Demo / Try It Now**
  - Embedded live tool
  - Product walkthrough button

- **Comparison Table**
  - You vs. competitors
  - Feature checklist

- **Timeline / Milestones**
  - Company growth or roadmap
  - Vertical or horizontal scroll

- **Social Proof Strip**
  - “Trusted by 10,000+ companies”
  - Brand logo parade

---

# Landing Page Components

This template includes a comprehensive library of modern landing page sections:

## Hero Sections (components/ui/sections/heroes)- 32+ variants
 **HeroBenefitFocused**
	- `productivity` - Steigere deine Produktivität um 300%
	- `cost-reduction` - Reduziere deine Kosten um bis zu 60%
	- `time-saving` - Spare 20+ Stunden pro Woche
	- `growth-secret` - Das Geheimnis für 400% Wachstum
	- `smart-way` - Der smarte Weg zu mehr Erfolg
	- `potential` - Entfessle dein volles Potenzial
	- `tools` - Die Tools, die Profis verwenden
	- `competitive` - Verschaffe dir einen Wettbewerbsvorteil
	
	**Verwendung:**
```php
<?php
require_once 'components/ui/sections/heroes/HeroBenefitFocused.php';

// Standard-Variante
HeroBenefitFocused('productivity');

// Mit benutzerdefinierten Optionen
HeroBenefitFocused('productivity', [
    'title' => 'Benutzerdefinierter Titel',
    'subtitle' => 'Benutzerdefinierte Beschreibung',
    'ctaText' => 'Benutzerdefinierter Button',
	'image'  => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
    'benefits' => ['Vorteil 1', 'Vorteil 2', 'Vorteil 3']
]);
?>
```

 **HeroAuthority**
	- `expert` - Der Experte für digitale Transformation
	- `marketing-expert` - Marketing-Strategin mit Millionen-Impact
	- `professional` - Professionelle Beratung auf höchstem Niveau
	- `real-estate` - Ihr Immobilien-Experte mit Erfolgsgarantie
	- `experience` - 20+ Jahre Branchenerfahrung für Ihren Erfolg
	- `customers` - Von 10.000+ Kunden vertraut und geschätzt
	
	**Verwendung:**
```php
<?php
require_once 'components/ui/sections/heroes/HeroAuthority.php';

HeroAuthority('expert', [
    'expertName' => 'Dr. Max Mustermann',
    'expertTitle' => 'Digital Transformation Expert',
    'expertImage' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
]);
?>
```
	
 **HeroSocialProof**
   - `experienced` - Über 10 Jahre Erfahrung im Markt
   - `rating` - 4.9/5 Sterne von 2.500+ Kunden
   - `global` - Weltweit von 50.000+ Unternehmen genutzt
   - `satisfaction` - 99% Kundenzufriedenheit garantiert
   - `trust-signals` - Vertraut von Fortune 500 Unternehmen
   
   **Verwendung:**
   
   ```php
<?php
require_once 'components/ui/sections/heroes/HeroSocialProof.php';

HeroSocialProof('experienced', [
    'ctaText' => 'Dr. Max Mustermann',
    'title' => 'Digital Transformation Expert',
    'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
]);
?>
```
 
 **HeroWebinar** (4 Varianten)
- `marketing-webinar` - Kostenloses Marketing-Webinar
- `website-building` - Website-Building Workshop
- `live-event` - Exklusives Live-Event
- `registration` - Jetzt registrieren und Platz sichern
   
 **HeroIndustrySpecific** (4 Varianten)
- `finance` - Finanzdienstleistungen der Zukunft
- `financial-advisor` - Ihr persönlicher Finanzberater
- `same-day-service` - Same-Day Service garantiert
- `consulting` - Strategische Unternehmensberatung

 **HeroFeatureList** (3 Varianten)
- `checkmarks` - Feature-Liste mit Checkmarks
- `benefits` - Vorteile-orientierte Darstellung
- `feature-showcase` - Feature-Showcase mit Icons

 **HeroVersionUpdate** (2 Varianten)
- `version-available` - Neue Version verfügbar
- `course-registration` - Kurs-Registrierung geöffnet

 **Einzelne Varianten**
- `HeroWithStats` - Hero mit Statistiken/Metriken
- `HeroMinimal` - Clean, minimal hero section
- `HeroWithVideo` - Hero section mit video player

### About/Über Uns Sektionen (components/ui/sections/about/) (30 Varianten)

#### **AboutCompanyHistory** (6 Varianten)
- `growth-story` - Unsere Wachstumsgeschichte
- `quality-delivery` - Qualität und Lieferung im Fokus
- `mission-statement` - Mission und Vision
- `founder-story` - Die Geschichte unserer Gründer
- `b2b-services` - B2B-Service-Spezialist
- `experience` - Jahrelange Branchenerfahrung

#### **AboutTeamCulture** (5 Varianten)
- `team-culture` - Unsere einzigartige Teamkultur
- `work-benefits` - Arbeitsplatz-Vorteile
- `company-stats` - Unternehmens-Statistiken
- `office-benefits` - Office-Benefits und -Ausstattung
- `global-team` - Globales Team, lokale Expertise

#### **AboutPersonalIntro** (5 Varianten)
- `ceo-message` - Nachricht vom CEO
- `expert-intro` - Experten-Vorstellung
- `fitness-expert` - Fitness-Experte stellt sich vor
- `copywriter` - Professioneller Copywriter
- `founder-quote` - Zitat vom Gründer

#### **AboutProcess** (4 Varianten)
- `how-we-work` - So arbeiten wir
- `service-process` - Unser Service-Prozess
- `z-pattern-flow` - Z-Pattern Workflow
- `benefits-checklist` - Vorteile-Checkliste

#### **AboutBentoLayout** (4 Varianten)
- `team-overview` - Team-Übersicht im Bento-Layout
- `company-metrics` - Unternehmens-Metriken
- `mission-values` - Mission und Werte
- `global-presence` - Globale Präsenz

### 💰 Preispläne Sektionen (components/ui/sections/pricing/) (28 Varianten)

#### **StandardPricingCards** (8 Varianten)
- `basic-business-pro` - Basic, Business, Pro Pläne
- `free-pro-elite` - Free, Pro, Elite Pläne
- `free-with-negatives` - Kostenlos mit Einschränkungen
- `essential-monthly` - Essential Monthly Plans
- `essential-with-descriptions` - Mit detaillierten Beschreibungen
- `overview-highlights` - Übersicht mit Highlights
- `detailed-descriptions` - Detaillierte Feature-Beschreibungen
- `comprehensive-features` - Umfassende Feature-Liste

#### **SinglePlanPricing** (4 Varianten)
- `one-time-compact` - Einmalzahlung kompakt
- `one-time-with-trust` - Einmalzahlung mit Trust-Signalen
- `two-plans-guarantee` - Zwei Pläne mit Garantie
- `fixed-plans` - Feste Preispläne

#### **ServiceBasedPricing** (3 Varianten)
- `service-packages` - Service-Pakete
- `service-with-descriptions` - Services mit Beschreibungen
- `enterprise-focused` - Enterprise-fokussierte Preise

#### **CustomLayoutPricing** (6+ Varianten)
- `starts-at-pricing` - "Ab X€" Preisgestaltung
- `custom-solution` - Individuelle Lösungen
- `single-price-detailed` - Ein Preis, detailliert
- `pro-mode` - Professional Mode
- `professional-rating` - Professionelle Bewertung
- `comprehensive-single` - Umfassend, einzeln

### 📞 CTA Sektionen (components/ui/sections/cta/) (26 Varianten)

#### **SimpleCTA** (6 Varianten)
- `immediate-action` - Sofortige Handlung
- `growth-focused` - Wachstums-fokussiert
- `investment-focused` - Investment-fokussiert
- `action-oriented` - Aktions-orientiert
- `dual-button` - Zwei-Button-Layout
- `simple-centered` - Einfach zentriert

#### **CountdownCTA** (3 Varianten)
- `immediate-countdown` - Sofortiger Countdown
- `exclusive-launch` - Exklusiver Launch
- `limited-spots` - Begrenzte Plätze

#### **FeatureListCTA** (2 Varianten)
- `pricing-features` - Preis-Features
- `service-checklist` - Service-Checkliste

#### **MultiOptionCTA** (3 Varianten)
- `business-options` - Business-Optionen
- `demo-partner` - Demo & Partner
- `service-options` - Service-Optionen

#### **ContactCTA** (4 Varianten)
- `phone-contact` - Telefon-Kontakt
- `country-form` - Länder-Formular
- `multi-contact` - Multi-Kontakt
- `contact-form` - Kontakt-Formular

#### **StatsCTA** (3 Varianten)
- `business-stats` - Business-Statistiken
- `service-stats` - Service-Statistiken
- `achievement-stats` - Erfolgs-Statistiken

#### **ProblemSolutionCTA** (3 Varianten)
- `service-transformation` - Service-Transformation
- `skill-monetization` - Skill-Monetarisierung
- `problem-solver` - Problemlöser

#### **PartnerCTA** (3 Varianten)
- `investment-focused` - Investment-fokussiert
- `partnership-focused` - Partnership-fokussiert
- `eco-focused` - Öko-fokussiert

### ✨ Benefits Sektionen (components/ui/sections/benefits/) (17 Varianten)

#### **SimpleBenefitsGrid** (4 Varianten)
- `three-column` - Drei-Spalten-Layout
- `four-column` - Vier-Spalten-Layout
- `masonry-layout` - Masonry-Layout
- `standard-grid` - Standard-Grid

#### **StickyBenefits** (3 Varianten)
- `sticky-left` - Sticky Links-Layout
- `sticky-insights` - Sticky Insights
- `sticky-company` - Sticky Unternehmens-Info

#### **StatsIntegrationBenefits** (4 Varianten)
- `business-insights` - Business-Insights
- `performance-metrics` - Performance-Metriken
- `measurable-impact` - Messbarer Impact
- `company-stats` - Unternehmens-Statistiken

#### **MasonryBenefits** (3 Varianten)
- `top-results` - Top-Ergebnisse
- `super-results` - Super-Ergebnisse
- `highlighted-strengths` - Hervorgehobene Stärken

#### **ProcessStepsBenefits** (2 Varianten)
- `problem-solver` - Problemlöser
- `application-process` - Bewerbungsprozess

#### **FeatureHighlights** (2 Varianten)
- `company-facts` - Unternehmens-Fakten
- `service-highlights` - Service-Highlights

### 👥 Team Sektionen (18 Varianten)

#### **SimpleTeamGrid** (6 Varianten)
- `basic-four` - Basis Vier-Personen-Team
- `executive-roles` - Führungsrollen
- `extended-team` - Erweitertes Team
- `large-team` - Großes Team
- `detailed-team` - Detailliertes Team
- `grid-with-cta` - Grid mit Call-to-Action

#### **ProfessionalTeamLayout** (4 Varianten)
- `executive-showcase` - Executive-Showcase
- `clean-layout` - Sauberes Layout
- `wide-container` - Breiter Container
- `standard-layout` - Standard-Layout

#### **DetailedTeamProfiles** (4 Varianten)
- `role-first` - Rolle zuerst
- `comprehensive-bios` - Umfassende Biografien
- `varied-descriptions` - Verschiedene Beschreibungen
- `large-team-grid` - Großes Team-Grid

#### **CompanyIntegratedTeams** (4 Varianten)
- `large-team-display` - Große Team-Anzeige
- `company-branded` - Unternehmens-gebrandet
- `executive-focus` - Executive-Fokus
- `leadership-profile` - Leadership-Profil

### 🖼️ Gallery Sektionen (components/ui/sections/gallery/) (20 Varianten)

#### **WorkspaceGalleries** (6 Varianten)
- `simple-workspace` - Einfacher Arbeitsplatz
- `focused-workspace` - Fokussierter Arbeitsplatz
- `collaboration-space` - Kollaborationsraum
- `team-space` - Team-Bereich
- `modern-office` - Modernes Büro
- `creative-workspace` - Kreativer Arbeitsplatz

#### **OfficeEnvironmentGalleries** (5 Varianten)
- `meeting-rooms` - Besprechungsräume
- `reception-areas` - Empfangsbereiche
- `open-spaces` - Offene Bereiche
- `quiet-zones` - Ruhezonen
- `kitchen-break-areas` - Küchen-/Pausenbereiche

#### **ProjectProductGalleries** (4 Varianten)
- `portfolio-showcase` - Portfolio-Showcase
- `product-gallery` - Produkt-Galerie
- `before-after` - Vorher-Nachher
- `case-studies` - Case Studies

#### **InteractiveGalleries** (3 Varianten)
- `lightbox-gallery` - Lightbox-Galerie
- `slider-gallery` - Slider-Galerie
- `masonry-gallery` - Masonry-Galerie

#### **BrandedGalleries** (2 Varianten)
- `company-culture` - Unternehmenskultur
- `behind-the-scenes` - Hinter den Kulissen

### ❓ FAQ Sektionen (components/ui/sections/faq/) (5 Varianten)

#### **BusinessProcessFAQ** (1 Variante)
- `process-focused` - Prozess-fokussiert

#### **EventConferenceFAQ** (1 Variante)
- `event-focused` - Event-fokussiert

#### **ProductServiceFAQ** (1 Variante)
- `service-focused` - Service-fokussiert

#### **NumberedFAQ** (1 Variante)
- `numbered-format` - Nummeriertes Format

#### **MinimalFAQ** (1 Variante)
- `clean-format` - Sauberes Format

### 💬 Testimonial Sektionen (components/ui/sections/testimonials/) (13 Varianten)

#### **SimpleTeamTestimonials** (2 Varianten)
- `basic-grid` - Basis-Grid
- `compact-grid` - Kompaktes Grid

#### **FeaturedCustomerStories** (1 Variante)
- `customer-highlight` - Kunden-Highlight

#### **VerifiedReviews** (1 Variante)
- `verified-testimonials` - Verifizierte Testimonials

#### **StarRatingTestimonials** (1 Variante)
- `star-reviews` - Stern-Bewertungen

#### **CompanyLogoTestimonials** (1 Variante)
- `logo-testimonials` - Logo-Testimonials

#### **MasonryTestimonials** (1 Variante)
- `masonry-grid` - Masonry-Grid

#### **DetailedCaseStudies** (3 Varianten)
- `case-study-full` - Vollständige Case Study
- `case-study-compact` - Kompakte Case Study
- `case-study-minimal` - Minimale Case Study

### 🦶 Footer Sektionen (components/ui/sections/footers/) (12 Varianten)

#### **SimpleFooter** (3 Varianten)
- `minimal` - Minimal
- `basic` - Basis
- `contact` - Kontakt

#### **MultiColumnFooter** (4 Varianten)
- `three-column` - Drei-Spalten
- `four-column` - Vier-Spalten
- `extended-services` - Erweiterte Services
- `comprehensive` - Umfassend

#### **ContactFocusedFooter** (2 Varianten)
- `contact-simple` - Kontakt einfach
- `contact-detailed` - Kontakt detailliert

#### **NewsletterFooter** (3 Varianten)
- `newsletter-simple` - Newsletter einfach
- `newsletter-extended` - Newsletter erweitert
- `newsletter-comprehensive` - Newsletter umfassend

## 🖼️ Vollständige Bild-Bibliothek

### Hero Section Images
- **business**: productivity, growth, team_meeting, office_modern, presentation, success
- **technology**: laptop_coding, analytics, ai_dashboard, mobile_app, data_visualization
- **finance**: growth_chart, investment, banking, calculator
- **people**: ceo_male, ceo_female, expert_male, expert_female, professional_male, professional_female
- **abstract**: gradient_blue, gradient_purple, geometric

### About Section Images
- **company**: office_building, modern_office, growth_chart, mission_vision
- **team**: collaboration, diverse_team, workplace_culture, brainstorming
- **professionals**: business_woman, business_man, consultant

### Pricing Section Images
- **standard**: basic_plan, business_plan, professional_plan
- **services**: consultation, strategy_session, implementation

### CTA Section Images
- **action**: urgent_action, call_to_action, immediate_response
- **growth**: business_growth, success_celebration, achievements

### Benefits Section Images
- **services**: support_24_7, quality_assurance, customer_service
- **efficiency**: productivity, automation, optimization

### Team Section Images
- **professionals**: ceo_male, ceo_female, cto_male, cfo_female, manager_male, manager_female
- **leadership**: founder_male, founder_female, executive_male, executive_female

### Testimonial Section Images
- **professionals**: marketing_manager_male, marketing_manager_female, sales_director_male, operations_manager_female
- **companyLogos**: novatech, optima, artistry, stellar, vertex

### Gallery Section Images
- **workspace**: modern_office, open_office, quiet_workspace, creative_studio
- **office**: meeting_room, conference_room, reception_area

### FAQ Section Images
- **support**: help_center, customer_service, documentation

### Footer Section Images
- **logos**: logotype_dark, logotype_light, company_logo

## 🎨 Design-System

### Farben
- **Primary**: Blue (#3B82F6) mit verschiedenen Schattierungen
- **Secondary**: Gray-Palette für Text und Hintergründe
- **Accent**: Gradient-Kombinationen (Blue-Purple, Yellow-Orange)
- **Success**: Green (#10B981)
- **Warning**: Yellow (#F59E0B)
- **Error**: Red (#EF4444)

### Typografie
- **Font**: Inter (Google Fonts)
- **Größen**: 4xl-7xl für Headlines, xl-2xl für Subtitles, base für Body
- **Gewichte**: 300-800 verfügbar

### Spacing
- **Container**: max-width mit responsive padding
- **Sections**: py-16 lg:py-24 (section-padding class)
- **Components**: Tailwind spacing scale (4, 6, 8, 12, 16, 24)

### Animationen
- **Hover-Effekte**: Transform, shadow, color transitions
- **Loading**: Blob animations, pulse effects
- **Scroll**: Smooth scrolling, parallax effects

## 🚀 Performance-Features

### Bildoptimierung
- **Lazy Loading**: Automatisches lazy loading für alle Bilder
- **WebP Support**: Automatische WebP-Konvertierung
- **Responsive Images**: Verschiedene Größen für verschiedene Viewports
- **CDN-Ready**: Alle Bilder über CDN auslieferbar

### Code-Optimierung
- **Minification**: Automatische CSS/JS-Minimierung
- **Gzip Compression**: Server-seitige Kompression
- **Caching**: File-basiertes Caching für generierte Inhalte
- **Tree Shaking**: Ungenutzte Komponenten werden nicht geladen

## 🔧 Entwickler-Tools

### CLI-Tools
```bash
# Development Server
php -S localhost:8001 -t public/

# CSS Build
npm run dev      # Watch mode
npm run build    # Production build

# Component Generation
php generate_component.php ComponentName

# Optimization
php optimize_images.php
php minify_assets.php
```

### Debugging
- **Error Logging**: Detailliertes Logging in setup.log
- **Debug Mode**: Erweiterte Fehlermeldungen
- **Performance Monitoring**: Ladezeit-Tracking
- **Component Inspector**: Übersicht aller geladenen Komponenten

## 📱 Responsive Design

### Breakpoints
- **Mobile**: 320px-640px
- **Tablet**: 640px-1024px
- **Desktop**: 1024px-1400px
- **Large**: 1400px+

### Mobile-First Approach
- Alle Komponenten sind mobile-optimiert
- Touch-friendly Buttons und Links
- Optimierte Schriftgrößen
- Gestapelte Layouts auf kleinen Bildschirmen

## 🔒 Sicherheits-Features

### Input-Validierung
- **XSS-Schutz**: Automatisches htmlspecialchars()
- **SQL-Injection-Schutz**: PDO mit Prepared Statements
- **CSRF-Protection**: Token-basierter Schutz
- **Input-Sanitization**: Bereinigung aller User-Inputs

### Datenschutz
- **GDPR-konform**: Cookie-Banner, Datenschutzerklärung
- **Lokale Datenverarbeitung**: Keine externen Tracking-Services
- **Sichere Sessions**: Konfigurierte Session-Sicherheit
- **SSL-Ready**: HTTPS-Unterstützung

## 🎯 SEO-Optimierung

### Meta-Tags
- **Automatische Generierung**: Title, Description, Keywords
- **Open Graph**: Social Media Previews
- **Twitter Cards**: Twitter-optimierte Previews
- **Structured Data**: JSON-LD für Rich Snippets

### Performance
- **Core Web Vitals**: Optimiert für Google-Metriken
- **Page Speed**: Unter 3 Sekunden Ladezeit
- **Mobile-Friendly**: 100% mobile-optimiert
- **Accessibility**: WCAG 2.1 AA konform

---

**🎯 Vollständige Lösung**: Alle 200+ Komponenten sofort einsatzbereit!

**🚀 Professionell**: Enterprise-ready mit allen modernen Features!

All images are automatically applied based on component variants, but can be overridden with custom images.
