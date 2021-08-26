<?php

/*********************************************************************************************
 *
 *  Page settings
 *
 *********************************************************************************************/

$this->sections[] = array(
    // 'icon'      => 'dashicons dashicons-clipboard',
    'icon'      => plugins_url( 'assets/images/page-setting.svg', __FILE__ ),
    'title'     => __('Page Settings', 'redux-framework-demo'),
    'fields'    => array(
	    array (
            'id' => 'pagetitle_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>You can tailor the experience of using "Page Settings." to suit your own  needs.</h3>',
        ),
        array (
            'id' => 'page_100_width',
            'type' => 'switch',
            'title' =>  __('Page Wide Layout', 'redux-framework-demo'),
            'subtitle'  => __('Set the page layout to 100% of browser width.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to set the page layout to 100% width of browser and <strong>NO</strong> to take default width. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('page_100_width_class'),
            'hint' => array(
                'title'   => __('What is page wide layout?','redux-framework-demo'),
                'content' => __('Page wide layout means, the header area exactly equal to the explicit width of the browser.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_top_area_enable',
            'type' => 'switch',
            'title' =>  __('Show Page Top Area', 'redux-framework-demo'),
            'subtitle'  => __('Enable the page top area', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the further options to customize page top area and <strong>NO</strong> to hide the page top area. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('page_top_area'),
            'required' => array(),
            'hint' => array(
                'title'   => __('What is page top area?','redux-framework-demo'),
                'content' => __('Top area of a website includes all the things which are placed just above the page top content section and below the header area.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_top_area_100_width',
            'type' => 'switch',
            'title' =>  __('Page Top Area Wide Layout', 'redux-framework-demo'),
            'subtitle'  => __('Set the page top area layout to 100% of browser width.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to set the page top area layout to 100% width of browser and <strong>NO</strong> to take default width. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('page_top_area_100_width_class'),
            'required' => array('page_top_area_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is page top area wide layout?','redux-framework-demo'),
                'content' => __('Page top area wide layout means, the page top area exactly equal to the explicit width of the browser.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_top_area_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Page Top Area', 'redux-framework-demo'),
            'subtitle'  => __('Personalize the page top area', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> for more options to customize the style of page top area. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('page_top_area_enable','equals','1'),
            'hint' => array(
                'title'   => __('How to customize the page top area?','redux-framework-demo'),
                'content' => __('Customize page top area means you can change the properties of top area, for example change top area background color, top area heading color, top area text color, top area link color, top area link hover color according to the requirement of user.','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'page_top_area_background_color',
            'type'     => 'color',
            'title'    => __('Page Top Area Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a background color for page top area.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for page top area background color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333333',
            'validate' => 'color',
            'required' => array('page_top_area_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_top_area_heading_color',
            'type'     => 'color',
            'title'    => __('Page Top Area Heading Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a heading color for page top area', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for top area heading color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('page_top_area_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_top_area_text_color',
            'type'     => 'color',
            'title'    => __('Page Top Area Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a text color for page top area', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for top area text color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('page_top_area_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_top_area_link_color',
            'type'     => 'color',
            'title'    => __('Page Top Area Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link color for page top area.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for top area link color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('page_top_area_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_top_area_link_hover_color',
            'type'     => 'color',
            'title'    => __('Page Top Area Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link hover color for page top area.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for top area link hover color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('page_top_area_customize_enable','equals','1'),   
        ),
        array (
            'id' => 'page_bottom_area_enable',
            'type' => 'switch',
            'title' =>  __('Show Page Bottom Area', 'redux-framework-demo'),
            'subtitle'  => __('Enable the page bottom area', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the further options to customize page bottom area and <strong>NO</strong> to hide the page bottom area. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('page_bottom_area'),
            'required' => array(),
            'hint' => array(
                'title'   => __('What is page bottom area?','redux-framework-demo'),
                'content' => __('Bottom area of a website includes all the things which are placed below the main content section and above the footer area.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_bottom_area_100_width',
            'type' => 'switch',
            'title' =>  __('Page bottom Area Wide Layout', 'redux-framework-demo'),
            'subtitle'  => __('Set the page bottom area to 100% of browser width.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to set the page bottom area to 100% width of browser and <strong>NO</strong> to take default width. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('page_bottom_area_100_width_class'),
            'required' => array('page_bottom_area_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is page bottom wide layout?','redux-framework-demo'),
                'content' => __('Page bottom area wide layout means, the bottom area exactly equal to the explicit width of the browser.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_padding_enable',
            'type' => 'switch',
            'title' =>  __('Show Page Padding', 'redux-framework-demo'),
            'subtitle'  => __('Enable the page padding', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the page padding and <strong>NO</strong> to hide the page padding. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array(''),
            'required' => array(),
            'hint' => array(
                'title'   => __('What is page padding?','redux-framework-demo'),
                'content' => __('The page padding properties are used to generate space around the web page, inside of any defined borders. By default various web browsers apply different amounts of padding to the web pages we visit. However we can easily over-ride these settings by setting our own values.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_bottom_area_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Page Bottom Area', 'redux-framework-demo'),
            'subtitle'  => __('Personalize the page bottom area design.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> for more options to customize the style of page bottom area. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('page_bottom_area_enable','equals','1'),
            'hint' => array(
                'title'   => __('How to customize the page bottom area?','redux-framework-demo'),
                'content' => __('Customize page bottom area means you can change the properties of bottom area, for example change bottom area background color, bottom area heading color, bottom area text color, bottom area link color, bottom area link hover color according to the requirement of user.','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'page_bottom_area_background_color',
            'type'     => 'color',
            'title'    => __('Page Bottom Area Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a background color for page bottom area.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for page bottom area background color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333333',
            'validate' => 'color',
            'required' => array('page_bottom_area_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_bottom_area_heading_color',
            'type'     => 'color',
            'title'    => __('Page Bottom Area Heading Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a heading color for page bottom area', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for page bottom area heading color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('page_bottom_area_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_bottom_area_text_color',
            'type'     => 'color',
            'title'    => __('Page Bottom Area Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a text color for page bottom area', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for page bottom area text color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('page_bottom_area_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_bottom_area_link_color',
            'type'     => 'color',
            'title'    => __('Page Bottom Area Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link color for page bottom area.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for page bottom area link color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('page_bottom_area_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_bottom_area_link_hover_color',
            'type'     => 'color',
            'title'    => __('Page Bottom Area Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link hover color for page bottom area.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for page bottom area link hover color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('page_bottom_area_customize_enable','equals','1'),   
        ),
        array (
            'id' => 'sidebar_left_enable',
            'type' => 'switch',
            'title' =>  __('Show Left Sidebar', 'redux-framework-demo'),
            'subtitle'  => __('Enable the left sidebar', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display left sidebar and <strong>NO</strong> to hide left sidebar. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('sidebar_left'),
            'required' => array(),
            'hint' => array(
                'title'   => __('What is left sidebar?','redux-framework-demo'),
                'content' => __('A left sidebar is a user interface element that displays a list of choices. It typically appears as a column to the left vertical of the main content.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'sidebar_right_enable',
            'type' => 'switch',
            'title' =>  __('Show Right Sidebar', 'redux-framework-demo'),
            'subtitle'  => __('Enable the right sidebar', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display right sidebar and <strong>NO</strong> to hide right sidebar. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('sidebar_right'),
            'required' => array(),
            'hint' => array(
                'title'   => __('What is right sidebar?','redux-framework-demo'),
                'content' => __('A right sidebar is a user interface element that displays a list of choices. It typically appears as a column to the right vertical of the main content.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'sidebar_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Sidebar', 'redux-framework-demo'),
            'subtitle'  => __('Personalize the sidebar.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> for more options to customize the style of sidebar. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'hint' => array(
                'title'   => __('How to customize the sidebar?','redux-framework-demo'),
                'content' => __('Customize sidebar means you can change the properties of sidebar, for example change sidebar background color, sidebar heading color, sidebar text color, sidebar link color, sidebar link hover color according to the requirement of user.','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'sidebar_background_color',
            'type'     => 'color',
            'title'    => __('Sidebar Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a background color for sidebar.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for sidebar background color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333333',
            'validate' => 'color',
            'required' => array('sidebar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'sidebar_heading_color',
            'type'     => 'color',
            'title'    => __('Sidebar Heading Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a heading color for sidebar', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for sidebar heading color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333333',
            'validate' => 'color',
            'required' => array('sidebar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'sidebar_text_color',
            'type'     => 'color',
            'title'    => __('Sidebar Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a text color for sidebar', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for sidebar text color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('sidebar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'sidebar_link_color',
            'type'     => 'color',
            'title'    => __('Sidebar Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link color for sidebar.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for sidebar link color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('sidebar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'sidebar_link_hover_color',
            'type'     => 'color',
            'title'    => __('Sidebar Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link hover color for sidebar.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for sidebar link hover color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('sidebar_customize_enable','equals','1'),   
        ),
        array (
            'id' => 'content_top_area_enable',
            'type' => 'switch',
            'title' =>  __('Show Content Top Area', 'redux-framework-demo'),
            'subtitle'  => __('Enable the content top area', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the content top area and <strong>NO</strong> to hide the content top area. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('content_top_area'),
            'required' => array(),
            'hint' => array(
                'title'   => __('What is content top area?','redux-framework-demo'),
                'content' => __('Content top area is placed just below the page top area and above the main content area. You can placed anything in content top area which may similar to other pages of website.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'content_bottom_area_enable',
            'type' => 'switch',
            'title' =>  __('Show Content Bottom Area', 'redux-framework-demo'),
            'subtitle'  => __('Enable the content bottom area', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the content bottom area and <strong>NO</strong> to hide the content bottom area. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('content_bottom_area'),
            'required' => array(),
            'hint' => array(
                'title'   => __('What is content bottom area?','redux-framework-demo'),
                'content' => __('Content bottom area is placed just above the page bottom area and below the main content area. You can placed anything in content bottom area which may similar to other pages of website.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Page', 'redux-framework-demo'),
            'subtitle'  => __('Personalize the page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> for more options to customize the style of page. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'hint' => array(
                'title'   => __('How to customize the page?','redux-framework-demo'),
                'content' => __('Customize page means you can change the properties of page, for example change page content padding, page background color, page heading color, page text color, page link color, page link hover color according to the requirement of user.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_content_padding_enable',
            'type' => 'switch',
            'title' =>  __('Show Page Content Padding', 'redux-framework-demo'),
            'subtitle'  => __('Enable page content padding.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> for enable page content padding. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array(''),
            'required' => array('page_customize_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is page content padding?','redux-framework-demo'),
                'content' => __('The Page content padding properties are used to generate space around the page content, inside of defined borders.','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'page_background_color',
            'type'     => 'color',
            'title'    => __('Page Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a background color for page.', 'redux-framework-demo'),
			'desc' => __('Default color is #f8f9fa. Mark tick for page background color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#f8f9fa',
            'validate' => 'color',
            'required' => array('page_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'content_background_color',
            'type'     => 'color',
            'title'    => __('Content Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a background color for content area of page.', 'redux-framework-demo'),
            'desc' => __('Default color is #FFFFFF (white). Mark tick for page background color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => 'transparent',
            'validate' => 'color',
            'required' => array('page_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_heading_color',
            'type'     => 'color',
            'title'    => __('Page heading Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a heading color for page.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for page heading color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333333',
            'validate' => 'color',
            'required' => array('page_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_text_color',
            'type'     => 'color',
            'title'    => __('Page Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a text color for page.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for page text color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333333',
            'validate' => 'color',
            'required' => array('page_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_link_color',
            'type'     => 'color',
            'title'    => __('Page Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link color for page.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for page link color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333333',
            'validate' => 'color',
            'required' => array('page_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_link_hover_color',
            'type'     => 'color',
            'title'    => __('Page Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link hover color for page.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for page link hover color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333333',
            'validate' => 'color',
            'required' => array('page_customize_enable','equals','1'),   
        ),
    )
);