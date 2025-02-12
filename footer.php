<?php
if (!defined('ABSPATH')) exit;
?>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>">
                    <span><?php bloginfo('name'); ?></span>
                </a>
                <p><?php bloginfo('description'); ?></p>
                <div class="social-links">
                    <?php if (get_theme_mod('social_twitter')): ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_twitter')); ?>" class="social-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social/twitter.svg" alt="Twitter">
                        </a>
                    <?php endif; ?>
                    <!-- Add other social links similarly -->
                </div>
            </div>
            
            <div class="footer-links">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-1',
                    'container'      => 'div',
                    'container_class' => 'footer-section',
                    'fallback_cb'    => false,
                ));
                ?>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('All rights reserved.', 'doorillio'); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
