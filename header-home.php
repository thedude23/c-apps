<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- <html lang="en"> -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"> <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?php //wp_title(); ?></title> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

    <!-- Desktop header -->
    <header class="header-desktop header">
        <!-- Logo -->
        <a href="<?php echo get_home_url(); ?>">
            <div class="logo">
            </div>
        </a>
        <!-- <div class="logo">
            <a href="<?php //echo get_home_url(); ?>">
                <img src="<?php //echo get_template_directory_uri(); ?>/img/appmea_verlauf.png" id="logo" alt="logo-img" /> 
            </a>
        </div> -->

        <!-- Main/top navigation -->
        <div class="main-nav">
            <nav>
                <?php wp_nav_menu( array( 
                    'theme_location' => 'my_main_menu-#'
                    ) ); 
                ?>
            </nav>
        </div>
    </header>
    <!-- .Desktop header -->

    <!-- Mobile/Tablet header -->
    <header class="header-mobile header">
        <!-- Logo -->
        <a href="<?php echo get_home_url(); ?>">
            <div class="logo-2">
            </div>
        </a>

        <!-- Hamburger (tablets and mobiles only) -->
        <div class="hamburger" onclick="displayNavM();">
            <span></span>
        </div>

        <!-- Main/top navigation -->
        <div class="main-nav-mobile">
            <nav>
                <?php wp_nav_menu( array( 'theme_location' => 'my_main_menu-#' ) ); ?>
            </nav>
        </div>
    </header>
    <!-- .Mobile/Tablet header -->