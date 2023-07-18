<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package motahed
 */

/**
 * [motahed_header_lang description]
 * @return [type] [description]
 */
function motahed_header_lang_default() {
    $motahed_header_lang = get_theme_mod('header_lang', false);
    if ($motahed_header_lang) : ?>

        <select>
            <option><a href="javascript:void(0)" class="lang__btn"><?php print esc_html__('English', 'motahed'); ?> </a></option>
            <?php do_action('motahed_language'); ?>
        </select>

    <?php endif; ?>
<?php
}

/**
 * [motahed_language_list description]
 * @return [type] [description]
 */
function _motahed_language($mar) {
    return $mar;
}
function motahed_language_list() {

    $mar = '';
    $languages = apply_filters('wpml_active_languages', NULL, 'orderby=id&order=desc');

    if (!empty($languages)) {
        $mar = '<ul>';
        foreach ($languages as $lan) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<option>' . esc_html__('Bangla', 'motahed') . '</option>';
        $mar .= '<option>' . esc_html__('French', 'motahed') . '</option>';
    }
    print _motahed_language($mar);
}
add_action('motahed_language', 'motahed_language_list');


// Header logo
function motahed_header_logo() { ?>
    <?php
    // site logo
    $motahed_logo = get_template_directory_uri() . '/assets/img/logo/logo-black.png';
    $motahed_site_logo = get_theme_mod('site_logo', $motahed_logo);
    ?>

    <a class="site__logo" href="<?php print esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($motahed_site_logo); ?>" alt="<?php print esc_attr__('logo', 'motahed'); ?>" />
    </a>
<?php
}

// Header sticky logo
function motahed_header_sticky_logo() { ?>
    <?php
    $motahed_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-black.png';
    $motahed_secondary_logo = get_theme_mod('secondary_logo', $motahed_logo_black);
    ?>
    <a class="sticky-logo" href="<?php print esc_url(home_url('/')); ?>">
        <img src="<?php print esc_url($motahed_secondary_logo); ?>" alt="<?php print esc_attr__('logo', 'motahed'); ?>" />
    </a>
    <?php
}

// Header Mobile Logo
function motahed_mobile_logo() {
    // side info
    $motahed_mobile_logo_hide = get_theme_mod('motahed_mobile_logo_hide', false);

    $motahed_site_logo = get_theme_mod('primary_logo', get_template_directory_uri() . '/assets/img/logo/logo-white.png');

    if (!empty($motahed_mobile_logo_hide)) : ?>
        <div class="side__logo mb-25">
            <a class="sideinfo-logo" href="<?php print esc_url(home_url('/')); ?>">
                <img src="<?php print esc_url($motahed_site_logo); ?>" alt="<?php print esc_attr__('logo', 'motahed'); ?>" />
            </a>
        </div>
    <?php endif;
}

/**
 * [motahed_header_socials description]
 * @return [type] [description]
 */
function motahed_header_socials() {
    $header_fb_link = get_theme_mod('header_fb_link', __('https://facebook.com/', 'motahed'));
    $header_ig_link = get_theme_mod('header_ig_link', __('https://instagram.com/', 'motahed'));
    $header_linkedin_link = get_theme_mod('header_linkedin_link', __('https://linkedin.com/', 'motahed'));
    $header_twitter_link = get_theme_mod('header_twitter_link', __('https://twitter.com/', 'motahed'));
    $header_pinterest_link = get_theme_mod('header_pinterest_link', __('https://pinterest.com/', 'motahed'));
    $header_youtube_link = get_theme_mod('header_youtube_link', __('https://youtube.com/', 'motahed'));


    if (!empty($header_fb_link)) : ?>
        <a href="<?php echo esc_url($header_fb_link); ?>"><i class="fab fa-facebook-f"></i></a>
    <?php endif;
    if (!empty($header_ig_link)) : ?>
        <a href="<?php echo esc_url($header_ig_link); ?>"><i class="fab fa-instagram"></i></a>
    <?php endif;
    if (!empty($header_linkedin_link)) : ?>
        <a href="<?php echo esc_url($header_linkedin_link); ?>"><i class="fab fa-linkedin-in"></i></a>
    <?php endif;
    if (!empty($header_twitter_link)) : ?>
        <a href="<?php echo esc_url($header_twitter_link); ?>"><i class="fab fa-twitter"></i></a>
    <?php endif;
    if (!empty($header_pinterest_link)) : ?>
        <a href="<?php echo esc_url($header_pinterest_link); ?>"><i class="fab fa-pinterest"></i></a>
    <?php endif;
    if (!empty($header_youtube_link)) : ?>
        <a href="<?php echo esc_url($header_youtube_link); ?>"><i class="fab fa-youtube"></i></a>
    <?php endif;
}

