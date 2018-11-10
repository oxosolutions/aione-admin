<?php

/*********************************************************************************************
 *
 *  Footer settings
 *
 *********************************************************************************************/

$this->sections[] = array(
    // 'icon'      => 'dashicons dashicons-image-rotate-left',
    'icon'      => plugins_url( 'assets/images/f-new.svg', __FILE__ ),
    'title'     => __('Footer Settings', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'footer_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>You can tailor the experience of using "Footer Settings." to suit your own  needs.</h3>',
        ),
        array (
            'id' => 'footer_widgets',
            'type' => 'switch',
            'title' =>  __('Show Footer Widgets', 'redux-framework-demo'),
            'subtitle'  => __('Enable the footer widgets.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the footer widgets and <strong>NO</strong> to hide the footer widgets. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array(''),
            'required' => array(),
            'hint' => array(
                'title'   => __('What is footer widgets?','redux-framework-demo'),
                'content' => __('A footer widget area is the section above the footer that includes widgets (also referred by users as “boxes”) for content. Typically the footer widget area is set apart from the rest of the content, either with a colored background, or a line or divider of some type.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_100_width',
            'type' => 'switch',
            'title' =>  __('Footer Wide Layout', 'redux-framework-demo'),
            'subtitle'  => __('Set the footer to 100% of browser width.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to set the footer to 100% width of browser and <strong>NO</strong> to take default width. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array('footer_widget_100_width_class'),
            'required' => array('footer_widgets','equals','1'),
            'hint' => array(
                'title'   => __('What is footer wide layout?','redux-framework-demo'),
                'content' => __('Footer wide layout means, the footer area exactly equal to the explicit width of the browser.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Footer', 'redux-framework-demo'),
            'subtitle'  => __('Personalize the footer design.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> for more options to customize the style of footer. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('footer_widgets','equals','1'),
            'hint' => array(
                'title'   => __('How to customize the footer?','redux-framework-demo'),
                'content' => __('Customize footer means you can change the properties of footer, for example change footer background color, footer heading color, footer text color, footer link color, footer link hover color according to the requirement of user.','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'footer_background_color',
            'type'     => 'color',
            'title'    => __('Footer Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a background color for footer.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for background color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333333',
            'validate' => 'color',
            'required' => array('footer_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_heading_color',
            'type'     => 'color',
            'title'    => __('Footer Heading Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a heading color for footer.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for heading color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333333',
            'validate' => 'color',
            'required' => array('footer_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_text_color',
            'type'     => 'color',
            'title'    => __('Footer Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a text color for footer.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for text color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('footer_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_link_color',
            'type'     => 'color',
            'title'    => __('Footer Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link color for footer.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for link color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('footer_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_link_hover_color',
            'type'     => 'color',
            'title'    => __('Footer Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link hover color for footer.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for link hover color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('footer_customize_enable','equals','1'),   
        ),
        array (
            'id' => 'footer_copyright_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>Footer Copyright Settings</h3>',
        ),
        array (
            'id' => 'footer_copyright',
            'type' => 'switch',
            'title' =>  __('Show Copyright Bar', 'redux-framework-demo'),
            'subtitle'  => __('Enable the copyright bar', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the copyright bar and <strong>NO</strong> to hide the copyright bar. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array(''),
            'required' => array(),
            'hint' => array(
                'title'   => __('What is copyright bar?','redux-framework-demo'),
                'content' => __('Copyright is a legal term describing ownership of control of the rights to the use and distribution of certain works of creative expression, including books, video, movies, music and computer programs.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_copyright_100_width',
            'type' => 'switch',
            'title' =>  __('Copyright Bar Wide Layout', 'redux-framework-demo'),
            'subtitle'  => __('Set the copyright bar to 100% of browser width.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to set copyright bar to 100% width of browser and <strong>NO</strong> to take default width. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array('copyright_bar_100_width_class'),
            'required' => array('footer_copyright','equals','1'),
            'hint' => array(
                'title'   => __('What is copyright bar wide layout?','redux-framework-demo'),
                'content' => __('Copyright bar wide layout means, the copyright bar area exactly equal to the explicit width of the browser.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_copyright_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Footer Copyright', 'redux-framework-demo'),
            'subtitle'  => __('Personalize the footer copyright design.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> for more options to customize the style of footer copyright. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('footer_copyright','equals','1'),
            'hint' => array(
                'title'   => __('How to customize the footer copyright?','redux-framework-demo'),
                'content' => __('Customize footer copyright means you can change the properties of copyright, for example change copyright background color, copyright text color, copyright link color, copyright link hover color according to the requirement of user.','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'footer_copyright_background_color',
            'type'     => 'color',
            'title'    => __('Footer Copyright Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a background color for footer copyright.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for background color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333333',
            'validate' => 'color',
            'required' => array('footer_copyright_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_copyright_text_color',
            'type'     => 'color',
            'title'    => __('Footer Copyright Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a text color for footer copyright', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for text color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('footer_copyright_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_copyright_link_color',
            'type'     => 'color',
            'title'    => __('Footer Copyright Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link color for footer copyright.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for link color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('footer_copyright_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_copyright_link_hover_color',
            'type'     => 'color',
            'title'    => __('Footer Copyright Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link hover color for footer copyright.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for link hover color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#ffffff',
            'validate' => 'color',
            'required' => array('footer_copyright_customize_enable','equals','1'),   
        ),
        
    )
);