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
    <meta name="description" content="Professional accounting, bookkeeping, and tax preparation services in Vernon, BC. Expert financial management for individuals and small businesses.">
    
    <!-- WordPress head -->
    <?php wp_head(); ?>
    
    <!-- External CSS Link -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body <?php body_class(); ?>>

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
<section class="landing-hero accounting-hero">
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
                    <div class="highlight-icon">📊</div>
                    <div class="highlight-title">Expert Knowledge</div>
                    <div class="highlight-text">15+ years of accounting and tax expertise</div>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon">💰</div>
                    <div class="highlight-title">Maximize Savings</div>
                    <div class="highlight-text">Find every deduction you're entitled to</div>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon">✅</div>
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
            <p class="section-subtitle">Professional financial management to keep your business compliant and profitable</p>
        </div>
        <div class="accounting-grid">
            <div class="accounting-card">
                <h3 class="accounting-title">Monthly Bookkeeping</h3>
                <p class="accounting-description">Accurate record-keeping and financial reporting for your business.</p>
                <ul class="accounting-features">
                    <li>Bank and credit card reconciliation</li>
                    <li>Expense tracking and categorization</li>
                    <li>Accounts payable and receivable</li>
                    <li>Monthly financial statements</li>
                    <li>Cash flow monitoring</li>
                </ul>
            </div>
            <div class="accounting-card">
                <h3 class="accounting-title">Year-End Preparation</h3>
                <p class="accounting-description">Complete year-end services to prepare for tax season and beyond.</p>
                <ul class="accounting-features">
                    <li>Year-end adjusting entries</li>
                    <li>Financial statement preparation</li>
                    <li>Tax document organization</li>
                    <li>T4 and T5 slip preparation</li>
                    <li>CRA filing requirements</li>
                </ul>
            </div>
            <div class="accounting-card">
                <h3 class="accounting-title">Payroll Processing</h3>
                <p class="accounting-description">Complete payroll management including deductions and remittances.</p>
                <ul class="accounting-features">
                    <li>Employee pay calculations</li>
                    <li>Tax deductions and benefits</li>
                    <li>CPP, EI, and tax remittances</li>
                    <li>T4 slip preparation</li>
                    <li>Workers' compensation reporting</li>
                </ul>
            </div>
            <div class="accounting-card">
                <h3 class="accounting-title">Business Consulting</h3>
                <p class="accounting-description">Strategic financial guidance to help grow your business.</p>
                <ul class="accounting-features">
                    <li>Financial performance analysis</li>
                    <li>Cash flow forecasting</li>
                    <li>Business structure advice</li>
                    <li>Growth strategy support</li>
                    <li>Cost reduction opportunities</li>
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
                    <li>Income optimization strategies</li>
                    <li>Deduction maximization</li>
                    <li>Tax credit identification</li>
                    <li>Electronic filing included</li>
                </ul>
            </div>
            <div class="tax-card">
                <h3 class="tax-title">Corporate Tax Returns</h3>
                <p class="tax-description">Expert corporate tax preparation for small and medium businesses.</p>
                <ul class="tax-features">
                    <li>T2 corporate tax returns</li>
                    <li>Small business deduction optimization</li>
                    <li>Capital cost allowance planning</li>
                    <li>Inter-corporate transactions</li>
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
                <p class="tax-description">Professional support for CRA correspondence and audit situations.</p>
                <ul class="tax-features">
                    <li>CRA audit representation</li>
                    <li>Notice of assessment reviews</li>
                    <li>Voluntary disclosure programs</li>
                    <li>Payment arrangement negotiations</li>
                    <li>GST/HST compliance support</li>
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
        <p class="cta-text">Get professional accounting and tax services from Vernon's experienced financial expert.</p>
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

<script>
    // Hamburger menu functionality
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    
    function toggleMobileMenu() {
        hamburger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        
        // Prevent body scrolling when menu is open
        if (mobileMenu.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    }
    
    function closeMobileMenu() {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    hamburger.addEventListener('click', toggleMobileMenu);
    
    mobileMenu.addEventListener('click', function(e) {
        if (e.target === mobileMenu) {
            closeMobileMenu();
        }
    });
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
            closeMobileMenu();
        }
    });

    window.addEventListener('resize', function() {
        if (window.innerWidth > 768 && mobileMenu.classList.contains('active')) {
            closeMobileMenu();
        }
    });
</script>

<?php wp_footer(); ?>
</body>
</html>