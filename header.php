<?php
if (!defined('ABSPATH')) exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="container header-content">
        <?php
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            echo '<a href="' . esc_url(home_url('/')) . '" class="logo">';
            echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.svg" alt="' . get_bloginfo('name') . '">';
            echo '<span>' . get_bloginfo('name') . '</span></a>';
        }
        
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => 'nav',
            'container_class' => 'nav-menu',
            'menu_class'     => 'nav-links',
            'fallback_cb'    => false,
        ));
        ?>
    </div>
</header>
