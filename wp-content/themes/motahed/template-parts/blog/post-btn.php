<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package motahed
 */

$motahed_blog_btn = get_theme_mod('motahed_blog_btn', 'Read More');
$motahed_blog_btn_switch = get_theme_mod('motahed_blog_btn_switch', true);

?>

<?php if (!empty($motahed_blog_btn_switch)) : ?>
    <div class="ss-post__btn">
        <a href="<?php the_permalink(); ?>" class="ss-btn"><?php print esc_html($motahed_blog_btn); ?></a>
    </div>
<?php endif; ?>