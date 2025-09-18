<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <title>M&M Office Solutions | Office Equipment & Accounting Services - Vernon BC</title>
    <meta name="description" content="Two professional divisions under one roof - office equipment services and accounting/tax services for Vernon, BC businesses. Expert IT support, printer repair, bookkeeping, and tax preparation.">

    <!-- Local Business Schema -->
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": ["LocalBusiness", "AccountingService", "TaxPreparationService", "ComputerRepairService"],
    "name": "M&M Office Solutions",
    "description": "Two professional divisions - office equipment services and accounting/tax services for Vernon, BC businesses. Complete IT support, printer repair, bookkeeping, and tax preparation under one roof.",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Vernon",
        "addressRegion": "BC",
        "addressCountry": "CA"
    },
    "telephone": "+1-250-307-1395",
    "email": "info@mmoffice.ca",
    "url": "<?php echo home_url(); ?>",
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": "50.2671",
            "longitude": "-119.2721"
        },
        "geoRadius": "50000"
    },
    "services": [
        "Office Equipment Repair",
        "Printer Repair", 
        "IT Support",
        "Network Troubleshooting",
        "Office Supplies",
        "Accounting Services",
        "Bookkeeping",
        "Tax Preparation",
        "Tax Planning",
        "Payroll Processing"
    ],
    "priceRange": "$",
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Two Professional Divisions",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Office Equipment & IT Services",
                    "description": "Complete office equipment repair, maintenance, IT support and technology solutions for Vernon businesses"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Accounting & Tax Services",
                    "description": "Professional accounting, bookkeeping, tax preparation and financial management for Vernon individuals and businesses"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Printer Repair & Maintenance",
                    "description": "Expert printer repair, maintenance, and support services for all major printer brands"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Product",
                    "name": "Office Supplies & Consumables",
                    "description": "Quality toner cartridges, ink, paper, and office supplies with competitive pricing and delivery"
                }
            }
        ]
    }
}
</script>
    
<!-- WordPress head - for plugins and admin -->
    <?php wp_head(); ?>

<!-- External CSS Link -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">    

</head>

<body <?php body_class(); ?>>

<!-- Navigation -->
<nav class="navbar">
    <div class="nav-container">
            <!-- Hamburger Menu Button (Mobile Only) -->
        <button class="hamburger" id="hamburger" aria-label="Toggle mobile menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/your-logo.png" alt="M&M Office Solutions" />
        </a>
        
        <!-- Desktop Navigation -->
        <ul class="nav-links">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><a href="<?php echo home_url('/office-equipment'); ?>">Office Equipment & IT</a></li>
            <li><a href="<?php echo home_url('/accounting-services'); ?>">Accounting & Tax</a></li>
            <li><a href="#team">Our Team</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        
        <a href="#contact" class="cta-button">Get Quote</a>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu" id="mobileMenu">
    <ul class="mobile-nav-links">
        <li><a href="<?php echo home_url(); ?>" onclick="closeMobileMenu()">Home</a></li>
        <li><a href="<?php echo home_url('/office-equipment'); ?>" onclick="closeMobileMenu()">Office Equipment & IT</a></li>
        <li><a href="<?php echo home_url('/accounting-services'); ?>" onclick="closeMobileMenu()">Accounting & Tax</a></li>
        <li><a href="#team" onclick="closeMobileMenu()">Our Team</a></li>
        <li><a href="#contact" onclick="closeMobileMenu()">Contact</a></li>
    </ul>
