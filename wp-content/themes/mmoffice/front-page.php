<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- SEO Meta Tags -->
    <title><?php bloginfo('name'); ?> | Accounting, Tax & Office Equipment Services | Vernon, BC</title>
    <meta name="description" content="M&M Office Solutions provides expert accounting, bookkeeping, tax preparation, and office equipment services in Vernon, BC. 40+ years combined experience serving local businesses.">
    <meta name="keywords" content="accounting Vernon BC, tax preparation Vernon, bookkeeping services, office equipment repair, printer repair Vernon, IT support Vernon">
    <meta name="author" content="M&M Office Solutions">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph (Social Media) -->
    <meta property="og:title" content="M&M Office Solutions | Accounting & Office Equipment | Vernon, BC">
    <meta property="og:description" content="Expert accounting, tax services, and office equipment support for Vernon businesses. Professional, reliable, local.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:site_name" content="M&M Office Solutions">

    <!-- Google Meta Tag -->
    <meta name="google-site-verification" content="azxWqTwRNQKFZKAMRGimKGqXyN3ii3SS7cChh_u__BQ" />
    
    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "M&M Office Solutions",
        "description": "Accounting, bookkeeping, tax preparation, and office equipment services",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Vernon",
            "addressRegion": "BC",
            "addressCountry": "CA"
        },
        "telephone": "+1-250-307-1395",
        "email": "info@mmoffice.ca",
        "url": "<?php echo home_url(); ?>",
        "priceRange": "$",
        "serviceArea": "Vernon, BC and surrounding areas"
    }
    </script>
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo esc_url(home_url()); ?>">
    
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
            <li><a href="#services">Services</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        
        <a href="#contact" class="cta-button">Get Quote</a>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu" id="mobileMenu">
    <ul class="mobile-nav-links">
        <li><a href="#services" onclick="closeMobileMenu()">Services</a></li>
        <li><a href="#team" onclick="closeMobileMenu()">Team</a></li>
        <li><a href="#contact" onclick="closeMobileMenu()">Contact</a></li>
    </ul>
</div>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">Vernon's Trusted Accounting & Office Technology Experts</h1>
            <p class="hero-subtitle">Expert accounting, tax services, and office equipment support to keep your business running smoothly and efficiently.</p>
            <div class="hero-buttons">
                <a href="#contact" class="btn-primary">Get Started Today</a>
                <a href="#services" class="btn-secondary">View Services</a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="value-props">
                <div class="value-card">
                    <div class="card-icon">📊</div>
                    <div class="card-title">Accounting & Tax</div>
                    <div class="card-text">Professional financial services for your business success</div>
                </div>
                <div class="value-card">
                    <div class="card-icon">🖨️</div>
                    <div class="card-title">Office Equipment</div>
                    <div class="card-text">Repairs, maintenance, supplies, and support for your office needs</div>
                </div>
                <div class="value-card">
                    <div class="card-icon">🤝</div>
                    <div class="card-title">Local Experts</div>
                    <div class="card-text">Serving Vernon businesses with 40+ years combined experience</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="services-container">
        <div class="section-header">
            <h2 class="section-title">Complete Business Solutions</h2>
            <p class="section-subtitle">From financial management to office technology, we provide comprehensive services to support your business operations.</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">📋</div>
                <h3 class="service-title">Accounting & Bookkeeping</h3>
                <p class="service-description">Professional financial management to keep your business compliant and profitable.</p>
                <ul class="service-features">
                    <li>Monthly bookkeeping & reconciliation</li>
                    <li>Year end preparation</li>
                    <li>Payroll processing</li>
                    <li>Small business consulting</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">📄</div>
                <h3 class="service-title">Tax Preparation</h3>
                <p class="service-description">Maximize deductions and ensure compliance with expert tax services.</p>
                <ul class="service-features">
                    <li>Personal & corporate tax returns</li>
                    <li>Tax planning & strategies</li>
                    <li>CRA audit support</li>
                    <li>GST and PST filing</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">🔧</div>
                <h3 class="service-title">Office Equipment Services</h3>
                <p class="service-description">Keep your office running with our comprehensive equipment support.</p>
                <ul class="service-features">
                    <li>Printer & MFP repair</li>
                    <li>Equipment maintenance</li>
                    <li>Supplies & consumables</li>
                    <li>New equipment sales</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">💻</div>
                <h3 class="service-title">IT Support</h3>
                <p class="service-description">Reliable technology support to keep your business connected and productive.</p>
                <ul class="service-features">
                    <li>Network troubleshooting</li>
                    <li>System maintenance</li>
                    <li>Technology consulting</li>
                    <li>Remote support available</li>
                </ul>
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
                <div class="team-role">Accounting & Tax Specialist</div>
                <p class="team-bio">With over 15 years of experience including public practice, Miles specializes in accounting, bookkeeping and tax preparation for individuals, sole-proprietorships and small businesses. He provides accurate, compliant, and stress-free services, ensuring clients stay organized and maximize deductions.</p>
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
            // Replace 'YOUR_FORM_ID' with your actual WPForms form ID
            if (function_exists('wpforms_display')) {
                wpforms_display('13'); // Change this to your form ID number
            } else {
                // Fallback if WPForms is not active
                echo '<p style="text-align: center; color: white;">Contact form temporarily unavailable. Please email us directly at <a href="mailto:info@mmoffice.ca" style="color: #14b8a6;">info@mmoffice.ca</a></p>';
            }
            ?>
        </div>        
        
        <!-- Alternative Contact Methods -->
        <div style="margin-top: 3rem; text-align: center;">
            <p style="color: rgba(255,255,255,0.8); margin-bottom: 1rem;">Or reach us directly:</p>
            <div class="hero-buttons" style="justify-content: center;">
                <a href="tel:250-307-1395" class="btn-primary">Call Now</a>
                <a href="mailto:info@mmoffice.ca" class="btn-secondary">Email Us</a>
            </div>
        </div>
        
        <!-- Keep your existing contact info -->
        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-icon">📞</div>
                <div class="contact-label">Phone</div>
                <div class="contact-value"><a href="tel:250-307-1395" style="color: inherit; text-decoration: none;">(250) 307-1395</a></div>
            </div>
            <div class="contact-item">
                <div class="contact-icon">✉️</div>
                <div class="contact-label">Email</div>
                <div class="contact-value"><a href="mailto:info@mmoffice.ca" style="color: inherit; text-decoration: none;">info@mmoffice.ca</a></div>
            </div>
            <div class="contact-item">
                <div class="contact-icon">📍</div>
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