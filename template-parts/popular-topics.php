<?php
if (!defined('ABSPATH')) exit;

$topics = array(
    array('name' => 'Weight Loss', 'slug' => 'weight-loss', 'count' => 158),
    array('name' => 'Healthy Recipes', 'slug' => 'healthy-recipes', 'count' => 142),
    array('name' => 'Mental Health', 'slug' => 'mental-health', 'count' => 98),
    array('name' => 'Natural Remedies', 'slug' => 'natural-remedies', 'count' => 87),
    array('name' => 'Exercise Tips', 'slug' => 'exercise-tips', 'count' => 76)
);
?>

<section class="popular-topics">
    <h2>📊 <?php _e('Popular Topics', 'doorillio'); ?></h2>
    <div class="topics-list">
        <?php foreach ($topics as $topic): ?>
            <a href="<?php echo get_term_link($topic['slug'], 'category'); ?>" class="topic-item">
                <span class="topic-name"><?php echo esc_html($topic['name']); ?></span>
                <span class="article-count"><?php printf(_n('%d article', '%d articles', $topic['count'], 'doorillio'), $topic['count']); ?></span>
            </a>
        <?php endforeach; ?>
    </div>
</section>
