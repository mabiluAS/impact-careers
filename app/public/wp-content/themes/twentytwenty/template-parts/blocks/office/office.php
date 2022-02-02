<?php

/**
 * Office Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create class attribute allowing for custom "className" and "align" values.
$className = 'office';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

<div class="<?php echo esc_attr($className); ?>">
    <?php if (have_rows('office')) : ?>
        <?php while (have_rows('office')) : ?>
        <blockquote class="office-blockquote">
            <span class="office-text"><?php get_sub_field('name'); ?></span>
            <span class="office-name"><?php get_sub_field('title'); ?></span>
        </blockquote>
        <div class="office-image">
            <?php echo wp_get_attachment_image(get_sub_field('image'), 'full' ); ?>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>