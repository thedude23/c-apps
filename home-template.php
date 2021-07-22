<?php
/*
Template Name: Home Template
*/
?>

<div class="main-wrapper">

    <?php get_header( 'home' ); ?>

    <?php
        if ( have_posts() ) { 
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        }
    ?>

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- .Preloader -->

    <?php get_footer( 'home' ); ?>

</div>
