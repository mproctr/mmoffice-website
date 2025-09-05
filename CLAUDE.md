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

## Strategic Changes Implementation
### 1. Two-Landing-Page Structure
- **Main homepage:** Shows BOTH services equally as "Two Divisions, One Trusted Partner"
- **New landing pages:**
  - `/office-equipment` - "Office Equipment & IT Services"
  - `/accounting-services` - "Accounting & Tax Services"

### 2. Navigation Updates
- **New menu:** Home | Office Equipment & IT | Accounting & Tax | Our Team | Contact
- Anchor links for single-page sections
- Direct links to new service landing pages

### 3. Homepage Hero Redesign
- Two equal-sized service cards/pillars
- Office Equipment & IT and Accounting & Tax presented with equal prominence
- Each with "Explore [Service] →" button to respective landing page

### 4. Content Organization
- "Why Both Services?" section explaining synergy
- Testimonials for both service types  
- Clear CTAs for each service area
- Equal visual weight using 1fr 1fr grid layout
- Different color accents: teal (#14b8a6) for office, blue (#0891b2) for accounting

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

## Important Notes
- Theme uses custom index.php template
- Images must use WordPress template functions for paths
- Mobile navigation uses JavaScript for hamburger menu
- Contact form requires WPForms plugin (Form ID: 13)
- All content currently on single page but expanding to strategic landing pages