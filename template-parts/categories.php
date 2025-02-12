<?php
if (!defined('ABSPATH')) exit;

$categories = array(
    array(
        'icon' => '🥗',
        'title' => __('Nutrition', 'doorillio'),
        'description' => __('Healthy eating tips and diet advice', 'doorillio')
    ),
    array(
        'icon' => '💪',
        'title' => __('Fitness', 'doorillio'),
        'description' => __('Workouts and exercise guides', 'doorillio')
    ),
    array(
        'icon' => '🧠',
        'title' => __('Mental Health', 'doorillio'),
        'description' => __('Tips for emotional well-being', 'doorillio')
    ),
    array(
        'icon' => '🌿',
        'title' => __('Wellness', 'doorillio'),
        'description' => __('Holistic health and lifestyle', 'doorillio')
    )
);
?>

<div class="categories">
    <?php foreach ($categories as $category): ?>
        <div class="category-card animate-scale-in hover-scale">
            <div class="category-icon"><?php echo $category['icon']; ?></div>
            <h3><?php echo $category['title']; ?></h3>
            <p><?php echo $category['description']; ?></p>
        </div>
    <?php endforeach; ?>
</div>
