<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
    <!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <?php wp_head(); ?>

    </head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="logo-wk">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                </a>
            </div>
            <ul class="navbar-nav">
                <?= wp_nav_menu(['theme_location' => 'main', 'walker' => new WP_Bootstrap_Navwalker(),]) ?>
            </ul>
        </div>
    </nav>

<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('
<p id="breadcrumbs">', '</p>
');
}
?>