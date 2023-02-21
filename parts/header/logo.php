<?php
$logo_id = get_field('page_logo', 'options');
$logo = wp_get_attachment_image( $logo_id, 'page-logo' );
$class_name = isset($class_name) ? $class_name : '';

if( $logo ): 
?>

<a href="<?php echo site_url(); ?>" class="logo">
    <?php echo $logo;?>
</a>

<?php
endif;
?>