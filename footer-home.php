<footer class="footer u-center-text">
    <!-- Logo -->
    <div class="logo-footer">
        <img src="<?php echo get_template_directory_uri(); ?>/img/appmea_white.png" alt="logo-img" />
    </div>
    <!-- .Logo -->

    <!-- Contact info -->
    <div class="container">
        <div class="social-icons" id="contact">
            <a href="https://www.facebook.com/appmea" target="blank"><i class="fab fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/appmeaofficial/" target="blank"><i class="fab fa-instagram-square"></i></a>
            <a href="https://www.linkedin.com/company/appmea" target="blank"><i class="fab fa-linkedin"></i></a>
        </div>

        <div class="contact">
            <div class="contact__phone">
                <a href="tel:+43 664 2305410">
                    <div><i class="fas fa-phone"></i></div>
                    <div><h3 class="h3"><?php _e('Phone', 'custom_theme'); ?></h3></div>
                    <div><p><?php _e('+43 664 2305410', 'custom_theme'); ?></p></div>
                </a>
            </div>
            <div class="contact__email">
                <a href="mailto:office@appmea.com">
                    <div><i class="fas fa-envelope"></i></div>
                    <div><h3 class="h3"><?php _e('Email', 'custom_theme'); ?></h3></div>
                    <div><p>office@appmea.com</p></div>
                    <div><input type="button" class="main-btn" value="<?php _e('Send Mail', 'custom_theme'); ?>"></div>
                </a>
            </div>
            <div class="contact__address">
                <a href="https://goo.gl/maps/ys5wJ8Zb6v82" target="blank">
                    <div><i class="fas fa-map-marker"></i></div>
                    <div><h3 class="h3"><?php _e('Address', 'custom_theme'); ?></h3></div>
                    <div><p>Köglerweg 25</p></div>
                    <div><p>A-8042 Graz</p></div>
                </a>
            </div>
        </div>
    </div>
    <!-- .Contact info -->

    <!-- Impressum -->
    <div class="impressum">
        <div class="container">
            <p><a href="<?php echo get_permalink( get_page_by_path( 'impressum' ) ); ?>"><?php _e('Impressum', 'custom_theme'); ?></a></p>
        </div>
    </div>
    <!-- .Impressum -->

    <!-- Privacy Policy -->
    <div class="privacy-policy">
        <div class="container">
            <p><a href="<?php echo get_permalink( get_page_by_path( 'privacy-policy' ) ); ?>"><?php _e('Privacy Policy (only in German)', 'custom_theme'); ?></a></p>
        </div>
    </div>
    <!-- .Privacy Policy -->

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <p><?php _e('Copyright © 2020 by APPMEA GmbH. All Rights Reserved. Photography by <a target="_top" href="mailto:singer-andrea@hotmail.com">Andrea Singer</a>.', 'custom_theme'); ?></p>
        </div>
    </div>
    <!-- .Copyright -->

    <!-- FB like (with share) plugin -->
    <!-- <div class="fb-like-plugin">
        <div class="container">
            <div class="fb-like" data-href="https://www.appmea.com/" data-width="" data-layout="box_count" data-action="like" data-size="small" data-share="true"></div>
        </div>
    </div> -->
    <!-- .FB like (with share) plugin -->
</footer>

<?php wp_footer( 'home' ); ?>
</body>
</html>