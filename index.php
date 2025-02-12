<?php
get_header();
?>

<main>
    <?php if (is_home() && !is_paged()): ?>
        <?php get_template_part('template-parts/hero'); ?>
        <?php get_template_part('template-parts/categories'); ?>
        <?php get_template_part('template-parts/featured-article'); ?>
    <?php endif; ?>

    <section class="container main-content">
        <div class="content-grid">
            <div class="main-column">
                <?php if (have_posts()): ?>
                    <div class="latest-articles">
                        <div class="section-header">
                            <h2><?php _e('Latest Articles', 'doorillio'); ?></h2>
                            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="view-all">
                                <?php _e('View All Articles →', 'doorillio'); ?>
                            </a>
                        </div>
                        <div class="articles-grid">
                            <?php
                            while (have_posts()): the_post();
                                get_template_part('template-parts/content', get_post_type());
                            endwhile;
                            ?>
                        </div>
                    </div>
                    <?php the_posts_pagination(); ?>
                <?php else: ?>
                    <?php get_template_part('template-parts/content', 'none'); ?>
                <?php endif; ?>
            </div>
            
            <aside class="sidebar">
                <?php get_template_part('template-parts/trending-now'); ?>
                <?php get_template_part('template-parts/popular-topics'); ?>
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </section>

    <?php get_template_part('template-parts/newsletter'); ?>
</main>

<?php
get_footer();
