<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Walid
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar navbar-expand-lg footer-menu">

    <div class="collapse navbar-collapse navbar-collapse-footer" id="navbarNavDropdown">
        <ul class="navbar-nav navbar-footer">
            <?= wp_nav_menu(['theme_location' => 'footer', 'walker' => new WP_Bootstrap_Navwalker(),]) ?>
            <div class="icon-footer">
                <?php if ( ! is_active_sidebar( 'sidebar-1' ) ) {
                return;
                }
                ?>

                <aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Main widget area', 'carbon' ); ?>">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </aside><!-- #secondary -->
            </div>
        </ul>
    </div>

</nav>
