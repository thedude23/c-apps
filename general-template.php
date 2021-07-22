<?php
/*
Template Name: General Template
*/
?>

<?php get_header( 'alt' ); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<div class="main-wrapper" style="background: linear-gradient(to right bottom, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: center; background-size: cover; z-index: -1 !important;">

    <!-- Title (optional) -->
    <?php //the_title( '<h2 class="entry-title">', '</h2>' ); ?>

    <!-- Needed for Gutenberg content -->
    <?php
        if ( have_posts() ) { 
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        }
    ?>

    

</div>

<?php get_footer( 'home' ); ?>
