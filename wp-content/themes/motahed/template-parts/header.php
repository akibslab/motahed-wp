<?php

/**
 * Template part for displaying header layout two
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package motahed
 */




// header topbar 
$header_topbar_switch = get_theme_mod('header_topbar_switch', false);
$header_top_info = get_theme_mod('header_top_info', __('Free Home Delivery', 'motahed'));
$header_social_switcher = get_theme_mod('header_social_switcher', false);

$header_address = get_theme_mod('header_address', __('Moon ave, New York, 2020 NY US', 'motahed'));
$header_phone_number = get_theme_mod('header_phone_number', __('+(088) 234 567 899', 'motahed'));
$header_right_button_switch = get_theme_mod('header_right_button', false);
$header_right_button_text = get_theme_mod('header_right_button_text', __('Make Request', 'motahed'));
$header_right_button_link = get_theme_mod('header_right_button_link', __('#', 'motahed'));

$header_search_switch = get_theme_mod('header_search', false);
$header_lang = get_theme_mod('header_lang', false);

$motahed_menu_col = $header_search_switch ? 'col-xl-10 col-lg-10 col-md-6 col-6' : 'col-xl-12 col-lg-12 col-md-12 col-12';
?>

<!-- header-area-start -->
<header class="header__area">
  <?php if (!empty($header_topbar_switch)) : ?>
    <div class="header__top">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-between align-items-center">
            <div class="header-top__info">
              <p><?php esc_html_e($header_top_info, 'motahed'); ?></p>
            </div>
            <?php if (!empty($header_social_switcher)) : ?>
              <div class="header-top__socials">
                <?php motahed_header_socials(); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="header__middle">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-4 col-lg-3">
          <div class="header__logo">
            <?php motahed_header_logo(); ?>
          </div>
        </div>
        <div class="col-xl-8 col-lg-9">
          <div class="header-contact__info">
            <?php if (!empty($header_address)) : ?>
              <div class="header-contact__list">
                <div class="contact__icon">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="sm-clist__text">
                  <h4><?php echo esc_html($header_address); ?></h4>
                  <span><?php echo esc_html__('Contact Us', 'motahed'); ?></span>
                </div>
              </div>
            <?php endif;

            if (!empty($header_phone_number)) :
            ?>
              <div class="header-contact__list">
                <div class="contact__icon">
                  <i class="fas fa-phone-alt"></i>
                </div>
                <div class="sm-clist__text">
                  <h4><a href="tel:<?php echo esc_url($header_phone_number); ?>"><?php echo esc_html($header_phone_number); ?></a></h4>
                  <span><?php echo esc_html__('Get Support', 'motahed'); ?></span>
                </div>
              </div>
            <?php endif;

            if (!empty($header_right_button_switch)) :
            ?>
              <a href="<?php echo esc_url($header_right_button_link); ?>" class="header-contact__list header__button">
                <div class="sm-clist__text">
                  <span><?php echo esc_html__('Get A Quote', 'motahed'); ?></span>
                  <h4><?php echo esc_html($header_right_button_text); ?></h4>
                </div>
                <div class="contact__icon">
                  <i class="fal fa-long-arrow-right"></i>
                </div>
              </a>
            <?php endif; ?>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div id="header-sticky" class="header__bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="<?php echo esc_attr($motahed_menu_col) ?>">
          <div class="main-menu main-menu-2">
            <nav id="mobile-menu">
              <?php motahed_header_menu(); ?>
            </nav>
          </div>
        </div>
        <?php if (!empty($header_search_switch)) : ?>
          <div class="col-xl-2 col-lg-2 col-md-6 col-6">
            <div class="header__sm-action">
              <div class="header__sm-action-item">
                <a href="javascript:void(0)" data-bs-toggle="modal" class="search" data-bs-target="#search-modal"><i class="fal fa-search"></i></a>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>
<!-- header-area-end -->