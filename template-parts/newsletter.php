<?php
if (!defined('ABSPATH')) exit;
?>

<section class="newsletter">
    <div class="container">
        <div class="newsletter-content">
            <h2><?php _e('Get Health Tips in Your Inbox', 'doorillio'); ?></h2>
            <p><?php _e('Join 50,000+ subscribers who receive our weekly health insights.', 'doorillio'); ?></p>
            <form class="newsletter-form" action="#" method="post">
                <input type="email" placeholder="<?php esc_attr_e('Your email address', 'doorillio'); ?>" required>
                <button type="submit"><?php _e('Subscribe', 'doorillio'); ?></button>
            </form>
            <small><?php _e('No spam. Unsubscribe anytime.', 'doorillio'); ?></small>
        </div>
    </div>
</section>
