<?php
if (!defined('ABSPATH')) exit;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('article-card animate-scale-in hover-scale'); ?>>
    <?php if (has_post_thumbnail()): ?>
        <div class="article-image">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>
    
    <div class="article-content">
        <div class="article-meta">
            <?php
            $categories = get_the_category();
            if ($categories) {
                echo '<span class="category">' . esc_html($categories[0]->name) . '</span>';
            }
            ?>
        </div>
        
        <h2 class="article-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        
        <div class="article-excerpt">
            <?php the_excerpt(); ?>
        </div>
        
        <div class="article-footer">
            <a href="<?php the_permalink(); ?>" class="read-more"><?php _e('Read More →', 'doorillio'); ?></a>
            <div class="share">
                <?php _e('Share:', 'doorillio'); ?>
                <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" class="share-link" target="_blank">𝕏</a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="share-link" target="_blank">f</a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" class="share-link" target="_blank">in</a>
            </div>
        </div>
    </div>
</article>