function motahed_footer_socials() {
    $motahed_footer_fb_link = get_theme_mod('footer_fb_link', __('#', 'motahed'));
    $motahed_footer_twitter_link = get_theme_mod('footer_twitter_link', __('#', 'motahed'));
    $motahed_footer_instagram_link = get_theme_mod('footer_instagram_link', __('#', 'motahed'));
    $motahed_footer_linkedin_link = get_theme_mod('footer_linkedin_link', __('#', 'motahed'));
    $motahed_footer_youtube_link = get_theme_mod('footer_youtube_link', __('#', 'motahed'));
    ?>
    <ul>
        <?php if (!empty($motahed_footer_fb_link)) : ?>
            <li>
                <a href="<?php print esc_url($motahed_footer_fb_link); ?>">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($motahed_footer_twitter_link)) : ?>
            <li>
                <a href="<?php print esc_url($motahed_footer_twitter_link); ?>">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($motahed_footer_instagram_link)) : ?>
            <li>
                <a href="<?php print esc_url($motahed_footer_instagram_link); ?>">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($motahed_footer_linkedin_link)) : ?>
            <li>
                <a href="<?php print esc_url($motahed_footer_linkedin_link); ?>">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($motahed_footer_youtube_link)) : ?>
            <li>
                <a href="<?php print esc_url($motahed_footer_youtube_link); ?>">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        <?php endif; ?>
    </ul>
<?php
}

/**
 * [motahed_header_menu description]
 * @return [type] [description]
 */
function motahed_header_menu() {

    wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'Motahed_Navwalker_Class::fallback',
        'walker'         => new Motahed_Navwalker_Class,
    ]);
}

/**
 * [motahed_header_menu description]
 * @return [type] [description]
 */
function motahed_mobile_menu() {

    $motahed_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'        => 'mobile-menu-active',
        'echo'           => false,
    ]);

    $motahed_menu = str_replace("menu-item-has-children", "menu-item-has-children has-children", $motahed_menu);
    echo wp_kses_post($motahed_menu);
?>
<?php
}

/**
 * [motahed_footer_menu description]
 * @return [type] [description]
 */
function motahed_footer_menu() {
    wp_nav_menu([
        'theme_location' => 'footer-menu',
        'menu_class'     => 'm-0',
        'container'      => '',
        'fallback_cb'    => 'Motahed_Navwalker_Class::fallback',
        'walker'         => new Motahed_Navwalker_Class,
    ]);
}
// motahed_copyright_text
function motahed_copyright_text() {
    print get_theme_mod('motahed_copyright', motahed_kses('© 2022 motahed, All Rights Reserved. Design By <a href="#">SecureSofts</a>'));
}


/**
 *
 * pagination
 */
if (!function_exists('motahed_pagination')) {

    function _motahed_pagi_callback($pagination) {
        return $pagination;
    }

    //page navigation
    function motahed_pagination($prev, $next, $pages, $args) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if (!$pages) {
                $pages = 1;
            }
        }

        $pagination = [
            'base'      => add_query_arg('paged', '%#%'),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ($wp_rewrite->using_permalinks()) {
            $pagination['base'] = user_trailingslashit(trailingslashit(remove_query_arg('s', get_pagenum_link(1))) . 'page/%#%/', 'paged');
        }

        if (!empty($wp_query->query_vars['s'])) {
            $pagination['add_args'] = ['s' => get_query_var('s')];
        }

        $pagi = '';
        if (paginate_links($pagination) != '') {
            $paginations = paginate_links($pagination);
            $pagi .= '<ul>';
            foreach ($paginations as $key => $pg) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _motahed_pagi_callback($pagi);
    }
}


