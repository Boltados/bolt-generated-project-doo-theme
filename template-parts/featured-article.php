<?php
if (!defined('ABSPATH')) exit;

$args = array(
    'posts_per_page' => 1,
    'meta_key' => '_is_featured',
    'meta_value' => 'yes'
);

$featured_query = new WP_Query($args);
?>

<?php if ($featured_query->have_posts()): while ($featured_query->have_posts()): $featured_query->the_post(); ?>
    <div class="featured-article">
        <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('large', array('class' => 'featured-image')); ?>
        <?php endif; ?>
        <div class="featured-content">
            <h2><?php the_title(); ?></h2>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
        </div>
    </div>
<?php endwhile; wp_reset_postdata(); endif; ?>
