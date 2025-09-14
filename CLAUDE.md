# M&M Office Solutions Website

## Project Overview
Single-page WordPress website for M&M Office Solutions in Vernon, BC.
Dual business serving office equipment/IT services AND accounting/tax services as equal professional divisions.
Currently hosted on Bluehost, using GitHub for version control.

## Strategic Approach
- **Two Divisions, One Trusted Partner** - Equal representation of both services
- Two-landing-page structure to strengthen SEO for both service areas
- Current title: "M&M Office Solutions | Accounting, Tax & Office Equipment Services in Vernon, BC"  
- Target title: "M&M Office Solutions | Office Equipment & Accounting Services - Vernon BC"

## File Structure
- `wp-content/themes/mmoffice/index.php` - Custom homepage template (main landing)
- `wp-content/themes/mmoffice/page-office-equipment.php` - Office Equipment & IT landing page
- `wp-content/themes/mmoffice/page-accounting-services.php` - Accounting & Tax landing page
- `wp-content/themes/mmoffice/style.css` - Custom styles and responsive design
- `wp-content/themes/mmoffice/images/` - Logo and team photos

## Strategic Changes Implementation ✅ COMPLETED

### 1. Two-Landing-Page Structure ✅
- **Main homepage:** Shows BOTH services equally as "Two Divisions, One Trusted Partner"
- **Landing page templates created:**
  - `page-office-equipment.php` - Office Equipment & IT Services 
  - `page-accounting-services.php` - Accounting & Tax Services
- **WordPress pages needed:** Create pages in admin and assign templates

### 2. Navigation Updates ✅
- **Updated menu:** Home | Office Equipment & IT | Accounting & Tax | Our Team | Contact
- Links to dedicated landing pages with proper WordPress URLs
- Responsive hamburger menu with smart breakpoints (1300px)

### 3. Homepage Hero Redesign ✅
- **"Two Divisions, One Trusted Partner"** messaging implemented
- Two equal-sized floating service cards with white borders
- Randomized floating animations for visual interest
- Each with "Explore [Service] →" button to respective landing page

### 4. Content Organization ✅
- **"Why Both Services?" section** explaining synergy between services
- **Restructured services section** to show 2 major divisions instead of 4 cards
- Equal visual weight using 1fr 1fr grid layout
- Updated color scheme: teal (#14b8a6) for office, blue (#0891b2) for accounting

### 5. SEO & Schema Updates ✅
- **Updated title:** "M&M Office Solutions | Office Equipment & Accounting Services - Vernon BC"
- **Enhanced schema markup** with equal service representation
- Added ComputerRepairService to business types
- Reordered services to show office equipment first

### 6. Mobile Responsiveness ✅
- **Smart hamburger menu:** Full-screen on mobile, compact dropdown on tablets
- **Responsive breakpoints:** 1300px for navigation, 769px for mobile optimizations
- **Landing page optimization:** Removed white bars, full-height hero sections

## Local Development
- **Local WordPress:** ~/Local Sites/mmoffice/ (mmoffice.local)
- **Local theme name:** mmoffice
- **Git repository:** ~/mmoffice-website/

## Key Information
- **Phone:** 250-307-1395
- **Email:** info@mmoffice.ca
- **Location:** Vernon, BC
- **Domain:** mmoffice.ca
- **Hosting:** Bluehost
- **Local Dev:** Local by Flywheel

## Brand Colors
- Primary Teal: #14b8a6 (office equipment accent)
- Secondary Blue: #0891b2 (accounting accent)
- Accent Blue: #0284c7

## Fonts
- Headers: Google "Play" font (matches logo exactly)
- Body: Inter font for readability

## Key Features
- Mobile-first responsive design (single column on mobile)
- Custom navigation with hamburger menu
- Equal-weight service presentation
- WPForms integration for contact form (Form ID: 13)
- Professional team showcase: Marvin (office equipment) and Miles (accounting)
- Single "Get Quote" CTA button in header

## Content Focus
- **Dual equal services:** Office equipment/IT AND accounting/tax
- **Team emphasis:** 40+ years combined experience
- **Local branding:** Vernon, BC location
- **Key principle:** Both services as equal professional divisions

## Development Workflow
1. Make changes in ~/mmoffice-website/
2. Test at http://mmoffice.local
3. Commit to GitHub
4. Deploy to Bluehost (manual FTP for now)

## Deployment
Files are uploaded to Bluehost via FTP to:
`/public_html/wp-content/themes/mmoffice/`

## Implementation Options
### Landing Pages
- **Option 1:** Create pages through WordPress admin
- **Option 2:** Create custom templates (page-office-equipment.php and page-accounting-services.php)

### Files Likely Needing Updates
- `index.php` - Homepage template with new dual-service structure
- New page templates for service landing pages
- CSS updates for equal-weight service presentation
- Navigation menu updates (WordPress admin or header.php)

## Next Steps (Priority Order)

### 1. Create WordPress Pages for Landing Templates 
- Go to WordPress admin → Pages → Add New
- Create "Office Equipment & IT Services" page with slug `office-equipment`
- Create "Accounting & Tax Services" page with slug `accounting-services` 
- Assign respective page templates in Page Attributes

### 2. Revise Landing Page Content Accuracy
- **Office Equipment page:** Review and refine service descriptions to match actual offerings
- **Accounting Services page:** Ensure tax and bookkeeping services reflect current capabilities
- Update service features, pricing information, and process details
- Verify contact information and service areas

### 3. SEO Optimization & Performance
- **Meta descriptions:** Create unique, compelling descriptions for each page
- **Image optimization:** Add alt text, compress images, implement lazy loading
- **Page speed:** Optimize CSS/JS delivery, consider caching strategies
- **Local SEO:** Enhance Google Business Profile integration
- **Content optimization:** Keyword research for Vernon BC market
- **Internal linking:** Strategic linking between pages and sections

## Current Status: ✅ Phase 1 Complete
All strategic dual-division changes implemented. Ready for WordPress page creation and content refinement.

## Important Notes
- Theme uses custom index.php template
- Images must use WordPress template functions for paths
- Mobile navigation uses JavaScript for hamburger menu
- Contact form requires WPForms plugin (Form ID: 13)
- Landing page templates ready - need WordPress admin setup