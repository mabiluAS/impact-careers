<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'office-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'office';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('name') ?: 'Your name here...';
$author = get_field('author') ?: 'Author name';
$role = get_field('role') ?: 'Author role';
$image = get_field('image') ?: 295;
$background_color = get_field('background_color');
$text_color = get_field('text_color');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <blockquote class="office-blockquote">
        <span class="office-name"><?php echo $text; ?></span>
        <span class="office-author"><?php echo $author; ?></span>
        <span class="office-role"><?php echo $role; ?></span>
    </blockquote>
    <div class="office-image">
        <?php echo wp_get_attachment_image( $image, 'full' ); ?>
    </div>
    <style type="text/css">
        #<?php echo $id; ?> {
            background: <?php echo $background_color; ?>;
            color: <?php echo $text_color; ?>;
        }
    </style>
</div>