// header top bg color
function motahed_breadcrumb_bg_color() {
    $color_code = get_theme_mod('motahed_breadcrumb_bg_color', '#222');
    wp_enqueue_style('motahed-custom', MOTAHED_THEME_CSS_DIR . 'motahed-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-bg.gray-bg{ background: " . $color_code . "}";

        wp_add_inline_style('motahed-breadcrumb-bg', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'motahed_breadcrumb_bg_color');

// breadcrumb-spacing top
function motahed_breadcrumb_spacing() {
    $padding_px = get_theme_mod('motahed_breadcrumb_spacing', '160px');
    wp_enqueue_style('motahed-custom', MOTAHED_THEME_CSS_DIR . 'motahed-custom.css', []);
    if ($padding_px != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-top: " . $padding_px . "}";

        wp_add_inline_style('motahed-breadcrumb-top-spacing', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'motahed_breadcrumb_spacing');

// breadcrumb-spacing bottom
function motahed_breadcrumb_bottom_spacing() {
    $padding_px = get_theme_mod('motahed_breadcrumb_bottom_spacing', '160px');
    wp_enqueue_style('motahed-custom', MOTAHED_THEME_CSS_DIR . 'motahed-custom.css', []);
    if ($padding_px != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-bottom: " . $padding_px . "}";

        wp_add_inline_style('motahed-breadcrumb-bottom-spacing', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'motahed_breadcrumb_bottom_spacing');

// scrollUp
function motahed_scrollup_switch() {
    $scrollup_switch = get_theme_mod('motahed_scrollup_switch', false);
    wp_enqueue_style('motahed-custom', MOTAHED_THEME_CSS_DIR . 'motahed-custom.css', []);
    if ($scrollup_switch) {
        $custom_css = '';
        $custom_css .= "#scrollUp{ display: none !important;}";

        wp_add_inline_style('motahed-scrollup-switch', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'motahed_scrollup_switch');

// theme custom color
function motahed_custom_color() {
    $color_code = get_theme_mod('motahed_color_option', '#2b4eff');
    wp_enqueue_style('motahed-custom', MOTAHED_THEME_CSS_DIR . 'motahed-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".demo-class { border-color: " . $color_code . "}";
        $custom_css .= ".demo-class { border-left-color: " . $color_code . "}";
        $custom_css .= ".demo-class { stroke: " . $color_code . "}";
        $custom_css .= ".demo-class { border-color: " . $color_code . "}";
        wp_add_inline_style('motahed-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'motahed_custom_color');


// theme primary color
function motahed_custom_color_primary() {
    $color_code = get_theme_mod('motahed_color_option_2', '#f2277e');
    wp_enqueue_style('motahed-custom', MOTAHED_THEME_CSS_DIR . 'motahed-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".demo-class { border-left-color: " . $color_code . "}";
        wp_add_inline_style('motahed-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'motahed_custom_color_primary');

// theme scrollUp color
function motahed_custom_color_scrollup() {
    $color_code = get_theme_mod('motahed_color_scrollup', '#2b4eff');
    wp_enqueue_style('motahed-custom', MOTAHED_THEME_CSS_DIR . 'motahed-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { color: " . $color_code . "}";
        $custom_css .= ".demo-class { stroke: " . $color_code . "}";
        wp_add_inline_style('motahed-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'motahed_custom_color_scrollup');

// theme secondary color
function motahed_custom_color_secondary() {
    $color_code = get_theme_mod('motahed_color_option_3', '#30a820');
    wp_enqueue_style('motahed-custom', MOTAHED_THEME_CSS_DIR . 'motahed-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".asdf { border-color: " . $color_code . "}";
        wp_add_inline_style('motahed-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'motahed_custom_color_secondary');

// theme secondary 2 color
function motahed_custom_color_secondary_2() {
    $color_code = get_theme_mod('motahed_color_option_3_2', '#ffb352');
    wp_enqueue_style('motahed-custom', MOTAHED_THEME_CSS_DIR . 'motahed-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".demo-class { border-color: " . $color_code . "}";
        wp_add_inline_style('motahed-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'motahed_custom_color_secondary_2');


// motahed_kses_intermediate
function motahed_kses_intermediate($string = '') {
    return wp_kses($string, motahed_get_allowed_html_tags('intermediate'));
}

function motahed_get_allowed_html_tags($level = 'basic') {
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}

// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function motahed_kses($raw) {

    $allowed_tags = array(
        'a'                         => array(
            'class'   => array(),
            'href'    => array(),
            'rel'  => array(),
            'title'   => array(),
            'target' => array(),
        ),
        'abbr'                      => array(
            'title' => array(),
        ),
        'b'                         => array(),
        'blockquote'                => array(
            'cite' => array(),
        ),
        'cite'                      => array(
            'title' => array(),
        ),
        'code'                      => array(),
        'del'                    => array(
            'datetime'   => array(),
            'title'      => array(),
        ),
        'dd'                     => array(),
        'div'                    => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
        ),
        'dl'                     => array(),
        'dt'                     => array(),
        'em'                     => array(),
        'h1'                     => array(),
        'h2'                     => array(),
        'h3'                     => array(),
        'h4'                     => array(),
        'h5'                     => array(),
        'h6'                     => array(),
        'i'                         => array(
            'class' => array(),
        ),
        'img'                    => array(
            'alt'  => array(),
            'class'   => array(),
            'height' => array(),
            'src'  => array(),
            'width'   => array(),
        ),
        'li'                     => array(
            'class' => array(),
        ),
        'ol'                     => array(
            'class' => array(),
        ),
        'p'                         => array(
            'class' => array(),
        ),
        'q'                         => array(
            'cite'    => array(),
            'title'   => array(),
        ),
        'span'                      => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
        ),
        'iframe'                 => array(
            'width'         => array(),
            'height'     => array(),
            'scrolling'     => array(),
            'frameborder'   => array(),
            'allow'         => array(),
            'src'        => array(),
        ),
        'strike'                 => array(),
        'br'                     => array(),
        'strong'                 => array(),
        'data-wow-duration'            => array(),
        'data-wow-delay'            => array(),
        'data-wallpaper-options'       => array(),
        'data-stellar-background-ratio'   => array(),
        'ul'                     => array(
            'class' => array(),
        ),
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'g'     => array('fill' => true),
        'title' => array('title' => true),
        'path'  => array('d' => true, 'fill' => true,),
    );

    if (function_exists('wp_kses')) { // WP is here
        $allowed = wp_kses($raw, $allowed_tags);
    } else {
        $allowed = $raw;
    }

    return $allowed;
}



// Allow SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

    global $wp_version;
    if ($wp_version !== '4.7.1') {
        return $data;
    }

    $filetype = wp_check_filetype($filename, $mimes);

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);

function tp_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'tp_mime_types');
