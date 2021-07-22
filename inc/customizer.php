<?php
// Theme Customizer
function wp_customizer ( $wp_customize ) {
    // HERO section
    $wp_customize->add_section( 'hero', array(
        'title' => 'Hero'
    ) );

        // Heading 1
    $wp_customize->add_setting( 'hero_h-1', array(
        'type' => 'theme_mod',
        'default' => 'Many roads lead to your app',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_hero_h-1', array(
        'label' => 'Heading 1',
        'section' => 'hero', 
        'settings' => 'hero_h-1',
    ) ) );

        // Heading 2
    $wp_customize->add_setting( 'hero_h-2', array(
        'type' => 'theme_mod',
        'default' => 'APPMEA shows you the best one',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_hero_h-2', array(
        'label' => 'Heading 2',
        'section' => 'hero', 
        'settings' => 'hero_h-2',
    ) ) );

    // **************************************************** //
    // ABOUT APPMEA - General section
    $wp_customize->add_section( 'about-appmea', array(
        'title' => 'About Appmea - General',
        'description' => 'If (part of) text should work as a link, it should be written like this:
                <textarea cols="50" rows="3" readonly="true"><a href="LINK" target="blank" class="link-alternative-color">TEXT INSIDE LINK</a></textarea>'
    ) );

          // Paragraph 1
    $wp_customize->add_setting( 'about-appmea_p-1', array(
        'type' => 'theme_mod',
        'default' => 'APPMEA is a Styrian IT company, specialized in designing and developing modern mobile and web applications.',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_about-appmea_p-1', array(
        'label' => 'Paragraph 1',
        'section' => 'about-appmea', 
        'settings' => 'about-appmea_p-1',
    ) ) );

        // Paragraph 2
    $wp_customize->add_setting( 'about-appmea_p-2', array(
        'type' => 'theme_mod',
        'default' => 'It was in summer 2017 when four TU Graz students decided to pull together and combine their strengths.',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_about-appmea_p-2', array(
        'label' => 'Paragraph 2',
        'section' => 'about-appmea', 
        'settings' => 'about-appmea_p-2',
    ) ) );

        // Paragraph 3
    $wp_customize->add_setting( 'about-appmea_p-3', array(
        'type' => 'theme_mod',
        'default' => 'Already worked and grown together as part of an university spin-off before, they teamed up to found APPMEA.',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_about-appmea_p-3', array(
        'label' => 'Paragraph 3',
        'section' => 'about-appmea', 
        'settings' => 'about-appmea_p-3',
    ) ) );

        // Paragraph 4
    $wp_customize->add_setting( 'about-appmea_p-4', array(
        'type' => 'theme_mod',
        'default' => 'Not least because of the expertise, network and financial support of a styrian entrepreneur, an exceptional start was possible.',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_about-appmea_p-4', array(
        'label' => 'Paragraph 4',
        'section' => 'about-appmea', 
        'settings' => 'about-appmea_p-4',
    ) ) );

    // Paragraph 5
    $wp_customize->add_setting( 'about-appmea_p-5', array(
        'type' => 'theme_mod',
        'default' => 'Within a year APPMEA has increased the number of employees to 12 people. In 2020 APPMEA employs 21 people - an excellent mixture of graduates from different universities around Graz.',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_about-appmea_p-5', array(
        'label' => 'Paragraph 5',
        'section' => 'about-appmea', 
        'settings' => 'about-appmea_p-5',
    ) ) );

        // Paragraph 6
    $wp_customize->add_setting( 'about-appmea_p-6', array(
        'type' => 'theme_mod',
        'default' => 'Due to that growth APPMEA decided to move to a bigger office located <a href="https://www.google.at/maps/place/Appmea+GmbH/@47.0385415,15.4831321,17z/data=!3m1!4b1!4m5!3m4!1s0x476e357e8db57da9:0xf77aee21b1bfbd7a!8m2!3d47.0385415!4d15.4853261?shorturl=1" target="blank">near the Raaba Technopark</a> by the end of 2018.',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_about-appmea_p-6', array(
        'label' => 'Paragraph 6',
        'section' => 'about-appmea', 
        'settings' => 'about-appmea_p-6',
    ) ) );

    // Paragraph 7
    $wp_customize->add_setting( 'about-appmea_p-7', array(
        'type' => 'theme_mod',
        'default' => 'Also in 2018 APPMEA founded its subsidiary <a href="https://about.citiesapps.com/" target="blank" class="link-alternative-color">citiesapps S&R GmbH</a> and started the first large-scale project: The App <a href="https://about.citiesapps.com/" target="blank" class="link-alternative-color">Cities</a> was born. Cities is a complex, multifunctional software platform targeting the extensive regional requirements of cities, citizens, companies and associations.',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_about-appmea_p-7', array(
        'label' => 'Paragraph 7',
        'section' => 'about-appmea', 
        'settings' => 'about-appmea_p-7',
    ) ) );

        
    // **************************************************** //
    // ABOUT APPMEA - Our Services section
    $wp_customize->add_section( 'about-appmea_our-services', array(
        'title' => 'About Appmea - Our Services',
    ) );

    $wp_customize->add_setting( 'about-appmea_our-services-listing', array(
        'type' => 'theme_mod',
        'default' => '<li>Native mobile solutions for Android and iOS</li>
        <li>Modern web applications</li>
        <li>Scalable, high performance backend solutions</li>
        <li>Engaging and intuitive user experiences</li>
        <li>Personalised, pixel perfect user interfaces</li>
        <li>Perfectly suited corporate identities</li>',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_about-appmea_our-services-listing', array(
        'label' => 'Services',
        'section' => 'about-appmea_our-services', 
        'settings' => 'about-appmea_our-services-listing',
        'type' => 'textarea',
        'description' => 'As shown below, before every bulletpoint, it should be written <textarea readonly="true"><li></textarea>, and after <textarea readonly="true"></li></textarea>'
    ) ) );

    
    // **************************************************** //
    // JOBS section
    $wp_customize->add_section( 'jobs', array(
        'title' => 'Jobs',
    ) );
    
    // Job 1
        // Title
    $wp_customize->add_setting( 'jobs_title-1', array(
        'type' => 'theme_mod',
        'default' => 'iOS Developer',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_jobs-title-1', array(
        'label' => 'Job 1 title',
        'section' => 'jobs', 
        'settings' => 'jobs_title-1',
    ) ) );

        // Link
    $wp_customize->add_setting( 'jobs_link-1', array(
        'type' => 'theme_mod',
        'default' => 'https://www.appmea.com/docs/ios_0620.pdf',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_jobs-link-1', array(
        'label' => 'Job 1 link',
        'section' => 'jobs', 
        'settings' => 'jobs_link-1',
    ) ) );

        // Favicon
    $wp_customize->add_setting( 'jobs_fav-1', array(
        'type' => 'theme_mod',
        'default' => 'fab fa-apple',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_jobs-fav-1', array(
        'label' => 'Job 1 favicon',
        'section' => 'jobs', 
        'settings' => 'jobs_fav-1',
        'description' => 'Must be icon from FontAwesome (https://fontawesome.com/)'
    ) ) );

        // Description
    $wp_customize->add_setting( 'jobs_desc-1', array(
        'type' => 'theme_mod',
        'default' => '<li>Developing, extending and maintaining state of the art iOS applications</li>
        <li>Optimizing user experience according to UI/UX best practices</li>
        <li>Modernizing and reclaiming existing codebases</li>
        <li>Working as part of the team and participating in design/architecture decisions</li>',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_jobs-desc-1', array(
        'label' => 'Job 1 description',
        'section' => 'jobs', 
        'settings' => 'jobs_desc-1',
        'type' => 'textarea',       
        // 'description' => 'As shown below, before every bulletpoint, write <<code>li</code>>, and after <<code>/li</code>>.',
        'description' => 'As shown below, before every bulletpoint, it should be written <textarea readonly="true"><li></textarea>, and after <textarea readonly="true"></li></textarea>'
    ) ) );
    
    // Job 2
        // Title
    $wp_customize->add_setting( 'jobs_title-2', array(
        'type' => 'theme_mod',
        'default' => 'UX Designer',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_jobs-title-2', array(
        'label' => 'Job 2 title',
        'section' => 'jobs', 
        'settings' => 'jobs_title-2',
    ) ) );

        // Link
    $wp_customize->add_setting( 'jobs_link-2', array(
        'type' => 'theme_mod',
        'default' => 'https://www.appmea.com/docs/ux_0620.pdf',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_jobs-link-2', array(
        'label' => 'Job 2 link',
        'section' => 'jobs', 
        'settings' => 'jobs_link-2',
    ) ) );

        // Favicon
    $wp_customize->add_setting( 'jobs_fav-2', array(
        'type' => 'theme_mod',
        'default' => 'fas fa-paint-brush',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_jobs-fav-2', array(
        'label' => 'Job 2 favicon',
        'section' => 'jobs', 
        'settings' => 'jobs_fav-2',
    ) ) );

        // Description
    $wp_customize->add_setting( 'jobs_desc-2', array(
        'type' => 'theme_mod',
        'default' => '<li>User research, keeping up with the latest UX trends</li>
        <li>User testing, including analysis and presentation of findings</li>
        <li>Planning and moderating UX workshops with stakeholders</li>
        <li>Creation of wireframes, flowcharts, mockups and other common UX deliverables</li>',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_jobs-desc-2', array(
        'label' => 'Job 2 description',
        'section' => 'jobs', 
        'settings' => 'jobs_desc-2',
        'type' => 'textarea',
    ) ) );

    // Job 3
        // Title
        $wp_customize->add_setting( 'jobs_title-3', array(
            'type' => 'theme_mod',
            'default' => 'Android Developer',
        ) );

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_jobs-title-3', array(
            'label' => 'Job 3 title',
            'section' => 'jobs', 
            'settings' => 'jobs_title-3',
        ) ) );

        // Link
    $wp_customize->add_setting( 'jobs_link-3', array(
        'type' => 'theme_mod',
        'default' => 'https://www.appmea.com/docs/android_0620.pdf',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_jobs-link-3', array(
        'label' => 'Job 3 link',
        'section' => 'jobs', 
        'settings' => 'jobs_link-3',
    ) ) );

        // Favicon
    $wp_customize->add_setting( 'jobs_fav-3', array(
        'type' => 'theme_mod',
        'default' => 'fab fa-android',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_jobs-fav-3', array(
        'label' => 'Job 3 favicon',
        'section' => 'jobs', 
        'settings' => 'jobs_fav-3',
    ) ) );

        // Description
    $wp_customize->add_setting( 'jobs_desc-3', array(
        'type' => 'theme_mod',
        'default' => '<li>Developing, extending and maintaining state of the art Android applications</li>
        <li>Optimizing user experience according to UI/UX best practices</li>
        <li>Modernizing and reclaiming existing codebases</li>
        <li>Working as part of the team and participating in design/architecture decisions</li>',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_jobs-desc-3', array(
        'label' => 'Job 3 description',
        'section' => 'jobs', 
        'settings' => 'jobs_desc-3',
        'type' => 'textarea',
    ) ) );

    
    // **************************************************** //
    // RECENTLY ASSIGNED JOBS section
    $wp_customize->add_section( 'recent-jobs', array(
        'title' => 'Recently Assigned Jobs',
    ) );
    
    // Job 1
        // Title
    $wp_customize->add_setting( 'recent-jobs_title-1', array(
        'type' => 'theme_mod',
        'default' => 'Graphic-, Screen-, Web Designer',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_recent-jobs-title-1', array(
        'label' => 'Recent Job 1 title',
        'section' => 'recent-jobs', 
        'settings' => 'recent-jobs_title-1',
    ) ) );

        // Favicon
    $wp_customize->add_setting( 'recent-jobs_fav-1', array(
        'type' => 'theme_mod',
        'default' => 'fab fa-sketch',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_recent-jobs-fav-1', array(
        'label' => 'Recent Job 1 favicon',
        'section' => 'recent-jobs', 
        'settings' => 'recent-jobs_fav-1',
        'description' => 'Must be icon from FontAwesome (https://fontawesome.com/)'
    ) ) );

        // Job type
    $wp_customize->add_setting( 'recent-jobs_type-1', array(
        'type' => 'theme_mod',
        'default' => 'Part-time',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_recent-jobs-type-1', array(
        'label' => 'Recent Job 1 type',
        'section' => 'recent-jobs', 
        'settings' => 'recent-jobs_type-1',
    ) ) );

        // Start date
    $wp_customize->add_setting( 'recent-jobs_start-date-1', array(
        'type' => 'theme_mod',
        'default' => 'Joined our team on 07/01/20',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_recent-jobs_start-date-1', array(
        'label' => 'Recent Job 1 start date',
        'section' => 'recent-jobs', 
        'settings' => 'recent-jobs_start-date-1',
    ) ) );
    
    // Job 2
        // Title
        $wp_customize->add_setting( 'recent-jobs_title-2', array(
            'type' => 'theme_mod',
            'default' => 'React Developer',
        ) );
    
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_recent-jobs-title-2', array(
            'label' => 'Recent Job 2 title',
            'section' => 'recent-jobs', 
            'settings' => 'recent-jobs_title-2',
        ) ) );
    
            // Favicon
        $wp_customize->add_setting( 'recent-jobs_fav-2', array(
            'type' => 'theme_mod',
            'default' => 'fab fa-react',
        ) );
    
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_recent-jobs-fav-2', array(
            'label' => 'Recent Job 2 favicon',
            'section' => 'recent-jobs', 
            'settings' => 'recent-jobs_fav-2',
        ) ) );
    
            // Job type
        $wp_customize->add_setting( 'recent-jobs_type-2', array(
            'type' => 'theme_mod',
            'default' => 'Full-time',
        ) );
    
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_recent-jobs-type-2', array(
            'label' => 'Recent Job 2 type',
            'section' => 'recent-jobs', 
            'settings' => 'recent-jobs_type-2',
        ) ) );
    
            // Start date
        $wp_customize->add_setting( 'recent-jobs_start-date-2', array(
            'type' => 'theme_mod',
            'default' => 'Joined our team on 07/01/20',
        ) );
    
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_recent-jobs_start-date-2', array(
            'label' => 'Recent Job 2 start date',
            'section' => 'recent-jobs', 
            'settings' => 'recent-jobs_start-date-2',
        ) ) );

        // Job 3
            // Title
        $wp_customize->add_setting( 'recent-jobs_title-3', array(
            'type' => 'theme_mod',
            'default' => 'Backend .NET Developer',
        ) );
    
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_recent-jobs-title-3', array(
            'label' => 'Recent Job 3 title',
            'section' => 'recent-jobs', 
            'settings' => 'recent-jobs_title-3',
        ) ) );
    
            // Favicon
        $wp_customize->add_setting( 'recent-jobs_fav-3', array(
            'type' => 'theme_mod',
            'default' => 'fas fa-network-wired',
        ) );
    
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_recent-jobs-fav-3', array(
            'label' => 'Recent Job 3 favicon',
            'section' => 'recent-jobs', 
            'settings' => 'recent-jobs_fav-3',
        ) ) );
    
            // Job type
        $wp_customize->add_setting( 'recent-jobs_type-3', array(
            'type' => 'theme_mod',
            'default' => 'Full-time',
        ) );
    
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_recent-jobs-type-3', array(
            'label' => 'Recent Job 3 type',
            'section' => 'recent-jobs', 
            'settings' => 'recent-jobs_type-3',
        ) ) );
    
            // Start date
        $wp_customize->add_setting( 'recent-jobs_start-date-3', array(
            'type' => 'theme_mod',
            'default' => 'Joined our team on 07/01/20',
        ) );
    
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_recent-jobs_start-date-3', array(
            'label' => 'Recent Job 3 start date',
            'section' => 'recent-jobs', 
            'settings' => 'recent-jobs_start-date-3',
        ) ) );
        

    // **************************************************** //
    // OPEN MASTER THESES section
    $wp_customize->add_section( 'open-master-theses', array(
        'title' => 'Open Master Theses',
        'description' => 'If (part of) text should work as a link, it should be written like this:
                <textarea cols="50" rows="3" readonly="true"><a href="LINK" target="blank" class="link-alternative-color">TEXT INSIDE LINK</a></textarea>'
    ) );

          // Paragraph 1
    $wp_customize->add_setting( 'open-master-theses_p-1', array(
        'type' => 'theme_mod',
        'default' => 'Appmea is cooperating with the <a href="https://www.tugraz.at/home/" target="blank">University of Technology Graz</a> as well as with the <a href="https://www.uni-graz.at/de/" target="blank">Karl Franzens University Graz</a>.',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_open-master-theses_p-1', array(
        'label' => 'Paragraph 1',
        'section' => 'open-master-theses', 
        'settings' => 'open-master-theses_p-1',
    ) ) );

        // Paragraph 2
    $wp_customize->add_setting( 'open-master-theses_p-2', array(
        'type' => 'theme_mod',
        'default' => 'A part of the cooperation is the possibility to transact Master Theses.',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_open-master-theses_p-2', array(
        'label' => 'Paragraph 2',
        'section' => 'open-master-theses', 
        'settings' => 'open-master-theses_p-2',
    ) ) );

        // Paragraph 3
    $wp_customize->add_setting( 'open-master-theses_p-3', array(
        'type' => 'theme_mod',
        'default' => 'At the moment no theses are advertised.',
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_open-master-theses_p-3', array(
        'label' => 'Paragraph 3',
        'section' => 'open-master-theses', 
        'settings' => 'open-master-theses_p-3',
    ) ) );

    /*
    // Map
    $wp_customize->add_section( 'sec_map', array(
        'title' => 'Map',
        'description' => 'Map section'
    ) );
    
    // API Key
    $wp_customize->add_setting( 'set_map_apikey', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_attr' 
    ) );

    $wp_customize->add_control( 'ctrl_map_apikey', array(
        'label' => 'Google Maps API Key Information',
        'description' => 'Get your key <a href="https://console.developers.google.com/apis/credentials?project=wp-course-293210" target="blank">here</a>',
        'section' => 'sec_map',
        'settings' => 'set_map_apikey',
        'type' => 'text'
    ) );

    // Map Address
    $wp_customize->add_setting( 'set_map_address', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_textarea'
    ) );

    $wp_customize->add_control( 'ctrl_map_address', array(
        'label' => 'Type your address here',
        'description' => 'No special characters allowed',
        'section' => 'sec_map',
        'settings' => 'set_map_address',
        'type' => 'textarea'
    ) );
    */
}
add_action( 'customize_register', 'wp_customizer' );
