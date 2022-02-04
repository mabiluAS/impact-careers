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

$count_array = get_job_count();
$count = 0;
?>

<div class="<?php echo esc_attr($className); ?>">
    <?php  if (have_rows('offices')) : ?>
        
        <?php while (have_rows('offices')) : the_row() ?>
        
        <div>
            <a href="/job-overview"><h5 class="office-text"><?php the_sub_field('name'); ?> </h5></a>
        </div>
                
        <div class="office-image">
            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="">
        </div>
        <blockquote class="office-blockquote">
        <span class="office-position">Positions Available: <?php echo $count_array[$count][get_sub_field('name')]; ?> </span>
        </blockquote>
        <?php $count++; ?>
        <?php  endwhile;        
        ?>
    <?php endif; ?>
</div>

<?php 

