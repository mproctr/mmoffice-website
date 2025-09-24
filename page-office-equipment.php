<?php
/*
Template Name: Office Equipment & IT Services
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <title>Office Equipment & IT Services | M&M Office Solutions - Vernon BC</title>
    <meta name="description" content="Expert office equipment repair, IT support, and technology solutions in Vernon, BC. Printer repair, network support, office supplies, and maintenance services.">
    
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
            <li><a href="<?php echo home_url('/office-equipment'); ?>" class="current-page">Office Equipment & IT</a></li>
            <li><a href="<?php echo home_url('/accounting-services'); ?>">Accounting & Tax</a></li>
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
<section class="landing-hero office-hero">
    <div class="landing-hero-container">
        <div class="landing-hero-content">
            <h1 class="landing-hero-title">Office Equipment & IT Services</h1>
            <p class="landing-hero-subtitle">Complete technology solutions for Vernon businesses - from printer repair to network support, we keep your office running efficiently.</p>
            <div class="hero-buttons">
                <a href="<?php echo home_url(); ?>#contact" class="btn-primary">Get Service Quote</a>
                <a href="tel:250-307-1395" class="btn-secondary">Call (250) 307-1395</a>
            </div>
        </div>
        <div class="landing-hero-visual">
            <div class="service-highlights">
                <div class="highlight-card">
                    <div class="highlight-icon"><?php echo get_svg_icon('zap', '#14b8a6', '24'); ?></div>
                    <div class="highlight-title">Fast Response</div>
                    <div class="highlight-text">Quick turnaround on repairs and support requests</div>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon"><?php echo get_svg_icon('wrench', '#14b8a6', '24'); ?></div>
                    <div class="highlight-title">Expert Service</div>
                    <div class="highlight-text">25+ years of office equipment experience</div>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon"><?php echo get_svg_icon('map-pin', '#14b8a6', '24'); ?></div>
                    <div class="highlight-title">Local Support</div>
                    <div class="highlight-text">Vernon-based service you can trust</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Equipment Services Section -->
<section class="equipment-services">
    <div class="services-container">
        <div class="section-header">
            <h2 class="section-title">Equipment Services</h2>
            <p class="section-subtitle">Professional repair, maintenance, and support for all your office equipment needs</p>
        </div>
        <div class="equipment-grid">
            <div class="equipment-card">
                <h3 class="equipment-title">Printer & MFP Repair</h3>
                <p class="equipment-description">Expert repair services for Epson, KonicaMinolta, Canon, Ricoh, HP, Lexmark, Sharp, Kyocera, Toshiba, and Brother printers and multifunction devices.</p>
                <ul class="equipment-features">
                    <li>Laser and inkjet printer repair</li>
                    <li>Multifunction device service</li>
                    <li>Paper jam and feed issues</li>
                    <li>Print quality troubleshooting</li>
                    <li>Firmware updates and upgrades</li>
                </ul>
            </div>
            <div class="equipment-card">
                <h3 class="equipment-title">Equipment Maintenance</h3>
                <p class="equipment-description">Preventive maintenance programs to keep your equipment running smoothly.</p>
                <ul class="equipment-features">
                    <li>Scheduled maintenance visits</li>
                    <li>Cleaning and calibration</li>
                    <li>Parts replacement before failure</li>
                    <li>Performance optimization</li>
                    <li>Extended equipment lifespan</li>
                </ul>
            </div>
            <div class="equipment-card">
                <h3 class="equipment-title">Office Supplies</h3>
                <p class="equipment-description">Quality toner cartridges and office supplies - our main sales focus with competitive pricing.</p>
                <ul class="equipment-features">
                    <li>OEM and compatible toner cartridges</li>
                    <li>Regular stock of frequently-used cartridges</li>
                    <li>Paper and office supplies available</li>
                    <li>Bulk ordering discounts</li>
                    <li>Local delivery service</li>
                </ul>
            </div>
            <div class="equipment-card">
                <h3 class="equipment-title">New Equipment Sales</h3>
                <p class="equipment-description">Find the right office equipment for your business needs and budget.</p>
                <ul class="equipment-features">
                    <li>Printer and MFP recommendations</li>
                    <li>Competitive pricing on new devices</li>
                    <li>Setup and configuration</li>
                    <li>Training on new equipment</li>
                    <li>Warranty and support included</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- IT Support Section -->
<section class="it-support">
    <div class="services-container">
        <div class="section-header">
            <h2 class="section-title">IT Support Services</h2>
            <p class="section-subtitle">Reliable technology support to keep your business connected and productive</p>
        </div>
        <div class="it-grid">
            <div class="it-card">
                <h3 class="it-title">Network Support</h3>
                <p class="it-description">Troubleshooting and maintenance for existing network setups and connectivity issues.</p>
                <ul class="it-features">
                    <li>Network troubleshooting and repair</li>
                    <li>Printer connectivity to existing networks</li>
                    <li>Wireless connection problems</li>
                    <li>Internet connectivity troubleshooting</li>
                    <li>Basic router and switch support</li>
                </ul>
            </div>
            <div class="it-card">
                <h3 class="it-title">System Maintenance</h3>
                <p class="it-description">Basic computer troubleshooting and maintenance to keep systems running smoothly.</p>
                <ul class="it-features">
                    <li>Computer troubleshooting</li>
                    <li>Software problem resolution</li>
                    <li>Basic virus removal</li>
                    <li>Printer driver installation</li>
                    <li>Hardware diagnostics</li>
                </ul>
            </div>
            <div class="it-card">
                <h3 class="it-title">Technology Consulting</h3>
                <p class="it-description">Practical advice for office technology decisions and equipment selection.</p>
                <ul class="it-features">
                    <li>Office equipment recommendations</li>
                    <li>Printer selection guidance</li>
                    <li>Cost-effective solutions</li>
                    <li>Equipment compatibility advice</li>
                    <li>Practical technology guidance</li>
                </ul>
            </div>
            <div class="it-card">
                <h3 class="it-title">Remote Support</h3>
                <p class="it-description">Fast, convenient support without the need for on-site visits.</p>
                <ul class="it-features">
                    <li>Remote troubleshooting</li>
                    <li>Software installation and updates</li>
                    <li>Configuration assistance</li>
                    <li>Quick response times</li>
                    <li>Screen sharing support</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Expert Profile -->
<section class="expert-profile office-expert">
    <div class="expert-container">
        <div class="expert-content">
            <div class="expert-info">
                <h2 class="expert-title">Meet Your Equipment & IT Expert</h2>
                <h3 class="expert-name">Marvin Barclay</h3>
                <p class="expert-role">Office Equipment & IT Support Specialist</p>
                <p class="expert-bio">Marvin brings over 25 years of experience in repairing and maintaining office equipment, including printers, scanners, and IT systems. Whether troubleshooting complex issues, recommending new office technology, or providing ongoing support, Marvin delivers friendly service, quick response times and sound technical advice to keep Vernon businesses efficient and productive.</p>
                <div class="expert-credentials">
                    <div class="credential">
                        <span class="credential-icon"><i class="fas fa-user-graduate"></i></span>
                        <span class="credential-text">25+ Years Experience</span>
                    </div>
                    <div class="credential">
                        <span class="credential-icon"><i class="fas fa-tools"></i></span>
                        <span class="credential-text">Multi-Brand Equipment Certified</span>
                    </div>
                    <div class="credential">
                        <span class="credential-icon"><i class="fas fa-bolt"></i></span>
                        <span class="credential-text">Fast Response Times</span>
                    </div>
                </div>
            </div>
            <div class="expert-photo">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/marvin-headshot.jpg" alt="Marvin Barclay - Office Equipment Expert" />
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="landing-cta office-cta">
    <div class="cta-container">
        <h2 class="cta-title">Ready to Fix Your Office Equipment Issues?</h2>
        <p class="cta-text">Get professional service from Vernon's most experienced office equipment technician.</p>
        <div class="hero-buttons centered-buttons">
            <a href="<?php echo home_url(); ?>#contact" class="btn-primary">Request Service</a>
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