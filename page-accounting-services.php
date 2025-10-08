<?php
/*
Template Name: Accounting & Tax Services
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <title>Accounting & Tax Services | M&M Office Solutions - Vernon BC</title>
    <meta name="description" content="Expert accounting, bookkeeping, and tax preparation services in Vernon, BC. Professional financial management for individuals and small businesses.">

    <!-- Preconnect for faster font loading -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Service Schema for Accounting -->
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": ["AccountingService", "TaxPreparationService"],
    "serviceType": "Accounting & Tax Services",
    "provider": {
        "@type": "LocalBusiness",
        "name": "M&M Office Solutions",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Vernon",
            "addressRegion": "BC",
            "addressCountry": "CA"
        },
        "telephone": "+1-250-307-1395",
        "email": "info@mmoffice.ca",
        "url": "<?php echo home_url('/accounting-services'); ?>"
    },
    "description": "Expert accounting, bookkeeping, and tax preparation services for Vernon individuals and small businesses. Professional financial management and CRA compliance.",
    "areaServed": {
        "@type": "City",
        "name": "Vernon",
        "containedIn": {
            "@type": "State",
            "name": "British Columbia"
        }
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Accounting & Tax Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Bookkeeping & Accounting",
                    "description": "Monthly bookkeeping, reconciliation, year-end preparation, and payroll processing"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Tax Preparation",
                    "description": "Personal and corporate T1/T2 tax returns, tax planning, and CRA audit support"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Business Consulting",
                    "description": "Financial analysis, cash flow forecasting, and business structure advice"
                }
            }
        ]
    }
}
</script>

    <!-- WordPress head -->
    <?php wp_head(); ?>
    
    <!-- External CSS Link -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body <?php body_class(); ?>>

<!-- Skip to main content for accessibility -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<!-- Navigation -->
<nav class="navbar">
    <div class="nav-container">
        <button class="hamburger" id="hamburger" aria-label="Toggle mobile menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/your-logo.png" alt="M&M Office Solutions" />
        </a>
        
        <ul class="nav-links">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><a href="<?php echo home_url('/office-equipment'); ?>">Office Equipment & IT</a></li>
            <li><a href="<?php echo home_url('/accounting-services'); ?>" class="current-page">Accounting & Tax</a></li>
            <li><a href="<?php echo home_url(); ?>#team">Our Team</a></li>
            <li><a href="<?php echo home_url(); ?>#contact">Contact</a></li>
        </ul>
        
        <a href="<?php echo home_url(); ?>#contact" class="cta-button">Get Quote</a>
    </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <ul class="mobile-nav-links">
        <li><a href="<?php echo home_url(); ?>" onclick="closeMobileMenu()">Home</a></li>
        <li><a href="<?php echo home_url('/office-equipment'); ?>" onclick="closeMobileMenu()">Office Equipment & IT</a></li>
        <li><a href="<?php echo home_url('/accounting-services'); ?>" onclick="closeMobileMenu()">Accounting & Tax</a></li>
        <li><a href="<?php echo home_url(); ?>#team" onclick="closeMobileMenu()">Our Team</a></li>
        <li><a href="<?php echo home_url(); ?>#contact" onclick="closeMobileMenu()">Contact</a></li>
    </ul>
</div>

<!-- Landing Page Hero -->
<section class="landing-hero accounting-hero" id="main-content">
    <div class="landing-hero-container">
        <div class="landing-hero-content">
            <h1 class="landing-hero-title">Accounting & Tax Services</h1>
            <p class="landing-hero-subtitle">Professional financial management and tax preparation for Vernon individuals and small businesses - maximizing deductions while ensuring compliance.</p>
            <div class="hero-buttons">
                <a href="<?php echo home_url(); ?>#contact" class="btn-primary">Get Consultation</a>
                <a href="tel:250-307-1395" class="btn-secondary">Call (250) 307-1395</a>
            </div>
        </div>
        <div class="landing-hero-visual">
            <div class="service-highlights">
                <div class="highlight-card">
                    <div class="highlight-icon"><?php echo get_svg_icon('calculator', '#0891b2', '24'); ?></div>
                    <div class="highlight-title">Expert Knowledge</div>
                    <div class="highlight-text">15+ years of accounting and tax expertise</div>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon"><?php echo get_svg_icon('dollar-sign', '#0891b2', '24'); ?></div>
                    <div class="highlight-title">Maximize Savings</div>
                    <div class="highlight-text">Find every deduction you're entitled to</div>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon"><?php echo get_svg_icon('circle-check-big', '#0891b2', '24'); ?></div>
                    <div class="highlight-title">CRA Compliant</div>
                    <div class="highlight-text">Accurate, compliant, stress-free service</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Accounting Services Section -->
<section class="accounting-services">
    <div class="services-container">
        <div class="section-header">
            <h2 class="section-title">Accounting & Bookkeeping Services</h2>
            <p class="section-subtitle">Professional financial management for businesses of all sizes - from sole proprietors to mid-sized companies</p>
        </div>
        <div class="accounting-grid">
            <div class="accounting-card">
                <h3 class="accounting-title">Monthly Bookkeeping</h3>
                <p class="accounting-description">Accurate record-keeping and financial reporting for your business.</p>
                <ul class="accounting-features">
                    <li>Bank and credit card reconciliation</li>
                    <li>Expense tracking and categorization</li>
                    <li>Accounts payable and receivable</li>
                    <li>Cash flow monitoring</li>
                    <li>Monthly financial statements</li>
                </ul>
            </div>
            <div class="accounting-card">
                <h3 class="accounting-title">Year-End Preparation</h3>
                <p class="accounting-description">Complete year-end services to prepare for tax season and beyond.</p>
                <ul class="accounting-features">
                    <li>General ledger cleanup and review</li>
                    <li>Year-end journal entries</li>
                    <li>Closing entries and period-end procedures</li>
                    <li>Financial statement preparation</li>
                    <li>Tax document organization</li>
                </ul>
            </div>
            <div class="accounting-card">
                <h3 class="accounting-title">Payroll Processing</h3>
                <p class="accounting-description">Full-service payroll processing ensuring employees are paid correctly and all tax obligations are met on time.</p>
                <ul class="accounting-features">
                    <li>Employee pay calculations</li>
                    <li>Tax deductions and benefits</li>
                    <li>CPP, EI, and tax remittances to CRA</li>
                    <li>ROE (Record of Employment) preparation</li>
                    <li>Integration with existing payroll schedules</li>
                </ul>
            </div>
            <div class="accounting-card">
                <h3 class="accounting-title">Filing & Compliance</h3>
                <p class="accounting-description">Ongoing filing and compliance services to keep your business in good standing with all tax authorities.</p>
                <ul class="accounting-features">
                    <li>GST return preparation and filing</li>
                    <li>PST return preparation and filing</li>
                    <li>Payroll source deductions</li>
                    <li>Information returns (T4, T5, etc.)</li>
                    <li>Meeting all tax filing deadlines</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Tax Services Section -->
<section class="tax-services">
    <div class="services-container">
        <div class="section-header">
            <h2 class="section-title">Tax Preparation & Planning</h2>
            <p class="section-subtitle">Maximize deductions and ensure compliance with expert tax services</p>
        </div>
        <div class="tax-grid">
            <div class="tax-card">
                <h3 class="tax-title">Personal Tax Returns</h3>
                <p class="tax-description">Comprehensive personal tax preparation to maximize your refund.</p>
                <ul class="tax-features">
                    <li>T1 general tax returns</li>
                    <li>Deduction maximization</li>
                    <li>Tax credit identification</li>
                    <li>Income optimization strategies</li>
                    <li>Electronic filing included</li>
                </ul>
            </div>
            <div class="tax-card">
                <h3 class="tax-title">Corporate Tax Returns</h3>
                <p class="tax-description">T2 corporate tax preparation focused on CCPC returns for incorporated professionals and small businesses.</p>
                <ul class="tax-features">
                    <li>T2 corporate tax returns</li>
                    <li>Small business deduction optimization</li>
                    <li>Capital cost allowance planning</li>
                    <li>Simple corporate structures</li>
                    <li>Provincial tax compliance</li>
                </ul>
            </div>
            <div class="tax-card">
                <h3 class="tax-title">Tax Planning</h3>
                <p class="tax-description">Strategic planning to minimize taxes and maximize after-tax income.</p>
                <ul class="tax-features">
                    <li>Year-round tax strategies</li>
                    <li>Income splitting opportunities</li>
                    <li>Retirement planning integration</li>
                    <li>Investment tax optimization</li>
                    <li>Estate planning considerations</li>
                </ul>
            </div>
            <div class="tax-card">
                <h3 class="tax-title">CRA Support</h3>
                <p class="tax-description">Experienced CRA representation and support with proven success in audit situations.</p>
                <ul class="tax-features">
                    <li>CRA correspondence handling</li>
                    <li>Notice of assessment reviews</li>
                    <li>T1/T2 adjustment requests</li>
                    <li>Reassessment objections and appeals</li>
                    <li>CRA audit representation with successful track record</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Expert Profile -->
<section class="expert-profile accounting-expert">
    <div class="expert-container">
        <div class="expert-content">
            <div class="expert-info">
                <h2 class="expert-title">Meet Your Accounting & Tax Expert</h2>
                <h3 class="expert-name">Miles Procter</h3>
                <p class="expert-role">Accountant & Tax Specialist</p>
                <p class="expert-bio">With over 15 years of experience including public practice, Miles specializes in providing bookkeeping, accounting and tax preparation services to individuals, sole-proprietorships and small businesses. He provides accurate, compliant, and stress-free services, ensuring clients stay organized, maximize deductions, and maintain excellent relationships with the CRA while focusing on their business growth.</p>
                <div class="expert-credentials">
                    <div class="credential">
                        <span class="credential-icon"><i class="fas fa-user-graduate"></i></span>
                        <span class="credential-text">15+ Years Experience</span>
                    </div>
                    <div class="credential">
                        <span class="credential-icon"><i class="fas fa-chart-line"></i></span>
                        <span class="credential-text">Public Practice Background</span>
                    </div>
                    <div class="credential">
                        <span class="credential-icon"><i class="fas fa-shield-alt"></i></span>
                        <span class="credential-text">CRA Compliant Service</span>
                    </div>
                </div>
            </div>
            <div class="expert-photo">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/miles-headshot.jpg" alt="Miles Procter - Accounting Expert" />
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="landing-cta accounting-cta">
    <div class="cta-container">
        <h2 class="cta-title">Ready to Optimize Your Financial Management?</h2>
        <p class="cta-text">Get expert accounting and tax services from Vernon's experienced financial expert.</p>
        <div class="hero-buttons centered-buttons">
            <a href="<?php echo home_url(); ?>#contact" class="btn-primary">Book Consultation</a>
            <a href="tel:250-307-1395" class="btn-secondary">Call (250) 307-1395</a>
        </div>
        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-icon"><i class="fas fa-phone"></i></div>
                <div class="contact-label">Phone</div>
                <div class="contact-value">
                    <a href="tel:250-307-1395">(250) 307-1395</a>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                <div class="contact-label">Email</div>
                <div class="contact-value">
                    <a href="mailto:info@mmoffice.ca">info@mmoffice.ca</a>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="contact-label">Serving</div>
                <div class="contact-value">Vernon, BC & Area</div>
            </div>
        </div>
    </div>
</section>

<!-- Copyright Footer -->
<div class="copyright-footer">
    © <?php echo date('Y'); ?> M&M Office Solutions. All rights reserved.
</div>

<?php wp_footer(); ?>
</body>
</html>