</div>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">Vernon's Trusted Accounting & Office Technology Experts</h1>
            <p class="hero-subtitle">Complete business solutions for Vernon companies - professional office equipment services and expert accounting support under one roof.</p>
            <div class="hero-buttons">
                <a href="#contact" class="btn-primary">Get Started Today</a>
                <a href="#services" class="btn-secondary">Our Services</a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="service-divisions">
                <div class="division-card office-division">
                    <div class="division-icon"><?php echo get_svg_icon('printer', '#14b8a6', '32'); ?></div>
                    <div class="division-title">Office Equipment & IT</div>
                    <div class="division-text">Expert repair for all major printer brands, IT troubleshooting, network setup, and office supplies. Your technical partner for a productive workspace.</div>
                    <a href="<?php echo home_url('/office-equipment'); ?>" class="division-cta">Explore Office Services →</a>
                </div>
                <div class="division-card accounting-division">
                    <div class="division-icon"><?php echo get_svg_icon('calculator', '#0891b2', '32'); ?></div>
                    <div class="division-title">Accounting & Tax</div>
                    <div class="division-text">Complete accounting and bookkeeping services, year-end preparation, and tax filing. Your financial partner for a profitable business.</div>
                    <a href="<?php echo home_url('/accounting-services'); ?>" class="division-cta">Explore Accounting Services →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="services-container">
        <div class="section-header">
            <h2 class="section-title">Two Professional Divisions</h2>
            <p class="section-subtitle">Equal expertise in office equipment services and accounting solutions - streamlining your business operations under one trusted partnership.</p>
        </div>
        <div class="divisions-grid">
            <div class="division-service-card office-equipment">
                <div class="division-header">
                    <div class="division-service-icon"><?php echo get_svg_icon('printer', '#14b8a6', '24'); ?></div>
                    <h3 class="division-service-title">Office Equipment & IT Services</h3>
                    <p class="division-service-description">Complete office technology solutions to keep your business running efficiently and productively.</p>
                </div>
                <div class="service-categories">
                    <div class="service-category">
                        <h4 class="category-title">Equipment Services</h4>
                        <ul class="category-features">
                            <li>Printer & MFP repair</li>
                            <li>Equipment maintenance</li>
                            <li>New equipment sales</li>
                            <li>Supplies & consumables</li>
                        </ul>
                    </div>
                    <div class="service-category">
                        <h4 class="category-title">IT Support</h4>
                        <ul class="category-features">
                            <li>Network troubleshooting</li>
                            <li>System maintenance</li>
                            <li>Technology consulting</li>
                            <li>Remote support available</li>
                        </ul>
                    </div>
                </div>
                <a href="<?php echo home_url('/office-equipment'); ?>" class="division-service-cta">Learn More →</a>
            </div>
            <div class="division-service-card accounting-tax">
                <div class="division-header">
                    <div class="division-service-icon"><?php echo get_svg_icon('calculator', '#0891b2', '24'); ?></div>
                    <h3 class="division-service-title">Accounting & Tax Services</h3>
                    <p class="division-service-description">Professional financial management and tax preparation to maximize your business success and compliance.</p>
                </div>
                <div class="service-categories">
                    <div class="service-category">
                        <h4 class="category-title">Accounting & Bookkeeping</h4>
                        <ul class="category-features">
                            <li>Monthly bookkeeping & reconciliation</li>
                            <li>Year end preparation</li>
                            <li>Payroll processing</li>
                            <li>Small business consulting</li>
                        </ul>
                    </div>
                    <div class="service-category">
                        <h4 class="category-title">Tax Preparation</h4>
                        <ul class="category-features">
                            <li>Personal & corporate tax returns</li>
                            <li>Tax planning & strategies</li>
                            <li>CRA audit support</li>
                            <li>GST and PST filing</li>
                        </ul>
                    </div>
                </div>
                <a href="<?php echo home_url('/accounting-services'); ?>" class="division-service-cta">Learn More →</a>
            </div>
        </div>
    </div>
</section>

