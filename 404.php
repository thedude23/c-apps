<?php get_header( 'alt' ); ?>

<div class="page-g u-center-text Xu-subsection-spacer-top u-section-spacer-page" Xstyle="height: 100vh; Xmargin-top: -2.5rem !important;">
	<div class="container error-message">
		<h2 class="h2"><?php _e('Oops!', 'custom_theme'); ?></h2>
		<h3 class="h3"><?php _e("We can't seem to find the page you're looking for.", "custom_theme"); ?></h3>
		<p><?php _e('Go back to', 'custom_theme'); ?></h3> &nbsp;<a href="<?php echo get_home_url(); ?>" class="main-btn"><?php _e('Home', 'custom_theme'); ?></a></p>
	</div>
</div>

<?php get_footer( 'empty' ); ?>
