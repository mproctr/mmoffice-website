<?php
/**
 * The main template file for M&M Office Solutions
 * 
 * This file is used as a fallback when no other template is found.
 * Since we're using front-page.php for our homepage, this serves
 * as a backup template.
 */

// Redirect to front page template
get_header(); ?>

<div style="max-width: 800px; margin: 0 auto; padding: 2rem; text-align: center;">
    <h1>M&M Office Solutions</h1>
    <p>Welcome to M&M Office Solutions. We provide expert accounting, tax services, and office equipment support in Vernon, BC.</p>
    <a href="<?php echo home_url(); ?>" style="background: linear-gradient(135deg, #14b8a6, #0891b2); color: white; padding: 1rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600;">Return to Homepage</a>
</div>

<?php get_footer(); ?>
