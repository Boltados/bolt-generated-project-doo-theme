<?php
if (!defined('ABSPATH')) exit;

$args = array(
    'posts_per_page' => 3,
    'meta_key' => 'post_views',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
);

$trending_query = new WP_Query($args);
?>

<section class="trending-now">
    <h2>🔥 <?php _e('Trending Now', 'doorillio'); ?></h2>
    <div class="trending-list">
        <?php if ($trending_query->have_posts()): $count = 1; while ($trending_query->have_posts()): $trending_query->the_post(); ?>
            <div class="trending-item">
                <span class="trending-number"><?php echo $count++; ?></span>
                <div class="trending-content">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="trending-meta">
                        <span><?php echo get_post_meta(get_the_ID(), 'post_views', true); ?> views</span>
                        <span>•</span>
                        <span><?php echo get_the_date(); ?></span>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</section>