<!-- Why Both Services Section -->
<section class="why-both-services">
    <div class="why-both-container">
        <div class="section-header">
            <h2 class="section-title">Why Both Services Together?</h2>
            <p class="section-subtitle">The perfect synergy of office efficiency and financial management</p>
        </div>
        <div class="synergy-grid">
            <div class="synergy-card">
                <div class="synergy-icon"><?php echo get_svg_icon('refresh-ccw-dot', '#0284c7', '24'); ?></div>
                <h3 class="synergy-title">Streamlined Operations</h3>
                <p class="synergy-text">One trusted partner for all your office technology and financial management needs - simplifying vendor relationships and communication.</p>
            </div>
            <div class="synergy-card">
                <div class="synergy-icon"><?php echo get_svg_icon('dollar-sign', '#0284c7', '24'); ?></div>
                <h3 class="synergy-title">Cost Efficiency</h3>
                <p class="synergy-text">Bundled services mean better value and coordinated support for your office equipment leases, maintenance, and related tax deductions.</p>
            </div>
            <div class="synergy-card">
                <div class="synergy-icon"><?php echo get_svg_icon('square-mouse-pointer', '#0284c7', '24'); ?></div>
                <h3 class="synergy-title">Business Focus</h3>
                <p class="synergy-text">While we handle your technology and finances, you can focus on what matters most - growing your business and serving your customers.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team" id="team">
    <div class="team-container">
        <div class="section-header">
            <h2 class="section-title">Meet Your Expert Team</h2>
            <p class="section-subtitle">Experienced professionals dedicated to your business success with over 40 years of combined expertise.</p>
        </div>
        <div class="team-grid">
            <div class="team-card">
                <img loading="lazy" class="team-photo" src="<?php echo get_template_directory_uri(); ?>/images/miles-headshot.jpg" alt="Miles Procter" />
                <h3 class="team-name">Miles Procter</h3>
                <div class="team-role">Accountant & Tax Specialist</div>
                <p class="team-bio">With over 15 years of experience including public practice, Miles specializes in providing bookkeeping, accounting and tax preparation services to individuals, sole-proprietorships and small businesses. He provides accurate, compliant, and stress-free services, ensuring clients stay organized and maximize deductions.</p>
            </div>
            <div class="team-card">
                <img loading="lazy" class="team-photo" src="<?php echo get_template_directory_uri(); ?>/images/marvin-headshot.jpg" alt="Marvin Barclay" />
                <h3 class="team-name">Marvin Barclay</h3>
                <div class="team-role">Office Equipment & IT Support</div>
                <p class="team-bio">Marvin brings over 25 years of experience in repairing and maintaining office equipment, including printers, scanners, and fax machines. Whether troubleshooting issues or recommending new office technology, Marvin delivers friendly service, quick response times and sound advice to keep your office efficient.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="contact">
    <div class="cta-container">
        <h2 class="cta-title">Ready to Streamline Your Business?</h2>
        <p class="cta-text">Get in touch with our expert team today for a free consultation on your accounting, tax, or office equipment needs.</p>
        
        <!-- Contact Form Container -->
        <div class="contact-form-container">
            <?php 
            if (function_exists('wpforms_display')) {
                wpforms_display('13');
            } else {
                echo '<p class="form-fallback">Contact form temporarily unavailable. Please email us directly at <a href="mailto:info@mmoffice.ca">info@mmoffice.ca</a></p>';
            }
            ?>
        </div>
        
        <!-- Alternative Contact Methods -->
        <div class="alternative-contact">
            <p class="contact-prompt">Or reach us directly:</p>
            <div class="hero-buttons">
                <a href="tel:250-307-1395" class="btn-primary">Call Now</a>
                <a href="mailto:info@mmoffice.ca" class="btn-secondary">Email Us</a>
            </div>
        </div>
        
        <!-- Contact Information -->
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
                <div class="contact-label">Location</div>
                <div class="contact-value">Vernon, BC</div>
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
    
    // Event listeners
    hamburger.addEventListener('click', toggleMobileMenu);
    
    // Close menu when clicking outside
    mobileMenu.addEventListener('click', function(e) {
        if (e.target === mobileMenu) {
            closeMobileMenu();
        }
    });
    
    // Close menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
            closeMobileMenu();
        }
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 100) {
            navbar.style.background = 'rgba(255, 255, 255, 0.98)';
            navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
        } else {
            navbar.style.background = 'rgba(255, 255, 255, 0.98)';
            navbar.style.boxShadow = 'none';
        }
    });
    
    // Close mobile menu on window resize if open
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768 && mobileMenu.classList.contains('active')) {
            closeMobileMenu();
        }
    });
</script>

<?php wp_footer(); ?>
</body>
</html>