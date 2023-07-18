<?php

/**
 * motahed_scripts description
 * @return [type] [description]
 */
function motahed_scripts() {

    /**
     * all css files
     */

    wp_enqueue_style('motahed-fonts', motahed_fonts_url(), [], '1.0.0');

    if (is_rtl()) {
        wp_enqueue_style('bootstrap-rtl', MOTAHED_THEME_CSS_DIR . 'bootstrap.rtl.min.css', []);
    } else {
        wp_enqueue_style('bootstrap', MOTAHED_THEME_CSS_DIR . 'bootstrap.min.css', []);
    }
    wp_enqueue_style('font-awesome-pro', MOTAHED_THEME_CSS_DIR . 'font-awesome-pro.css', []);
    wp_enqueue_style('nice-select', MOTAHED_THEME_CSS_DIR . 'nice-select.css', []);
    wp_enqueue_style('motahed-core', MOTAHED_THEME_CSS_DIR . 'motahed-core.css', []);
    wp_enqueue_style('motahed-unit', MOTAHED_THEME_CSS_DIR . 'motahed-unit.css', []);
    wp_enqueue_style('motahed-responsive', MOTAHED_THEME_CSS_DIR . 'motahed-responsive.css', []);
    wp_enqueue_style('motahed-custom', MOTAHED_THEME_CSS_DIR . 'motahed-custom.css', []);
    wp_enqueue_style('motahed-style', get_stylesheet_uri());

    // all js
    wp_enqueue_script('bootstrap-bundle', MOTAHED_THEME_JS_DIR . 'bootstrap.bundle.min.js', ['jquery'], '', true);
    wp_enqueue_script('nice-select', MOTAHED_THEME_JS_DIR . 'nice-select.js', ['jquery'], '', true);
    wp_enqueue_script('motahed-main', MOTAHED_THEME_JS_DIR . 'main.js', ['jquery'], false, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'motahed_scripts');

/*
Register Fonts
 */
function motahed_fonts_url() {
    $font_url = '';
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Google font: on or off', 'motahed')) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap';
    }
    return $font_url;
}
