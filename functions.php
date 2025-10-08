<?php
/**
 * M&M Office Child Theme Functions
 */

// Enqueue parent and child theme styles
function mmoffice_child_styles() {
    // Parent theme style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Child theme style (loads after parent for proper overrides)
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

    // Enqueue main JavaScript file
    wp_enqueue_script('mmoffice-main-js', get_template_directory_uri() . '/scripts.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mmoffice_child_styles');

/**
 * SVG Icon Function for Heroicons replacements
 */
function get_svg_icon($icon_name, $color = 'currentColor', $size = '24') {
    $icons = [
        'zap' => '<path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/>',
        'wrench' => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/>',
        'map-pin' => '<path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/>',
        'chart-bar' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />',
        'dollar-sign' => '<line x1="12" x2="12" y1="2" y2="22"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>',
        'circle-check-big' => '<path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/>',
        'printer' => '<path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6"/><rect x="6" y="14" width="12" height="8" rx="1"/>',
        'refresh-ccw-dot' => '<path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/><path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16"/><path d="M16 16h5v5"/><circle cx="12" cy="12" r="1"/>',
        'square-mouse-pointer' => '<path d="M12.034 12.681a.498.498 0 0 1 .647-.647l9 3.5a.5.5 0 0 1-.033.943l-3.444 1.068a1 1 0 0 0-.66.66l-1.067 3.443a.5.5 0 0 1-.943.033z"/><path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6"/>',
        'receipt-percent' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 14.25 11.25 16.5 15 12.75m-6.75 2.25h.008v.008H8.25v-.008Zm.375-3.75h.008v.008H8.625v-.008Zm-.375 1.5h.008v.008H8.25v-.008ZM3 7.5V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V7.5l-2.25-1.5H5.25L3 7.5Z M8.625 12H15.75l-.75.75H9.375l-.75-.75Z M16.125 9H7.875m8.25 0-.375.375M7.875 9l.375.375" />',
        'calculator' => '<rect width="16" height="20" x="4" y="2" rx="2"/><line x1="8" x2="16" y1="6" y2="6"/><line x1="16" x2="16" y1="14" y2="18"/><circle cx="16" cy="10" r="0.3"/><circle cx="12" cy="10" r="0.3"/><circle cx="8" cy="10" r="0.3"/><circle cx="12" cy="14" r="0.3"/><circle cx="8" cy="14" r="0.3"/><circle cx="12" cy="18" r="0.3"/><circle cx="8" cy="18" r="0.3"/>'
    ];

    if (!isset($icons[$icon_name])) {
        return '';
    }

    return sprintf(
        '<svg class="lucide-icon lucide-%s" width="%s" height="%s" viewBox="0 0 24 24" fill="none" stroke="%s" stroke-width="1.5">%s</svg>',
        $icon_name,
        $size,
        $size,
        $color,
        $icons[$icon_name]
    );
}